<?php

namespace frontend\widgets;

use common\models\MfoText;
use yii\bootstrap\Widget;

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
        return $this->render('mfo/mfo-view/'.$this->type,[
            'model' => $this->model,
            'mfoText' => $mfoText->text_mfo['text'],
        ]);

    }
}