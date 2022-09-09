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
        <li class="phone"><a href="tel:+78003334788">8-800-333-47-88</a></li>
    </ul>
</div>