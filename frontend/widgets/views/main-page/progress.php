<!--Progress-->
<?php if($info->progress_status == 1 && $blockManagement->status == 1 && $info->work) : ?>
    <section class="main__block-checkbox block-checkbox">
        <div class="container">
            <div class="block-checkbox__row background-set">
                <?php if($blockManagement->title) : ?>
                    <h2 class="block-checkbox__title title"><?= $blockManagement->title ?></h2>
                <?php endif; ?>
                <ul class="block-checkbox__list">
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
                        <li class="block-checkbox__item"><?= $text ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </section>
<?php endif; ?>