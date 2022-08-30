<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Reviews */

$this->title = 'Обновить отзыв';
$this->params['breadcrumbs'][] = ['label' => 'Отзывы', 'url' => ['index']];
?>
<div class="mfo">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
