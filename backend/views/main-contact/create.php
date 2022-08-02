<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MainContact */

$this->title = 'Create Main Contact';
$this->params['breadcrumbs'][] = ['label' => 'Main Contacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="main-contact-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
