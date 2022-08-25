<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Menu */

$this->title = 'Обновить пункт меню: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Пункты меню', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="mfo">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
