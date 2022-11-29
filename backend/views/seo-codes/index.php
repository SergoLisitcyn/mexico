<?php

use common\models\SeoCodes;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Seo Codes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seo-codes-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Seo Codes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'seo_codes_top:ntext',
            'seo_codes_top_status',
            'seo_codes_bottom:ntext',
            //'seo_codes_bottom_status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SeoCodes $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
