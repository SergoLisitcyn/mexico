<?php

use common\models\Mfo;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'МФО';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mfo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Создать МФО', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= Html::a('Запустить обновление', ['mfo/sheet'], [
        'class' => 'btn btn-success',
        'data' => [
            'confirm' => 'Вы точно хотите запустить обновление?',
            'method' => 'post',
        ],
    ]) ?>
    <?= Html::a('Запустить обновление рейтинга', ['site/api'], [
        'class' => 'btn btn-warning',
        'data' => [
            'confirm' => 'Вы точно хотите запустить обновление?',
            'method' => 'post',
        ],
    ]) ?>

    <?= Html::a('Обновить FAQ', ['mfo/faq'], [
        'class' => 'btn btn-warning',
        'data' => [
            'confirm' => 'Вы точно хотите запустить обновление?',
            'method' => 'post',
        ],
    ]) ?>


    <?= \kartik\grid\GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn',
                'options' => ['width' => '10'],
            ],

            'name',
            [
                'attribute' => 'url',
                'format' => 'raw',
                'value' => function($model){
                    $link = 'http://'.$_SERVER['SERVER_NAME'].'/entidad';
                    if( isset($_SERVER['HTTPS'] ) ) {
                        $link = 'https://'.$_SERVER['SERVER_NAME'].'/entidad';
                    }
                    if($model->url){
                        return '<a href='.$link.'/'.$model->url.' target="_blank">'.$model->url. '</a>' ;
                    }

                    return '';
                },
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
                    return Html::tag('a', 'Редактировать', ['href' => Url::toRoute(['mfo/update', 'id' => $index]), 'class' => 'btn btn-success', 'style' => 'font-weight: 100;margin-right:10px'])
                        .Html::tag('a', 'Удалить', ['href' => Url::toRoute(['mfo/delete', 'id' => $index]), 'data-method' => 'post', 'data-confirm' => 'Вы точно хотите удалить?', 'class' => 'btn btn-order btn-danger', 'style' => 'font-weight: 100']);
                },
            ],
        ],
    ]); ?>


</div>
