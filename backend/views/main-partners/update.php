<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MainPartners */

$this->title = 'Обновить';
$this->params['breadcrumbs'][] = ['label' => 'Блок Nuestros colaboradores', 'url' => ['index']];
?>
<div class="mfo">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
