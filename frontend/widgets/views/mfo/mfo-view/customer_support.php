<div class="tabs-content-box__column">
    <div class="tabs-content-box__item">
        <div class="tabs-content-box__item-left">
            <h2 class="tabs-content-box__title title">Atención al cliente</h2>
        </div>
        <div class="tabs-content-box__item-right"></div>
    </div>
    <?php if(isset($model['terms_conditions']) && $model['terms_conditions'] != '-') : ?>
        <div class="tabs-content-box__item">
            <div class="tabs-content-box__item-left">
                <a href="//<?= $model['terms_conditions'] ?>" target="_blank" class="tabs-content-box__item-link">
                    <?= $mfoText['customer_support']['terms_conditions'] ?>
                </a>
            </div>
            <div class="tabs-content-box__item-right"></div>
        </div>
    <?php endif; ?>

    <?php if(isset($model['contact_form']) && $model['contact_form'] != '-') : ?>
        <div class="tabs-content-box__item">
            <div class="tabs-content-box__item-left">
                <a href="//<?= $model['contact_form'] ?>" target="_blank" class="tabs-content-box__item-link">
                    <?= $mfoText['customer_support']['contact_form'] ?>
                </a>
            </div>
            <div class="tabs-content-box__item-right"></div>
        </div>
    <?php endif; ?>

    <?php if(isset($model['chat_online']) && $model['chat_online'] != '-') : ?>
        <div class="tabs-content-box__item">
            <div class="tabs-content-box__item-left">
                <div class="tabs-content-box__item-title"><?= $mfoText['customer_support']['chat_online'] ?></div>
            </div>
            <div class="tabs-content-box__item-right">
                <div class="tabs-content-box__item-image">
                    <img src="/img/checkbox.svg" alt="checkbox">
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if(isset($model['unidad']) && $model['unidad'] != '-') : ?>
        <div class="tabs-content-box__item">
            <div class="tabs-content-box__item-left">
                <div class="tabs-content-box__item-title"><?= $mfoText['customer_support']['unidad'] ?></div>
            </div>
            <div class="tabs-content-box__item-right"></div>
        </div>
    <?php endif; ?>
    <?php if(isset($model['unidad_1']) && $model['unidad_1'] != '-') : ?>
        <div class="tabs-content-box__item">
            <div class="tabs-content-box__emails">
                <a class="tabs-content-box__emails-link" href="mailto:<?= $model['unidad_1'] ?>"><?= $model['unidad_1'] ?></a>
                <?php if(isset($model['unidad_2']) && $model['unidad_2'] != '-') : ?>
                    <a class="tabs-content-box__emails-link" href="mailto:<?= $model['unidad_2'] ?>"><?= $model['unidad_2'] ?></a>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>
</div>
