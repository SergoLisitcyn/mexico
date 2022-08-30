<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Reviews */

$this->title = 'Создать';
$this->params['breadcrumbs'][] = ['label' => 'Отзывы', 'url' => ['index']];
?>
<div class="mfo">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
