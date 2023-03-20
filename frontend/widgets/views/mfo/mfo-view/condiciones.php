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
            <?php if(isset($model['other_loan_min']) && $model['other_loan_min'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['condiciones']['other_loan_min'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-text"><?= $model['other_loan_min'] ?></div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(isset($model['other_loan_msb_min']) && $model['other_loan_msb_min'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['condiciones']['other_loan_msb_min'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-text"><?= $model['other_loan_msb_min'] ?></div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(isset($model['other_term_months_min']) && $model['other_term_months_min'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['condiciones']['other_term_months_min'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-text"><?= $model['other_term_months_min'] ?></div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(isset($model['other_term_credit']) && $model['other_term_credit'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['condiciones']['other_term_credit'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-text"><?= $model['other_term_credit'] ?></div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(isset($model['other_term_weeks_max']) && $model['other_term_weeks_max'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['condiciones']['other_term_weeks_max'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-text"><?= $model['other_term_weeks_max'] ?></div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(isset($model['other_payment_every_week']) && $model['other_payment_every_two_week'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['condiciones']['other_payment_every_two_week'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(isset($model['other_early_repayment']) && $model['other_early_repayment'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['condiciones']['other_early_repayment'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(isset($model['other_total_loan_cost_min']) && $model['other_total_loan_cost_min'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['condiciones']['other_total_loan_cost_min'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-text"><?= $model['other_total_loan_cost_min'] ?></div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(isset($model['other_promedio_via']) && $model['other_promedio_via'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['condiciones']['other_promedio_via'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-text"><?= $model['other_promedio_via'] ?></div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(isset($model['other_fija_via_min']) && $model['other_fija_via_min'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['condiciones']['other_fija_via_min'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-text"><?= $model['other_fija_via_min'] ?></div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(isset($model['other_management_fee']) && $model['other_management_fee'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['condiciones']['other_management_fee'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-text"><?= $model['other_management_fee'] ?></div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(isset($model['other_method_fee']) && $model['other_method_fee'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['condiciones']['other_method_fee'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-text"><?= $model['other_method_fee'] ?></div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(isset($model['other_pre_approval']) && $model['other_pre_approval'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['condiciones']['other_pre_approval'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-text"><?= $model['other_pre_approval'] ?></div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(isset($model['other_refinancing']) && $model['other_refinancing'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['condiciones']['other_refinancing'] ?></div>
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


<!--              для компаний других типов-->
            <?php if(isset($model['other_loan_max']) && $model['other_loan_max'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['condiciones']['other_loan_max'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-text"><?= $model['other_loan_max'] ?></div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(isset($model['other_loan_msb_max']) && $model['other_loan_msb_max'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['condiciones']['other_loan_msb_max'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-text"><?= $model['other_loan_msb_max'] ?></div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(isset($model['other_term_months_max']) && $model['other_term_months_max'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['condiciones']['other_term_months_max'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-text"><?= $model['other_term_months_max'] ?></div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(isset($model['other_term_weeks_min']) && $model['other_term_weeks_min'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['condiciones']['other_term_weeks_min'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-text"><?= $model['other_term_weeks_min'] ?></div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(isset($model['other_payment_every_week']) && $model['other_payment_every_week'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['condiciones']['other_payment_every_week'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(isset($model['other_payment_every_month']) && $model['other_payment_every_month'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['condiciones']['other_payment_every_month'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-image">
                            <img src="/img/checkbox.svg" alt="checkbox">
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(isset($model['other_total_loan_cost']) && $model['other_total_loan_cost'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['condiciones']['other_total_loan_cost'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-text"><?= $model['other_total_loan_cost'] ?></div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(isset($model['other_total_loan_cost_max']) && $model['other_total_loan_cost_max'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['condiciones']['other_total_loan_cost_max'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-text"><?= $model['other_total_loan_cost_max'] ?></div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(isset($model['other_fija_via']) && $model['other_fija_via'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['condiciones']['other_fija_via'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-text"><?= $model['other_fija_via'] ?></div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(isset($model['other_opening_fee']) && $model['other_opening_fee'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['condiciones']['other_opening_fee'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-text"><?= $model['other_opening_fee'] ?></div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(isset($model['other_collection_costs']) && $model['other_collection_costs'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['condiciones']['other_collection_costs'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-text"><?= $model['other_collection_costs'] ?></div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(isset($model['other_late']) && $model['other_late'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['condiciones']['other_late'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-text"><?= $model['other_late'] ?></div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(isset($model['other_time_to_receive']) && $model['other_time_to_receive'] != '-') : ?>
                <div class="tabs-content-block__item">
                    <div class="tabs-content-block__item-left">
                        <div class="tabs-content-block__item-title"><?= $mfoText['condiciones']['other_time_to_receive'] ?></div>
                    </div>
                    <div class="tabs-content-block__item-right">
                        <div class="tabs-content-block__item-text"><?= $model['other_time_to_receive'] ?></div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>