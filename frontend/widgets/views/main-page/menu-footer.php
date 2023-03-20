<div class="footer__lists">
    <ul class="footer__list">
        <?php foreach ($menus as $menu) :?>
            <li class="footer__item">
                <?php if($menu->link == '#faq_main') : ?>
                <a href="/<?= $menu->link; ?>"  class="footer__link">
                <?php else: ?>
                <a href="<?= $menu->link; ?>"  class="footer__link">
                <?php endif; ?>

                    <?= $menu->name; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>