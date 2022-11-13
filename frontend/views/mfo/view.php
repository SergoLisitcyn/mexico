<?php
use frontend\widgets\MfoViewWidget;
use yii\helpers\Url;

if(isset($model->data['meta_tags']['title']) && !empty($model->data['meta_tags']['title'])) { $this->title = $model->data['meta_tags']['title']; }
if(isset($model->data['meta_tags']['description']) && !empty($model->data['meta_tags']['description'])) { $this->registerMetaTag(['name' => 'description','content' => $model->data['meta_tags']['description']]); }
?>
<div class="main__page-info">
    <div class="container">
        <div class="main__breadcrumbs breadcrumbs">
            <ul class="breadcrumbs__items">
                <li class="breadcrumbs__item">
                    <a href="/empresas" class="breadcrumbs__link">Empresas</a>
                </li>
                <?php if(isset($model->data['meta_tags']['h1']) && $model->data['meta_tags']['h1'] != '-') : ?>
                <li class="breadcrumbs__item">
                    <?= $model->data['meta_tags']['h1'] ?>
                </li>
                <?php endif; ?>
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
                                <div class="calculator-sum__text">Total a Pagar:</div>
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
                                    <?php if($model->montos_title) :  ?>
                                    <h2 class="tabs-content-info__title title"><?= $model->montos_title ?></h2>
                                    <?php endif; ?>
                                    <?php if($model->montos_title) :  ?>
                                        <?= $model->montos_text ?>
                                    <?php endif; ?>
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
                                <?= MfoViewWidget::widget(['type' => 'contacts','model' => $model]) ?>

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
                    <!--   TOP 3 Entidades-->
                    <?= MfoViewWidget::widget(['type' => 'top_entidades','model' => $model]) ?>
                </sidebar>
            </div>
        </div>
    </div>
</div>