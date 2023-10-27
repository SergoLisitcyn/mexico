<?php

use frontend\widgets\MainPageWidget;
use yii\helpers\Url;
?>
<div class="offer change-text">
    <div class="offer__row">
        <div class="offer__company">
            <?php if(isset($mfo['params']['color']) && $mfo['params']['color']['name']) : ?>
                <div class="offer__company-line" style="background: <?= $mfo['params']['color']['color'] ?>;"><?= $mfo['params']['color']['name'] ?></div>
            <?php endif; ?>
            <div class="offer__company-logo">
                <?php if($mfo['params']['logo']) : ?>
                    <div class="offer__company-img">
                        <a href="<?= Url::toRoute(['mfo/view', 'url' => $mfo['params']['url']]) ?>">
                            <img src="<?= $mfo['params']['logo'] ?>" alt="<?= $mfo['params']['name'] ?>">
                        </a>
                    </div>
                <?php endif; ?>
                <div class="repute">
                    <?php if($reviewsCount > 0) : ?>
                        <div class="repute__rating">
                            <div class="rating__stars_similar" style="width:<?= $starReviews ?>%"></div>
                            <div class="offer-dropdown__repute-number"><?= $ratingReviews ?></div>
                        </div>
                    <?php endif; ?>
                    <div class="repute__comments">
                        <?php if($reviewsCount > 0) : ?>
                            Leer <a href="<?= Url::toRoute(['mfo/reviews', 'url' => $mfo['params']['url']]) ?>" class="repute__comments-link"><?= $reviewsCount ?> comentarios</a>
                        <?php else: ?>
                            <a href="<?= Url::toRoute(['mfo/reviews', 'url' => $mfo['params']['url']]) ?>" class="repute__comments-link">Danos tu opinión
                            </a>
                        <?php endif; ?>
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
                    <?php if($monto != 0) : ?>
                    <li class="offer__value-item">
                        <div class="offer__value-title"><?= $montoText ?></div>
                        <div class="offer__value-number"><?= $monto ?></div>
                    </li>
                    <?php endif; ?>

                    <?php if($fecha != 0) : ?>
                    <li class="offer__value-item">
                        <div class="offer__value-title"><?= $fechaText ?></div>
                        <div class="offer__value-number"><?= $fecha ?></div>
                    </li>
                    <?php endif; ?>

                    <?php if($tasa != 0) : ?>
                        <li class="offer__value-item">
                            <div class="offer__value-title"><?= $tasaText ?></div>
                            <div class="offer__value-number"><?= $tasa ?></div>
                        </li>
                    <?php endif; ?>

                    <?php if($pagar != 0) : ?>
                    <li class="offer__value-item">
                        <div class="offer__value-title"><?= $pagarText ?></div>
                        <div class="offer__value-number"><?= $pagar ?></div>
                    </li>
                    <?php endif; ?>

                    <?php if($cat != 0) : ?>
                    <li class="offer__value-item">
                        <div class="offer__value-title"><?= $catText ?></div>
                        <div class="offer__value-number"><?= $cat ?></div>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="offer__info">
                <div class="offer__buttons">
                    <input type="checkbox" checked class="checkbox">
                    <div class="offer__links">
                        <div class="offer__open button button--secondary open">Más info</div>
                        <?php if(isset($mfo['params']['data']['meta_tags']['affiliate']) && $mfo['params']['data']['meta_tags']['affiliate'] != '-') : ?>
                            <a class="offer__receive button button--primary" target="_blank" href="/redirect?r=<?= $mfo['params']['data']['meta_tags']['affiliate'] ?>&url=<?= $mfo['params']['url'] ?>">Recibir dinero</a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="offer__repute repute">
                    <?php if($reviewsCount > 0) : ?>
                        <div class="repute__rating">
                            <div class="rating__stars_similar" style="width:<?= $starReviews ?>%"></div>
                            <div class="offer-dropdown__repute-number"><?= $ratingReviews ?></div>
                        </div>
                    <?php endif; ?>
                    <div class="repute__comments">
                        <?php if($reviewsCount > 0) : ?>
                            Leer <a href="<?= Url::toRoute(['mfo/reviews', 'url' => $mfo['params']['url']]) ?>" class="repute__comments-link"><?= $reviewsCount ?> comentarios</a>
                        <?php else: ?>
                            <a href="<?= Url::toRoute(['mfo/reviews', 'url' => $mfo['params']['url']]) ?>" class="repute__comments-link">Danos tu opinión
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
                    <?= MainPageWidget::widget(['type' => 'reviewsRatingList','mfoId' => $mfo['params']['id']]) ?>
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
                            <p class="offer-dropdown__info-text">Tasa de interés anual</p>
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
                            <p class="offer-dropdown__connection-text"><?= $mfoText['characteristic']['tiene_app'] ?></p>
                            <img class="offer-dropdown__connection-image" src="/img/checkbox.svg" alt="checkbox">
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
