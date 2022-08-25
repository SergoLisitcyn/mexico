<?php

namespace frontend\controllers;

use common\models\Pages;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

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
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    public function actionShowPage($slug = 'error') {

        if (($model = Pages::find()->where(['slug' => $slug])->one()) !== null) {
            return $this->render('showPage', [
                'model' => $model,
            ]);
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
