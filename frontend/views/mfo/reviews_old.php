<?php

use yii\helpers\Url;

?>
<div class="main__page-info">
    <div class="container">
        <div class="main__breadcrumbs breadcrumbs">
            <ul class="breadcrumbs__items">
                <li class="breadcrumbs__item">
                    <a href="/" class="breadcrumbs__link">Inicio</a>
                </li>
                <li class="breadcrumbs__item">
                    <a href="/mfo" class="breadcrumbs__link">Empresas</a>
                </li>
                <li class="breadcrumbs__item">
                    <a href="<?= Url::toRoute(['mfo/view', 'url' => $mfo->url]) ?>" class="breadcrumbs__link"><?= $mfo->name ?></a>
                </li>
                <li class="breadcrumbs__item">
                    Comentarios sobre <?= $mfo->name ?>
                </li>
            </ul>
        </div>
        <h1 class="main__title main-title">Comentarios sobre <?= $mfo->name ?></h1>
    </div>
</div>

<div class="content">
    <div class="container">
        <div class="content__block">
            <div class="content__row">
                <section class="content__comments-sect comments-sect">
                    <?php foreach ($reviews as $review) : ?>
                    <div class="content__comments-block comments-block background-set">
                        <div class="comments-block__item">
                            <div class="comments-block__data">
                                <div class="comments-block__date"><?= date('d.m.Y', $review->created_at) ?></div>
                                <div class="comments-block__rating">
                                    <img class="comments-block__rating-img" src="/img/stars.svg" alt="stars">
                                    <span class="comments-block__rating-number">4,4</span>
                                </div>
                            </div>
                            <div class="comments-block__info">
                                <div class="comments-block__info-name">Rocio Torres</div>
                                <p class="comments-block__info-text"><?= $review->body ?></p>
                                <div class="comments-block__descr">
                                    <?php if($review->plus) : ?>
                                        <div class="comments-block__descr-title">Ventajas</div>
                                        <p class="comments-block__descr-text"><?= $review->plus ?></p>
                                    <?php endif; ?>
                                    <?php if($review->minus) : ?>
                                        <div class="comments-block__descr-title">Desventajas</div>
                                        <p class="comments-block__descr-text"><?= $review->minus ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <div class="comments-sect__back">
                        <a href="#" class="comments-sect__back-link button button--secondary">Назад к странице?</a>
                    </div>
                </section>
                <sidebar class="sidebar">
                    <div class="rating-sidebar">
                        <div class="rating-sidebar__row background-set">
                            <h2 class="rating-sidebar__title title sidebar-title">Rating calificación</h2>
                            <div class="rating-sidebar__repute repute">
                                <div class="repute__rating">
                                    <img class="repute__rating-image" src="/img/stars.svg" alt="stars">
                                    <div class="repute__rating-number">4,8</div>
                                </div>
                                <div class="repute__comments">
                                    Leer <a href="<?= Url::toRoute(['mfo/reviews', 'url' => $mfo->url]) ?>" class="repute__comments-link">25 comentarios</a>
                                </div>
                            </div>
                            <ul class="rating-sidebar__list">
                                <li class="rating-sidebar__item">
                                    <div class="rating-sidebar__text">Interés & Costes</div>
                                    <div class="rating-sidebar__rating">
                                        <img class="rating-sidebar__rating-image" src="/img/stars.svg" alt="stars">
                                        <div class="rating-sidebar__rating-number">4</div>
                                    </div>
                                </li>
                                <li class="rating-sidebar__item">
                                    <div class="rating-sidebar__text">Condiciones</div>
                                    <div class="rating-sidebar__rating">
                                        <img class="rating-sidebar__rating-image" src="/img/stars.svg" alt="stars">
                                        <div class="rating-sidebar__rating-number">4</div>
                                    </div>
                                </li>
                                <li class="rating-sidebar__item">
                                    <div class="rating-sidebar__text">Atención al cliente</div>
                                    <div class="rating-sidebar__rating">
                                        <img class="rating-sidebar__rating-image" src="/img/stars.svg" alt="stars">
                                        <div class="rating-sidebar__rating-number">4</div>
                                    </div>
                                </li>
                                <li class="rating-sidebar__item">
                                    <div class="rating-sidebar__text">Funcionalidad</div>
                                    <div class="rating-sidebar__rating">
                                        <img class="rating-sidebar__rating-image" src="/img/stars.svg" alt="stars">
                                        <div class="rating-sidebar__rating-number">4</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="entities entities-sidebar">
                        <div class="entities__row background-set">
                            <h2 class="entities__title title sidebar-title">TOP 3 Entidades</h2>
                            <ul class="entities__list">
                                <li class="entities__item">
                                    <div class="entities__logo">
                                        <img src="/img/entities/bbva.png" alt="bbva">
                                    </div>
                                    <div class="entities__repute repute">
                                        <div class="repute__rating">
                                            <img class="repute__rating-image" src="/img/stars.svg" alt="stars">
                                            <div class="repute__rating-number">4,8</div>
                                        </div>
                                        <div class="repute__comments">
                                            Leer <a href="<?= Url::toRoute(['mfo/reviews', 'url' => $mfo->url]) ?>" class="repute__comments-link">25 comentarios</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="entities__item">
                                    <div class="entities__logo">
                                        <img src="/img/entities/money-man.png" alt="money-man">
                                    </div>
                                    <div class="entities__repute repute">
                                        <div class="repute__rating">
                                            <img class="repute__rating-image" src="/img/stars.svg" alt="stars">
                                            <div class="repute__rating-number">4,7</div>
                                        </div>
                                        <div class="repute__comments">
                                            Leer <a href="#" class="repute__comments-link">27 comentarios</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="entities__item">
                                    <div class="entities__logo">
                                        <img src="/img/entities/findzhin.png" alt="findzhin">
                                    </div>
                                    <div class="entities__repute repute">
                                        <div class="repute__rating">
                                            <img class="repute__rating-image" src="/img/stars.svg" alt="stars">
                                            <div class="repute__rating-number">4,6</div>
                                        </div>
                                        <div class="repute__comments">
                                            Leer <a href="#" class="repute__comments-link">15 comentarios</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </sidebar>
            </div>
        </div>
    </div>
</div>