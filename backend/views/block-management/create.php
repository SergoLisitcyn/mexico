<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\BlockManagement */

$this->title = 'Управление блоками';
$this->params['breadcrumbs'][] = ['label' => 'Управление блоками', 'url' => ['index']];
?>
<div class="mfo">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
