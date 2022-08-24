<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MainSolicita */

$this->title = ' ';
$this->params['breadcrumbs'][] = ['label' => 'Solicita', 'url' => ['index']];
?>
<div class="mfo">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
