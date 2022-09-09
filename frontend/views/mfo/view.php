<?php
use frontend\widgets\MfoViewWidget;
use yii\helpers\Url;

$this->title = $model->title;
?>
<div class="main__page-info">
    <div class="container">
        <div class="main__breadcrumbs breadcrumbs">
            <ul class="breadcrumbs__items">
                <li class="breadcrumbs__item">
                    <a href="/mfo" class="breadcrumbs__link">МФО</a>
                </li>
                <li class="breadcrumbs__item">
                    <?= $model->name ?>
                </li>
            </ul>
        </div>
        <?php if(isset($model->data['meta_tags']['h1']) && $model->data['meta_tags']['h1'] != '-') : ?>
            <h1 class="main__title main-title"><?= $model->data['meta_tags']['h1'] ?></h1>
        <?php endif; ?>
        <div class="main__mfo-heading mfo-heading">
            <div class="mfo-heading__name">
                <?php if($model->logo) : ?>
                    <div class="mfo-heading__name-logo">
                        <img src="<?= $model->logo ?>" alt="<?= $model->name ?>">
                    </div>
                <?php endif; ?>
                <?php if(isset($model->data['meta_tags']['h1']) && $model->data['meta_tags']['site'] != '-') : ?>
                    <div class="mfo-heading__name-link">
                        <?= $model->data['meta_tags']['site'] ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="mfo-heading__repute repute">
                <div class="repute__rating">
                    <img class="repute__rating-image" src="/img/stars.svg" alt="stars">
                    <div class="repute__rating-number">4,8</div>
                </div>
                <div class="repute__comments">
                    Leer <a href="<?= Url::toRoute(['mfo/reviews', 'url' => $model->url]) ?>" class="repute__comments-link">25 comentarios</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container">
        <div class="content__block">
            <div class="content__row">
                <section class="content__mfo-about mfo-about">
                    <div class="mfo-about__calculator calculator">
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
                            <div class="calculator__sum calculator-sum">
                                <div class="calculator-sum__text">Сумма к возврату:</div>
                                <div class="calculator-sum__number">65</div> <span class="calculator-sum__number-span">$</span>
                            </div>
                            <button type="button" class="calculator__button button button--primary">Recibir dinero</button>
                        </div>
                    </div>
                    <div class="mfo-about__list mfo-list">
                        <h2 class="mfo-list__title title">Visión general de Credito</h2>
                        <ul class="mfo-list__list">
                            <li class="mfo-list__item">Proceso 100% online</li>
                            <li class="mfo-list__item">Financiación de $1.000 a $10.000.000 pesos</li>
                            <li class="mfo-list__item">Más de 50 entidades para comparar</li>
                            <li class="mfo-list__item">Reparadoras de deuda</li>
                        </ul>
                    </div>
                    <div class="mfo-about__mfo-tabs mfo-tabs">
                        <ul class="mfo-tabs__control tabs-control">
                            <li class="tabs-control__item tabs-control__item--active" data-tab="1">Análisis</li>
                            <li class="tabs-control__item" data-tab="2">Características</li>
                            <li class="tabs-control__item" data-tab="3">Datos</li>
                            <li class="tabs-control__item" data-tab="4">Comentarios</li>
                        </ul>
                        <div class="tabs-content">
                            <div class="tabs-content__item" data-tab-content="1">
                                <div class="tabs-content__info tabs-content-info">
                                    <h2 class="tabs-content-info__title title">Montos adicionales</h2>
                                    <p class="tabs-content-info__text">Si has solicitado un préstamo en Vivus México tienes la opción de solicitar un monto adicional.</p>
                                    <p class="tabs-content-info__text">Es decir, si ya tienes un préstamo aprobado, pero necesitas más dinero, podrás solicitar un monto extra para solventar lo que sea que haya surgido.</p>
                                    <p class="tabs-content-info__text">El crédito inicial y el monto adicional se combinarán en un sólo préstamo, manteniendo el mismo plazo de pago que el de la solicitud original.</p>
                                    <p class="tabs-content-info__text">Como has notado, Vivus créditos es realmente flexible y honesto con los usuarios. <br>
                                        Si has solicitado un préstamo en Vivus México tienes la opción de solicitar un monto adicional.</p>
                                    <p class="tabs-content-info__text">Es decir, si ya tienes un préstamo aprobado, pero necesitas más dinero, podrás solicitar un monto extra para solventar lo que sea que haya surgido. <br>
                                        El crédito inicial y el monto adicional se combinarán en un sólo préstamo, manteniendo el mismo plazo de pago que el de la solicitud original.Como has notado, Vivus créditos es realmente flexible y honesto con los usuarios</p>
                                </div>

                                <!--  Características de la compañía -->
                                <?= MfoViewWidget::widget(['type' => 'characteristic','model' => $model->data]) ?>

                                <!--  Condiciones de préstamos -->
                                <?= MfoViewWidget::widget(['type' => 'condiciones','model' => $model->data['condiciones']]) ?>

                                <!--  Requisitos -->
                                <?= MfoViewWidget::widget(['type' => 'requisitos','model' => $model->data['requisitos']]) ?>

                                <!--  Medios de disposición del crédito-->
                                <?= MfoViewWidget::widget(['type' => 'means','model' => $model->data['means']]) ?>

                                <!--   Métodos de pago-->
                                <?= MfoViewWidget::widget(['type' => 'payment_methods','model' => $model->data['payment_methods']]) ?>

                                <!--   Datos de la compañia-->
                                <?= MfoViewWidget::widget(['type' => 'data_company','model' => $model->data['data_company']]) ?>

                                <div class="tabs-content__line line"></div>

                                <!--   Empresa matriz-->
                                <?= MfoViewWidget::widget(['type' => 'mother_company','model' => $model->data['mother_company']]) ?>

                                <div class="tabs-content__box tabs-content-box">
                                    <div class="tabs-content-box__columns">
                                        <!--   La cuenta-->
                                        <?= MfoViewWidget::widget(['type' => 'account','model' => $model->data['account']]) ?>

                                        <!--   Atención al cliente-->
                                        <?= MfoViewWidget::widget(['type' => 'customer_support','model' => $model->data['customer_support']]) ?>

                                    </div>
                                </div>

                                <!--   Contacto -->
                                <?= MfoViewWidget::widget(['type' => 'contacts','model' => $model->data['contacts']]) ?>

                                <!--   Reviews -->
                                <?= MfoViewWidget::widget(['type' => 'reviews','model' => $model,'reviewsModel' => $reviewsModel,'action' => '/mfo/'.$model->url]) ?>

                                <!--  Comentarios-->
                                <?= MfoViewWidget::widget(['type' => 'reviews_mfo_view','model' => $model]) ?>


                                <!--   Offers -->
                                <?= MfoViewWidget::widget(['type' => 'similar_offers','model' => $model]) ?>

                            </div>
                            <div class="tabs-content__item" data-tab-content="2">
                                <h2 class="tabs-lk__title">
                                    2
                                </h2>
                            </div>
                            <div class="tabs-content__item" data-tab-content="3">
                                <h2 class="tabs-reviews__title">
                                    3
                                </h2>
                            </div>
                            <div class="tabs-content__item" data-tab-content="4">
                                <h2 class="tabs-reviews__title">
                                    4
                                </h2>
                            </div>
                        </div>
                    </div>
                </section>
                <sidebar class="sidebar">
                    <!--   Rating calificación -->
                    <?= MfoViewWidget::widget(['type' => 'rating','model' => $model]) ?>
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
                                            Leer <a href="<?= Url::toRoute(['mfo/reviews', 'url' => $model->url]) ?>" class="repute__comments-link">25 comentarios</a>
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