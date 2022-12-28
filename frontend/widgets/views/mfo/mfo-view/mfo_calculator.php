<div class="mfo-about__calculator calculator">
    <div class="calculator__row background-set">
        <div class="calculator__columns">
            <div class="calculator__col">
                <div class="calculator__range range">
                    <label class="range__label">
                        <span class="range__label-title">¿Cuánto dinero necesitas?</span>
                    </label>
                    <div class="range__inputs">
                        <div class="range__result result-1">
                            <div class="range__result-input">
                                <input aria-invalid="false" type="text" slot="amount"
                                       aria-labelledby="input-amount-slider"
                                       class="MuiInputBase-input MuiOutlinedInput-input MuiInputBase-inputMarginDense MuiOutlinedInput-inputMarginDense" value="<?= $model->sum ?>" name="rs_sum_output" id="rs_sum_output">
                            </div>
                            <span class="range__result-span">$</span>
                        </div>
                        <input id="rs_sum" type="range" name="rs_sum" oninput="fun1()" min="<?= $model->min_sum ?>" max="<?= $model->sum ?>" value="<?= $model->sum ?>" step="5" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;">
                    </div>
                </div>
            </div>
            <div class="calculator__col">
                <div class="calculator__range range">
                    <label class="range__label">
                        <span class="range__label-title">¿En cuánto tiempo deseas pagarlo?</span>
                    </label>
                    <div class="range__inputs">
                        <div class="range__result result-2">
                            <div class="range__result-input">
                                <input aria-invalid="false" type="text" slot="term" aria-labelledby="input-term-slider"
                                       class="MuiInputBase-input MuiOutlinedInput-input MuiInputBase-inputMarginDense MuiOutlinedInput-inputMarginDense"
                                       value="<?= $model->term ?>" name="rs_term_output" id="rs_term_output">
                            </div>
                            <span class="range__result-span">días</span>
                        </div>
                        <input id="rs_term" type="range" name="rs_term" oninput="fun1()" min="<?= $model->min_term ?>" max="<?= $model->term ?>" value="<?= $model->term ?>" step="1" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;">
                        <input type="hidden" id="procent" name="procent" value="<?= $procent ?>" />
                        <input type="hidden" id="first_loan" name="first_loan" value="<?= $firstLoan ?>" />
                    </div>
                </div>
            </div>
        </div>
        <div class="calculator__sum calculator-sum">
            <div class="calculator-sum__text">Total a Pagar:</div>
            <div class="calculator-sum__number" id="cost"><?= $total ?></div> <span class="calculator-sum__number-span">$</span>
        </div>
        <?php if(isset($model->data['meta_tags']['affiliate']) && $model->data['meta_tags']['affiliate'] != '-') : ?>
            <a class="calculator__button button button--primary" target="_blank" href="//<?= $model->data['meta_tags']['affiliate'] ?>">Recibir dinero</a>
        <?php endif; ?>
    </div>
</div>