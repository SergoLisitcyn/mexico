<?php if($reviews) : ?>
<div class="tabs-content__comments-sect comments-sect">
    <h2 class="comments-sect__title title">Comentarios sobre <?= $model->name ?></h2>
    <div class="comments-sect__slider comments-block comments-slider background-set">
        <?php foreach ($reviews as $review) :?>
        <div class="comments-block__item">
            <div class="comments-block__data">
                <div class="comments-block__date"><?= date('d.m.Y', $review->created_at) ?></div>
                <div class="comments-block__rating">
                    <img class="comments-block__rating-img" src="/img/stars.svg" alt="stars">
                    <span class="comments-block__rating-number">4,4</span>
                </div>
            </div>
            <div class="comments-block__info">
                <div class="comments-block__info-name">Rocio Torres</div>
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