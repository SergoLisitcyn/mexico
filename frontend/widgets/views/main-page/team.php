<!--Team-->
<?php if($teams && $blockManagement->status == 1) : ?>
<section class="main__team team">
    <div class="container">
        <div class="team__row background-set">
            <?php if($blockManagement->title) : ?>
                <h2 class="team__title title"><?= $blockManagement->title ?></h2>
            <?php endif; ?>
            <?php if($blockManagement->sub_title) : ?>
                <h3 class="main-sect__subtitle subtitle"><?= $blockManagement->sub_title ?></h3>
            <?php endif; ?>
            <div class="team__items">
                <?php foreach ($teams as $team) : ?>
                    <div class="team__item">
                        <div class="team__photo">
                            <img src="<?= $team['image'] ?>" alt="<?= $team['name'] ?>">
                        </div>
                        <div class="team__info">
                            <div class="team__name"><?= $team['name'] ?></div>
                            <p class="team__review"><?= $team['text'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>