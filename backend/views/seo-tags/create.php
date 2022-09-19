<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SeoTags */

$this->title = 'Создать';
$this->params['breadcrumbs'][] = ['label' => 'Seo Tags', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mfo">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
