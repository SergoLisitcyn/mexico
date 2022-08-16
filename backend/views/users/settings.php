<?php

use backend\models\Department;
use backend\modules\tcard\models\TcardFactories;
use common\models\User;
use common\models\UserSettings;
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\web\View;

/* @var $this View */
/* @var $model User */
/* @var $settingsModel UserSettings */
/* @var $pressList array */
/* @var $departments Department[] */
/* @var $factories TcardFactories[] */

$this->title = 'Settings for User: ' . $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->username, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Settings';
?>

<div class="row">
    <div class="col-lg-6">
        <div class="box box-default">
            <div class="box-header with-border">
                <h4>Settings</h4>
            </div>
            <div class="box-body">
                <div class="col-lg-12">

                <?php $form = ActiveForm::begin([
                    'layout' => 'horizontal',
                ]); ?>

                <?= $form->field($settingsModel,'user_id')->hiddenInput(['value' => $model->id])->label(false)?>

                <?= $form->field($settingsModel, 'tcard_factory_default')->dropDownList(
                        ArrayHelper::map($factories,'factory_key','factory_name'),
                        ['prompt' => 'Select factory...'])?>

                <?= $form->field($settingsModel, 'tcard_default_press_id')->dropDownList($pressList,['prompt' => 'Select press...']) ?>

                <?= $form->field($settingsModel, 'tcard_press_list')->widget(Select2::classname(), [
                    'data' => $pressList,
                    'options' => ['placeholder' => 'Select presses ...', 'multiple' => true],
                    'pluginOptions' => [
                        'tags' => true,
                        'tokenSeparators' => [',', ' '],
                        'maximumInputLength' => 10
                    ],
                ]);?>

                <hr>

                <?= $form->field($settingsModel, 'local_cloud_prefix')->textInput() ?>

                <?= $form->field($settingsModel, 'department_id')->dropDownList(ArrayHelper::map($departments,'dep_id','dep_name')
                    ,['prompt' => 'Select department...']) ?>

                <?= $form->field($settingsModel, 'round_robin')->dropDownList([
                    0 => 'Disabled',
                    1 => 'Enabled',
                ]) ?>

                <div class="form-group center">
                    <?= Html::submitButton('Update', ['class' => 'mbtn mbtn-primary', 'name' => 'signup-button']) ?>
                </div>

                <?php ActiveForm::end(); ?>

                </div>
            </div>
        </div>
    </div>
</div>