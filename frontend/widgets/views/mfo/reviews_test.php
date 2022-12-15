<?php

use kartik\rating\StarRating;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<div class="tabs-content__reviews reviews">
    <?php if( Yii::$app->session->hasFlash('successReviews') ): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo Yii::$app->session->getFlash('successReviews'); ?>
        </div>
    <?php endif;?>
    <div class="reviews__poll background-set">
        <h2 class="reviews__title title">Оцените Credito</h2>
        <div class="rating-stars">
            <?php
            echo StarRating::widget([
                'name' => 'rating_full',
                'pluginOptions' => [
                    'step' => 1,
                    'showClear' => false,
                    'showCaption' => false,
//                'filledStar' => '<i class="fas fa-heart"></i>',
//                'emptyStar' => '<i class="fas fa-heart-empty"></i>',
                ],
                'pluginEvents' => [
                    'rating:change' => "function(event, value, caption){              
                $('#reviews-support').rating('update', value);
                $('#reviews-functionality').rating('update', value);
                $('#reviews-costs').rating('update', value);
                $('#reviews-conditions').rating('update', value);
                var modal = document.getElementById('myModal');
//                var span = document.getElementsByClassName('close')[0];
//                modal.style.display = 'block';
//                span.onclick = function() {
//                    modal.style.display = 'none';
//                }
//                window.onclick = function(event) {
//                    if (event.target == modal) {
//                        modal.style.display = 'none';
//                    }
//                }
        }"
                ]
            ]);
            ?>
        </div>
    </div>

</div>
<style>
    .modal {
        display: none; /* Скрыто по умолчанию */
        position: fixed; /* Оставаться на месте */
        z-index: 1; /* Сидеть на вершине */
        left: 0;
        top: 0;
        width: 100%; /* Полная ширина */
        height: 100%; /* Полная высота */
        overflow: auto; /* Включите прокрутку, если это необходимо */
        background-color: rgb(0,0,0); /* Цвет запасной вариант */
        background-color: rgba(0,0,0,0.4); /* Черный с непрозрачностью */
    }

    /* Модальное содержание/коробка */
    .modal-content {
        background-color: #fefefe;
        margin: 15% auto; /* 15% сверху и по центру */
        padding: 20px;
        border: 1px solid #888;
        width: 80%; /* Может быть больше или меньше, в зависимости от размера экрана */
    }

    /* Кнопка закрытия */
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
</style>
<div id="myModal" class="modal">

    <!-- Модальное содержание -->
<!--    <div class="modal-content reviews-form background-set">-->
<!--        <span class="close">&times;</span>-->
    <div class="reviews-modal reviews-form background-set">
        <div class="reviews-modal__close">
            <span></span>
            <span></span>
        </div>
        <h2 class="reviews-form__title title">Tu opinión</h2>
        <?php
        $form = ActiveForm::begin(
                [
                    'action' =>[$action],
                    'options' => [
                        'class' => 'main-form',
                        'id' => 'review'
                    ]
                ]
            ); ?>
        <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
        <input type="hidden" id="review-cat_id" name="Reviews[mfo_id]" value="<?= $model->id ?>"/>
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
//                    'filledStar' => '<span class="star-label star star--small star--active"></span>',
//                    'emptyStar' => '<span class="star-label star star--small"></span>',
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
//                        'filledStar' => '<span class="star-label star star--small star--active"></span>',
//                        'emptyStar' => '<span class="star-label star star--small"></span>',
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
//                    'filledStar' => '<span class="star-label star star--small star--active"></span>',
//                    'emptyStar' => '<span class="star-label star star--small"></span>',
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
//                    'filledStar' => '<span class="star-label star star--small star--active"></span>',
//                    'emptyStar' => '<span class="star-label star star--small"></span>',
                ],
            ]);
            ?>
            </li>
        </ul>
        <div class="main-form__box">
            <input class="main-form__input main-form__input--person" name="Reviews[name]" placeholder="Name"></input>
            <input class="main-form__input main-form__input--person" name="Reviews[email]" placeholder="E-mail"></input>
        </div>
        <?= $form->field($reviewsModel, 'body')->textarea(['class' => 'main-form__input','placeholder' => "Danos tu opinión"])->label(false) ?>
        <?= $form->field($reviewsModel, 'plus')->textarea(['class' => 'main-form__input','placeholder' => "Ventajas"])->label(false) ?>
        <?= $form->field($reviewsModel, 'minus')->textarea(['class' => 'main-form__input','placeholder' => "Desventajas"])->label(false) ?>

        <!--    <label class="reviews-form__checkbox">-->
        <!--        <input type="checkbox" name="">-->
        <!--        <span class="reviews-form__checkbox-text">Recomendacion</span>-->
        <!--    </label>-->
        <?= $form->field($reviewsModel, 'recommendation')->checkbox(['value' => 1, 'uncheck' => 0])?>
        <?= Html::submitButton('Danos tu opinión', ['class' => 'main-form__button button button--primary']) ?>
        <?php ActiveForm::end(); ?>
    </div>
    <div class="reviews-modal__overlay"></div>
</div>