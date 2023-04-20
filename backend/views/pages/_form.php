<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use vova07\imperavi\Widget;
use \yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model common\models\Pages */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pages-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

<!--    --><?php //= $form->field($model, 'content')->widget(Widget::className(), [
//        'settings' => [
//            'lang' => 'ru',
//            'minHeight' => 300,
//            'formatting' => ['p', 'blockquote', 'h2', 'h1','h3','div'],
//            'imageUpload' => Url::to(['/pages/save-redactor-img','sub'=>'content']),
//            'attributes' => [
//                [
//                    'attribute' => 'text',
//                    'format' => 'html'
//                ]
//            ],
//            'plugins' => [
//                'clips',
//                'fullscreen'
//            ]
//
//        ]
//    ])?>
    <?= $form->field($model, 'content')->widget(\yii2jodit\JoditWidget::className(), [
    'settings' => [
//    'height'=>'250px',
    'enableDragAndDropFileToEditor'=>new \yii\web\JsExpression("true"),
    ],
    ]);?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_seo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([
        '1' => 'Активен',
        '0' => 'Не активен'
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
