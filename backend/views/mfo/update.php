<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Mfo */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'МФО', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
?>
<div class="mfo">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
