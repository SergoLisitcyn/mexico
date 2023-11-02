<?php

use common\models\MainSolicita;
use common\models\Mfo;
use kartik\file\FileInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model common\models\MainTeam */
/* @var $form yii\widgets\ActiveForm */
$mfo = Mfo::find()->where(['status' => 1])->all();
$sol = MainSolicita::find()->all();
$data = [];
$arr = [];
foreach ($mfo as $item){
    $data[$item['url']] = $item['url'];
}
foreach ($sol  as $value){
    $arr[$value['url']] = $value['url'];
}
$arrnew = array_merge($data,$arr);
?>

<div class="mfo">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text')->textInput(['maxlength' => true]) ?>

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
    <?php echo $form->field($model, 'array_url',['options'=>['class'=>'col-xs-12','style'=>'padding-left:0']])->widget(Select2::classname(), [
        'data' => $arrnew,
        'language' => 'ru',
        'options' => ['placeholder' => 'Выбрать ...', 'multiple' => true],
        'pluginOptions' => ['allowClear' => true],
    ]); ?>
    <?= $form->field($model, 'facebook')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'twitter')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'instagram')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'linkedin')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'status')->dropDownList([
        '1' => 'Активен',
        '0' => 'Неактивен'
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
