<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MainContact */

$this->title = 'Контакты на главной странице';
?>
<h1 style="margin-top: 0"><?= Html::encode($this->title) ?></h1>
<div class="mfo">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
