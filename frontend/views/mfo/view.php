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
<!--                    <img class="repute__rating-image" src="/img/stars.svg" alt="stars">-->
                    <div class="rating__stars_similar" style="width:<?= $model->rating_auto['rating']['allRating_rate'] ?>%;margin-right: 15px"></div>
                    <div class="repute__rating-number"><?= $model->rating_auto['rating']['allRating'] ?></div>
                </div>
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
                    <?= MfoViewWidget::widget(['type' => 'mfo_calculator','model' => $model,'procent' => $procent,'total' => $total]) ?>
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
                                <!--   Analysist -->
                                <?= MfoViewWidget::widget(['type' => 'analysist','model' => $model]) ?>
                                <!--   Offers -->
                                <?= MfoViewWidget::widget(['type' => 'similar_offers','model' => $model]) ?>

                            </div>
                            <div class="tabs-content__item" data-tab-content="2">
                                <!--  Características de la compañía -->
                                <?= MfoViewWidget::widget(['type' => 'characteristic','model' => $model->data]) ?>

                                <!--  Condiciones de préstamos -->
                                <?= MfoViewWidget::widget(['type' => 'condiciones','model' => $model->data['condiciones']]) ?>

                                <!--  Medios de disposición del crédito-->
                                <?= MfoViewWidget::widget(['type' => 'means','model' => $model->data['means']]) ?>

                                <!--   Métodos de pago-->
                                <?= MfoViewWidget::widget(['type' => 'payment_methods','model' => $model->data['payment_methods']]) ?>

                                <div class="tabs-content__box tabs-content-box">
                                    <div class="tabs-content-box__columns">
                                        <!--   La cuenta-->
                                        <?= MfoViewWidget::widget(['type' => 'account','model' => $model->data['account']]) ?>

                                        <!--   Atención al cliente-->
                                        <?= MfoViewWidget::widget(['type' => 'customer_support','model' => $model->data['customer_support']]) ?>

                                    </div>
                                </div>
                            </div>
                            <div class="tabs-content__item" data-tab-content="3">
                                <!--  Requisitos -->
                                <?= MfoViewWidget::widget(['type' => 'requisitos','model' => $model->data['requisitos']]) ?>

                                <!--   Datos de la compañia-->
                                <?= MfoViewWidget::widget(['type' => 'data_company','model' => $model->data['data_company']]) ?>

                                <div class="tabs-content__line line"></div>

                                <!--   Empresa matriz-->
                                <?= MfoViewWidget::widget(['type' => 'mother_company','model' => $model->data['mother_company']]) ?>

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