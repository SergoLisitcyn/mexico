<?php

use frontend\widgets\MfoViewWidget;
use yii\helpers\Url;
use kartik\rating\StarRating;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
$title = 'Deje su opinión sobre la empresa '.$mfo->url;
if($reviewsCount > 0){
    $title = 'Leer '.$reviewsCount.' comentarios de clientes de '.$mfo->url.' en Finjenios.com.mx';
}
$this->title = $title;
$description = 'Antes de convertirte en cliente de '.$mfo->url.', lee las opiniones de clientes reales en Finjenios.com.mx';
$this->registerMetaTag(['name' => 'description','content' => $description]);
?>
<div class="main__page-info">
    <div class="container">
        <div class="main__breadcrumbs breadcrumbs">
            <ul class="breadcrumbs__items">
                <li class="breadcrumbs__item">
                    <a href="/" class="breadcrumbs__link">Inicio</a>
                </li>
                <li class="breadcrumbs__item">
                    <a href="<?= Url::toRoute(['mfo/view', 'url' => $mfo->url]) ?>" class="breadcrumbs__link"><?= $mfo->data['meta_tags']['h1'] ?></a>
                </li>
                <li class="breadcrumbs__item">
                    Comentarios sobre <?= $mfo->data['meta_tags']['h1'] ?>
                </li>
            </ul>
        </div>
        <h1 class="main__title main-title">Comentarios sobre <?= $mfo->data['meta_tags']['h1'] ?></h1>
    </div>
</div>
<div class="content">
    <div class="container">
        <?php if( Yii::$app->session->hasFlash('successReviews') ): ?>
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?php echo Yii::$app->session->getFlash('successReviews'); ?>
            </div>
        <?php endif;?>
        <div class="content__block">
            <div class="content__row">
                <section class="content__comments-sect comments-sect" style="margin-bottom: 30px">
                    <?php foreach ($reviews as $review) :
                        $reviewRating = ($review->costs + $review->conditions + $review->support + $review->functionality) / 4;
                        $reviewStar= (100 *  $reviewRating)/5;
                        $reviewStarCosts = (100 *  $review->costs)/5;
                        $reviewStarConditions = (100 *  $review->conditions)/5;
                        $reviewStarSupport = (100 *  $review->support)/5;
                        $reviewStarFunctionality = (100 *  $review->functionality)/5;
                        ?>
                    <div class="content__comments-block comments-block background-set">
                        <div class="comments-block__item">
                            <div class="comments-block__data">
                                <div class="comments-block__date"><?= date('d.m.Y', $review->created_at) ?></div>
                                <div class="rating-sidebar__rating">
                                    <div class="rating__stars" style="width:<?= $reviewStar ?>%"></div>
                                    <div class="rating-sidebar__rating-number"><?= $reviewRating ?></div>
                                </div>
                            </div>
                            <div class="rating__value">
                                <ul class="rating__value-list">
                                    <li class="rating__value-item">
                                        <div class="rating__value-title">Interés & Costes</div>
                                        <div class="rating-sidebar__rating">
                                            <div class="rating__stars" style="width:<?= $reviewStarCosts ?>%"></div>
                                            <div class="rating-sidebar__rating-number"><?= $review->costs ?></div>
                                        </div>
                                    </li>
                                    <li class="rating__value-item">
                                        <div class="rating__value-title">Condiciones</div>
                                        <div class="rating-sidebar__rating">
                                            <div class="rating__stars" style="width:<?= $reviewStarConditions ?>%"></div>
                                            <div class="rating-sidebar__rating-number"><?= $review->conditions ?></div>
                                        </div>
                                    </li>
                                    <li class="rating__value-item">
                                        <div class="rating__value-title">Atención al cliente</div>
                                        <div class="rating-sidebar__rating">
                                            <div class="rating__stars" style="width:<?= $reviewStarSupport ?>%"></div>
                                            <div class="rating-sidebar__rating-number"><?= $review->support ?></div>
                                        </div>
                                    </li>
                                    <li class="rating__value-item">
                                        <div class="rating__value-title">Funcionalidad</div>
                                        <div class="rating-sidebar__rating">
                                            <div class="rating__stars" style="width:<?= $reviewStarFunctionality ?>%"></div>
                                            <div class="rating-sidebar__rating-number"><?= $review->functionality ?></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="comments-block__info">
                                <div class="comments-block__info-name"><?= $review->name ?></div>
                                <p class="comments-block__info-text"><?= $review->body ?></p>
                                <div class="comments-block__descr">
                                    <?php if($review->plus) : ?>
                                    <div class="comments-block__descr-title">Ventajas</div>
                                    <p class="comments-block__descr-text"><?= $review->plus ?></p>
                                    <?php endif; ?>
                                    <?php if($review->minus) : ?>
                                    <div class="comments-block__descr-title">Desventajas</div>
                                    <p class="comments-block__descr-text"><?= $review->minus ?></p>
                                    <?php endif; ?>
                                    <?php if ($review->recommendation == 1) : ?>
                                        <label class="main-form__checkbox">
                                            <input type="checkbox" checked disabled>
                                            <span class="main-form__checkbox-text">Recomendacion</span>
                                        </label>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <div class="content__reviews-form reviews-form background-set">
                        <h2 class="reviews__title title">Tu opinión <?= $mfo->data['meta_tags']['h1'] ?></h2>
                        <?php
                        $form = ActiveForm::begin(
                            [
                                'action' =>['entidad/'.$mfo->url.'/reviews'],
                                'options' => [
                                    'class' => 'main-form',
                                    'id' => 'review'
                                ]
                            ]
                        ); ?>
                        <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
                        <input type="hidden" id="review-cat_id" name="Reviews[mfo_id]" value="<?= $mfo->id ?>"/>
                        <input type="hidden" id="review-cat_id" name="Reviews[status]" value="0"/>
                        <ul class="main-form__rating-list rating-list">
                            <li class="rating-list__item">
                                <div class="rating-list__title">
                                    Interés & Costes
                                </div>
                                <?php
                                echo $form->field($reviewsModel, 'costs')->label(false)->widget(StarRating::classname(), [
                                    'pluginOptions' => [
                                        'step' => 1,
                                        'showClear' => false,
                                        'showCaption' => false,
//                                        'filledStar' => '<span class="rating-stars__filled"></span>',
//                                        'emptyStar' => '<span class="rating-stars__empty"></span>',
                                    ],
                                ]);
                                ?>
                            </li>
                            <li class="rating-list__item">
                                <div class="rating-list__title">
                                    Condiciones
                                </div>
                                <?php
                                echo $form->field($reviewsModel, 'conditions')->label(false)->widget(StarRating::classname(), [
                                    'pluginOptions' => [
                                        'step' => 1,
                                        'showClear' => false,
                                        'showCaption' => false,
//                                        'filledStar' => '<span class="filled-stars"></span>',
//                                        'emptyStar' => '<span class="star"></span>',
                                    ],
                                ]);
                                ?>
                            </li>
                            <li class="rating-list__item">
                                <div class="rating-list__title">
                                    Atención al cliente
                                </div>
                                <?php
                                echo $form->field($reviewsModel, 'support')->label(false)->widget(StarRating::classname(), [
                                    'pluginOptions' => [
                                        'step' => 1,
                                        'showClear' => false,
                                        'showCaption' => false,
//                                        'filledStar' => '<span class="rating-stars__filled"></span>',
//                                        'emptyStar' => '<span class="rating-stars__empty"></span>',
                                    ],
                                ]);
                                ?>
                            </li>
                            <li class="rating-list__item">
                                <div class="rating-list__title">
                                    Funcionalidad
                                </div>
                                <?php
                                echo $form->field($reviewsModel, 'functionality')->label(false)->widget(StarRating::classname(), [
                                    'pluginOptions' => [
                                        'step' => 1,
                                        'showClear' => false,
                                        'showCaption' => false,
//                                        'filledStar' => '<span class="rating-stars__filled"></span>',
//                                        'emptyStar' => '<span class="rating-stars__empty"></span>',
                                    ],
                                ]);
                                ?>
                            </li>
                        </ul>
                        <div class="main-form__box">
                            <?= $form->field($reviewsModel, 'name')->textInput(['class' => 'main-form__input main-form__input--person','placeholder' => "Name"])->label(false) ?>
                            <?= $form->field($reviewsModel, 'email')->textInput(['class' => 'main-form__input main-form__input--person','placeholder' => "E-mail"])->label(false) ?>
                        </div>
                        <?= $form->field($reviewsModel, 'body')->textInput(['class' => 'main-form__input','placeholder' => "Danos tu opinión"])->label(false) ?>
                        <?= $form->field($reviewsModel, 'plus')->textInput(['class' => 'main-form__input','placeholder' => "Ventajas"])->label(false) ?>
                        <?= $form->field($reviewsModel, 'minus')->textInput(['class' => 'main-form__input','placeholder' => "Desventajas"])->label(false) ?>
                        <label class="main-form__checkbox">
                            <input type="checkbox" name="Reviews[recommendation]">
                            <span class="main-form__checkbox-text">Recomendacion</span>
                        </label>
                        <?= Html::submitButton('Danos tu opinión', ['class' => 'main-form__button button button--primary']) ?>
                        <?php ActiveForm::end(); ?>
                    </div>
                </section>
                <sidebar class="sidebar">
                    <!--   Rating calificación -->
                    <?= MfoViewWidget::widget(['type' => 'rating','model' => $mfo]) ?>
                    <!--   TOP 3 Entidades-->
                    <?= MfoViewWidget::widget(['type' => 'top_entidades','model' => $mfo]) ?>
                </sidebar>
            </div>
        </div>
    </div>
</div>