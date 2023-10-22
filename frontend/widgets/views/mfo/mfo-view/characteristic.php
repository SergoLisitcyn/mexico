<?php if($visibleCharacteristic) : ?>
<div class="tabs-content__block tabs-content-block background-set">
    <h2 class="tabs-content-block__title title">Características de la compañía</h2>
    <div class="tabs-content-block__columns">
        <div class="tabs-content-block__column">
            <?php if(isset($model['characteristic']['first_loan_zero']) && $model['characteristic']['first_loan_zero'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['characteristic']['first_loan_zero'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(isset($model['characteristic']['operates_mexico']) && $model['characteristic']['operates_mexico'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['characteristic']['operates_mexico'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(isset($model['characteristic']['loans_individuals']) && $model['characteristic']['loans_individuals'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['characteristic']['loans_individuals'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['characteristic']['for_persons_older']) && $model['characteristic']['for_persons_older'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['characteristic']['for_persons_older'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-text"><?= $model['characteristic']['for_persons_older'] ?></div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['characteristic']['quick_loan']) && $model['characteristic']['quick_loan'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['characteristic']['quick_loan'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['characteristic']['online']) && $model['characteristic']['online'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['characteristic']['online'] ?></div>
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
            <?php if(isset($model['characteristic']['rate_fixed']) && $model['characteristic']['rate_fixed'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['characteristic']['rate_fixed'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-text"><?= $model['characteristic']['rate_fixed'] ?></div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['characteristic']['early_repayment']) && $model['characteristic']['early_repayment'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['characteristic']['early_repayment'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['characteristic']['prolongation']) && $model['characteristic']['prolongation'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['characteristic']['prolongation'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['characteristic']['without_call']) && $model['characteristic']['without_call'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['characteristic']['without_call'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['characteristic']['round_the_clock']) && $model['characteristic']['round_the_clock'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['characteristic']['round_the_clock'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['characteristic']['tiene_app']) && $model['characteristic']['tiene_app'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['characteristic']['tiene_app'] ?></div>
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
    <div class="tabs-content-block__apps">

        <?php if(isset($model['characteristic']['google_play']) && $model['characteristic']['google_play'] != '-') : ?>
            <a href="//<?= $model['characteristic']['google_play'] ?>" target="_blank" class="tabs-content-block__apps-link"><img src="/img/apps/goole-play.svg" alt="Google Play"></a>
        <?php endif; ?>

        <?php if(isset($model['characteristic']['app_store']) && $model['characteristic']['app_store'] != '-') : ?>
            <a href="//<?= $model['characteristic']['app_store'] ?>" target="_blank"  class="tabs-content-block__apps-link"><img src="/img/apps/app-store.svg" alt="App Store"></a>
        <?php endif; ?>
    </div>
</div>
<?php endif; ?>