<?php

use common\models\BlockManagement;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\BlockManagementSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Управление блоками';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="block-management-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= \kartik\grid\GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'name',
            [
                'class' => 'kartik\grid\EditableColumn',
                'attribute' => 'title',
                'hAlign' => 'center',
                'filter' => false,
                'value' => function($model){ return $model->title; },
            ],
            [
                'class' => 'kartik\grid\EditableColumn',
                'attribute' => 'sub_title',
                'hAlign' => 'center',
                'filter' => false,
                'value' => function($model){ return $model->sub_title; },
            ],
            [
                'class' => 'kartik\grid\EditableColumn',
                'attribute' => 'sort',
                'hAlign' => 'center',
                'filter' => false,
                'value' => function($model){ return $model->sort; },
            ],
            [
                'class' => 'kartik\grid\EditableColumn',
                'attribute' => 'status',
                'hAlign' => 'center',
                'filter' => false,
                'editableOptions' =>  function ($model, $key, $index) {
                    return [
                        'header' => 'статус',
                        'inputType' => 'dropDownList',
                        'data' => [0 =>'Не активен',1 =>'Активен'],
                    ];
                },
                'value' => function($model){
                    if($model->status == 0){
                        return 'Не активен';
                    } elseif($model->status == 1) {
                        return 'Активен';
                    }

                    return 'Не активен';
                },
            ],
            [
                'label' => 'Действия',
                'format' => 'raw',
                'options' => ['width' => '200'],
                'value' => function ($model, $index) {
                    if($model->link){
                        if($model->tag == 'info' || $model->tag == 'works' || $model->tag == 'progress' || $model->tag == 'mission' || $model->tag == 'contacts'){
                            return Html::tag('a', 'Редактировать', ['href' => Url::toRoute([$model->link,'id'=> 1,'#'=> $model->tag]), 'class' => 'btn btn-success', 'style' => 'font-weight: 100;margin-right:10px']);
                        }

                        return Html::tag('a', 'Редактировать', ['href' => Url::toRoute([$model->link]), 'class' => 'btn btn-success', 'style' => 'font-weight: 100;margin-right:10px']);
                    } else {
                        return 'Раздел в разработке';
                    }
                },
            ],
        ],
    ]); ?>


</div>
