<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\select2\Select2;


/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = 'Создать пользователя';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-lg-12">
        <div class="box box-default">
            <div class="box-body">
                <div class="col-lg-8">
                    <?php $form = ActiveForm::begin([
                            'id' => 'form-signup',
                            'layout' => 'horizontal',
                    ]); ?>

                    <?= $form->field($model, 'username')->textInput() ?>

                    <?= $form->field($model, 'email') ?>
                    <?= $form->field($model, 'role')->dropDownList([
                        'manager' => 'Менеджер',
                        'client' => 'Клиент'
                    ]) ?>



                    <?= $form->field($model, 'password')->passwordInput() ?>

                    <?= $form->field($model, 'password_repeat')->passwordInput() ?>

                    <div class="form-group">
                        <?= Html::submitButton('Создать', ['class' => 'mbtn btn-primary', 'name' => 'signup-button']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>

                </div>
            </div>
        </div>
    </div>
</div>
