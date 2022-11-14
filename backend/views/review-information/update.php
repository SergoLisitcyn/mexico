<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\ReviewInformation $model */

$this->title = ' ';
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="review-information-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
