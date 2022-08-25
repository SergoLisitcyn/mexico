<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MenuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Пункты меню';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать пункты меню', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= \kartik\grid\GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],


            [
                'class' => 'kartik\grid\EditableColumn',
                'attribute' => 'name',
                'hAlign' => 'center',
                'filter' => false,
                'value' => function($model){ return $model->name; },
            ],
            [
                'class' => 'kartik\grid\EditableColumn',
                'attribute' => 'zone',
                'hAlign' => 'center',
                'filter' => false,
                'editableOptions' =>  function ($model, $key, $index) {
                    return [
                        'header' => 'зону',
                        'inputType' => 'dropDownList',
                        'data' => [0 =>'Бургер и футер',1 =>'Бургер',2 =>'Футер'],
                    ];
                },
                'value' => function($model){
                    if($model->status == 0){
                        return 'Бургер и футер';
                    } elseif($model->status == 1) {
                        return 'Бургер';
                    } elseif($model->status == 2) {
                        return 'Футер';
                    }

                    return null;
                },
            ],
            'link',
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
                    return Html::tag('a', 'Редактировать', ['href' => Url::toRoute(['menu/update', 'id' => $index]), 'class' => 'btn btn-success', 'style' => 'font-weight: 100;margin-right:10px'])
                        .Html::tag('a', 'Удалить', ['href' => Url::toRoute(['menu/delete', 'id' => $index]), 'data-method' => 'post', 'data-confirm' => 'Вы точно хотите удалить?', 'class' => 'btn btn-order btn-danger', 'style' => 'font-weight: 100']);
                },
            ],
        ],
    ]); ?>


</div>
