<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Empresas';
?>
<div class="breadcrumbs">
    <div class="container">
        <ul class="breadcrumbs__items">
            <li class="breadcrumbs__item">
                <a href="/" class="breadcrumbs__link">Inicio</a>
            </li>
            <li class="breadcrumbs__item">
                Empresas
            </li>
        </ul>
    </div>
</div>
<section class="calculator">
    <div class="container">
        <div class="calculator__main">
            <div class="calculator__row background-set">
                <div class="calculator__columns">
                    <div class="calculator__col">
                        <div class="calculator__range range">
                            <label class="range__label">
                                <span class="range__label-title">¿Cuánto dinero necesitas?</span>
                            </label>
                            <div class="range__inputs">
                                <div class="range__result result-1">
                                    <div class="range__result-input">
                                        <input aria-invalid="false" type="text" slot="amount" aria-labelledby="input-amount-slider" class="MuiInputBase-input MuiOutlinedInput-input MuiInputBase-inputMarginDense MuiOutlinedInput-inputMarginDense" value="50" name="rs_sum_output" id="rs_sum_output">
                                    </div>
                                    <span class="range__result-span">$</span>
                                </div>
                                <input id="rs_sum" type="range" name="rs_sum" min="0" max="100" value="50" step="5" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;">
                            </div>
                        </div>
                    </div>
                    <div class="calculator__col">
                        <div class="calculator__range range">
                            <label class="range__label">
                                <span class="range__label-title">¿En cuánto tiempo deseas pagarlo?</span>
                            </label>
                            <div class="range__inputs">
                                <div class="range__result result-2">
                                    <div class="range__result-input">
                                        <input aria-invalid="false" type="text" slot="term" aria-labelledby="input-term-slider" class="MuiInputBase-input MuiOutlinedInput-input MuiInputBase-inputMarginDense MuiOutlinedInput-inputMarginDense" value="30" name="rs_term_output" id="rs_term_output">
                                    </div>
                                    <span class="range__result-span">días</span>
                                </div>
                                <input id="rs_term" type="range" name="rs_term" min="0" max="100" value="5" step="5" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;">
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="calculator__button button button--primary">Compara ofertas</button>
            </div>
        </div>
        <div class="calculator__mini">
            <div class="calculator__row background-set">
                <div class="calculator__columns">
                    <div class="calculator__col">
                        <div class="calculator__range range">
                            <label class="range__label">
                                <span class="range__label-title">Monto:</span>
                            </label>
                            <div class="range__result result-1">
                                <div class="range__result-input">
                                    <input aria-invalid="false" type="text" slot="amount" aria-labelledby="input-amount-slider" class="MuiInputBase-input MuiOutlinedInput-input MuiInputBase-inputMarginDense MuiOutlinedInput-inputMarginDense" value="50" name="rs_sum_output" id="rs_sum_output">
                                </div>
                                <span class="range__result-span">$</span>
                            </div>
                        </div>
                    </div>
                    <div class="calculator__col">
                        <div class="calculator__range range">
                            <label class="range__label">
                                <span class="range__label-title">Período:</span>
                            </label>
                            <div class="range__result result-2">
                                <div class="range__result-input">
                                    <input aria-invalid="false" type="text" slot="term" aria-labelledby="input-term-slider" class="MuiInputBase-input MuiOutlinedInput-input MuiInputBase-inputMarginDense MuiOutlinedInput-inputMarginDense" value="30" name="rs_term_output" id="rs_term_output">
                                </div>
                                <span class="range__result-span">días</span>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="calculator__button button button--secondary">Más info</button>
            </div>
        </div>
    </div>
</section>

<div class="content">
    <div class="container">
        <div class="content__block">
            <div class="content__row">
                <section class="cards">
                    <?php foreach ($mfos as $random) : ?>
                        <div class="offer change-text">
                            <div class="offer__row">
                                <div class="offer__company">
                                    <div class="offer__company-line">Recomendado</div>
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
                                                <img class="repute__rating-image" src="/img/stars.svg" alt="stars">
                                                <div class="repute__rating-number">4,4</div>
                                            </div>
                                            <div class="repute__comments">
                                                Leer <a href="#" class="repute__comments-link">25 comentarios</a>
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
                                                <div class="offer__value-number"><?= $random->rating ?></div>
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
                                                Leer <a href="#" class="repute__comments-link">25 comentarios</a>
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
                                                <a href="<?= Url::toRoute(['mfo/view', 'url' => $random->url]) ?>" class="offer-dropdown__repute-link">Información precisa</a>
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
                    <button class="offer__all button button--secondary">Mostrar todas las ofertas</button>
                </section>
                <!-- <sidebar class="sidebar"></sidebar> -->
            </div>
        </div>
    </div>
</div>
