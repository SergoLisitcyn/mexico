<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\SeoCodes $model */

$this->title = 'Create Seo Codes';
$this->params['breadcrumbs'][] = ['label' => 'Seo Codes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seo-codes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
