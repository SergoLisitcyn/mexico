<?php
?>
<!--Solicita-->
<?php if($blockManagement->status == 1 && $sols) : ?>
<div class="container">
    <?php if($blockManagement->title) : ?>
        <h1 class="main-sect__title main-title"><?= $blockManagement->title ?></h1>
    <?php endif; ?>
    <?php if($blockManagement->sub_title) : ?>
        <h3 class="main-sect__subtitle subtitle"><?= $blockManagement->sub_title ?></h3>
    <?php endif; ?>

    <div class="main-sect__items credit-items">
    <?php foreach ($sols as $sol) : ?>
        <a href="<?php if($sol->url) { echo $sol->url; }  ?>" style="text-decoration: none">
            <div class="credit-items__item">
                <div class="credit-items__image">
                    <img src="<?= $sol->image ?>" alt="<?= $sol->alt ?>">
                </div>
                <p class="credit-items__text"><?= $sol->text ?></p>
            </div>
        </a>
    <?php endforeach; ?>
    </div>
</div>
<?php endif; ?>