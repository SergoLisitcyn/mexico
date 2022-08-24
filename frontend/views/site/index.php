<?php

/** @var yii\web\View $this */

use frontend\widgets\MainPageWidget;

$this->title = 'My Yii Application';
?>
<section class="main__main-sect main-sect">

    <!--    Solicita -->
    <?= MainPageWidget::widget(['type' => 'solicita']) ?>

    <!--    Progress -->
    <?= MainPageWidget::widget(['type' => 'progress']) ?>

    <!--    Works -->
    <?= MainPageWidget::widget(['type' => 'works']) ?>

    <!--    About -->
    <?= MainPageWidget::widget(['type' => 'about']) ?>


    <!--    Info -->
    <?= MainPageWidget::widget(['type' => 'info']) ?>

    <section class="main__calculator calculator">
        <div class="container">
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
                <div class="calculator__sum calculator-sum">
                    <div class="calculator-sum__text">Сумма к возврату:</div>
                    <div class="calculator-sum__number">65</div> <span class="calculator-sum__number-span">$</span>
                </div>
                <button type="button" class="calculator__button button button--primary">Recibir dinero</button>
            </div>
        </div>
    </section>

    <section class="main__entities entities">
        <div class="container">
            <div class="entities__row background-set">
                <h2 class="entities__title title">TOP 3 Entidades</h2>
                <ul class="entities__list">
                    <li class="entities__item">
                        <div class="entities__logo">
                            <img src="/img/entities/bbva.png" alt="bbva">
                        </div>
                        <div class="entities__repute repute">
                            <div class="repute__rating">
                                <img class="repute__rating-image" src="/img/stars.svg" alt="stars">
                                <div class="repute__rating-number">4,8</div>
                            </div>
                            <div class="repute__comments">
                                Leer <a href="#" class="repute__comments-link">25 comentarios</a>
                            </div>
                        </div>
                    </li>
                    <li class="entities__item">
                        <div class="entities__logo">
                            <img src="/img/entities/money-man.png" alt="money-man">
                        </div>
                        <div class="entities__repute repute">
                            <div class="repute__rating">
                                <img class="repute__rating-image" src="/img/stars.svg" alt="stars">
                                <div class="repute__rating-number">4,7</div>
                            </div>
                            <div class="repute__comments">
                                Leer <a href="#" class="repute__comments-link">27 comentarios</a>
                            </div>
                        </div>
                    </li>
                    <li class="entities__item">
                        <div class="entities__logo">
                            <img src="/img/entities/findzhin.png" alt="findzhin">
                        </div>
                        <div class="entities__repute repute">
                            <div class="repute__rating">
                                <img class="repute__rating-image" src="/img/stars.svg" alt="stars">
                                <div class="repute__rating-number">4,6</div>
                            </div>
                            <div class="repute__comments">
                                Leer <a href="#" class="repute__comments-link">15 comentarios</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!--    Partners -->
    <?= MainPageWidget::widget(['type' => 'partners']) ?>


    <section class="main__comments comments">
        <div class="container">
            <h2 class="comments__title title">Comentarios sobre Zaimomat</h2>
            <div class="comments__row">
                <div class="comments__slider comments-block comments-slider background-set">
                    <div class="comments-block__item">
                        <div class="comments-block__data">
                            <div class="comments-block__date">21.12.2021</div>
                            <div class="comments-block__rating">
                                <img class="comments-block__rating-img" src="img/stars.svg" alt="stars">
                                <span class="comments-block__rating-number">4,4</span>
                            </div>
                        </div>
                        <div class="comments-block__info">
                            <div class="comments-block__info-name">Rocio Torres</div>
                            <p class="comments-block__info-text">Llené el formulario y recibí respuesta rápidamente. Solo tuve que escanear algunos documentos (también podía mandar fotos) y con eso tuve para una solicitud.</p>
                            <div class="comments-block__descr">
                                <div class="comments-block__descr-title">Ventajas</div>
                                <p class="comments-block__descr-text">Usé su plataforma y encontré un préstamo rápidamente, y eso que mi score con el buro de crédito tan bueno en ese momento.</p>
                                <div class="comments-block__descr-title">Desventajas</div>
                                <p class="comments-block__descr-text">Me aprobaron muy poco dinero. Espero que si pago a tiempo me puedan prestar más</p>
                            </div>
                        </div>
                    </div>
                    <div class="comments-block__item">
                        <div class="comments-block__data">
                            <div class="comments-block__date">22.12.2021</div>
                            <div class="comments-block__rating">
                                <img class="comments-block__rating-img" src="img/stars.svg" alt="stars">
                                <span class="comments-block__rating-number">4,4</span>
                            </div>
                        </div>
                        <div class="comments-block__info">
                            <div class="comments-block__info-name">Rocio Torres</div>
                            <p class="comments-block__info-text">Llené el formulario y recibí respuesta rápidamente. Solo tuve que escanear algunos documentos (también podía mandar fotos) y con eso tuve para una solicitud.</p>
                            <div class="comments-block__descr">
                                <div class="comments-block__descr-title">Ventajas</div>
                                <p class="comments-block__descr-text">Usé su plataforma y encontré un préstamo rápidamente, y eso que mi score con el buro de crédito tan bueno en ese momento.</p>
                                <div class="comments-block__descr-title">Desventajas</div>
                                <p class="comments-block__descr-text">Me aprobaron muy poco dinero. Espero que si pago a tiempo me puedan prestar más</p>
                            </div>
                        </div>
                    </div>
                    <div class="comments-block__item">
                        <div class="comments-block__data">
                            <div class="comments-block__date">23.12.2021</div>
                            <div class="comments-block__rating">
                                <img class="comments-block__rating-img" src="img/stars.svg" alt="stars">
                                <span class="comments-block__rating-number">4,4</span>
                            </div>
                        </div>
                        <div class="comments-block__info">
                            <div class="comments-block__info-name">Rocio Torres</div>
                            <p class="comments-block__info-text">Llené el formulario y recibí respuesta rápidamente. Solo tuve que escanear algunos documentos (también podía mandar fotos) y con eso tuve para una solicitud.</p>
                            <div class="comments-block__descr">
                                <div class="comments-block__descr-title">Ventajas</div>
                                <p class="comments-block__descr-text">Usé su plataforma y encontré un préstamo rápidamente, y eso que mi score con el buro de crédito tan bueno en ese momento.</p>
                                <div class="comments-block__descr-title">Desventajas</div>
                                <p class="comments-block__descr-text">Me aprobaron muy poco dinero. Espero que si pago a tiempo me puedan prestar más</p>
                            </div>
                        </div>
                    </div>
                    <div class="comments-block__item">
                        <div class="comments-block__data">
                            <div class="comments-block__date">24.12.2021</div>
                            <div class="comments-block__rating">
                                <img class="comments-block__rating-img" src="img/stars.svg" alt="stars">
                                <span class="comments-block__rating-number">4,4</span>
                            </div>
                        </div>
                        <div class="comments-block__info">
                            <div class="comments-block__info-name">Rocio Torres</div>
                            <p class="comments-block__info-text">Llené el formulario y recibí respuesta rápidamente. Solo tuve que escanear algunos documentos (también podía mandar fotos) y con eso tuve para una solicitud.</p>
                            <div class="comments-block__descr">
                                <div class="comments-block__descr-title">Ventajas</div>
                                <p class="comments-block__descr-text">Usé su plataforma y encontré un préstamo rápidamente, y eso que mi score con el buro de crédito tan bueno en ese momento.</p>
                                <div class="comments-block__descr-title">Desventajas</div>
                                <p class="comments-block__descr-text">Me aprobaron muy poco dinero. Espero que si pago a tiempo me puedan prestar más</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--    Mission -->
    <?= MainPageWidget::widget(['type' => 'mission']) ?>

    <!--    Team -->
    <?= MainPageWidget::widget(['type' => 'team']) ?>

    <section class="main__useful-block useful-block">
        <div class="container">
            <div class="useful-block__row background-set">
                <h2 class="useful-block__title title">Полезные материалы</h2>
                <div class="useful-block__items">
                    <div class="useful-block__item">
                        <div class="useful-block__info">
                            <div class="useful-block__date">23.06.2019</div>
                            <a href="#" class="useful-block__link">3 необходимых условия для получения займа до зарплаты</a>
                        </div>
                        <div class="useful-block__info">
                            <div class="useful-block__date">23.06.2019</div>
                            <a href="#" class="useful-block__link">3 необходимых условия для получения займа до зарплаты</a>
                        </div>
                    </div>
                    <div class="useful-block__item">
                        <div class="useful-block__info">
                            <div class="useful-block__date">22.06.2019</div>
                            <a href="#" class="useful-block__link">5 условий получения займа с плохой кредитной историей</a>
                        </div>
                        <div class="useful-block__info">
                            <div class="useful-block__date">22.06.2019</div>
                            <a href="#" class="useful-block__link">5 условий получения займа с плохой кредитной историей</a>
                        </div>
                    </div>
                    <div class="useful-block__item">
                        <div class="useful-block__info">
                            <div class="useful-block__date">20.06.2019</div>
                            <a href="#" class="useful-block__link">7 причин исправить кредитную историю микрозаймами</a>
                        </div>
                        <div class="useful-block__info">
                            <div class="useful-block__date">20.06.2019</div>
                            <a href="#" class="useful-block__link">7 причин исправить кредитную историю микрозаймами</a>
                        </div>
                    </div>
                </div>
                <a href="#" class="useful-block__more">Все статьи</a>
            </div>
        </div>
    </section>

    <section class="main__useful-block useful-block">
        <div class="container">
            <div class="useful-block__row background-set">
                <h2 class="useful-block__title title">Новости</h2>
                <div class="useful-block__items">
                    <div class="useful-block__item">
                        <div class="useful-block__info">
                            <div class="useful-block__date">23.06.2019</div>
                            <a href="#" class="useful-block__link">3 необходимых условия для получения займа до зарплаты</a>
                        </div>
                        <div class="useful-block__info">
                            <div class="useful-block__date">23.06.2019</div>
                            <a href="#" class="useful-block__link">3 необходимых условия для получения займа до зарплаты</a>
                        </div>
                    </div>
                    <div class="useful-block__item">
                        <div class="useful-block__info">
                            <div class="useful-block__date">22.06.2019</div>
                            <a href="#" class="useful-block__link">5 условий получения займа с плохой кредитной историей</a>
                        </div>
                        <div class="useful-block__info">
                            <div class="useful-block__date">22.06.2019</div>
                            <a href="#" class="useful-block__link">5 условий получения займа с плохой кредитной историей</a>
                        </div>
                    </div>
                    <div class="useful-block__item">
                        <div class="useful-block__info">
                            <div class="useful-block__date">20.06.2019</div>
                            <a href="#" class="useful-block__link">7 причин исправить кредитную историю микрозаймами</a>
                        </div>
                        <div class="useful-block__info">
                            <div class="useful-block__date">20.06.2019</div>
                            <a href="#" class="useful-block__link">7 причин исправить кредитную историю микрозаймами</a>
                        </div>
                    </div>
                </div>
                <a href="#" class="useful-block__more">Остальные новости</a>
            </div>
        </div>
    </section>

    <!--    Contacto-->
    <?= MainPageWidget::widget(['type' => 'contacts']) ?>
</section>
