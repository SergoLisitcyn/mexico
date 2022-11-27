<!--Progress-->
<?php if($info->progress_status == 1 && $blockManagement->status == 1 && $info->work) : ?>
<section class="main__achievements achievements">
    <div class="container">
        <?php if($blockManagement->title) : ?>

            <h2 class="achievements__title title"><?= $blockManagement->title ?></h2>
        <?php endif; ?>
        <?php foreach ($info->work as $work) :
        if($work['name'] == 'prestamos') {
            $text = str_replace('{value}', $countZaim, $work['text']);
        }
        if($work['name'] == 'empresas') {
            $text = str_replace('{value}', $mfoCount, $work['text']);
        }
        if($work['name'] == 'opinion') {
            $text = str_replace('{value}', $reviewsCount, $work['text']);
        }
        ?>
       <?php if($blockManagement->sub_title) : ?>
            <h3 class="achievements__subtitle subtitle"><?= $text ?></h3>
        <?php endif; ?>
        <?php endforeach; ?>
        <?php if($blockManagement->sub_title) : ?>
<!--            <h3 class="achievements__subtitle subtitle">--><?php //$blockManagement->sub_title ?><!--</h3>-->
        <?php endif; ?>
        <?php if($info->progress_value) : ?>
<!--            <div class="achievements__number">--><?php //$info->progress_value ?><!--</div>-->
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>