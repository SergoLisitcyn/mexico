<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Mfo */

$this->title = 'Создать';
$this->params['breadcrumbs'][] = ['label' => 'МФО', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mfo">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
