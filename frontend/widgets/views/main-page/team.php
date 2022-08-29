<!--Team-->
<section class="main__team team">
    <div class="container">
        <div class="team__row background-set">
            <h2 class="team__title title">Наша команда</h2>
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
