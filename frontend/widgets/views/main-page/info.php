<!--Info-->
<?php if($info->text_main_status == 1 && $info->text_main && $blockManagement->status == 1) : ?>
<section class="main__values values">
    <div class="container">

        <?php  if($blockManagement->title) : ?>
            <h2 class="values__title title"><?= $blockManagement->title ?></h2>
        <?php endif; ?>
        <?php if($blockManagement->sub_title) : ?>
            <h3 class="main-sect__subtitle subtitle"><?= $blockManagement->sub_title ?></h3>
        <?php endif; ?>
        <div class="values__descr">
            <?= $info->text_main ?>
        </div>
    </div>
</section>
<?php endif; ?>