<?php

$this->title = 'Обновить';
$this->params['breadcrumbs'][] = ['label' => 'МФО', 'url' => ['mfo/index']];
?>
<div class="banks-update">
    <h1>Обновлено: <?= $data['countUpdate'] ?></h1>
    <h1>Добавлено новых: <?= $data['countSave'] ?></h1>
</div>