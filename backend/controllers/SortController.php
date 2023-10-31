<?php

namespace backend\controllers;


use common\models\Mfo;
use Yii;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class SortController extends Controller
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


    public function actionIndex($url)
    {
        $mfo = Mfo::find()->where(['status' => 1])->all();
        if($url == 'prestamos_rapidos' || $url == 'prestamos_en_linea_sin_buro' || $url == 'prestamos_personales_urgentes'){
            $mfo = Mfo::find()->where(['status' => 1])->andWhere(['!=', 'type', 'Broker'])->all();
        }
        $data = [];
        foreach ($mfo as $key => $value){
            if(!isset($value['data']['pages'][$url]) || $value['data']['pages'][$url] == '-'){
                continue;
            }
            $data[$value['data']['pages'][$url]] = [
                'params' => $value
            ];
        }
        ksort($data);

        $str = [];
        foreach ($data as $k => $datum){
            $str[$k] = $datum['params']['id'];
        }

        $dataProvider = new ActiveDataProvider([
            'query' => Mfo::find()->where(['in', 'id', $str]),
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_DESC,
                ]
            ],
        ]);
        $title = '';
        if($url == 'prestamos_rapidos'){
            $title = 'Prestamos rapidos';
        }
        if($url == 'prestamos_en_linea_sin_buro'){
            $title = 'Prestamos en linea sin buró';
        }
        if($url == 'prestamos_personales_urgentes'){
            $title = 'Préstamos personales urgentes';
        }
        if($url == 'prestamos_en_linea'){
            $title = 'Prestamos en linea';
        }
        if($url == 'p2p'){
            $title = 'Préstamos P2P';
        }
        if($url == 'corredores'){
            $title = 'Intermediarios Financieros';
        }


        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'url' => $title,
        ]);
    }
}
