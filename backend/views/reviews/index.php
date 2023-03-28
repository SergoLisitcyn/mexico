<?php

use common\models\Mfo;
use common\models\Reviews;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ReviewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Отзывы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reviews-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= \kartik\grid\GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn',
                'options' => ['width' => '10'],
            ],
            [
                'label' => 'МФО',
                'value' => function ($model) {
                    $mfoName = Mfo::findOne($model->mfo_id);
                    return $mfoName->name;
                },
            ],
            'created_at:datetime',
            [
                'label' => 'Статус',
                'value' => function ($model) {
                    $result = '';
                    if($model->status == 0){
                        $result .= 'На проверке';
                    } elseif($model->status == 1) {
                        $result .= 'Опубликован';
                    } else {
                        $result .= 'На проверке';
                    }
                    return $result;
                },
                'contentOptions' => function ($model) {
                    if($model->status == 0){
                        $class = 'danger';
                    } elseif($model->status == 1) {
                        $class = 'success';
                    } else {
                        $class = 'warning';
                    }
                    return ['class' => $class];
                },
            ],
            [
                'label' => 'Действия',
                'format' => 'raw',
                'options' => ['width' => '200'],
                'value' => function ($model, $index) {
                    return Html::tag('a', 'Редактировать', ['href' => Url::toRoute(['reviews/update', 'id' => $index]), 'class' => 'btn btn-success', 'style' => 'font-weight: 100;margin-right:10px'])
                        .Html::tag('a', 'Удалить', ['href' => Url::toRoute(['reviews/delete', 'id' => $index]), 'data-method' => 'post', 'data-confirm' => 'Вы точно хотите удалить?', 'class' => 'btn btn-order btn-danger', 'style' => 'font-weight: 100']);
                },
            ],
        ],
    ]); ?>


</div>
