<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Пользователи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-lg-12">
        <div class="box box-default">
            <div class="box-header with-border">
                <div class="pull-left">
                    <?= Html::a('<i class="fa fa-plus"></i> Создать пользователя', ['create'], ['class' => 'mbtn mbtn-success']) ?>
                </div>
            </div>
            <div class="box-body">
                <?php Pjax::begin(); ?>    <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                        'username',
                        'email:email',
                        'role',
                        [
                            'attribute' => 'status',
                            'value' => function ($model) {
                                return ($model->status ? 'Активен' : 'Неактивен');
                            }
                        ],
                        'updated_at:dateTime',
                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]); ?>
                <?php Pjax::end(); ?>
            </div>
        </div>
    </div>
</div>