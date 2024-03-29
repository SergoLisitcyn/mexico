<?php
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
                    <li class="offer__value-item">
                        <div class="offer__value-title"><?= $montoText ?></div>
                        <div class="offer__value-number"><?= $sum ?></div>
                    </li>
                    <li class="offer__value-item">
                        <div class="offer__value-title"><?= $fechaText ?></div>
                        <div class="offer__value-number"><?= $term ?></div>
                    </li>
                    <?php if(isset($mfo['params']['data']['condiciones'])) : ?>
                        <li class="offer__value-item">
                            <div class="offer__value-title"><?= $tasaText ?></div>
                            <div class="offer__value-number"><?= $mfo['params']['data']['condiciones']['rate_first'] ?></div>
                        </li>
                    <?php endif; ?>
                    <li class="offer__value-item">
                        <div class="offer__value-title"><?= $pagarText ?></div>
                        <div class="offer__value-number"><?= $totalFormat ?></div>
                    </li>
                    <li class="offer__value-item">
                        <div class="offer__value-title"><?= $catText ?></div>
                        <?php
                        $cat = 11;
                        if(isset($mfo['params']['data']['condiciones'])){
                            if($mfo['params']['data']['condiciones']['min_total_cost'] != '-'){
                                $cat = $mfo['params']['data']['condiciones']['min_total_cost'];
                            }
                            if($mfo['params']['data']['condiciones']['max_total_cost'] != '-'){
                                $cat = $mfo['params']['data']['condiciones']['max_total_cost'];
                            }
                            if($mfo['params']['data']['condiciones']['min_total_cost'] != '-' && $mfo['params']['data']['condiciones']['max_total_cost'] != '-'){
                                $cat = $mfo['params']['data']['condiciones']['min_total_cost'].' - '.$mfo['params']['data']['condiciones']['max_total_cost'];
                            }
                        }
                        ?>
                        <div class="offer__value-number"><?= $cat ?></div>
                    </li>
                    <?php if (isset($mfo['params']['rating_auto'])) : ?>
                        <li class="offer__value-item offer__value-item--last">
                            <div class="offer__value-title">
                                Nuestra calificación</div>
                            <div class="offer__value-number"><?= $mfo['params']['rating_auto']['rating']['allRating'] ?></div>
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
            <?php if(isset($mfo['params']['rating_auto'])) : ?>
                <div class="offer-dropdown__item offer-dropdown__repute">
                    <ul class="offer-dropdown__repute-list">
                        <li class="offer-dropdown__repute-item">
                            <div class="offer-dropdown__repute-title">Nuestra calificación</div>
                            <?php if(isset($item['rating_auto']))  : ?>
                                <div class="offer-dropdown__repute-rating">
                                    <div class="rating__stars_similar" style="width:<?= $mfo['params']['rating_auto']['rating']['allRating_rate'] ?>%"></div>
                                    <span class="offer-dropdown__repute-number"><?= $mfo['params']['rating_auto']['rating']['allRating'] ?></span>
                                </div>
                            <?php endif; ?>
                        </li>
                        <li class="offer-dropdown__repute-item">
                            <p class="offer-dropdown__repute-text">Interés & Costes</p>
                            <div class="rating__stars_similar" style="width:<?= $mfo['params']['rating_auto']['rating']['interes_costes_rate'] ?>%"></div>
                        </li>
                        <li class="offer-dropdown__repute-item">
                            <p class="offer-dropdown__repute-text">Condiciones</p>
                            <div class="rating__stars_similar" style="width:<?= $mfo['params']['rating_auto']['rating']['condiciones_rate'] ?>%"></div>
                        </li>
                        <li class="offer-dropdown__repute-item">
                            <p class="offer-dropdown__repute-text">Atención al cliente</p>
                            <div class="rating__stars_similar" style="width:<?= $mfo['params']['rating_auto']['rating']['atencion_rate'] ?>%"></div>
                        </li>
                        <li class="offer-dropdown__repute-item">
                            <p class="offer-dropdown__repute-text">Funcionalidad</p>
                            <div class="rating__stars_similar" style="width:<?= $mfo['params']['rating_auto']['rating']['funcionalidad_rate'] ?>%"></div>
                        </li>
                        <li class="offer-dropdown__repute-item">
                            <a href="/review-information" class="offer-dropdown__repute-link">Información precisa</a>
                        </li>
                    </ul>
                </div>
            <?php endif; ?>
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
