<div class="tabs-content__block tabs-content-block background-set">
    <h2 class="tabs-content-block__title title">El procedimiento de la reembolso del préstamo</h2>
    <div class="tabs-content-block__columns">
        <div class="tabs-content-block__column">
            <?php if(isset($model['payment_prolongation']) && $model['payment_prolongation'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['payment_methods']['payment_prolongation'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['full_repayment']) && $model['full_repayment'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['payment_methods']['full_repayment'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['payment_by_card']) && $model['payment_by_card'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['payment_methods']['payment_by_card'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['advance_payments']) && $model['advance_payments'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['payment_methods']['advance_payments'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['payment_phone_operator']) && $model['payment_phone_operator'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['payment_methods']['payment_phone_operator'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['qr_code']) && $model['qr_code'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-image">
                        <img src="/img/tabs/codi.png" alt="codi">
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['bank_teller']) && $model['bank_teller'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['payment_methods']['bank_teller'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['shops']) && $model['shops'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-image">
                        <img src="/img/tabs/oxxo.png" alt="oxxo">
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(isset($model['chdp']) && $model['chdp'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['payment_methods']['chdp'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(isset($model['cash_payments']) && $model['cash_payments'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['payment_methods']['cash_payments'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(isset($model['bank_branches']) && $model['bank_branches'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['payment_methods']['bank_branches'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(isset($model['eleven']) && $model['eleven'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['payment_methods']['eleven'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(isset($model['pharmacy']) && $model['pharmacy'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['payment_methods']['pharmacy'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(isset($model['hsbc']) && $model['hsbc'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['payment_methods']['hsbc'] ?></div>
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
            <?php if(isset($model['largest_bank']) && $model['largest_bank'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/tabs/bbva.png" alt="bbva">
                        </div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['payment_terminals']) && $model['payment_terminals'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['payment_methods']['payment_terminals'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['wallet']) && $model['wallet'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-image">
                        <img src="/img/tabs/conekta.png" alt="conekta">
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['lata']) && $model['lata'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-image">
                        <img src="/img/tabs/paycash.png" alt="paycash">
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['own_payment']) && $model['own_payment'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-image">
                        <img src="/img/tabs/kueski-pay.png" alt="kueski-pay">
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['wallet_payment']) && $model['wallet_payment'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-image">
                        <img src="/img/tabs/mercado-pago.png" alt="mercado-pago">
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['direct_debit']) && $model['direct_debit'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['payment_methods']['direct_debit'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(isset($model['bank_mexico']) && $model['bank_mexico'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['payment_methods']['bank_mexico'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(isset($model['electronic_payments']) && $model['electronic_payments'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['payment_methods']['electronic_payments'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['mexican_provider']) && $model['mexican_provider'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['payment_methods']['mexican_provider'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(isset($model['telecomm']) && $model['telecomm'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['payment_methods']['telecomm'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(isset($model['store_chain']) && $model['store_chain'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['payment_methods']['store_chain'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(isset($model['offline_payment']) && $model['offline_payment'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['payment_methods']['offline_payment'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(isset($model['non_store']) && $model['non_store'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['payment_methods']['non_store'] ?></div>
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