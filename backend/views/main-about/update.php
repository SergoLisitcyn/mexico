<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MainAbout */

$this->title = 'Обновить';
$this->params['breadcrumbs'][] = ['label' => 'Блок О нас пишут', 'url' => ['index']];
?>
<div class="mfo">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
