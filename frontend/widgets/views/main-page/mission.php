<!--Mission-->
<?php if($info->mission_status == 1 && $info->mission && $blockManagement->status == 1) : ?>
<section class="main__block-checkbox block-checkbox">
    <div class="container">
        <div class="block-checkbox__row background-set">
            <?php if($blockManagement->title) : ?>
                <h2 class="block-checkbox__title title"><?= $blockManagement->title ?></h2>
            <?php endif; ?>
            <?php if($blockManagement->sub_title) : ?>
                <h3 class="main-sect__subtitle subtitle"><?= $blockManagement->sub_title ?></h3>
            <?php endif; ?>
            <ul class="block-checkbox__list">
                <?php foreach ($info->mission as $item) : ?>
                    <li class="block-checkbox__item"><?= $item ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>
<?php endif; ?>