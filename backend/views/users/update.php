<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = 'Update User: ' . $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->username, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>

<div class="row" style="margin-top: 20px;">
    <div class="col-lg-6">
        <div class="box box-default">
            <div class="box-header with-border">
                <h4>Обновить контакт</h4>
            </div>
            <div class="box-body">
                <div class="col-lg-12">

                    <?php $form = ActiveForm::begin([
                        'layout' => 'horizontal',
                    ]); ?>

                    <?= $form->field($model, 'username')->textInput() ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'role')->dropDownList([
                        'manager' => 'Менеджер',
                        'client' => 'Клиент'
                    ]) ?>

                    <?= $form->field($model, 'status')->dropDownList([
                            '10' => 'Активен',
                            '0' => 'Не активен'
                    ]) ?>

                    <div class="form-group center">
                        <?= Html::submitButton('Обновить', ['class' => 'mbtn mbtn-primary', 'name' => 'signup-button']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>


                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="box box-default">
            <div class="box-header with-border">
                <h4>Поменять пароль</h4>
            </div>
            <div class="box-body">
                <div class="col-lg-12">

                    <?php $form = ActiveForm::begin([
                        'layout' => 'horizontal',
                    ]); ?>

                    <?= $form->field($formModel, 'password')->passwordInput() ?>

                    <?= $form->field($formModel, 'password_repeat')->passwordInput() ?>

                    <?= $form->field($formModel, 'user_id')->hiddenInput(["value" => $model->id])->label(false) ?>

                    <div class="form-group center">
                        <?= Html::submitButton('Поменять пароль', ['class' => 'mbtn btn-warning']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>

                </div>
            </div>
        </div>
    </div>
</div>