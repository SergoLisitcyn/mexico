<?php

use common\models\MainContact;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Main Contacts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="main-contact-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Main Contact', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'city',
            'direction',
            'postal_code',
            'phone',
            //'phone_second',
            //'email:email',
            //'whatsapp',
            //'facebook',
            //'instagram',
            //'twitter',
            //'youtube',
            //'linkedin',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, MainContact $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
