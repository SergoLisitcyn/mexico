<div class="tabs-content__block tabs-content-block background-set">
    <h2 class="tabs-content-block__title title">Condiciones de préstamos</h2>
    <div class="tabs-content-block__columns">
        <div class="tabs-content-block__column">
            <?php if(isset($model['plazo_min']) && $model['plazo_min'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['condiciones']['plazo_min'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-text"><?= $model['plazo_min'] ?></div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['plazo_max']) && $model['plazo_max'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['condiciones']['plazo_max'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-text"><?= $model['plazo_max'] ?></div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['rate_first']) && $model['rate_first'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['condiciones']['rate_first'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-text"><?= $model['rate_first'] ?></div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['rate_repeat']) && $model['rate_repeat'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['condiciones']['rate_repeat'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-text"><?= $model['rate_repeat'] ?></div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['rate_annual']) && $model['rate_annual'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['condiciones']['rate_annual'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-text"><?= $model['rate_annual'] ?></div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['min_total_cost']) && $model['min_total_cost'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['condiciones']['min_total_cost'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-text"><?= $model['min_total_cost'] ?></div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['max_total_cost']) && $model['max_total_cost'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['condiciones']['max_total_cost'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-text"><?= $model['max_total_cost'] ?></div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['late_fee']) && $model['late_fee'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['condiciones']['late_fee'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-text"><?= $model['late_fee'] ?></div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['overdue_loan']) && $model['overdue_loan'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['condiciones']['overdue_loan'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-text"><?= $model['overdue_loan'] ?></div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <div class="tabs-content-block__column">
            <?php if(isset($model['first_loan_min']) && $model['first_loan_min'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['condiciones']['first_loan_min'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-text"><?= $model['first_loan_min'] ?></div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['first_loan_max']) && $model['first_loan_max'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['condiciones']['first_loan_max'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-text"><?= $model['first_loan_max'] ?></div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['repeat_loan_min']) && $model['repeat_loan_min'] != '-') : ?>
            <div class="tabs-content-block__item">
                <div class="tabs-content-block__item-left">
                    <div class="tabs-content-block__item-title"><?= $mfoText['condiciones']['repeat_loan_min'] ?></div>
                </div>
                <div class="tabs-content-block__item-right">
                    <div class="tabs-content-block__item-text"><?= $model['repeat_loan_min'] ?></div>
                </div>
            </div>
            <?php endif; ?>

            <?php if(isset($model['repeat_loan_max']) && $model['repeat_loan_max'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['condiciones']['repeat_loan_max'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-text"><?= $model['repeat_loan_max'] ?></div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['decision_time']) && $model['decision_time'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['condiciones']['decision_time'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-text"><?= $model['decision_time'] ?></div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['term_transfer']) && $model['term_transfer'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['condiciones']['term_transfer'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-text"><?= $model['term_transfer'] ?></div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['initial_fee']) && $model['initial_fee'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['condiciones']['initial_fee'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-text"><?= $model['initial_fee'] ?></div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(isset($model['extension']) && $model['extension'] != '-') : ?>
            <div class="tabs-content-block__item">
                <div class="tabs-content-block__item-left">
                    <div class="tabs-content-block__item-title"><?= $mfoText['condiciones']['extension'] ?></div>
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