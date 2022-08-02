<?php

/* @var $this yii\web\View */
/* @var $model common\models\MainTeam */

$this->title = ' ';
$this->params['breadcrumbs'][] = ['label' => 'Наша команда', 'url' => ['index']];
?>
<div class="main-team-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
