<?php

namespace frontend\widgets;

use common\models\BlockManagement;
use common\models\MainAbout;
use common\models\MainContact;
use common\models\MainInfo;
use common\models\MainPartners;
use common\models\MainSolicita;
use common\models\MainTeam;
use common\models\Menu;
use common\models\Mfo;
use common\models\Reviews;
use common\models\SeoTags;
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

        if($this->type == 'mission' || $this->type == 'works' || $this->type == 'info' || $this->type == 'progress'){

            return $this->render('main-page/'.$this->type,[
                'info' => MainInfo::findOne(1)
            ]);
        }
        if($this->type == 'rating'){
            $mfoData = Mfo::find()->where(['status'=> 1])->limit(3)->orderBy(['rating' => SORT_DESC])->all();
            $data = [];
            if($mfoData){
                foreach ($mfoData as $mfo){
                    $reviews = Reviews::find()->where(['mfo_id' => $mfo['id'], 'status' => 1])->count();
                    $data[] = [
                      'id' =>  $mfo['id'],
                      'logo' =>  $mfo['logo'],
                      'name' =>  $mfo['name'],
                      'rating' =>  $mfo['rating'],
                      'url' =>  $mfo['url'],
                      'reviews_count' =>  $reviews,
                    ];
                }
            }
            return $this->render('main-page/'.$this->type,[
                'mfo' => $data
            ]);
        }
        return $this->render('main-page/'.$this->type,[
        ]);
    }
}