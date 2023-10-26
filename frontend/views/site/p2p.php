<?php

use common\models\Reviews;
use frontend\widgets\MainPageWidget;
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
                <a href="/" class="breadcrumbs__link">Inicio</a>
            </li>
            <?php if($text->title_h1) :?>
                <li class="breadcrumbs__item">
                    <?= $text->title_h1 ?>
                </li>
            <?php endif; ?>
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
                    <?php foreach ($mfos as $key => $mfo) :
                        $reviewsCount = Reviews::find()->where(['mfo_id' => $mfo['params']['id'], 'status' => 1])->count();
                        $ratingReviews = Reviews::getSumRating($mfo['params']['id']);
                        $starReviews = 0;
                        if($ratingReviews > 0){
                            $starReviews = (100 * $ratingReviews)/5;
                        }
                        $sum = $mfo['params']['sum'];
                        $term = $mfo['params']['term'];
                        $procent = (float)str_replace(',', '.', $mfo['params']['data']['condiciones']['rate_first']);

                        $sumAll = $sum * ($procent/100) * $term;
                        $sumWithVat = $sumAll * 0.16;
                        $totalSum = $sumAll + $sumWithVat;
                        $total = $sum + $totalSum;

                        $totalFormat = number_format($total, 2, '.', '');
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
                                            <?php if(isset($mfo['params']['data']['condiciones']['other_loan_max']) && $mfo['params']['data']['condiciones']['other_loan_max'] != '-') : ?>
                                                <li class="offer__value-item">
                                                    <div class="offer__value-title">
                                                        Préstamos personales, hasta, $</div>
                                                    <div class="offer__value-number"><?= $mfo['params']['data']['condiciones']['other_loan_max'] ?></div>
                                                </li>
                                            <?php endif; ?>
                                            <?php if(isset($mfo['params']['data']['condiciones']['other_term_months_max']) && $mfo['params']['data']['condiciones']['other_term_months_max'] != '-') : ?>
                                                <li class="offer__value-item">
                                                    <div class="offer__value-title">
                                                        Plaza, meses, max</div>
                                                    <div class="offer__value-number"><?= $mfo['params']['data']['condiciones']['other_term_months_max'] ?></div>
                                                </li>
                                            <?php endif; ?>
                                            <?php if(isset($mfo['params']['data']['condiciones']['other_fija_via']) && $mfo['params']['data']['condiciones']['other_fija_via'] != '-') : ?>
                                                <li class="offer__value-item">
                                                    <div class="offer__value-title">
                                                        Tasa de interés, %</div>
                                                    <div class="offer__value-number"><?= $mfo['params']['data']['condiciones']['other_fija_via'] ?></div>
                                                </li>
                                            <?php endif; ?>
                                            <?php if(isset($mfo['params']['data']['condiciones']['other_total_loan_cost']) && $mfo['params']['data']['condiciones']['other_total_loan_cost'] != '-') : ?>

                                            <li class="offer__value-item">
                                                <div class="offer__value-title">
                                                    CAT, %</div>

                                                <div class="offer__value-number"><?= $mfo['params']['data']['condiciones']['other_total_loan_cost'] ?></div>
                                            </li>
                                            <?php endif; ?>
<!--                                            <li class="offer__value-item offer__value-item--last">-->
<!--                                                <div class="offer__value-title">-->
<!--                                                    Nuestra calificación</div>-->
<!--                                                <div class="offer__value-number">--><?php //= $mfo['params']['rating_auto']['rating']['allRating'] ?><!--</div>-->
<!--                                            </li>-->
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
                    <?php endforeach; ?>
<!--                    <button class="offer__all button button--secondary">Mostrar todas las ofertas</button>-->
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
