<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Contacts $model */

$this->title = 'Обновить';
$this->params['breadcrumbs'][] = ['label' => 'Форма обратной связи', 'url' => ['index']];
?>
<div class="contacts-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
