<?php
use yii\helpers\Url;
?>
<div class="rating-sidebar">
    <div class="rating-sidebar__row background-set">
        <h2 class="rating-sidebar__title title sidebar-title">Rating calificación</h2>
        <div class="rating-sidebar__repute repute">
            <div class="repute__rating">
                <img class="repute__rating-image" src="/img/stars.svg" alt="stars">
                <div class="repute__rating-number"><?= $model->rating ?></div>
            </div>
            <div class="repute__comments">
                Leer <a href="<?= Url::toRoute(['mfo/reviews', 'url' => $model->url]) ?>" class="repute__comments-link">25 comentarios</a>
            </div>
        </div>
        <ul class="rating-sidebar__list">
            <?php if($mfoRating && $mfoRating['interes_costes_rate']) :?>
            <li class="rating-sidebar__item">
                <div class="rating-sidebar__text">Interés & Costes</div>
                <div class="rating-sidebar__rating">
                    <div class="rating__stars" style="width:<?= $mfoRating['interes_costes_rate'] ?>%"></div>
                    <!--                                        <img class="rating-sidebar__rating-image" src="/img/stars.svg" alt="stars">-->
                    <div class="rating-sidebar__rating-number"><?= $mfoRating['interes_costes'] ?></div>
                </div>
            </li>
            <?php endif; ?>
            <?php if($mfoRating && $mfoRating['condiciones_rate']) :?>
            <li class="rating-sidebar__item">
                <div class="rating-sidebar__text">Condiciones</div>
                <div class="rating-sidebar__rating">
                    <div class="rating__stars" style="width:<?= $mfoRating['condiciones_rate'] ?>%"></div>
                    <!--                                        <img class="rating-sidebar__rating-image" src="/img/stars.svg" alt="stars">-->
                    <div class="rating-sidebar__rating-number"><?= $mfoRating['condiciones'] ?></div>
                </div>
            </li>
            <?php endif; ?>
            <?php if($mfoRating && $mfoRating['atencion']) :?>
            <li class="rating-sidebar__item">
                <div class="rating-sidebar__text">Atención al cliente</div>
                <div class="rating-sidebar__rating">
                    <div class="rating__stars" style="width:<?= $mfoRating['atencion_rate'] ?>%"></div>
                    <!--                                        <img class="rating-sidebar__rating-image" src="/img/stars.svg" alt="stars">-->
                    <div class="rating-sidebar__rating-number"><?= $mfoRating['atencion'] ?></div>
                </div>
            </li>
            <?php endif; ?>
            <?php if($mfoRating && $mfoRating['funcionalidad']) :?>
            <li class="rating-sidebar__item">
                <div class="rating-sidebar__text">Funcionalidad</div>
                <div class="rating-sidebar__rating">
                    <div class="rating__stars" style="width:<?= $mfoRating['funcionalidad_rate'] ?>%"></div>
                    <!--                                        <img class="rating-sidebar__rating-image" src="/img/stars.svg" alt="stars">-->
                    <div class="rating-sidebar__rating-number"><?= $mfoRating['funcionalidad'] ?></div>
                </div>
            </li>
            <?php endif; ?>
        </ul>
    </div>
</div>