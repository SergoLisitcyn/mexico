<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MainAbout */

$this->title = ' ';
$this->params['breadcrumbs'][] = ['label' => 'О нас пишут', 'url' => ['index']];
?>
<div class="mfo">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
