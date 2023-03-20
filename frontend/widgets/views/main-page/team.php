<!--Team-->
<?php if($teams && $blockManagement->status == 1) : ?>
<section class="main__staff staff">
    <div class="container">
        <?php if($blockManagement->title) : ?>
            <h2 class="staff__title title staff__title--visible-mobile">Nuestro equipo</h2>
        <?php endif; ?>
        <div class="staff__row background-set">
            <?php if($blockManagement->sub_title) : ?>
                <h2 class="staff__title title staff__title--hidden-desktop"><?= $blockManagement->sub_title ?></h2>
            <?php endif; ?>
            <div class="staff__columns">
            <?php foreach ($teams as $team) : ?>
                <div class="staff__column">
                    <img src="<?= $team['image'] ?>" alt="<?= $team['name'] ?>" class="staff__image">
                    <div class="staff__info">
                        <div class="staff__name"><?= $team['name'] ?></div>
                        <p class="staff__descr"><?= $team['text'] ?></p>
                        <div class="staff__socials">
                            <?php if($team['facebook']) : ?>
                                <a href="//<?= $team['facebook'] ?>" target="_blank" class="staff__link">
                                    <img src="/img/social/facebook.svg" alt="facebook" class="staff__social staff__social--facebook">
                                </a>
                            <?php endif; ?>
                            <?php if($team['instagram']) : ?>
                                <a href="//<?= $team['instagram'] ?>" target="_blank"  class="staff__link">
                                    <img src="/img/social/instagram.svg" alt="instagram" class="staff__social staff__social--instagram">
                                </a>
                            <?php endif; ?>
                            <?php if($team['twitter']) : ?>
                                <a href="//<?= $team['twitter'] ?>" target="_blank"  class="staff__link">
                                    <img src="img/social/twitter.svg" alt="twitter" class="staff__social staff__social--twitter">
                                </a>
                            <?php endif; ?>
                            <?php if($team['linkedin']) : ?>
                                <a href="//<?= $team['linkedin'] ?>" target="_blank"  class="staff__link">
                                    <img src="img/social/linkedin.svg" alt="linkedin" class="staff__social staff__social--twitter">
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>