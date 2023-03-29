<?php

use common\models\Reviews;
use yii\helpers\Url;
?>
<div class="tabs-content__offer offers-sect">
    <h2 class="offers-sect__title title">Ofertas similares</h2>
    <div class="offers-sect__block">
        <?php foreach ($mfoRandoms as $random) :
            $reviewsCount = Reviews::find()->where(['mfo_id' => $random->id, 'status' => 1])->count();
            ?>

            <div class="offer change-text">
                <div class="offer__row">
                    <div class="offer__company">
                        <?php if(isset($random->color) && $random->color->name) : ?>
                            <div class="offer__company-line" style="background: <?= $random->color->color ?>;"><?= $random->color->name ?></div>
                        <?php endif; ?>
                        <div class="offer__company-logo">
                            <?php if($random->logo) : ?>
                                <div class="offer__company-img">
                                    <a href="<?= Url::toRoute(['mfo/view', 'url' => $random->url]) ?>">
                                        <img src="<?= $random->logo ?>" alt="<?= $random->name ?> ?>">
                                    </a>
                                </div>
                            <?php endif; ?>
                            <div class="repute">
                                <div class="repute__rating">
<!--                                    <img class="repute__rating-image" src="/img/stars.svg" alt="stars">-->
<!--                                    <div class="repute__rating-number">4,4</div>-->
                                    <div class="rating__stars_similar" style="width:<?= $random->rating_auto['rating']['allRating_rate'] ?>%"></div>
                                    <span class="offer-dropdown__repute-number"><?= $random->rating_auto['rating']['allRating'] ?></span>
                                </div>
                                <div class="repute__comments">
                                    <?php if($reviewsCount > 0) : ?>
                                        Leer <a href="<?= Url::toRoute(['mfo/reviews', 'url' => $random->url]) ?>" class="repute__comments-link"><?= $reviewsCount ?> comentarios</a>
                                    <?php else: ?>
                                        <a href="<?= Url::toRoute(['mfo/reviews', 'url' => $random->url]) ?>" class="repute__comments-link">Danos tu opinión
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <?php if(isset($random->data['data_company']['legal_name_company']) && $random->data['data_company']['legal_name_company'] != '-') : ?>
                            <div class="offer__company-title"><?= $random->data['data_company']['legal_name_company'] ?></div>
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
                                    <div class="offer__value-number"><?= $random->rating_auto['rating']['allRating'] ?></div>
                                </li>
                            </ul>
                        </div>
                        <div class="offer__info">
                            <div class="offer__buttons">
                                <input type="checkbox" checked class="checkbox">
                                <div class="offer__links">
                                    <div class="offer__open button button--secondary open">Más info</div>
                                    <?php if(isset($random->data['meta_tags']['affiliate']) && $random->data['meta_tags']['affiliate'] != '-') : ?>
                                        <a class="offer__receive button button--primary" target="_blank" href="/redirect?r=<?= $random->data['meta_tags']['affiliate'] ?>&url=<?= $random->url ?>">Recibir dinero</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="offer__repute repute">
                                <div class="repute__rating">
<!--                                    <img class="repute__rating-image" src="/img/stars.svg" alt="stars">-->
<!--                                    <div class="repute__rating-number">4,4</div>-->
                                    <div class="rating__stars_similar" style="width:<?= $random->rating_auto['rating']['allRating_rate'] ?>%"></div>
                                    <span class="offer-dropdown__repute-number"><?= $random->rating_auto['rating']['allRating'] ?></span>
                                </div>
                                <div class="repute__comments">
                                    <?php if($reviewsCount > 0) : ?>
                                        Leer <a href="<?= Url::toRoute(['mfo/reviews', 'url' => $random->url]) ?>" class="repute__comments-link"><?= $reviewsCount ?> comentarios</a>
                                    <?php else: ?>
                                        <a href="<?= Url::toRoute(['mfo/reviews', 'url' => $random->url]) ?>" class="repute__comments-link">Danos tu opinión
                                        </a>
                                    <?php endif; ?>
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
<!--                                        <img class="offer-dropdown__repute-image" src="/img/stars.svg" alt="stars">-->
                                        <div class="rating__stars_similar" style="width:<?= $random->rating_auto['rating']['allRating_rate'] ?>%"></div>
                                        <span class="offer-dropdown__repute-number"><?= $random->rating_auto['rating']['allRating'] ?></span>
                                    </div>
                                </li>
                                <li class="offer-dropdown__repute-item">
                                    <p class="offer-dropdown__repute-text">Interés & Costes</p>
                                    <div class="rating__stars_similar" style="width:<?= $random->rating_auto['rating']['interes_costes_rate'] ?>%"></div>
<!--                                    <img class="offer-dropdown__repute-image" src="/img/stars.svg" alt="stars">-->
                                </li>
                                <li class="offer-dropdown__repute-item">
                                    <p class="offer-dropdown__repute-text">Condiciones</p>
                                    <div class="rating__stars_similar" style="width:<?= $random->rating_auto['rating']['condiciones_rate'] ?>%"></div>
<!--                                    <img class="offer-dropdown__repute-image" src="/img/stars.svg" alt="stars">-->
                                </li>
                                <li class="offer-dropdown__repute-item">
                                    <p class="offer-dropdown__repute-text">Atención al cliente</p>
                                    <div class="rating__stars_similar" style="width:<?= $random->rating_auto['rating']['atencion_rate'] ?>%"></div>
<!--                                    <img class="offer-dropdown__repute-image" src="/img/stars.svg" alt="stars">-->
                                </li>
                                <li class="offer-dropdown__repute-item">
                                    <p class="offer-dropdown__repute-text">Funcionalidad</p>
                                    <div class="rating__stars_similar" style="width:<?= $random->rating_auto['rating']['funcionalidad_rate'] ?>%"></div>
<!--                                    <img class="offer-dropdown__repute-image" src="/img/stars.svg" alt="stars">-->
                                </li>
                                <li class="offer-dropdown__repute-item">
                                    <a href="/review-information" class="offer-dropdown__repute-link">Información precisa</a>
                                </li>
                            </ul>
                        </div>
                        <div class="offer-dropdown__item offer-dropdown__info">
                            <ul class="offer-dropdown__info-list">
                                <?php if(isset($random->data['requisitos']['older_than']) && $random->data['requisitos']['older_than'] != '-') : ?>
                                    <li class="offer-dropdown__info-item">
                                        <p class="offer-dropdown__info-text">Ser mayor de</p>
                                        <div class="offer-dropdown__info-number"><?= $random->data['requisitos']['older_than'] ?></div>
                                    </li>
                                <?php endif; ?>
                                <?php if(isset($random->data['condiciones']['rate_first']) && $random->data['condiciones']['rate_first'] != '-') : ?>
                                    <li class="offer-dropdown__info-item">
                                        <p class="offer-dropdown__info-text">La tasa de interés</p>
                                        <div class="offer-dropdown__info-number"><?= $random->data['condiciones']['rate_first'] ?></div>
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
                                <?php if(isset($random->data['characteristic']['round_the_clock']) && $random->data['characteristic']['round_the_clock'] != '-') : ?>
                                    <li class="offer-dropdown__connection-item">
                                        <p class="offer-dropdown__connection-text">Abierto 24/7</p>
                                        <img class="offer-dropdown__connection-image" src="/img/checkbox.svg" alt="checkbox">
                                    </li>
                                <?php endif; ?>

                                <?php if(isset($random->data['contacts']['whatsapp']) && $random->data['contacts']['whatsapp'] != '-') : ?>
                                    <li class="offer-dropdown__connection-item offer-dropdown__connection-item--column">
                                        <p class="offer-dropdown__connection-text">WhatsApp</p>
                                        <a href="tel:<?= $random->data['contacts']['whatsapp'] ?>" class="offer-dropdown__connection-phone"><?= $random->data['contacts']['whatsapp'] ?></a>
                                    </li>
                                <?php endif; ?>
                                <?php if(isset($random->data['characteristic']['tiene_app']) && $random->data['characteristic']['tiene_app'] != '-') : ?>
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
    </div>
</div>