<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MainPartners */

$this->title = ' ';
$this->params['breadcrumbs'][] = ['label' => 'Nuestros colaboradores', 'url' => ['index']];
?>
<div class="mfo">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
