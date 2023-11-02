<?php if($teams) : ?>
<div class="entities entities-sidebar">
    <div class="entities__row background-set">
        <h2 class="entities__title title sidebar-title">Información verificada</h2>
        <ul class="entities__list">
            <?php foreach ($teams as $team) : ?>
                <li class="entities__item">
                    <div class="entities__logo">
                        <a href="/#faq_main">
                            <img src="<?= $team['image'] ?>" alt="<?= $team['name'] ?>" class="staff__image">
                        </a>
                    </div>
                    <div class="entities__repute repute">
                        <div class="repute__rating">
                            <p class="staff__descr"><b style="color: #000"><?= $team['name'] ?></b><br><span style="font-size: 14px"><?= $team['text'] ?></span></p>
                        </div>
                        <div class="repute__comments">
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
                                        <img src="/img/social/twitter.svg" alt="twitter" class="staff__social staff__social--twitter">
                                    </a>
                                <?php endif; ?>
                                <?php if($team['linkedin']) : ?>
                                    <a href="//<?= $team['linkedin'] ?>" target="_blank"  class="staff__link">
                                        <img src="/img/social/linkedin.svg" alt="linkedin" class="staff__social staff__social--twitter">
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
<?php endif; ?>