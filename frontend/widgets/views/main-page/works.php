<!--Works-->
<?php if($info->work_status == 1 && $info->work) : ?>
<section class="main__block-checkbox block-checkbox">
    <div class="container">
        <div class="block-checkbox__row background-set">
            <?php if($info->work_title) : ?>
                <h2 class="block-checkbox__title title"><?= $info->work_title ?></h2>
            <?php endif; ?>
            <ul class="block-checkbox__list">
                <?php foreach ($info->work as $item) : ?>
                    <li class="block-checkbox__item"><?= $item ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>
<?php endif; ?>