<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception $exception */

use yii\helpers\Html;

$this->title = $name;
?>
<section class="not-found">
    <div class="container">
        <div class="not-found__info">
            <h1 class="not-found__title">¡Estás en el mundo de los perdidos! </h1>
            <p class="not-found__descr">La página que estabas buscando se perdió por aquí, en alguna parte…</p>
            <p class="not-found__descr">Puedes quedarte aquí y relajarte, o levantarte, y regresar a encontrar el mejor crédito con Finjenios.</p>
            <a href="/" class="not-found__button button button--primary">Comparar ofertas</a>
        </div>
    </div>
</section>
