<?php

namespace backend\controllers;

use common\models\MainInfo;
use yii\filters\AccessControl;
use yii\helpers\Json;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MainInfoController implements the CRUD actions for MainInfo model.
 */
class MainInfoController extends Controller
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
                        [   'actions' => ['login'],
                            'allow' => true,
                            'roles' => ['?'],
                        ],
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
     * Creates a new MainInfo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new MainInfo();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $model->work = Json::encode($model->work);
                $model->mission = Json::encode($model->mission);
                if($model->save()){
                    return $this->redirect(['update', 'id' => $model->id]);
                } else {
                    var_dump($model->errors);die;
                }

            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing MainInfo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $model->work = Json::encode($model->work);
                $model->mission = Json::encode($model->mission);
                if($model->save()){
                    return $this->redirect(['update', 'id' => $model->id]);
                } else {
                    var_dump($model->errors);die;
                }
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Finds the MainInfo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return MainInfo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = MainInfo::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
