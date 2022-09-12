<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use vova07\imperavi\Widget;
/* @var $this yii\web\View */
/* @var $model common\models\MainSolicita */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="main-solicita-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-xs-6">
            <div class="form-group field-mfo-logo_file">
                <?php if($model->image) : ?>
                    <img src="<?= $model->image ?>" class="img_slider_view" alt="Image" style="height: 50px">
                <?php else: ?>
                    <b>Логотип отсутствует</b>
                <?php endif; ?>
            </div>
            <?php echo $form->field($model, 'image_file')->widget(FileInput::classname(), [
                'options' => [
                    'accept' => 'image/*',
                    'multiple' => false
                ],
                'pluginOptions' => [
                    'showPreview' => false,
                    'showRemove' => true,
                    'showUpload' => false
                ]
            ]);
            ?>
        </div>
    </div>

    <?= $form->field($model, 'alt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_h1')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'title_seo')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text_top')->widget(Widget::className(), [
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

    <?= $form->field($model, 'text_bottom')->widget(Widget::className(), [
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

    <?= $form->field($model, 'sort')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([
        '1' => 'Блок включен',
        '0' => 'Блок выключен'
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
