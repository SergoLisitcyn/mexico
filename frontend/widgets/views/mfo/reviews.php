<?php

use kartik\rating\StarRating;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
$title = $model->name;
if(isset($model->data['meta_tags']['h1'])){
    $title = $model->data['meta_tags']['h1'];
}
?>
<div class="tabs-content__reviews reviews">
    <div class="reviews__poll background-set">
        <h2 class="reviews__title title">Tu opinión <?= $title ?></h2>
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
                $('.reviews-modal__overlay').fadeIn(400, 
			function() { 
				$('.reviews-modal')
				.css('display', 'block')
				.animate({opacity: 1, top: '50%'}, 200);
		});
        }"
                ]
            ]);
            ?>
        </div>
    </div>
    <div class="reviews-modal reviews-form background-set">
        <div class="reviews-modal__close">
            <span></span>
            <span></span>
        </div>
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
<!--                    <div class="rating-stars">-->
                        <?php
                        echo $form->field($reviewsModel, 'costs')->label(false)->widget(StarRating::classname(), [
                            'pluginOptions' => [
                                'step' => 1,
                                'showClear' => false,
                                'showCaption' => false,
                            ],
                        ]);
                        ?>
<!--                    </div>-->
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
                        ],
                    ]);
                    ?>
                </li>
                <li class="rating-list__item">
                    <div class="rating-list__title">
                        Funcionalidad
                    </div>
<!--                    <div class="rating-stars">-->
                        <?php
                        echo $form->field($reviewsModel, 'functionality')->label(false)->widget(StarRating::classname(), [
                            'pluginOptions' => [
                                'step' => 1,
                                'showClear' => false,
                                'showCaption' => false,
                            ],
                        ]);
                        ?>
<!--                    </div>-->
                </li>
            </ul>
        <div class="main-form__box">
            <input class="main-form__input main-form__input--person" name="Reviews[name]" placeholder="Name"></input>
            <input class="main-form__input main-form__input--person" name="Reviews[email]" placeholder="E-mail"></input>
        </div>
        <?= $form->field($reviewsModel, 'body')->textarea(['class' => 'main-form__input','placeholder' => "Danos tu opinión"])->label(false) ?>
        <?= $form->field($reviewsModel, 'plus')->textarea(['class' => 'main-form__input','placeholder' => "Ventajas"])->label(false) ?>
        <?= $form->field($reviewsModel, 'minus')->textarea(['class' => 'main-form__input','placeholder' => "Desventajas"])->label(false) ?>
        <?= $form->field($reviewsModel, 'recommendation')->checkbox(['value' => 1, 'uncheck' => 0])?>
        <?= Html::submitButton('Danos tu opinión', ['class' => 'main-form__button button button--primary']) ?>
        <?php ActiveForm::end(); ?>
    </div>
    <div class="reviews-modal__overlay"></div>
</div>