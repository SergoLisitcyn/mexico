<?php

use kartik\color\ColorInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\BlockRec $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="block-rec-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'color')->widget(ColorInput::classname(), [
        'options' => ['placeholder' => 'Выбрать цвет ...'],
    ]);
    ?>

    <?= $form->field($model, 'status')->dropDownList([
        '1' => 'включен',
        '0' => 'выключен'
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
