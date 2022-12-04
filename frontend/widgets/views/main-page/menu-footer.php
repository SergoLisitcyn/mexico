<div class="footer__lists">
    <ul class="footer__list">
        <?php foreach ($menus as $menu) :?>
            <li class="footer__item">
                <a href="<?= $menu->link; ?>"  class="footer__link">
                    <?= $menu->name; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>