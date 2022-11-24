<div class="container">
    <ul class="sf-menu">
        <li>
            <a href="#">Еще</a>
            <ul>
                <?php foreach ($menus as $menu) :?>
                <li>
                    <a href="<?= $menu->link; ?>">
                        <?= $menu->name; ?>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </li>
        <li class="phone"><a href="tel:+525590630252">+ 52 55 90 63 02 52</a></li>
    </ul>
</div>