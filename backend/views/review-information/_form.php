<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use vova07\imperavi\Widget;
use \yii\helpers\Url;
/** @var yii\web\View $this */
/** @var common\models\ReviewInformation $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="review-information-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->widget(Widget::className(), [
        'settings' => [
            'lang' => 'ru',
            'minHeight' => 300,
            'formatting' => ['p', 'blockquote', 'h2', 'h1','h3','div'],
            'imageUpload' => Url::to(['/review-information/save-redactor-img','sub'=>'content']),
            'attributes' => [
                [
                    'attribute' => 'text',
                    'format' => 'html'
                ]
            ],
            'plugins' => [
                'clips',
                'fullscreen',
                'imageupload',
                'imagemanager',
                'filemanager',
                'fontcolor',
            ]

        ]
    ])?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_seo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
