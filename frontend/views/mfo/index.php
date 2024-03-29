<?php

use common\models\Reviews;
use frontend\widgets\MainPageWidget;
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
        <?= MainPageWidget::widget(['type' => 'mfo_index_calculator_version','sum'=> $sum,'term' => $term]) ?>
    </div>
</section>

<div class="content">
    <div class="container">
        <div class="content__block">
            <div class="content__row">
                <section class="cards">
                    <?php if(!$mfos)  : ?>
                        <div style="margin-bottom: 20px;">
                            <h1 class="not-found__title">Prueba a cambiar el importe o el plazo del préstamo!</h1>
                        </div>
                    <?php endif; ?>
                    <?php foreach ($mfos as $mfo) :
                        $reviewsCount = Reviews::find()->where(['mfo_id' => $mfo->id, 'status' => 1])->count();
                        $formatSum = intval($mfo->data['condiciones']['first_loan_max']);
                        $procent = (float)str_replace(',', '.', $mfo->data['condiciones']['rate_first']);
                        $term = intval($mfo->data['condiciones']['plazo_max']);
                        $sum = $formatSum * ($procent/100) * $term;
                        $sumWithVat = $sum * 0.16;
                        $totalSum = $sum + $sumWithVat;
                        $total = $formatSum + $totalSum;
                        $totalFormat = number_format($total, 2, '.', '');
                        if($mfo->type == 'Broker'){
                            $sum = 14000;
                            $term = 99;
                        }
                        ?>
                    <div class="offer change-text">
                        <div class="offer__row">
                            <div class="offer__company">
                                <?php if(isset($mfo->color) && $mfo->color->name) : ?>
                                    <div class="offer__company-line" style="background: <?= $mfo->color->color ?>;"><?= $mfo->color->name ?></div>
                                <?php endif; ?>
                                <div class="offer__company-logo">
                                    <?php if($mfo->logo) : ?>
                                    <div class="offer__company-img">
                                        <a href="<?= Url::toRoute(['mfo/view', 'url' => $mfo->url]) ?>">
                                            <img src="<?= $mfo->logo ?>" alt="<?= $mfo->name ?>">
                                        </a>
                                    </div>
                                    <?php endif; ?>
                                    <div class="repute">
                                        <div class="repute__rating">
                                            <img class="repute__rating-image" src="/img/stars.svg" alt="stars">
                                            <div class="repute__rating-number">4,4</div>
                                        </div>
                                        <div class="repute__comments">
                                            <?php if($reviewsCount > 0) : ?>
                                                Leer <a href="<?= Url::toRoute(['mfo/reviews', 'url' => $mfo->url]) ?>" class="repute__comments-link"><?= $reviewsCount ?> comentarios</a>
                                            <?php else: ?>
                                                <a href="<?= Url::toRoute(['mfo/reviews', 'url' => $mfo->url]) ?>" class="repute__comments-link">Danos tu opinión
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <?php if(isset($mfo->data['data_company']['legal_name_company']) && $mfo->data['data_company']['legal_name_company'] != '-') : ?>
                                <div class="offer__company-title"><?= $mfo->data['data_company']['legal_name_company'] ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="offer__content">
                                <div class="offer__value">
                                    <ul class="offer__value-list">
                                        <li class="offer__value-item">
                                            <div class="offer__value-title">
                                                Monto del Préstamo, $</div>
                                            <div class="offer__value-number"><?= $sum ?></div>
                                        </li>
                                        <li class="offer__value-item">
                                            <div class="offer__value-title">
                                                Fecha de Pago, días</div>
                                            <div class="offer__value-number"><?= $term ?></div>
                                        </li>
                                        <li class="offer__value-item">
                                            <div class="offer__value-title">
                                                Tasa de interés, %</div>
                                            <div class="offer__value-number"><?= $mfo->data['condiciones']['rate_first'] ?></div>
                                        </li>
                                        <li class="offer__value-item">
                                            <div class="offer__value-title">
                                                Total a Pagar, $</div>
                                            <div class="offer__value-number"><?= $totalFormat ?></div>
                                        </li>
                                        <li class="offer__value-item">
                                            <div class="offer__value-title">
                                                CAT, %</div>
                                            <?php
                                            $cat = 11;
                                            if($mfo->data['condiciones']['min_total_cost'] != '-'){
                                                $cat = $mfo->data['condiciones']['min_total_cost'];
                                            }
                                            if($mfo->data['condiciones']['max_total_cost'] != '-'){
                                                $cat = $mfo->data['condiciones']['max_total_cost'];
                                            }
                                            if($mfo->data['condiciones']['min_total_cost'] != '-' && $mfo->data['condiciones']['max_total_cost'] != '-'){
                                                $cat = $mfo->data['condiciones']['min_total_cost'].' - '.$mfo->data['condiciones']['max_total_cost'];
                                            }
                                            ?>
                                            <div class="offer__value-number"><?= $cat ?></div>
                                        </li>
                                        <li class="offer__value-item offer__value-item--last">
                                            <div class="offer__value-title">
                                                Nuestra calificación</div>
                                            <div class="offer__value-number"><?= $mfo->rating_auto['rating']['allRating'] ?></div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="offer__info">
                                    <div class="offer__buttons">
                                        <input type="checkbox" checked class="checkbox">
                                        <div class="offer__links">
                                            <div class="offer__open button button--secondary open">Más info</div>
                                            <?php if(isset($mfo->data['meta_tags']['affiliate']) && $mfo->data['meta_tags']['affiliate'] != '-') : ?>
                                                <a class="offer__receive button button--primary" target="_blank" href="/redirect?r=<?= $mfo->data['meta_tags']['affiliate'] ?>&url=<?= $mfo->url ?>">Recibir dinero</a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="offer__repute repute">
                                        <div class="repute__rating">
                                            <img class="repute__rating-image" src="/img/stars.svg" alt="stars">
                                            <div class="repute__rating-number">4,4</div>
                                        </div>
                                        <div class="repute__comments">
                                            <?php if($reviewsCount > 0) : ?>
                                                Leer <a href="<?= Url::toRoute(['mfo/reviews', 'url' => $mfo->url]) ?>" class="repute__comments-link"><?= $reviewsCount ?> comentarios</a>
                                            <?php else: ?>
                                                <a href="<?= Url::toRoute(['mfo/reviews', 'url' => $mfo->url]) ?>" class="repute__comments-link">Danos tu opinión
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
                                                <!--                                                    <img class="offer-dropdown__repute-image" src="/img/stars.svg" alt="stars">-->
                                                <div class="rating__stars_similar" style="width:<?= $mfo->rating_auto['rating']['allRating_rate'] ?>%"></div>
                                                <span class="offer-dropdown__repute-number"><?= $mfo->rating_auto['rating']['allRating'] ?></span>
                                            </div>
                                        </li>
                                        <li class="offer-dropdown__repute-item">
                                            <p class="offer-dropdown__repute-text">Interés & Costes</p>
                                            <div class="rating__stars_similar" style="width:<?= $mfo->rating_auto['rating']['interes_costes_rate'] ?>%"></div>
                                        </li>
                                        <li class="offer-dropdown__repute-item">
                                            <p class="offer-dropdown__repute-text">Condiciones</p>
                                            <div class="rating__stars_similar" style="width:<?= $mfo->rating_auto['rating']['condiciones_rate'] ?>%"></div>
                                        </li>
                                        <li class="offer-dropdown__repute-item">
                                            <p class="offer-dropdown__repute-text">Atención al cliente</p>
                                            <div class="rating__stars_similar" style="width:<?= $mfo->rating_auto['rating']['atencion_rate'] ?>%"></div>
                                        </li>
                                        <li class="offer-dropdown__repute-item">
                                            <p class="offer-dropdown__repute-text">Funcionalidad</p>
                                            <div class="rating__stars_similar" style="width:<?= $mfo->rating_auto['rating']['funcionalidad_rate'] ?>%"></div>
                                        </li>
                                        <li class="offer-dropdown__repute-item">
                                            <a href="/review-information" class="offer-dropdown__repute-link">Información precisa</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="offer-dropdown__item offer-dropdown__info">
                                    <ul class="offer-dropdown__info-list">
                                        <?php if(isset($mfo->data['requisitos']['older_than']) && $mfo->data['requisitos']['older_than'] != '-') : ?>
                                        <li class="offer-dropdown__info-item">
                                            <p class="offer-dropdown__info-text">Ser mayor de</p>
                                            <div class="offer-dropdown__info-number"><?= $mfo->data['requisitos']['older_than'] ?></div>
                                        </li>
                                        <?php endif; ?>
                                        <?php if(isset($mfo->data['condiciones']['rate_first']) && $mfo->data['condiciones']['rate_first'] != '-') : ?>
                                        <li class="offer-dropdown__info-item">
                                            <p class="offer-dropdown__info-text">La tasa de interés</p>
                                            <div class="offer-dropdown__info-number"><?= $mfo->data['condiciones']['rate_first'] ?></div>
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
                                        <?php if(isset($mfo->data['characteristic']['round_the_clock']) && $mfo->data['characteristic']['round_the_clock'] != '-') : ?>
                                        <li class="offer-dropdown__connection-item">
                                            <p class="offer-dropdown__connection-text">Abierto 24/7</p>
                                            <img class="offer-dropdown__connection-image" src="/img/checkbox.svg" alt="checkbox">
                                        </li>
                                        <?php endif; ?>

                                        <?php if(isset($mfo->data['contacts']['whatsapp']) && $mfo->data['contacts']['whatsapp'] != '-') : ?>
                                        <li class="offer-dropdown__connection-item offer-dropdown__connection-item--column">
                                            <p class="offer-dropdown__connection-text">WhatsApp</p>
                                            <a href="tel:<?= $mfo->data['contacts']['whatsapp'] ?>" class="offer-dropdown__connection-phone"><?= $mfo->data['contacts']['whatsapp'] ?></a>
                                        </li>
                                        <?php endif; ?>
                                        <?php if(isset($mfo->data['characteristic']['tiene_app']) && $mfo->data['characteristic']['tiene_app'] != '-') : ?>
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
                    <?php endforeach; ?>
<!--                        <button class="offer__all button button--secondary">Mostrar todas las ofertas</button>-->
                </section>
                <!-- <sidebar class="sidebar"></sidebar> -->
            </div>
        </div>
    </div>
</div>
