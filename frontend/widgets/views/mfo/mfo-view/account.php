<?php if($visible) : ?>
<div class="tabs-content-box__column">
    <div class="tabs-content-box__item">
        <div class="tabs-content-box__item-left">
            <h2 class="tabs-content-box__title title">La cuenta</h2>
        </div>
        <div class="tabs-content-box__item-right"></div>
    </div>
    <?php if(isset($model['log_your_account']) && $model['log_your_account'] != '-') : ?>
    <div class="tabs-content-box__item">
        <div class="tabs-content-box__item-left">
            <a href="//<?= $model['log_your_account'] ?>" target="_blank" class="tabs-content-box__item-link">
                <?= $mfoText['account']['log_your_account'] ?>
            </a>
        </div>
        <div class="tabs-content-box__item-right"></div>
    </div>
    <?php endif; ?>

    <?php if(isset($model['account_facebook']) && $model['account_facebook'] != '-') : ?>
        <div class="tabs-content-box__item">
            <div class="tabs-content-box__item-left">
                <div class="tabs-content-box__item-title"><?= $mfoText['account']['account_facebook'] ?></div>
            </div>
            <div class="tabs-content-box__item-right">
                <div class="tabs-content-box__item-image">
                    <img src="/img/checkbox.svg" alt="checkbox">
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if(isset($model['account_email']) && $model['account_email'] != '-') : ?>
        <div class="tabs-content-box__item">
            <div class="tabs-content-box__item-left">
                <div class="tabs-content-box__item-title"><?= $mfoText['account']['account_email'] ?></div>
            </div>
            <div class="tabs-content-box__item-right">
                <div class="tabs-content-box__item-image">
                    <img src="/img/checkbox.svg" alt="checkbox">
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if(isset($model['cell_phone_number']) && $model['cell_phone_number'] != '-') : ?>
        <div class="tabs-content-box__item">
            <div class="tabs-content-box__item-left">
                <div class="tabs-content-box__item-title"><?= $mfoText['account']['cell_phone_number'] ?></div>
            </div>
            <div class="tabs-content-box__item-right">
                <div class="tabs-content-box__item-image">
                    <img src="/img/checkbox.svg" alt="checkbox">
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>
<?php endif; ?>