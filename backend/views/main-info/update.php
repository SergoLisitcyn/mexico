<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MainInfo */

$this->title = ' ';
$this->params['breadcrumbs'][] = ['label' => 'Инфо', 'url' => ['index']];
?>
<div class="main-info-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
