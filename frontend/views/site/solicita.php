<?php

use common\models\Reviews;
use frontend\widgets\MainPageWidget;
use frontend\widgets\MfoCompanyWidget;
use frontend\widgets\MfoViewWidget;
use yii\helpers\Url;

/* @var $dataProvider yii\data\ActiveDataProvider */

if(isset($text->title_seo) && !empty($text->title_seo)) { $this->title = $text->title_seo; }
if(isset($text->keywords) && !empty($text->keywords)) { $this->registerMetaTag(['name' => 'keywords','content' => $text->keywords]); }
//if(isset($text->description) && !empty($text->description)) { $this->registerMetaTag(['name' => 'description','content' => $text->description]); }
?>
<div class="breadcrumbs">
    <div class="container">
        <ul class="breadcrumbs__items">
            <li class="breadcrumbs__item">
                <a href="/" class="breadcrumbs__link">Inicio</a>
            </li>
            <?php if($text->title_h1) :?>
            <li class="breadcrumbs__item">
                <?= $text->title_h1 ?>
            </li>
            <?php endif; ?>
        </ul>
    </div>
</div>
<div class="content">
    <div class="container">
<!--        --><?php //= MainPageWidget::widget(['type' => 'mfo_calculator_version','sum'=> $sum,'term' => $term]) ?>
        <?php if($text->title_h1) :?>
        <h1 class="main__title main-title"><?= $text->title_h1 ?></h1>
        <?php endif; ?>
        <?php if($haveTeam) : ?>
            <?php if($text->text_top) : ?>
                <div class="row">
                    <div class="col-sm-9">
                        <div class="values__descr" style="margin-top: 0">
                            <?= $text->text_top ?>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <?= MfoViewWidget::widget(['type' => 'author','action' => $url]) ?>
                    </div>
                </div>
            <?php endif; ?>
        <?php endif; ?>
        <?php if(!$haveTeam && $text->text_top) : ?>
        <div class="values__descr">
            <?= $text->text_top ?>
        </div>
        <?php endif; ?>
        <div class="content__block">
            <div class="content__row">
                <section class="cards">
                    <?php foreach ($mfos as $key => $mfo) {
                       echo MfoCompanyWidget::widget(['mfo' => $mfo,'sum' => $sum,'term' =>$term,'mfoText' => $mfoText]);
                    }
                    ?>
                </section>
            </div>
        </div>
        <?php if($text->text_bottom) : ?>
            <div class="values__descr">
                <?= $text->text_bottom ?>
            </div>
        <?php endif; ?>
    </div>
</div>
