<!--Partners-->
<?php if($blockManagement->status == 1 && $sols) : ?>
    <section class="main__employees employees">
        <div class="employees__container container">
            <?php if($blockManagement->title) : ?>
                <h2 class="employees__title title"><?= $blockManagement->title ?></h2>
            <?php endif; ?>
            <?php if($blockManagement->sub_title) : ?>
                <h3 class="main-sect__subtitle subtitle"><?= $blockManagement->sub_title ?></h3>
            <?php endif; ?>
            <div class="employees-slider">
                <?php foreach ($sols as $sol) :  ?>
                    <div class="employees-slider__item">
                        <?php if($sol->url) : ?>
                        <a href="<?= $sol->url ?>" target="_blank">
                            <img class="employees-slider__image" src="<?= $sol->image ?>" alt="<?= $sol->alt ?>">
                        </a>
                        <?php else: ?>
                            <img class="employees-slider__image" src="<?= $sol->image ?>" alt="<?= $sol->alt ?>">
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
