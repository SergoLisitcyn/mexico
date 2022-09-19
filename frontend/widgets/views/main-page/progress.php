<!--Progress-->
<?php if($info->progress_status == 1 && $blockManagement->status == 1) : ?>
<section class="main__achievements achievements">
    <div class="container">
        <?php if($blockManagement->title) : ?>
            <h2 class="achievements__title title"><?= $blockManagement->title ?></h2>
        <?php endif; ?>
        <?php if($blockManagement->sub_title) : ?>
            <h3 class="achievements__subtitle subtitle"><?= $blockManagement->sub_title ?></h3>
        <?php endif; ?>
        <?php if($info->progress_value) : ?>
            <div class="achievements__number"><?= $info->progress_value ?></div>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>