<!--About-->
<?php if($blockManagement->status == 1 && $sols) : ?>
<section class="main__about-us about-us">
    <div class="about-us__container container">
        <?php if($blockManagement->title) : ?>
            <h2 class="about-us__title title"><?= $blockManagement->title ?></h2>
        <?php endif; ?>
        <?php if($blockManagement->sub_title) : ?>
            <h3 class="main-sect__subtitle subtitle"><?= $blockManagement->sub_title ?></h3>
        <?php endif; ?>

        <div class="about-us-slider">
            <?php foreach ($sols as $sol) : ?>
            <div class="about-us-slider__item">
                <img class="about-us-slider__image" src="<?= $sol->image ?>" alt="<?= $sol->alt ?>">
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>
