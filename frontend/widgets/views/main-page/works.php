<section class="main__block-checkbox block-checkbox">
    <div class="container">
        <div class="block-checkbox__row background-set">
            <h2 class="block-checkbox__title title">Как мы работаем</h2>
            <ul class="block-checkbox__list">
                <?php foreach ($info->work as $item) : ?>
                    <li class="block-checkbox__item"><?= $item ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>