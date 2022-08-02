<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ReviewsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reviews-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'mfo_id') ?>

    <?= $form->field($model, 'costs') ?>

    <?= $form->field($model, 'conditions') ?>

    <?= $form->field($model, 'support') ?>

    <?php // echo $form->field($model, 'functionality') ?>

    <?php // echo $form->field($model, 'body') ?>

    <?php // echo $form->field($model, 'plus') ?>

    <?php // echo $form->field($model, 'minus') ?>

    <?php // echo $form->field($model, 'recommendation') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'sort') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
