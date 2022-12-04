<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\FooterText $model */

$this->title = ' ';
?>
<div class="footer-text-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
