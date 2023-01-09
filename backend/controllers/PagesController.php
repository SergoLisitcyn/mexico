<?php

namespace backend\controllers;

use common\models\Pages;
use common\models\PagesSearch;
use Yii;
use yii\base\DynamicModel;
use yii\base\Exception;
use yii\filters\AccessControl;
use yii\helpers\FileHelper;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;
use yii\web\UploadedFile;

/**
 * PagesController implements the CRUD actions for Pages model.
 */
class PagesController extends Controller
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

    /**
     * Lists all Pages models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PagesSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Pages model.
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
     * Creates a new Pages model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|Response
     */
    public function actionCreate()
    {
        $model = new Pages();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                Yii::$app->session->addFlash('success', 'Создан');
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
     * Updates an existing Pages model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            Yii::$app->session->addFlash('success', 'Обновлено');
            return $this->redirect(['update', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Pages model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Pages model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Pages the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Pages::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    /**
     * @throws Exception
     * @throws BadRequestHttpException
     */
    public function actionSaveRedactorImg ($sub='main')
    {
        $this -> enableCsrfValidation = false;
        if (Yii::$app->request->isPost) {
            $dir = Yii::getAlias('@frontend/web') . '/uploads/images/pages' . $sub . '/';
            if (!file_exists($dir)){
                FileHelper::createDirectory($dir);
            }

            $result_link = Yii::$app->params['link'].'uploads/images/pages' . $sub . '/';
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
