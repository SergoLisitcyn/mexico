<?php

use yii\helpers\Url;

/* @var $dataProvider yii\data\ActiveDataProvider */

if(isset($text->title_seo) && !empty($text->title_seo)) { $this->title = $text->title_seo; }
if(isset($text->keywords) && !empty($text->keywords)) { $this->registerMetaTag(['name' => 'keywords','content' => $text->keywords]); }
if(isset($text->description) && !empty($text->description)) { $this->registerMetaTag(['name' => 'description','content' => $text->description]); }
?>
<div class="breadcrumbs">
    <div class="container">
        <ul class="breadcrumbs__items">
            <li class="breadcrumbs__item">
                <a href="/" class="breadcrumbs__link">Займы онлайн</a>
            </li>
            <li class="breadcrumbs__item">
                МФО
            </li>
        </ul>
    </div>
</div>
<div class="content">
    <div class="container">
        <?php if($text->title_h1) :?>
        <h1 class="main__title main-title"><?= $text->title_h1 ?></h1>
        <?php endif; ?>
        <?php if($text->text_top) : ?>
            <div class="values__descr">
                <?= $text->text_top ?>
            </div>
        <?php endif; ?>
        <div class="content__block">
            <div class="content__row">
                <section class="cards">
                    <?php foreach ($mfos as $key => $mfo) : ?>
                        <div class="offer change-text">
                            <div class="offer__row">
                                <div class="offer__company">
                                    <div class="offer__company-line">Recomendado</div>
                                    <div class="offer__company-logo">
                                        <?php if($mfo['params']['logo']) : ?>
                                            <div class="offer__company-img">
                                                <a href="<?= Url::toRoute(['mfo/view', 'url' => $mfo['params']['url']]) ?>">
                                                    <img src="<?= $mfo['params']['logo'] ?>" alt="<?= $mfo['params']['name'] ?>">
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                        <div class="repute">
                                            <div class="repute__rating">
                                                <img class="repute__rating-image" src="/img/stars.svg" alt="stars">
                                                <div class="repute__rating-number">4,4</div>
                                            </div>
                                            <div class="repute__comments">
                                                Leer <a href="<?= Url::toRoute(['mfo/reviews', 'url' => $mfo['params']['url']]) ?>" class="repute__comments-link">25 comentarios</a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if(isset($mfo['params']['data']['data_company']['legal_name_company']) && $mfo['params']['data']['data_company']['legal_name_company'] != '-') : ?>
                                        <div class="offer__company-title"><?= $mfo['params']['data']['data_company']['legal_name_company'] ?></div>
                                    <?php endif; ?>
                                </div>
                                <div class="offer__content">
                                    <div class="offer__value">
                                        <ul class="offer__value-list">
                                            <li class="offer__value-item">
                                                <div class="offer__value-title">
                                                    Monto del Préstamo, $</div>
                                                <div class="offer__value-number">50</div>
                                            </li>
                                            <li class="offer__value-item">
                                                <div class="offer__value-title">
                                                    Fecha de Pago, días</div>
                                                <div class="offer__value-number">30</div>
                                            </li>
                                            <li class="offer__value-item">
                                                <div class="offer__value-title">
                                                    Tasa de interés, %</div>
                                                <div class="offer__value-number">11</div>
                                            </li>
                                            <li class="offer__value-item">
                                                <div class="offer__value-title">
                                                    Total a Pagar, $</div>
                                                <div class="offer__value-number">61</div>
                                            </li>
                                            <li class="offer__value-item">
                                                <div class="offer__value-title">
                                                    CAT, %</div>
                                                <div class="offer__value-number">11</div>
                                            </li>
                                            <li class="offer__value-item offer__value-item--last">
                                                <div class="offer__value-title">
                                                    Nuestra calificación</div>
                                                <div class="offer__value-number">4,8</div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="offer__info">
                                        <div class="offer__buttons">
                                            <input type="checkbox" checked class="checkbox">
                                            <div class="offer__links">
                                                <div class="offer__open button button--secondary open">Más info</div>
                                                <a class="offer__receive button button--primary" href="#">Recibir dinero</a>
                                            </div>
                                        </div>
                                        <div class="offer__repute repute">
                                            <div class="repute__rating">
                                                <img class="repute__rating-image" src="/img/stars.svg" alt="stars">
                                                <div class="repute__rating-number">4,4</div>
                                            </div>
                                            <div class="repute__comments">
                                                Leer <a href="<?= Url::toRoute(['mfo/reviews', 'url' => $mfo['params']['url']]) ?>" class="repute__comments-link">25 comentarios</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="offer__dropdown offer-dropdown">
                                <div class="offer-dropdown__items">
                                    <div class="offer-dropdown__item offer-dropdown__repute">
                                        <ul class="offer-dropdown__repute-list">
                                            <li class="offer-dropdown__repute-item">
                                                <div class="offer-dropdown__repute-title">Nuestra calificación</div>
                                                <div class="offer-dropdown__repute-rating">
                                                    <img class="offer-dropdown__repute-image" src="/img/stars.svg" alt="stars">
                                                    <span class="offer-dropdown__repute-number">4,8</span>
                                                </div>
                                            </li>
                                            <li class="offer-dropdown__repute-item">
                                                <p class="offer-dropdown__repute-text">Interés & Costes</p>
                                                <img class="offer-dropdown__repute-image" src="/img/stars.svg" alt="stars">
                                            </li>
                                            <li class="offer-dropdown__repute-item">
                                                <p class="offer-dropdown__repute-text">Condiciones</p>
                                                <img class="offer-dropdown__repute-image" src="/img/stars.svg" alt="stars">
                                            </li>
                                            <li class="offer-dropdown__repute-item">
                                                <p class="offer-dropdown__repute-text">Atención al cliente</p>
                                                <img class="offer-dropdown__repute-image" src="/img/stars.svg" alt="stars">
                                            </li>
                                            <li class="offer-dropdown__repute-item">
                                                <p class="offer-dropdown__repute-text">Funcionalidad</p>
                                                <img class="offer-dropdown__repute-image" src="/img/stars.svg" alt="stars">
                                            </li>
                                            <li class="offer-dropdown__repute-item">
                                                <a href="<?= Url::toRoute(['mfo/view', 'url' => $mfo['params']['url']]) ?>" class="offer-dropdown__repute-link">Información precisa</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="offer-dropdown__item offer-dropdown__info">
                                        <ul class="offer-dropdown__info-list">
                                            <?php if(isset($mfo['params']['data']['requisitos']['older_than']) && $mfo['params']['data']['requisitos']['older_than'] != '-') : ?>
                                                <li class="offer-dropdown__info-item">
                                                    <p class="offer-dropdown__info-text">Ser mayor de</p>
                                                    <div class="offer-dropdown__info-number"><?= $mfo['params']['data']['requisitos']['older_than'] ?></div>
                                                </li>
                                            <?php endif; ?>
                                            <?php if(isset($mfo['params']['data']['condiciones']['rate_first']) && $mfo['params']['data']['condiciones']['rate_first'] != '-') : ?>
                                                <li class="offer-dropdown__info-item">
                                                    <p class="offer-dropdown__info-text">La tasa de interés</p>
                                                    <div class="offer-dropdown__info-number"><?= $mfo['params']['data']['condiciones']['rate_first'] ?></div>
                                                </li>
                                            <?php endif; ?>

                                            <li class="offer-dropdown__info-item">
                                                <p class="offer-dropdown__info-text">Acepta mal historial crediticio</p>
                                                <img class="offer-dropdown__info-image" src="/img/checkbox.svg" alt="checkbox">
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="offer-dropdown__item offer-dropdown__connection">
                                        <ul class="offer-dropdown__connection-list">
                                            <?php if(isset($mfo['params']['data']['characteristic']['round_the_clock']) && $mfo['params']['data']['characteristic']['round_the_clock'] != '-') : ?>
                                                <li class="offer-dropdown__connection-item">
                                                    <p class="offer-dropdown__connection-text">Abierto 24/7</p>
                                                    <img class="offer-dropdown__connection-image" src="/img/checkbox.svg" alt="checkbox">
                                                </li>
                                            <?php endif; ?>

                                            <?php if(isset($mfo['params']['data']['contacts']['whatsapp']) && $mfo['params']['data']['contacts']['whatsapp'] != '-') : ?>
                                                <li class="offer-dropdown__connection-item offer-dropdown__connection-item--column">
                                                    <p class="offer-dropdown__connection-text">WhatsApp</p>
                                                    <a href="tel:<?= $mfo['params']['data']['contacts']['whatsapp'] ?>" class="offer-dropdown__connection-phone"><?= $mfo['params']['data']['contacts']['whatsapp'] ?></a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if(isset($mfo['params']['data']['characteristic']['tiene_app']) && $mfo['params']['data']['characteristic']['tiene_app'] != '-') : ?>
                                                <li class="offer-dropdown__connection-item">
                                                    <p class="offer-dropdown__connection-text">Tiene app</p>
                                                    <img class="offer-dropdown__connection-image" src="/img/checkbox.svg" alt="checkbox">
                                                </li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <button class="offer__all button button--secondary">Mostrar todas las ofertas</button>
                </section>
                <!-- <sidebar class="sidebar"></sidebar> -->
            </div>
        </div>
        <?php if($text->text_bottom) : ?>
            <div class="values__descr">
                <?= $text->text_bottom ?>
            </div>
        <?php endif; ?>
    </div>
</div>
