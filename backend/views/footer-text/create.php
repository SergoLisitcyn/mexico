<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\FooterText $model */

$this->title = 'Create Footer Text';
$this->params['breadcrumbs'][] = ['label' => 'Footer Texts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="footer-text-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
