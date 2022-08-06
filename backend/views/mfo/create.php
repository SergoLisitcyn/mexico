<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Mfo */

$this->title = 'Create Mfo';
$this->params['breadcrumbs'][] = ['label' => 'Mfos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mfo">

    <h1 style="margin-top: 0"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
