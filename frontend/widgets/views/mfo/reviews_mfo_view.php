<?php if($reviews) : ?>
<div class="tabs-content__comments-sect comments-sect">
    <h2 class="comments-sect__title title">Comentarios sobre <?= $model->name ?></h2>
    <div class="comments-sect__slider comments-block comments-slider background-set">
        <?php foreach ($reviews as $review) :
            $reviewRating = ($review->costs + $review->conditions + $review->support + $review->functionality) / 4;
            $reviewStar= (100 *  $reviewRating)/5;
            ?>
        <div class="comments-block__item">
            <div class="comments-block__data">
                <div class="comments-block__date"><?= date('d.m.Y', $review->created_at) ?></div>
                <div class="rating-sidebar__rating">
                    <div class="rating__stars" style="width:<?= $reviewStar ?>%"></div>
                    <!--                                        <img class="rating-sidebar__rating-image" src="/img/stars.svg" alt="stars">-->
                    <div class="rating-sidebar__rating-number"><?= $reviewRating ?></div>
                </div>
<!--                <div class="comments-block__rating">-->
<!--                    <div class="rating__stars" style="width:--><?php //= $reviewStar ?><!--"></div>-->
<!--                    <span class="comments-block__rating-number">--><?php //= $reviewRating ?><!--</span>-->
<!--                </div>-->
            </div>
            <div class="comments-block__info">
                <?php if($review->name) : ?>
                <div class="comments-block__info-name"><?= $review->name ?></div>
                <?php endif; ?>
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
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?php endif; ?>