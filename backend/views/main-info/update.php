<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MainInfo */

$this->title = 'Update Main Info: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Main Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="main-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
