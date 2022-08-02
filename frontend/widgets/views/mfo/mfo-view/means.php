<div class="tabs-content__block tabs-content-block background-set">
    <h2 class="tabs-content-block__title title">Medios de disposición del crédito</h2>
    <div class="tabs-content-block__columns">
        <div class="tabs-content-block__column">
            <?php if(isset($model['means_online']) && $model['means_online'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['means']['means_online'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['means_bank_card']) && $model['means_bank_card'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['means']['means_bank_card'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <div class="tabs-content-block__column">
            <?php if(isset($model['check']) && $model['check'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['means']['check'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['test_call']) && $model['test_call'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['means']['test_call'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>