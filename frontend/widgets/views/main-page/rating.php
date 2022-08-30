<?php
use yii\helpers\Url;
?>
<!--Rating-->
<section class="main__entities entities">
    <div class="container">
        <div class="entities__row background-set">
            <h2 class="entities__title title">TOP 3 Entidades</h2>
            <ul class="entities__list">
                <?php foreach ($mfo as $item) : ?>
                <li class="entities__item">
                    <div class="entities__logo">
                        <img src="<?= $item['logo'] ?>" alt="<?= $item['name'] ?>">
                    </div>
                    <div class="entities__repute repute">
                        <div class="repute__rating">
                            <img class="repute__rating-image" src="/img/stars.svg" alt="stars">
                            <div class="repute__rating-number"><?= $item['rating'] ?></div>
                        </div>
                        <div class="repute__comments">
                            Leer <a href="<?= Url::toRoute(['mfo/reviews', 'url' => $item['url']]) ?>" class="repute__comments-link"><?= $item['reviews_count'] ?> comentarios</a>
                        </div>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>