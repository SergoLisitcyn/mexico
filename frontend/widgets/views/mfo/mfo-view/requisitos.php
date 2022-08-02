<div class="tabs-content__block tabs-content-block background-set">
    <h2 class="tabs-content-block__title title">Requisitos</h2>
    <div class="tabs-content-block__columns">
        <div class="tabs-content-block__column">
            <?php if(isset($model['individual']) && $model['individual'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['requisitos']['individual'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['nationality']) && $model['nationality'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['requisitos']['nationality'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-text"><?= $model['nationality'] ?></div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['location']) && $model['location'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['requisitos']['location'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-text"><?= $model['location'] ?></div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['voter_card']) && $model['voter_card'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['requisitos']['voter_card'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-text"><?= $model['voter_card'] ?></div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['inn']) && $model['inn'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['requisitos']['inn'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-text"><?= $model['inn'] ?></div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['personal_id']) && $model['personal_id'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['requisitos']['personal_id'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-text"><?= $model['personal_id'] ?></div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['double_sided_photo']) && $model['double_sided_photo'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['requisitos']['double_sided_photo'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['older_than']) && $model['older_than'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['requisitos']['older_than'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-text"><?= $model['older_than'] ?></div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['younger_than']) && $model['younger_than'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['requisitos']['younger_than'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-text"><?= $model['younger_than'] ?></div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['have_credit_history']) && $model['have_credit_history'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['requisitos']['have_credit_history'] ?></div>
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
            <?php if(isset($model['bank_card']) && $model['bank_card'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['requisitos']['bank_card'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['bank_account']) && $model['bank_account'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['requisitos']['bank_account'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['regular_income']) && $model['regular_income'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['requisitos']['regular_income'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['payment_receipts']) && $model['payment_receipts'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['requisitos']['payment_receipts'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['bank_statement']) && $model['bank_statement'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['requisitos']['bank_statement'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['address_verification']) && $model['address_verification'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['requisitos']['address_verification'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['mobile_phone']) && $model['mobile_phone'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['requisitos']['mobile_phone'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['email']) && $model['email'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['requisitos']['email'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['facebook']) && $model['facebook'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['requisitos']['facebook'] ?></div>
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