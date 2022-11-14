<?php
use yii\helpers\Url;
?>
<div class="rating-sidebar">
    <div class="rating-sidebar__row background-set">
        <h2 class="rating-sidebar__title title sidebar-title">Nuestra calificación</h2>
        <div class="rating-sidebar__repute repute">
            <div class="repute__rating">
                <img class="repute__rating-image" src="/img/stars.svg" alt="stars">
                <div class="repute__rating-number"><?= $model->rating_auto['rating']['allRating'] ?></div>
            </div>
<!--            <div class="repute__comments">-->
<!--                Leer <a href="--><?php //Url::toRoute(['mfo/reviews', 'url' => $model->url]) ?><!--" class="repute__comments-link">25 comentarios</a>-->
<!--            </div>-->
        </div>
        <ul class="rating-sidebar__list">
            <?php if($model->rating_auto['rating'] && $model->rating_auto['rating']['interes_costes_rate']) :?>
            <li class="rating-sidebar__item">
                <div class="rating-sidebar__text">Interés & Costes</div>
                <div class="rating-sidebar__rating">
                    <div class="rating__stars" style="width:<?= $model->rating_auto['rating']['interes_costes_rate'] ?>%"></div>
                    <!--                                        <img class="rating-sidebar__rating-image" src="/img/stars.svg" alt="stars">-->
                    <div class="rating-sidebar__rating-number"><?= $model->rating_auto['rating']['interes_costes'] ?></div>
                </div>
            </li>
            <?php endif; ?>
            <?php if($model->rating_auto['rating'] && $model->rating_auto['rating']['condiciones_rate']) :?>
            <li class="rating-sidebar__item">
                <div class="rating-sidebar__text">Condiciones</div>
                <div class="rating-sidebar__rating">
                    <div class="rating__stars" style="width:<?= $model->rating_auto['rating']['condiciones_rate'] ?>%"></div>
                    <!--                                        <img class="rating-sidebar__rating-image" src="/img/stars.svg" alt="stars">-->
                    <div class="rating-sidebar__rating-number"><?= $model->rating_auto['rating']['condiciones'] ?></div>
                </div>
            </li>
            <?php endif; ?>
            <?php if($model->rating_auto['rating'] && $model->rating_auto['rating']['atencion']) :?>
            <li class="rating-sidebar__item">
                <div class="rating-sidebar__text">Atención al cliente</div>
                <div class="rating-sidebar__rating">
                    <div class="rating__stars" style="width:<?= $model->rating_auto['rating']['atencion_rate'] ?>%"></div>
                    <!--                                        <img class="rating-sidebar__rating-image" src="/img/stars.svg" alt="stars">-->
                    <div class="rating-sidebar__rating-number"><?= $model->rating_auto['rating']['atencion'] ?></div>
                </div>
            </li>
            <?php endif; ?>
            <?php if($model->rating_auto['rating'] && $model->rating_auto['rating']['funcionalidad']) :?>
            <li class="rating-sidebar__item">
                <div class="rating-sidebar__text">Funcionalidad</div>
                <div class="rating-sidebar__rating">
                    <div class="rating__stars" style="width:<?= $model->rating_auto['rating']['funcionalidad_rate'] ?>%"></div>
                    <!--                                        <img class="rating-sidebar__rating-image" src="/img/stars.svg" alt="stars">-->
                    <div class="rating-sidebar__rating-number"><?= $model->rating_auto['rating']['funcionalidad'] ?></div>
                </div>
            </li>
            <li class="offer-dropdown__repute-item">
                <a href="/review-information" class="offer-dropdown__repute-link">Información precisa</a>
            </li>
            <?php endif; ?>
        </ul>
    </div>
</div>