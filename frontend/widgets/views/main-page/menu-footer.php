<ul class="footer-list footer-list__menu">
    <?php foreach ($menus as $menu) :?>
        <li class="footer-list__item">
            <a href="<?= $menu->link; ?>"  class="footer-list__link">
                <?= $menu->name; ?></a>
        </li>
    <?php endforeach; ?>
</ul>