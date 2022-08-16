<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\User;

/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = ucfirst($model->username);
$this->params['breadcrumbs'][] = ['label' => 'Пользователи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?php if (Yii::$app->session->hasFlash('success')): ?>
    <div class="alert alert-success alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        <h4><i class="icon fa fa-check"></i>Success!</h4>
        <?= Yii::$app->session->getFlash('success') ?>
    </div>
<?php endif; ?>
<?php if (Yii::$app->session->hasFlash('error')): ?>
    <div class="alert alert-danger alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        <h4><i class="icon fa fa-remove"></i>Error!</h4>
        <?= Yii::$app->session->getFlash('error') ?>
    </div>
<?php endif; ?>
<div class="row">
    <div class="col-lg-12">
        <div class="box box-default">
            <div class="box-header with-border">
                <div class="pull-left">
                    <?= Html::a('<i class="fa fa-pencil"></i> Обновить', ['update', 'id' => $model->id], ['class' => 'mbtn btn-primary']) ?>
                    <?= Html::a('<i class="fa fa-trash"></i> Удалить', ['delete', 'id' => $model->id], [
                        'class' => 'mbtn btn-danger',
                        'data' => [
                            'confirm' => 'Вы тчно хотите удалить пользователя?',
                            'method' => 'post',
                        ],
                    ]) ?>
                </div>
            </div>
            <div class="box-body">
                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'username',
                        'email:email',
                        [
                            'attribute' => 'status',
                            'value' => function ($model) {
                                return ($model->status ? 'Активный' : 'Неактивный');
                            }
                        ],
                        'updated_at:dateTime',
                    ],
                ]) ?>
            </div>

        </div>
    </div>
</div>


