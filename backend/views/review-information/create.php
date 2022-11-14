<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\ReviewInformation $model */

$this->title = 'Создать';
$this->params['breadcrumbs'][] = ['label' => 'Información precisa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="review-information-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
