<?php

namespace frontend\controllers;

use common\models\MainSolicita;
use common\models\Mfo;
use common\models\Reviews;
use Yii;
use yii\web\Controller;
use yii\web\HttpException;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

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
     * Lists all Mfo models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $mfo = Mfo::find()->with('color')->where(['status' => 1])->orderBy(['rating' => SORT_DESC])->all();

        return $this->render('index', [
            'mfos' => $mfo,
        ]);
    }


    /**
     * @throws HttpException
     * @throws NotFoundHttpException
     */
    public function actionView($url)
    {
        if(!$url){
            throw new HttpException(404, 'Страница не существует.');
        }

        $mfo = Mfo::find()->where(['url' => $url])->one();
        if(!$mfo){
            throw new HttpException(404, 'Страница не существует.');
        }

        $reviewsModel = new Reviews();

        if ($reviewsModel->load(Yii::$app->request->post()) && $reviewsModel->save()) {
            Yii::$app->session->setFlash('successReviews', 'Tu comentario ha sido enviado. ¡Gracias por ponerte en contacto!');
            return $this->refresh();
        } else {
            return $this->render('view', [
                'model' => $mfo,
                'reviewsModel' => $reviewsModel,
            ]);
        }
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
    public function actionReviews($url)
    {
        if(!$url){
            return $this->redirect('/');
        }
        $mfo = Mfo::find()->where(['url' => $url])->one();
        if(!$mfo){
            throw new HttpException(404, 'Страница не существует.');
        }
        $reviews = Reviews::find()->where(['mfo_id' => $mfo->id,'status' => 1])->all();

        return $this->render('reviews', [
            'reviews' => $reviews,
            'mfo' => $mfo,
        ]);
    }
}
