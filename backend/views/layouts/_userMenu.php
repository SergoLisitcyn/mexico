<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<div class="pull-right">
    <?= Html::a(
        '<i class="fa fa-sign-out"></i> Выход',
        ['/site/logout'],
        ['data-method' => 'post', 'class' => 'mbtn mbtn-gray mbtn-sm']
    ) ?>
</div>
