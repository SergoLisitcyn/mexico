<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\BlockRec $model */

$this->title = 'Update Block Rec: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Block Recs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="block-rec-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
