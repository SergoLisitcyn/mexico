<?php

namespace frontend\widgets;

use common\models\MainContact;
use common\models\MainInfo;
use common\models\MainTeam;
use yii\bootstrap\Widget;

class MainPageWidget extends Widget
{
    public $type;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        if($this->type == 'contacts') {
            return $this->render('main-page/'.$this->type,[
                'contacts' => MainContact::findOne(1)
            ]);
        }
        if($this->type == 'team') {
            $teams = MainTeam::find()->where(['status' => 1])->all();

            return $this->render('main-page/'.$this->type,[
                'teams' => $teams
            ]);
        }

        if($this->type == 'mission' || $this->type == 'works' || $this->type == 'info' || $this->type == 'progress'){

            return $this->render('main-page/'.$this->type,[
                'info' => MainInfo::findOne(1)
            ]);
        }
    }
}