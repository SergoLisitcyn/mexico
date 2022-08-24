<?php if($blockManagement->status == 1 && $sols) : ?>
<section class="main__about-us about-us">
    <div class="about-us__container container">
        <?php if($blockManagement->title) : ?>
            <h2 class="about-us__title title"><?= $blockManagement->title ?></h2>
        <?php endif; ?>

        <div class="about-us__companies">
            <?php foreach ($sols as $sol) : ?>
                <img class="about-us__image" src="<?= $sol->image ?>" alt="<?= $sol->alt ?>">
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>