<?php

use unclead\multipleinput\MultipleInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use vova07\imperavi\Widget;

/* @var $this yii\web\View */
/* @var $model common\models\MainInfo */
/* @var $form yii\widgets\ActiveForm */
?>
<style>
    .main-info-form {
        background: #fff;
        padding: 10px;
        margin-bottom: 20px;
    }
</style>
<div style="margin-top: 20px;">

    <?php $form = ActiveForm::begin();?>
    <input type="hidden" name="<?=Yii::$app->request->csrfParam; ?>" value="<?=Yii::$app->request->getCsrfToken(); ?>" />
    <input type="hidden" name="MainInfo[name]" value="<?= $model->name ?>" />
    <?php if($model->name == 'works') : ?>
    <div class="main-info-form">
        <?php
        echo $form->field($model, 'work')->widget(MultipleInput::className(), [
                'min'               => 1, // should be at least 2 rows
                'allowEmptyList'    => false,
                'enableGuessTitle'  => true,
                'addButtonPosition' => MultipleInput::POS_HEADER, // show add button in the header
            ])
                ->label(false);
        ?>

        <?php
        /*
        $form->field($model, 'work_title')->textInput(['maxlength' => true]);

        $form->field($model, 'work_status')->dropDownList([
                '1' => 'Блок включен',
                '0' => 'Блок выключен'
            ])
        */
        ?>
    </div>
    <?php endif; ?>
    <?php if($model->name == 'mission') : ?>
    <div class="main-info-form">
        <?php
        echo $form->field($model, 'mission')->widget(MultipleInput::className(), [
                'min'               => 1, // should be at least 2 rows
                'allowEmptyList'    => false,
                'enableGuessTitle'  => true,
                'addButtonPosition' => MultipleInput::POS_HEADER, // show add button in the header
            ])
                ->label(false);
        ?>

        <?php
        /*
        $form->field($model, 'mission_title')->textInput(['maxlength' => true]);

        $form->field($model, 'mission_status')->dropDownList([
                '1' => 'Блок включен',
                '0' => 'Блок выключен'
        ])
        */
        ?>
    </div>
    <?php endif; ?>
    <?php if($model->name == 'info' || $model->name == 'finjenios' || $model->name == 'como') : ?>
    <div class="main-info-form">
        <?= $form->field($model, 'text_main')->widget(Widget::className(), [
            'settings' => [
                'lang' => 'ru',
                'minHeight' => 200,
                'formatting' => ['p', 'blockquote', 'h2', 'h1','div'],
                'attributes' => [
                    [
                        'attribute' => 'text',
                        'format' => 'html'
                    ]
                ],
                'plugins' => [
                    'clips',
                    'fullscreen'
                ]

            ]
        ])?>

        <?php
        /*
        $form->field($model, 'text_main_title')->textInput(['maxlength' => true]);

         $form->field($model, 'text_main_status')->dropDownList([
            '1' => 'Блок включен',
            '0' => 'Блок выключен'
        ])
        */
         ?>
    </div>
    <?php endif; ?>

    <?php if($model->name == 'progress') : ?>
    <div class="main-info-form">
        <?= $form->field($model, 'progress_value')->textInput(['maxlength' => true]) ?>


        <?php
        /*
         $form->field($model, 'progress_title')->textInput(['maxlength' => true]);
        $form->field($model, 'progress_text')->textInput(['maxlength' => true]);

        $form->field($model, 'progress_status')->dropDownList([
            '1' => 'Блок включен',
            '0' => 'Блок выключен'
        ])
        */
        ?>
    </div>
    <?php endif; ?>



    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
