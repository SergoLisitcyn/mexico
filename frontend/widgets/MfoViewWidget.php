<?php

namespace frontend\widgets;

use common\models\Mfo;
use common\models\MfoText;
use common\models\Reviews;
use yii\bootstrap\Widget;
use yii\db\Expression;

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
        $text = MfoText::find()->where(['name' => 'Text'])->one();
        $mfoText = json_decode($text->text_mfo,true);
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
                ->where(['status' => 1])
                ->andWhere(['!=','id', $this->model['id']])
                ->orderBy(new Expression('rand()'))
                ->limit(3)
                ->all();
        }
        return $this->render('mfo/mfo-view/'.$this->type,[
            'model' => $this->model,
            'mfoText' => $mfoText['text'],
            'mfoRandoms' => $mfoRandoms,
        ]);

    }
}