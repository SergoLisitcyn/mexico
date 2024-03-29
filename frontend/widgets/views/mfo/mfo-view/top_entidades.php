<?php
use yii\helpers\Url;
?>
<div class="entities entities-sidebar">
    <div class="entities__row background-set">
        <h2 class="entities__title title sidebar-title">TOP 3 Entidades</h2>
        <ul class="entities__list">
            <?php foreach ($mfo as $item) : ?>
                <li class="entities__item">
                    <div class="entities__logo">
                        <a href="<?= Url::toRoute(['mfo/view', 'url' => $item['url']]) ?>">
                            <img src="<?= $item['logo'] ?>" alt="<?= $item['name'] ?>">
                        </a>
                    </div>
                    <div class="entities__repute repute">
                        <?php if(isset($item['rating_auto']))  : ?>
                        <div class="repute__rating">
<!--                            <img class="repute__rating-image" src="/img/stars.svg" alt="stars">-->
<!--                            <div class="repute__rating-number">--><?php //= $item['rating'] ?><!--</div>-->
                            <div class="rating__stars_similar" style="width:<?= $item['rating_auto']['rating']['allRating_rate'] ?>%"></div>
                            <span class="offer-dropdown__repute-number"><?= $item['rating_auto']['rating']['allRating'] ?></span>
                        </div>
                        <?php endif; ?>
                        <div class="repute__comments">
                            <?php if($item['reviews_count'] > 0) : ?>
                                Leer <a href="<?= Url::toRoute(['mfo/reviews', 'url' => $item['url']]) ?>" class="repute__comments-link"><?= $item['reviews_count'] ?> comentarios</a>
                            <?php else: ?>
                                <a href="<?= Url::toRoute(['mfo/reviews', 'url' => $item['url']]) ?>" class="repute__comments-link">Danos tu opinión
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>