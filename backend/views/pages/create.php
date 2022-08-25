<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Pages */

$this->title = 'Создание страниц';
$this->params['breadcrumbs'][] = ['label' => 'Создание страниц', 'url' => ['index']];
?>
<div class="mfo">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
