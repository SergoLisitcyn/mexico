<?php

namespace backend\controllers;

use common\models\Mfo;
use Yii;
use yii\base\DynamicModel;
use yii\base\Exception;
use yii\data\ActiveDataProvider;
use yii\db\StaleObjectException;
use yii\filters\AccessControl;
use yii\helpers\FileHelper;
use yii\helpers\Json;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\HttpException;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;
use yii\web\UploadedFile;

/**
 * MfoController implements the CRUD actions for Mfo model.
 */
class MfoController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'access' => [
                    'class' => AccessControl::className(),
                    'rules' => [
                        [
                            'allow' => true,
                            'roles' => ['admin','manager'],
                        ],
                        [
                            'allow' => false,
                            'roles' => ['client'],
                            'denyCallback' => function() { $this->redirect('/'); }
                        ],
                    ],
                ],
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Mfo::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_DESC,
                ]
            ],
            */
        ]);
        if (Yii::$app->request->post('hasEditable'))
        {
            $id=$_POST['editableKey'];
            $model = $this->findModel($id);
            $post = [];
            $posted = current($_POST['Mfo']);
            $post['Mfo'] = $posted;
            if ($model->load($post)) {
                $model->save();
            }

            return $this->refresh();
        }

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Mfo model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Mfo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|Response
     */
    public function actionCreate()
    {
        $model = new Mfo();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                Yii::$app->session->addFlash('success', 'Мфо добавлен');
                return $this->redirect(['update', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Mfo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $this->enableCsrfValidation = false;
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post())) {
            $model->data = Json::encode($model->data);
            $model->rating_auto = Json::encode($model->rating_auto);
            $model->general_text = Json::encode($model->general_text);
            if($model->save()){
                Yii::$app->session->addFlash('success', 'Мфо обновлен');
                return $this->redirect(['update', 'id' => $model->id]);
            } else {
                var_dump($model->errors); die;
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Mfo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return Response
     * @throws NotFoundHttpException|StaleObjectException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Mfo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Mfo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Mfo::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    /**
     * @throws HttpException
     */
    public function actionSheet()
    {
        $data = Mfo::getMfoUpdate();

        return $this->render('sheet', [
            'data' => $data,
        ]);
    }

    /**
     * @throws HttpException
     */
    public function actionFaq()
    {
        Mfo::getFaqUpdate();
        return $this->render('faq', [
        ]);
    }

    /**
     * @throws Exception
     * @throws BadRequestHttpException
     */
    public function actionSaveRedactorImg ($sub='main')
    {
        $this -> enableCsrfValidation = false;
        if (Yii::$app->request->isPost) {
            $dir = Yii::getAlias('@frontend/web') . '/uploads/images/mfo' . $sub . '/';
            if (!file_exists($dir)){
                FileHelper::createDirectory($dir);
            }

            $result_link = Yii::$app->params['link'].'uploads/images/mfo' . $sub . '/';
            $file = UploadedFile::getInstanceByName('file');
            $model = new DynamicModel (compact ('file'));
            $model->addRule ('file', 'image')->validate();

            if ($model ->hasErrors()) {
                $result = [
                    'error' => $model -> getFirstError ('file')
                ];
            } else {
                $model->file->name = strtotime('now').'_'.Yii::$app->getSecurity()->generateRandomString(6) . '.' . $model->file->extension;

                if ($model->file->saveAs ($dir . $model->file->name)) {
                    $result = ['filelink' => $result_link . $model->file->name,'filename'=>$model->file->name];
                } else {
                    $result = [
                        'error' => Yii::t ('vova07/imperavi', 'ERROR_CAN_NOT_UPLOAD_FILE')
                    ];
                }
            }
            Yii::$app->response->format = Response::FORMAT_JSON;

            return $result;
        } else {
            throw new BadRequestHttpException ('Only Post is allowed');
        }
    }
}
