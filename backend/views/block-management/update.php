<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\BlockManagement */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Управление блоками', 'url' => ['index']];
?>
<div class="mfo">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
