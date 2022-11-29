<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\SeoCodes $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="seo-codes-form">

    <?php $form = ActiveForm::begin(); ?>

<!--    --><?php //echo $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'seo_codes_top')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'seo_codes_top_status')->dropDownList([
        '1' => 'Активен',
        '0' => 'Не активен'
    ]) ?>

    <?= $form->field($model, 'seo_codes_bottom')->textarea(['rows' => 6]) ?>


    <?= $form->field($model, 'seo_codes_bottom_status')->dropDownList([
        '1' => 'Активен',
        '0' => 'Не активен'
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
