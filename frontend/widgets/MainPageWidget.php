<?php

namespace frontend\widgets;

use common\models\BlockManagement;
use common\models\Faq;
use common\models\FooterText;
use common\models\MainAbout;
use common\models\MainContact;
use common\models\MainInfo;
use common\models\MainPartners;
use common\models\MainSolicita;
use common\models\MainTeam;
use common\models\Menu;
use common\models\Mfo;
use common\models\Reviews;
use common\models\SeoCodes;
use common\models\SeoTags;
use yii\bootstrap\Widget;

class MainPageWidget extends Widget
{
    public $type;
    public $term;
    public $sum;
    public $zone;
    public $mfoId;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        if($this->type == 'calculator'){
            return $this->render('main-page/'.$this->type,[
                'term' => Mfo::getMinMaxValues(false,true),
                'sum' => Mfo::getMinMaxValues(true),
                'sumMin' => Mfo::getMinMaxValues(false,false,true),
                'termMin' => Mfo::getMinMaxValues(false,false,false,true),
            ]);
        }
        if($this->type == 'solicita-calculator' || $this->type == 'mfo_calculator_version' || $this->type == 'mfo_index_calculator_version'){
            return $this->render('main-page/'.$this->type,[
                'term' => $this->term,
                'sum' => $this->sum,
                'termMax' => Mfo::getMinMaxValues(false,true),
                'sumMax' => Mfo::getMinMaxValues(true),
                'sumMin' => Mfo::getMinMaxValues(false,false,true),
//                'termMin' => Mfo::getMinMaxValues(false,false,false,true),
                'termMin' => 7,
            ]);
        }

        if($this->type == 'seo_code') {
            $model = SeoCodes::findOne(['name' => 'CODE']);
            $value = null;
            if($this->zone == 'header' && $model->seo_codes_top_status == 1 && $model->seo_codes_top){
                $value = $model->seo_codes_top;
            }
            if($this->zone == 'footer' && $model->seo_codes_bottom_status == 1 && $model->seo_codes_bottom){
                $value = $model->seo_codes_bottom;
            }

            if(!$value){
                return null;
            }
            return $this->render('main-page/'.$this->type,[
                'value' => $value
            ]);
        }

        if($this->type == 'seo') {
            $model = SeoTags::findOne(['slug' => $_SERVER['REQUEST_URI'],'status'=> 1]);
            if(!$model){
                return null;
            }
            return $this->render('main-page/'.$this->type,[
                'model' => $model
            ]);
        }
        if($this->type == 'menu-top'){
            $menu = Menu::find()->where(['in', 'zone', [0,1]])->andWhere(['status' => 1])->orderBy(['sort' => SORT_ASC])->all();
            return $this->render('main-page/'.$this->type,[
                'menus' => $menu,
            ]);
        }
        if($this->type == 'menu-footer'){
            $menu = Menu::find()->where(['in', 'zone', [0,2]])->andWhere(['status' => 1])->orderBy(['sort' => SORT_ASC])->all();
            return $this->render('main-page/'.$this->type,[
                'menus' => $menu,
            ]);
        }
        $blockManagement = BlockManagement::find()->where(['tag' => $this->type])->one();
        if($this->type == 'contacts' || $this->type == 'contacts-footer') {
            return $this->render('main-page/'.$this->type,[
                'contacts' => MainContact::findOne(1),
                'blockManagement' => $blockManagement,
            ]);
        }
        if($this->type == 'footer-text') {
            return $this->render('main-page/'.$this->type,[
                'footer' => FooterText::findOne(1),
                'zone' => $this->zone,
            ]);
        }
        if($this->type == 'team') {
            $teams = MainTeam::find()->where(['status' => 1])->all();

            return $this->render('main-page/'.$this->type,[
                'teams' => $teams,
                'blockManagement' => $blockManagement,
            ]);
        }
        if($this->type == 'solicita' || $this->type == 'about' || $this->type == 'partners'){
            $blockManagement = BlockManagement::find()->where(['tag' => $this->type])->one();
            $sols = null;

            if($this->type == 'solicita'){
                $sols = MainSolicita::find()->where(['status' => 1])->orderBy(['sort' => SORT_ASC])->all();
            }
            if($this->type == 'about'){
                $sols = MainAbout::find()->where(['status' => 1])->orderBy(['sort' => SORT_ASC])->all();
            }
            if($this->type == 'partners'){
                $sols = MainPartners::find()->where(['status' => 1])->orderBy(['sort' => SORT_ASC])->all();
            }

            return $this->render('main-page/'.$this->type,[
                'blockManagement' => $blockManagement,
                'sols' => $sols,
            ]);
        }
        if($this->type == 'progress'){
            $info = MainInfo::findOne(['name' => $this->type]);
            $mfoCount = Mfo::find()->count();
            $reviewsCount = Reviews::find()->count();
            $countZaim = $info->progress_value;
            return $this->render('main-page/'.$this->type,[
                'info' => $info,
                'blockManagement' => $blockManagement,
                'mfoCount' => $mfoCount,
                'reviewsCount' => $reviewsCount,
                'countZaim' => $countZaim,
            ]);
        }

        if($this->type == 'mission' || $this->type == 'works' || $this->type == 'info' || $this->type == 'como' || $this->type == 'finjenios'){
            return $this->render('main-page/'.$this->type,[
                'info' => MainInfo::findOne(['name' => $this->type]),
                'blockManagement' => $blockManagement,
            ]);
        }
        $blockManagement = null;
        if($this->type == 'rating'){
            $data = Mfo::getTopRatingMfo();
            return $this->render('main-page/'.$this->type,[
                'mfo' => $data
            ]);
        }
        if($this->type == 'faq'){
            return $this->render('main-page/'.$this->type,[
                'data' => Faq::find()->all()
            ]);
        }

        if($this->type == 'reviewsRatingList'){
            $data = Reviews::getReviewsRatingList($this->mfoId);
            return $this->render('main-page/'.$this->type,[
                'data' => $data
            ]);
        }
        return $this->render('main-page/'.$this->type,[
        ]);
    }
}