<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Menu */

$this->title = 'Создать пункт меню';
$this->params['breadcrumbs'][] = ['label' => 'Пункты меню', 'url' => ['index']];
?>
<div class="mfo">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
