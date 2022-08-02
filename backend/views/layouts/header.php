<?php
use yii\helpers\Html;
use yii\web\View;

/* @var $this View */
/* @var $content string */
?>

<header class="main-header">
    <?= Html::a('<span class="logo-mini">АП</span><span class="logo-lg">Админ Панель</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <?= $this->render('_userMenu',[ ]);?>
            </ul>
        </div>
    </nav>
</header>
