<?php

use kartik\file\FileInput;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use vova07\imperavi\Widget;
use \common\models\BlockRec;
use unclead\multipleinput\MultipleInput;

/* @var $this yii\web\View */
/* @var $model common\models\Mfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div>

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data'],]); ?>
    <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>
    <?php if($model && $model->url) :
        $link = Yii::$app->params['link'].'entidad/'.$model->url;
        ?>
    <div style="margin-bottom: 20px">
        <b>Link - <a href="<?= $link ?>" target="_blank"><?= $link ?></a> </b>
    </div>

    <?php endif; ?>
    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rating')->textInput(['maxlength' => true]) ?>

    <?php
    echo $form->field($model, 'general_text')->widget(MultipleInput::className(), [
        'min'               => 1, // should be at least 2 rows
        'allowEmptyList'    => false,
        'enableGuessTitle'  => true,
        'addButtonPosition' => MultipleInput::POS_HEADER, // show add button in the header
    ])
        ->label(false);
    ?>

    <div class="row">
        <div class="col-xs-6">
            <div class="form-group field-mfo-logo_file">
                <?php if($model->logo) : ?>
                    <img src="<?= $model->logo ?>" class="img_slider_view" alt="Image" style="height: 50px">
                <?php else: ?>
                    <b>Логотип отсутствует</b>
                <?php endif; ?>
            </div>
            <?php echo $form->field($model, 'logo_file')->widget(FileInput::classname(), [
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
    <?= $form->field($model, 'button_text')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'montos_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'montos_text')->widget(\yii2jodit\JoditWidget::className(), [
        'settings' => [
//    'height'=>'250px',
            'enableDragAndDropFileToEditor'=>new \yii\web\JsExpression("true"),
        ],
    ]);?>

    <?php
    $blockRec = BlockRec::find()->where(['status' => 1])->all();
    $items = ArrayHelper::map($blockRec,'id','name');
    $params = [
        'prompt' => 'Выбрать плашку'
    ];
    echo $form->field($model, 'color_id')->dropDownList($items,$params);

     ?>


    <?= $form->field($model, 'status')->dropDownList([
        '1' => 'Активен',
        '0' => 'Не активен'
    ]) ?>

    <?= $form->field($model, 'sort')->textInput() ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
