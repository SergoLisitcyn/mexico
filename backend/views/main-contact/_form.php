<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\MainContact */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="main-contact-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'direction')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'postal_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ocde')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'registration_date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'certificate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_second')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'whatsapp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'facebook')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'instagram')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'twitter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'youtube')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'linkedin')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
