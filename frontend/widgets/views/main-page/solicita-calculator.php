<section class="calculator" style="margin-bottom: 30px;">
    <div class="container">
        <form action="<?= $_SERVER['REQUEST_URI'] ?>" method="post">
        <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
            <div class="calculator__main">
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
                                            <input aria-invalid="false" type="text" slot="amount" aria-labelledby="input-amount-slider"
                                                   class="MuiInputBase-input MuiOutlinedInput-input MuiInputBase-inputMarginDense MuiOutlinedInput-inputMarginDense"
                                                   value="<?= $sum ?>" name="rs_sum_output" id="rs_sum_output">
                                        </div>
                                        <span class="range__result-span">$</span>
                                    </div>
                                    <input id="rs_sum" type="range" name="rs_sum" min="<?= $sumMin ?>" max="<?= $sumMax ?>" value="<?= $sum ?>" step="5" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;">
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
                                                   value="<?= $term ?>" name="rs_term_output" id="rs_term_output">
                                        </div>
                                        <span class="range__result-span">días</span>
                                    </div>
                                    <input id="rs_term" type="range" name="rs_term" min="<?= $termMin ?>" max="<?= $termMax ?>" value="<?= $term ?>" step="1" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;">

                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="calculator__button button button--primary">Compara ofertas</button>
                </div>
            </div>
            <div class="calculator__mini">
                <div class="calculator__row background-set">
                    <div class="calculator__columns">
                        <div class="calculator__col">
                            <div class="calculator__range range">
                                <label class="range__label">
                                    <span class="range__label-title">Monto:</span>
                                </label>
                                <div class="range__result result-1">
                                    <div class="range__result-input">
                                        <input aria-invalid="false" type="text" slot="amount" aria-labelledby="input-amount-slider" class="MuiInputBase-input MuiOutlinedInput-input MuiInputBase-inputMarginDense MuiOutlinedInput-inputMarginDense" value="50" name="rs_sum_output" id="rs_sum_output">
                                    </div>
                                    <span class="range__result-span">$</span>
                                </div>
                            </div>
                        </div>
                        <div class="calculator__col">
                            <div class="calculator__range range">
                                <label class="range__label">
                                    <span class="range__label-title">Período:</span>
                                </label>
                                <div class="range__result result-2">
                                    <div class="range__result-input">
                                        <input aria-invalid="false" type="text" slot="term" aria-labelledby="input-term-slider" class="MuiInputBase-input MuiOutlinedInput-input MuiInputBase-inputMarginDense MuiOutlinedInput-inputMarginDense" value="30" name="rs_term_output" id="rs_term_output">
                                    </div>
                                    <span class="range__result-span">días</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="calculator__button button button--secondary">Más info</button>
                </div>
            </div>
        </form>
    </div>
</section>