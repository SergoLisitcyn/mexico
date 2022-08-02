<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MainTeam */

$this->title = ' ';
$this->params['breadcrumbs'][] = ['label' => 'Наша команда', 'url' => ['index']];
?>
<div class="main-team-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
