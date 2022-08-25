<script>
    function apiselectlink() {
        $.ajax({
            method: "POST",
            url: "/admin/menu/api-select-link"
        }).done(function (data) {
            $("#ajaxResponse").html(data);
        });
    }

</script>
<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Menu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'link')->textInput(['maxlength' => 255]) ?>
        </div>
        <div class="col-md-6">
            <label class="control-label" for="menu-link">или выбрать из созданных страниц</label>
            <p><span class="btn btn-primary btn-md " data-toggle="modal" data-target="#myModal" onclick="apiselectlink();" id="ApiSelectLink">Выбрать страницу</span></p>
        </div>
    </div>

    <?= $form->field($model, 'zone')->dropDownList([
        '0' => 'Бургер и футер',
        '1' => 'Бургер',
        '2' => 'Футер',
    ]) ?>

    <?= $form->field($model, 'sort')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([
        '1' => 'Активен',
        '0' => 'Неактивен'
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Страницы</h4>
                </div>
                <div class="modal-body">
                    <div id="ajaxResponse"></div>
                </div>
            </div>
        </div>
    </div>
</div>
