<!--Calculator-->
<section class="main__calculator calculator">
    <div class="container">
        <form action="/empresas" method="post">
            <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
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
                                        <input aria-invalid="false" type="text" slot="amount" aria-labelledby="input-amount-slider" class="MuiInputBase-input MuiOutlinedInput-input MuiInputBase-inputMarginDense MuiOutlinedInput-inputMarginDense" value="50" name="rs_sum_output" id="rs_sum_output">
                                    </div>
                                    <span class="range__result-span">$</span>
                                </div>
                                <input id="rs_sum" type="range" name="rs_sum" min="0" max="100" value="50" step="5" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;">
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
                                        <input aria-invalid="false" type="text" slot="term" aria-labelledby="input-term-slider" class="MuiInputBase-input MuiOutlinedInput-input MuiInputBase-inputMarginDense MuiOutlinedInput-inputMarginDense" value="30" name="rs_term_output" id="rs_term_output">
                                    </div>
                                    <span class="range__result-span">días</span>
                                </div>
                                <input id="rs_term" type="range" name="rs_term" min="0" max="100" value="5" step="5" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;">
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="calculator__button button button--primary">Recibir dinero</button>
            </div>
        </form>
    </div>
</section>