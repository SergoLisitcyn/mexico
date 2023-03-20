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
    public $procent = 0;
    public $total = 0;
    public $firstLoan = 0;

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
            $mfoRandoms = Mfo::find()
                ->with('color')
                ->where(['status' => 1])
                ->andWhere(['!=','id', $this->model['id']])
                ->andWhere(['!=','rating_auto', null])
                ->orderBy(new Expression('rand()'))
                ->limit(3)
                ->all();
        }
        $mfoRating = [];
        if($this->type == 'top_entidades'){
            $data = Mfo::getTopRatingMfo();
            return $this->render('mfo/mfo-view/'.$this->type,[
                'mfo' => $data
            ]);
        }

        if($this->type == 'analysist'){

            $text = Mfo::getAnalysistText($this->model);
            return $this->render('mfo/mfo-view/'.$this->type,[
                'text' => $text
            ]);
        }
//        if($this->type == 'rating'){
//            if($this->model->rating_auto){
//                $mfoRating = self::generateRating($this->model->rating_auto['interes_costes'],$this->model->rating_auto['condiciones'],$this->model->rating_auto['atencion'],$this->model->rating_auto['funcionalidad']);
//            }
//        }
        return $this->render('mfo/mfo-view/'.$this->type,[
            'model' => $this->model,
            'mfoText' => $mfoText->text_mfo['text'],
            'mfoRandoms' => $mfoRandoms,
            'mfoRating' => $mfoRating,
            'procent' => $this->procent,
            'total' => $this->total,
            'firstLoan' => $this->firstLoan,
        ]);
    }
}