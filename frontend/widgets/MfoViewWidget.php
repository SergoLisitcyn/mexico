<?php

namespace frontend\widgets;

use common\models\Mfo;
use common\models\MfoText;
use common\models\Reviews;
use yii\bootstrap\Widget;
use yii\db\Expression;
use yii\helpers\Json;

class MfoViewWidget extends Widget
{
    public $type;
    public $model;
    public $reviewsModel;
    public $action;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $mfoText = MfoText::find()->where(['name' => 'Text'])->one();
        if($this->type == 'reviews') {
            return $this->render('mfo/'.$this->type,[
                'reviewsModel' => $this->reviewsModel,
                'model' => $this->model,
                'action' => $this->action,
            ]);
        }
        if($this->type == 'reviews_mfo_view'){
            $reviews = Reviews::find()
                ->where([
                    'mfo_id' => $this->model['id'],
                    'status' => 1,
                ])
                ->limit(3)
                ->all();
            return $this->render('mfo/'.$this->type,[
                'model' => $this->model,
                'reviews' => $reviews,
            ]);
        }
        $mfoRandoms = null;
        if($this->type == 'similar_offers'){
            $mfoRandom = Mfo::find()
                ->where(['status' => 1])
                ->andWhere(['!=','id', $this->model['id']])
                ->orderBy(new Expression('rand()'))
                ->limit(3)
                ->all();
            $mfoRandoms = [];
            foreach ($mfoRandom as $key => $value){
                if($value['rating_auto']){
                    $mfoRating = self::generateRating($value['rating_auto']['interes_costes'],$value['rating_auto']['condiciones'],$value['rating_auto']['atencion'],$value['rating_auto']['funcionalidad']);
                } else {
                    $mfoRating = null;
                }
                $mfoRandoms[$key] = [
                    'params' => $value,
                    'mfoRating' => $mfoRating
                ];
            }
        }
        $mfoRating = [];
        if($this->type == 'rating'){
            if($this->model->rating_auto){
                $mfoRating = self::generateRating($this->model->rating_auto['interes_costes'],$this->model->rating_auto['condiciones'],$this->model->rating_auto['atencion'],$this->model->rating_auto['funcionalidad']);
            }
        }
        return $this->render('mfo/mfo-view/'.$this->type,[
            'model' => $this->model,
            'mfoText' => $mfoText->text_mfo['text'],
            'mfoRandoms' => $mfoRandoms,
            'mfoRating' => $mfoRating,
        ]);

    }

    public function generateRating($interesCostes = null,$condiciones = null,$atencion = null,$funcionalidad = null)
    {
        if(!$interesCostes && !$condiciones && !$atencion && !$funcionalidad){
            return null;
        }
        $starRateInteresCostes = null;
        $starRateCondiciones = null;
        $starRateAtencion = null;
        $starRateFuncionalidad = null;

        if($interesCostes){
            $interesCostes = number_format($interesCostes, 1, '.', '') * 5;
            $starRateInteresCostes = (100 *  $interesCostes)/5;
        }
        if($condiciones){
            $condiciones = number_format($condiciones, 1, '.', '') * 5;
            $starRateCondiciones = (100 *  $condiciones)/5;
        }
        if($atencion){
            $atencion = number_format($atencion, 1, '.', '') * 5;
            $starRateAtencion = (100 *  $atencion)/5;
        }
        if($funcionalidad){
            $funcionalidad = number_format($funcionalidad, 1, '.', '') * 5;
            $starRateFuncionalidad = (100 *  $funcionalidad)/5;
        }

        $mfoRating = [
            'interes_costes' => $interesCostes,
            'condiciones' => $condiciones,
            'atencion' => $atencion,
            'funcionalidad' => $funcionalidad,
            'interes_costes_rate' => $starRateInteresCostes,
            'condiciones_rate' => $starRateCondiciones,
            'atencion_rate' => $starRateAtencion,
            'funcionalidad_rate' => $starRateFuncionalidad,
        ];
        return $mfoRating;
    }
}