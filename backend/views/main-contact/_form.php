<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use vova07\imperavi\Widget;
/* @var $this yii\web\View */
/* @var $model common\models\MainContact */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="main-contact-form">

    <?php $form = ActiveForm::begin(); ?>

<!--    --><?php //= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>
<!---->
<!--    --><?php //= $form->field($model, 'direction')->textInput(['maxlength' => true]) ?>
<!---->
<!--    --><?php //= $form->field($model, 'postal_code')->textInput(['maxlength' => true]) ?>
<!---->
<!--    --><?php //= $form->field($model, 'company_name')->textInput(['maxlength' => true]) ?>
<!---->
<!--    --><?php //= $form->field($model, 'bin')->textInput(['maxlength' => true]) ?>
<!---->
<!--    --><?php //= $form->field($model, 'ocde')->textInput(['maxlength' => true]) ?>
<!---->
<!--    --><?php //= $form->field($model, 'registration_date')->textInput(['maxlength' => true]) ?>
<!---->
<!--    --><?php //= $form->field($model, 'certificate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_second')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'whatsapp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'facebook')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'instagram')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'twitter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'youtube')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'linkedin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text')->widget(Widget::className(), [
        'settings' => [
            'lang' => 'ru',
            'minHeight' => 300,
            'formatting' => ['p', 'blockquote', 'h2', 'h1','h3','div'],
            'attributes' => [
                [
                    'attribute' => 'text',
                    'format' => 'html'
                ]
            ],
            'plugins' => [
                'clips',
                'fullscreen',
                'fontcolor',
            ]

        ]
    ])?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
