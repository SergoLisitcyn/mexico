<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\BlockRec $model */

$this->title = 'Создать';
$this->params['breadcrumbs'][] = ['label' => 'Плашки', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="block-rec-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
