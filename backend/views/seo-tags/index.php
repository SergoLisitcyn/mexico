<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Seo Tags';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seo-tags-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= \kartik\grid\GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn',
                'options' => ['width' => '10'],
            ],
            [
                'class' => 'kartik\grid\EditableColumn',
                'attribute' => 'slug',
                'hAlign' => 'center',
                'filter' => false,
                'value' => function($model){ return $model->slug; },
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
                    return Html::tag('a', 'Редактировать', ['href' => Url::toRoute(['seo-tags/update', 'id' => $index]), 'class' => 'btn btn-success', 'style' => 'font-weight: 100;margin-right:10px'])
                        .Html::tag('a', 'Удалить', ['href' => Url::toRoute(['seo-tags/delete', 'id' => $index]), 'data-method' => 'post', 'data-confirm' => 'Вы точно хотите удалить?', 'class' => 'btn btn-order btn-danger', 'style' => 'font-weight: 100']);
                },
            ],
        ],
    ]); ?>


</div>