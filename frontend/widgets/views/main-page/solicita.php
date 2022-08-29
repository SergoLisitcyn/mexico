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
        <div class="credit-items__item">
            <div class="credit-items__image">
                <img src="<?= $sol->image ?>" alt="<?= $sol->alt ?>">
            </div>
            <p class="credit-items__text"><?= $sol->text ?></p>
        </div>
    <?php endforeach; ?>
<!--        <div class="credit-items__item">-->
<!--            <div class="credit-items__image">-->
<!--                <img src="/img/main-sect/main-sect-icon-2.svg" alt="main-sect-icon">-->
<!--            </div>-->
<!--            <p class="credit-items__text">Prestamos <br> rapidos</p>-->
<!--        </div>-->
<!--        <div class="credit-items__item">-->
<!--            <div class="credit-items__image">-->
<!--                <img src="/img/main-sect/main-sect-icon-3.svg" alt="main-sect-icon">-->
<!--            </div>-->
<!--            <p class="credit-items__text">Prestamos <br> en linea sin buro</p>-->
<!--        </div>-->
<!--        <div class="credit-items__item">-->
<!--            <div class="credit-items__image">-->
<!--                <img src="/img/main-sect/main-sect-icon-4.svg" alt="main-sect-icon">-->
<!--            </div>-->
<!--            <p class="credit-items__text">Prestamos <br> personales urgentes</p>-->
<!--        </div>-->
    </div>
</div>
<?php endif; ?>