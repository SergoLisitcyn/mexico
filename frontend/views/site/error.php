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
            <h1 class="not-found__title">You’re in a land of the lost </h1>
            <p class="not-found__descr">You can either stay and chill here, or go back to the beggining</p>
            <a href="/" class="not-found__button button button--primary">Take a ride back home</a>
        </div>
    </div>
</section>
