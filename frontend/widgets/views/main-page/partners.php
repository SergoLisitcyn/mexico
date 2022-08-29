<!--Partners-->
<?php if($blockManagement->status == 1 && $sols) : ?>
    <section class="main__employees employees">
        <div class="employees__container container">
            <?php if($blockManagement->title) : ?>
                <h2 class="employees__title title"><?= $blockManagement->title ?></h2>
            <?php endif; ?>

            <div class="employees__companies">
                <?php foreach ($sols as $sol) : ?>
                    <img class="employees__image" src="<?= $sol->image ?>" alt="<?= $sol->alt ?>">
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>