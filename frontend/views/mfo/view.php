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
                    <a href="/" class="breadcrumbs__link">Inicio</a>
                </li>
                <?php if($model->name) : ?>
                <li class="breadcrumbs__item">
                    <?= $model->name ?>
                </li>
                <?php endif; ?>
            </ul>
        </div>
        <?php if($model->title) : ?>
            <h1 class="main__title main-title"><?= $model->title ?></h1>
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
                <?php if(isset($item['rating_auto']))  : ?>
                <div class="repute__rating">
<!--                    <img class="repute__rating-image" src="/img/stars.svg" alt="stars">-->
                    <div class="rating__stars_similar" style="width:<?= $model->rating_auto['rating']['allRating_rate'] ?>%;margin-right: 15px"></div>
                    <div class="repute__rating-number"><?= $model->rating_auto['rating']['allRating'] ?></div>
                </div>
                <?php endif; ?>
                <div class="repute__comments">
                    <?php if($reviewsCount > 0) : ?>
                        Leer <a href="<?= Url::toRoute(['mfo/reviews', 'url' => $model->url]) ?>" class="repute__comments-link"><?= $reviewsCount ?> comentarios</a>
                    <?php else: ?>
                        <a href="<?= Url::toRoute(['mfo/reviews', 'url' => $model->url]) ?>" class="repute__comments-link">Danos tu opinión
                        </a>
                    <?php endif; ?>
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
                    <!--  Características de la compañía -->
                    <?= MfoViewWidget::widget(['type' => 'mfo_calculator','model' => $model,'procent' => $procent,'total' => $total,'firstLoan' => $firstLoan]) ?>
                    <div class="mfo-about__list mfo-list">
                        <h2 class="mfo-list__title title">Visión general de Crédito</h2>
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
                                <!--   Analysist -->
                                <?= MfoViewWidget::widget(['type' => 'analysist','model' => $model]) ?>
                                <div class="tabs-content__info tabs-content-info montos">
                                    <?php if($model->montos_title) :  ?>
                                        <h2 class="tabs-content-info__title title"><?= $model->montos_title ?></h2>
                                    <?php endif; ?>
                                    <?php if($model->montos_text) :  ?>
                                        <?= $model->montos_text ?>
                                    <?php endif; ?>
                                </div>
                                <!--   Offers -->
                                <?= MfoViewWidget::widget(['type' => 'similar_offers','model' => $model]) ?>

                            </div>
                            <div class="tabs-content__item" data-tab-content="2">
                                <!--  Características de la compañía -->
                                <?= MfoViewWidget::widget(['type' => 'characteristic','model' => $model->data]) ?>

                                <!--  Condiciones de préstamos -->
                                <?php if(isset($model->data['condiciones'])) : ?>
                                    <?= MfoViewWidget::widget(['type' => 'condiciones','model' => $model->data['condiciones']]) ?>
                                <?php endif; ?>

                                <!--  Medios de disposición del crédito-->
                                <?php if(isset($model->data['means'])) : ?>
                                    <?= MfoViewWidget::widget(['type' => 'means','model' => $model->data['means']]) ?>
                                <?php endif; ?>

                                <!--   Métodos de pago-->
                                <?php if(isset($model->data['payment_methods'])) : ?>
                                    <?= MfoViewWidget::widget(['type' => 'payment_methods','model' => $model->data['payment_methods']]) ?>
                                <?php endif; ?>

                                <div class="tabs-content__box tabs-content-box">
                                    <div class="tabs-content-box__columns">
                                        <!--   La cuenta-->
                                        <?php if(isset($model->data['account'])) : ?>
                                            <?= MfoViewWidget::widget(['type' => 'account','model' => $model->data['account']]) ?>
                                        <?php endif; ?>

                                        <!--   Atención al cliente-->
                                        <?php if(isset($model->data['customer_support'])) : ?>
                                            <?= MfoViewWidget::widget(['type' => 'customer_support','model' => $model->data['customer_support']]) ?>
                                        <?php endif; ?>


                                    </div>
                                </div>
                            </div>
                            <div class="tabs-content__item" data-tab-content="3">
                                <!--  Requisitos -->
                                <?php if(isset($model->data['requisitos'])) : ?>
                                    <?= MfoViewWidget::widget(['type' => 'requisitos','model' => $model->data['requisitos']]) ?>
                                <?php endif; ?>

                                <!--   Datos de la compañia-->
                                <?php if(isset($model->data['data_company'])) : ?>
                                    <?= MfoViewWidget::widget(['type' => 'data_company','model' => $model->data['data_company']]) ?>
                                <?php endif; ?>

                                <div class="tabs-content__line line"></div>

                                <!--   Empresa matriz-->
                                <?php if(isset($model->data['mother_company'])) : ?>
                                    <?= MfoViewWidget::widget(['type' => 'mother_company','model' => $model->data['mother_company']]) ?>
                                <?php endif; ?>

                                <!--   Contacto -->
                                <?= MfoViewWidget::widget(['type' => 'contacts','model' => $model]) ?>
                            </div>
                            <div class="tabs-content__item" data-tab-content="4">
                                <!--   Reviews -->
                                <?= MfoViewWidget::widget(['type' => 'reviews','model' => $model,'reviewsModel' => $reviewsModel,'action' => '/entidad/'.$model->url]) ?>

                                <!--  Comentarios-->
                                <?= MfoViewWidget::widget(['type' => 'reviews_mfo_view','model' => $model]) ?>
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