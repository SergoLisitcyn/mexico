<div class="container">
    <ul class="sf-menu">
        <li><a href="/prestamos_personales_urgentes">Prestamos personales urgentes</a></li>
        <li><a href="/prestamos_rapidos">Prestamos rapidos</a></li>
        <li><a href="/prestamos_en_linea_sin_buro">Prestamos en linea sin buró</a></li>
        <li><a href="/prestamos_en_linea">Prestamos en linea</a></li>
        <li><a href="/p2p">Préstamos P2P</a></li>
        <li><a href="/corredores">Intermediarios Financieros</a></li>
        <?php foreach ($menus as $menu) :?>
            <li class="menu-top-desktop">
                <a href="<?= $menu->link; ?>">
                    <?= $menu->name; ?>
                </a>
            </li>
        <?php endforeach; ?>
<!--        <li>-->
<!--            <a href="#">Еще</a>-->
<!--            <ul>-->
<!--                --><?php // foreach ($menus as $menu) :?>
<!--                <li>-->
<!--                    <a href="--><?php //$menu->link; ?><!--">-->
<!--                        --><?php //$menu->name; ?>
<!--                    </a>-->
<!--                </li>-->
<!--                --><?php //endforeach; ?>
<!--            </ul>-->
<!--        </li>-->
        <li class="phone"><a href="tel:+525590630252">+ 52 55 90 63 02 52</a></li>
    </ul>
</div>