<?php

namespace frontend\controllers;

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


    public function actionIndex()
    {
        $request = Yii::$app->request;
        $post = $request->post();

        if($post){
            $sum = $request->post('rs_sum');
            $term = $request->post('rs_term');
        } else {
            return Yii::$app->response->redirect(['/']);
        }

        $mfo = Mfo::find()
            ->with('color')
            ->where(['status' => 1])
            ->andWhere(['>=', 'term', $term])
            ->andWhere(['>=', 'sum', $sum])
            ->orderBy(['rating' => SORT_DESC])
            ->all();

        return $this->render('index', [
            'mfos' => $mfo,
            'sum' => $sum,
            'term' => $term,
            'termMax' => Mfo::getMinMaxValues(false,true),
            'sumMax' => Mfo::getMinMaxValues(true),
            'sumMin' => Mfo::getMinMaxValues(false,false,true),
            'termMin' => Mfo::getMinMaxValues(false,false,false,true),
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
        $formatSum = intval($mfo->data['condiciones']['first_loan_max']);
        $procent = (float)str_replace(',', '.', $mfo->data['condiciones']['rate_first']);
        $term = intval($mfo->data['condiciones']['plazo_max']);
        $vat = 0.16;
        $sum = $formatSum * ($procent/100) * $term;
        $sumWithVat = $sum * $vat;
        $totalSum = $sum + $sumWithVat;
        $totalFormat = $formatSum + $totalSum;
        $firstLoan = 0;

        $total = number_format($totalFormat, 2, '.', ' ');
        if($mfo->data['condiciones']['first_loan_zero_percent'] == '+'){
            $total = ceil($formatSum);
            $firstLoan = 1;
        }
        if(!$mfo){
            throw new HttpException(404, 'Страница не существует.');
        }
        $reviewsCount = Reviews::find()->where(['mfo_id' => $mfo->id, 'status' => 1])->count();

        $reviewsModel = new Reviews();

        if ($reviewsModel->load(Yii::$app->request->post()) && $reviewsModel->save()) {
            Yii::$app->session->setFlash('successReviews', 'Tu comentario ha sido enviado. ¡Gracias por ponerte en contacto!');
            return $this->refresh();
        } else {
            return $this->render('view', [
                'model' => $mfo,
                'reviewsModel' => $reviewsModel,
                'reviewsCount' => $reviewsCount,
                'sum' => $formatSum,
                'term' => $term,
                'total' => $total,
                'procent' => $procent,
                'firstLoan' => $firstLoan,
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

        $reviewsModel = new Reviews();

        if ($reviewsModel->load(Yii::$app->request->post())) {
            $reviewsModel->save();
            Yii::$app->session->setFlash('successReviews', 'Tu comentario ha sido enviado. ¡Gracias por ponerte en contacto!');
            return $this->refresh();
        } else {
            return $this->render('reviews', [
                'model' => $mfo,
                'reviewsModel' => $reviewsModel,
                'reviews' => $reviews,
                'mfo' => $mfo,
            ]);
        }
    }
}
