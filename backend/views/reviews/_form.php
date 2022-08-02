<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Reviews */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reviews-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'mfo_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'costs')->textInput() ?>

    <?= $form->field($model, 'conditions')->textInput() ?>

    <?= $form->field($model, 'support')->textInput() ?>

    <?= $form->field($model, 'functionality')->textInput() ?>

    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'plus')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'minus')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'recommendation')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'sort')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
