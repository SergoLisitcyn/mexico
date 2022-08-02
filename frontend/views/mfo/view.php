<?php

use frontend\widgets\MfoReviewsWidget;
use frontend\widgets\MfoViewWidget;
?>
<div class="main__page-info">
    <div class="container">
        <div class="main__breadcrumbs breadcrumbs">
            <ul class="breadcrumbs__items">
                <li class="breadcrumbs__item">
                    <a href="/" class="breadcrumbs__link">Займы онлайн</a>
                </li>
                <li class="breadcrumbs__item">
                    <a href="/" class="breadcrumbs__link">МФО</a>
                </li>
                <li class="breadcrumbs__item">
                    Кредито
                </li>
            </ul>
        </div>
        <h1 class="main__title main-title">Entidades de Credito</h1>
        <div class="main__mfo-heading mfo-heading">
            <div class="mfo-heading__name">
                <div class="mfo-heading__name-logo">
                    <img src="/img/mfo/credito.png" alt="Credito">
                </div>
                <div class="mfo-heading__name-link">credito.kz</div>
            </div>
            <div class="mfo-heading__repute repute">
                <div class="repute__rating">
                    <img class="repute__rating-image" src="/img/stars.svg" alt="stars">
                    <div class="repute__rating-number">4,8</div>
                </div>
                <div class="repute__comments">
                    Leer <a href="#" class="repute__comments-link">25 comentarios</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container">
        <div class="content__block">
            <div class="content__row">
                <section class="content__mfo-about mfo-about">
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
                    <div class="mfo-about__list mfo-list">
                        <h2 class="mfo-list__title title">Visión general de Credito</h2>
                        <ul class="mfo-list__list">
                            <li class="mfo-list__item">Proceso 100% online</li>
                            <li class="mfo-list__item">Financiación de $1.000 a $10.000.000 pesos</li>
                            <li class="mfo-list__item">Más de 50 entidades para comparar</li>
                            <li class="mfo-list__item">Reparadoras de deuda</li>
                        </ul>
                    </div>
                    <div class="mfo-about__mfo-tabs mfo-tabs">
                        <ul class="mfo-tabs__control tabs-control">
                            <li class="tabs-control__item tabs-control__item--active" data-tab="1">Análisis</li>
                            <li class="tabs-control__item" data-tab="2">Características</li>
                            <li class="tabs-control__item" data-tab="3">Datos</li>
                            <li class="tabs-control__item" data-tab="4">Comentarios</li>
                        </ul>
                        <div class="tabs-content">
                            <div class="tabs-content__item" data-tab-content="1">
                                <div class="tabs-content__info tabs-content-info">
                                    <h2 class="tabs-content-info__title title">Montos adicionales</h2>
                                    <p class="tabs-content-info__text">Si has solicitado un préstamo en Vivus México tienes la opción de solicitar un monto adicional.</p>
                                    <p class="tabs-content-info__text">Es decir, si ya tienes un préstamo aprobado, pero necesitas más dinero, podrás solicitar un monto extra para solventar lo que sea que haya surgido.</p>
                                    <p class="tabs-content-info__text">El crédito inicial y el monto adicional se combinarán en un sólo préstamo, manteniendo el mismo plazo de pago que el de la solicitud original.</p>
                                    <p class="tabs-content-info__text">Como has notado, Vivus créditos es realmente flexible y honesto con los usuarios. <br>
                                        Si has solicitado un préstamo en Vivus México tienes la opción de solicitar un monto adicional.</p>
                                    <p class="tabs-content-info__text">Es decir, si ya tienes un préstamo aprobado, pero necesitas más dinero, podrás solicitar un monto extra para solventar lo que sea que haya surgido. <br>
                                        El crédito inicial y el monto adicional se combinarán en un sólo préstamo, manteniendo el mismo plazo de pago que el de la solicitud original.Como has notado, Vivus créditos es realmente flexible y honesto con los usuarios</p>
                                </div>

                                <!--  Características de la compañía -->
                                <?= MfoViewWidget::widget(['type' => 'characteristic','model' => $model->data]) ?>

                                <!--  Condiciones de préstamos -->
                                <?= MfoViewWidget::widget(['type' => 'condiciones','model' => $model->data['condiciones']]) ?>

                                <!--  Requisitos -->
                                <?= MfoViewWidget::widget(['type' => 'requisitos','model' => $model->data['requisitos']]) ?>

                                <!--  Medios de disposición del crédito-->
                                <?= MfoViewWidget::widget(['type' => 'means','model' => $model->data['means']]) ?>

                                <!--   Métodos de pago-->
                                <?= MfoViewWidget::widget(['type' => 'payment_methods','model' => $model->data['payment_methods']]) ?>

                                <!--   Datos de la compañia-->
                                <?= MfoViewWidget::widget(['type' => 'data_company','model' => $model->data['data_company']]) ?>

                                <div class="tabs-content__line line"></div>

                                <!--   Empresa matriz-->
                                <?= MfoViewWidget::widget(['type' => 'mother_company','model' => $model->data['mother_company']]) ?>

                                <div class="tabs-content__box tabs-content-box">
                                    <div class="tabs-content-box__columns">
                                        <!--   La cuenta-->
                                        <?= MfoViewWidget::widget(['type' => 'account','model' => $model->data['account']]) ?>

                                        <!--   Atención al cliente-->
                                        <?= MfoViewWidget::widget(['type' => 'customer_support','model' => $model->data['customer_support']]) ?>

                                    </div>
                                </div>

                                <!--   Contacto -->
                                <?= MfoViewWidget::widget(['type' => 'contacts','model' => $model->data['contacts']]) ?>

                                <!--   Reviews -->
                                <?= MfoViewWidget::widget(['type' => 'reviews','model' => $model,'reviewsModel' => $reviewsModel,'action' => '/mfo/'.$model->url]) ?>


                                <div class="tabs-content__comments-sect comments-sect">
                                    <h2 class="comments-sect__title title">Comentarios sobre Moneyman</h2>
                                    <div class="comments-sect__slider comments-block comments-slider background-set">
                                        <div class="comments-block__item">
                                            <div class="comments-block__data">
                                                <div class="comments-block__date">21.12.2021</div>
                                                <div class="comments-block__rating">
                                                    <img class="comments-block__rating-img" src="/img/stars.svg" alt="stars">
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
                                                    <img class="comments-block__rating-img" src="/img/stars.svg" alt="stars">
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
                                                    <img class="comments-block__rating-img" src="/img/stars.svg" alt="stars">
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
                                                    <img class="comments-block__rating-img" src="/img/stars.svg" alt="stars">
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
                                <div class="tabs-content__offer offers-sect">
                                    <h2 class="offers-sect__title title">Похожие предложения</h2>
                                    <div class="offers-sect__block">
                                        <div class="offer change-text">
                                            <div class="offer__row">
                                                <div class="offer__company">
                                                    <div class="offer__company-line">Recomendado</div>
                                                    <div class="offer__company-logo">
                                                        <div class="offer__company-img">
                                                            <img src="/img/cards/company/icon-1.png" alt="Credito.kz">
                                                        </div>
                                                        <div class="repute">
                                                            <div class="repute__rating">
                                                                <img class="repute__rating-image" src="/img/stars.svg" alt="stars">
                                                                <div class="repute__rating-number">4,4</div>
                                                            </div>
                                                            <div class="repute__comments">
                                                                Leer <a href="#" class="repute__comments-link">25 comentarios</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="offer__company-title">IDF Capital, S.A.P.I de C.V SOFOM, E.N.R.</div>
                                                </div>
                                                <div class="offer__content">
                                                    <div class="offer__value">
                                                        <ul class="offer__value-list">
                                                            <li class="offer__value-item">
                                                                <div class="offer__value-title">
                                                                    Monto del Préstamo, $</div>
                                                                <div class="offer__value-number">50</div>
                                                            </li>
                                                            <li class="offer__value-item">
                                                                <div class="offer__value-title">
                                                                    Fecha de Pago, días</div>
                                                                <div class="offer__value-number">30</div>
                                                            </li>
                                                            <li class="offer__value-item">
                                                                <div class="offer__value-title">
                                                                    Tasa de interés, %</div>
                                                                <div class="offer__value-number">11</div>
                                                            </li>
                                                            <li class="offer__value-item">
                                                                <div class="offer__value-title">
                                                                    Total a Pagar, $</div>
                                                                <div class="offer__value-number">61</div>
                                                            </li>
                                                            <li class="offer__value-item">
                                                                <div class="offer__value-title">
                                                                    CAT, %</div>
                                                                <div class="offer__value-number">11</div>
                                                            </li>
                                                            <li class="offer__value-item offer__value-item--last">
                                                                <div class="offer__value-title">
                                                                    Nuestra calificación</div>
                                                                <div class="offer__value-number">4,8</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="offer__info">
                                                        <div class="offer__buttons">
                                                            <input type="checkbox" checked class="checkbox">
                                                            <div class="offer__links">
                                                                <div class="offer__open button button--secondary open">Más info</div>
                                                                <a class="offer__receive button button--primary" href="#">Recibir dinero</a>
                                                            </div>
                                                        </div>
                                                        <div class="offer__repute repute">
                                                            <div class="repute__rating">
                                                                <img class="repute__rating-image" src="/img/stars.svg" alt="stars">
                                                                <div class="repute__rating-number">4,4</div>
                                                            </div>
                                                            <div class="repute__comments">
                                                                Leer <a href="#" class="repute__comments-link">25 comentarios</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="offer__dropdown offer-dropdown">
                                                <div class="offer-dropdown__items">
                                                    <div class="offer-dropdown__item offer-dropdown__repute">
                                                        <ul class="offer-dropdown__repute-list">
                                                            <li class="offer-dropdown__repute-item">
                                                                <div class="offer-dropdown__repute-title">Nuestra calificación</div>
                                                                <div class="offer-dropdown__repute-rating">
                                                                    <img class="offer-dropdown__repute-image" src="/img/stars.svg" alt="stars">
                                                                    <span class="offer-dropdown__repute-number">4,8</span>
                                                                </div>
                                                            </li>
                                                            <li class="offer-dropdown__repute-item">
                                                                <p class="offer-dropdown__repute-text">Interés & Costes</p>
                                                                <img class="offer-dropdown__repute-image" src="/img/stars.svg" alt="stars">
                                                            </li>
                                                            <li class="offer-dropdown__repute-item">
                                                                <p class="offer-dropdown__repute-text">Condiciones</p>
                                                                <img class="offer-dropdown__repute-image" src="/img/stars.svg" alt="stars">
                                                            </li>
                                                            <li class="offer-dropdown__repute-item">
                                                                <p class="offer-dropdown__repute-text">Atención al cliente</p>
                                                                <img class="offer-dropdown__repute-image" src="/img/stars.svg" alt="stars">
                                                            </li>
                                                            <li class="offer-dropdown__repute-item">
                                                                <p class="offer-dropdown__repute-text">Funcionalidad</p>
                                                                <img class="offer-dropdown__repute-image" src="/img/stars.svg" alt="stars">
                                                            </li>
                                                            <li class="offer-dropdown__repute-item">
                                                                <a href="#" class="offer-dropdown__repute-link">Información precisa</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="offer-dropdown__item offer-dropdown__info">
                                                        <ul class="offer-dropdown__info-list">
                                                            <li class="offer-dropdown__info-item">
                                                                <p class="offer-dropdown__info-text">Ser mayor de</p>
                                                                <div class="offer-dropdown__info-number">18</div>
                                                            </li>
                                                            <li class="offer-dropdown__info-item">
                                                                <p class="offer-dropdown__info-text">La tasa de interés</p>
                                                                <div class="offer-dropdown__info-number">5-15%</div>
                                                            </li>
                                                            <li class="offer-dropdown__info-item">
                                                                <p class="offer-dropdown__info-text">Acepta mal historial crediticio</p>
                                                                <img class="offer-dropdown__info-image" src="/img/checkbox.svg" alt="checkbox">
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="offer-dropdown__item offer-dropdown__connection">
                                                        <ul class="offer-dropdown__connection-list">
                                                            <li class="offer-dropdown__connection-item">
                                                                <p class="offer-dropdown__connection-text">Abierto 24/7</p>
                                                                <img class="offer-dropdown__connection-image" src="/img/checkbox.svg" alt="checkbox">
                                                            </li>
                                                            <li class="offer-dropdown__connection-item offer-dropdown__connection-item--column">
                                                                <p class="offer-dropdown__connection-text">WhatsApp</p>
                                                                <a href="tel:+525580703990" class="offer-dropdown__connection-phone">+52 55 8070 3990</a>
                                                            </li>
                                                            <li class="offer-dropdown__connection-item">
                                                                <p class="offer-dropdown__connection-text">Tiene app</p>
                                                                <img class="offer-dropdown__connection-image" src="/img/checkbox.svg" alt="checkbox">
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="offer change-text">
                                            <div class="offer__row">
                                                <div class="offer__company">
                                                    <div class="offer__company-line">Лучший выбор</div>
                                                    <div class="offer__company-logo">
                                                        <div class="offer__company-img">
                                                            <img src="/img/cards/company/icon-2.png" alt="ZAItime">
                                                        </div>
                                                        <div class="repute">
                                                            <div class="repute__rating">
                                                                <img class="repute__rating-image" src="/img/stars.svg" alt="stars">
                                                                <div class="repute__rating-number">4,2</div>
                                                            </div>
                                                            <div class="repute__comments">
                                                                Leer <a href="#" class="repute__comments-link">14 comentarios</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="offer__company-title">Proximus Finance, S. de R.L. de C.V</div>
                                                </div>
                                                <div class="offer__content">
                                                    <div class="offer__value">
                                                        <ul class="offer__value-list">
                                                            <li class="offer__value-item">
                                                                <div class="offer__value-title">
                                                                    Monto del Préstamo, $</div>
                                                                <div class="offer__value-number">50</div>
                                                            </li>
                                                            <li class="offer__value-item">
                                                                <div class="offer__value-title">
                                                                    Fecha de Pago, días</div>
                                                                <div class="offer__value-number">30</div>
                                                            </li>
                                                            <li class="offer__value-item">
                                                                <div class="offer__value-title">
                                                                    Tasa de interés, %</div>
                                                                <div class="offer__value-number">18</div>
                                                            </li>
                                                            <li class="offer__value-item">
                                                                <div class="offer__value-title">
                                                                    Total a Pagar, $</div>
                                                                <div class="offer__value-number">69</div>
                                                            </li>
                                                            <li class="offer__value-item">
                                                                <div class="offer__value-title">
                                                                    CAT, %</div>
                                                                <div class="offer__value-number">17</div>
                                                            </li>
                                                            <li class="offer__value-item offer__value-item--last">
                                                                <div class="offer__value-title">
                                                                    Nuestra calificación</div>
                                                                <div class="offer__value-number">4,2</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="offer__info">
                                                        <div class="offer__buttons">
                                                            <input type="checkbox" checked class="checkbox">
                                                            <div class="offer__links">
                                                                <div class="offer__open button button--secondary open">Más info</div>
                                                                <a class="offer__receive button button--primary" href="#">Recibir dinero</a>
                                                            </div>
                                                        </div>
                                                        <div class="offer__repute repute">
                                                            <div class="repute__rating">
                                                                <img class="repute__rating-image" src="/img/stars.svg" alt="stars">
                                                                <div class="repute__rating-number">4,2</div>
                                                            </div>
                                                            <div class="repute__comments">
                                                                Leer <a href="#" class="repute__comments-link">17 comentarios</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="offer__dropdown offer-dropdown">
                                                <div class="offer-dropdown__items">
                                                    <div class="offer-dropdown__item offer-dropdown__repute">
                                                        <ul class="offer-dropdown__repute-list">
                                                            <li class="offer-dropdown__repute-item">
                                                                <div class="offer-dropdown__repute-title">Nuestra calificación</div>
                                                                <div class="offer-dropdown__repute-rating">
                                                                    <img class="offer-dropdown__repute-image" src="/img/stars.svg" alt="stars">
                                                                    <span class="offer-dropdown__repute-number">4,8</span>
                                                                </div>
                                                            </li>
                                                            <li class="offer-dropdown__repute-item">
                                                                <p class="offer-dropdown__repute-text">Interés & Costes</p>
                                                                <img class="offer-dropdown__repute-image" src="/img/stars.svg" alt="stars">
                                                            </li>
                                                            <li class="offer-dropdown__repute-item">
                                                                <p class="offer-dropdown__repute-text">Condiciones</p>
                                                                <img class="offer-dropdown__repute-image" src="/img/stars.svg" alt="stars">
                                                            </li>
                                                            <li class="offer-dropdown__repute-item">
                                                                <p class="offer-dropdown__repute-text">Atención al cliente</p>
                                                                <img class="offer-dropdown__repute-image" src="/img/stars.svg" alt="stars">
                                                            </li>
                                                            <li class="offer-dropdown__repute-item">
                                                                <p class="offer-dropdown__repute-text">Funcionalidad</p>
                                                                <img class="offer-dropdown__repute-image" src="/img/stars.svg" alt="stars">
                                                            </li>
                                                            <li class="offer-dropdown__repute-item">
                                                                <a href="#" class="offer-dropdown__repute-link">Información precisa</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="offer-dropdown__item offer-dropdown__info">
                                                        <ul class="offer-dropdown__info-list">
                                                            <li class="offer-dropdown__info-item">
                                                                <p class="offer-dropdown__info-text">Ser mayor de</p>
                                                                <div class="offer-dropdown__info-number">18</div>
                                                            </li>
                                                            <li class="offer-dropdown__info-item">
                                                                <p class="offer-dropdown__info-text">La tasa de interés</p>
                                                                <div class="offer-dropdown__info-number">5-15%</div>
                                                            </li>
                                                            <li class="offer-dropdown__info-item">
                                                                <p class="offer-dropdown__info-text">Acepta mal historial crediticio</p>
                                                                <img class="offer-dropdown__info-image" src="/img/checkbox.svg" alt="checkbox">
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="offer-dropdown__item offer-dropdown__connection">
                                                        <ul class="offer-dropdown__connection-list">
                                                            <li class="offer-dropdown__connection-item">
                                                                <p class="offer-dropdown__connection-text">Abierto 24/7</p>
                                                                <img class="offer-dropdown__connection-image" src="/img/checkbox.svg" alt="checkbox">
                                                            </li>
                                                            <li class="offer-dropdown__connection-item offer-dropdown__connection-item--column">
                                                                <p class="offer-dropdown__connection-text">WhatsApp</p>
                                                                <a href="tel:+525580703990" class="offer-dropdown__connection-phone">+52 55 8070 3990</a>
                                                            </li>
                                                            <li class="offer-dropdown__connection-item">
                                                                <p class="offer-dropdown__connection-text">Tiene app</p>
                                                                <img class="offer-dropdown__connection-image" src="/img/checkbox.svg" alt="checkbox">
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="offer change-text">
                                            <div class="offer__row">
                                                <div class="offer__company">
                                                    <div class="offer__company-line">Акция</div>
                                                    <div class="offer__company-logo">
                                                        <div class="offer__company-img">
                                                            <img src="/img/cards/company/icon-3.png" alt="MoneyMan">
                                                        </div>
                                                        <div class="repute">
                                                            <div class="repute__rating">
                                                                <img class="repute__rating-image" src="/img/stars.svg" alt="stars">
                                                                <div class="repute__rating-number">4,1</div>
                                                            </div>
                                                            <div class="repute__comments">
                                                                Leer <a href="#" class="repute__comments-link">19 comentarios</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="offer__company-title">IDF Capital, S.A.P.I de C.V SOFOM, E.N.R.</div>
                                                </div>
                                                <div class="offer__content">
                                                    <div class="offer__value">
                                                        <ul class="offer__value-list">
                                                            <li class="offer__value-item">
                                                                <div class="offer__value-title">
                                                                    Monto del Préstamo, $</div>
                                                                <div class="offer__value-number">50</div>
                                                            </li>
                                                            <li class="offer__value-item">
                                                                <div class="offer__value-title">
                                                                    Fecha de Pago, días</div>
                                                                <div class="offer__value-number">30</div>
                                                            </li>
                                                            <li class="offer__value-item">
                                                                <div class="offer__value-title">
                                                                    Tasa de interés, %</div>
                                                                <div class="offer__value-number">12</div>
                                                            </li>
                                                            <li class="offer__value-item">
                                                                <div class="offer__value-title">
                                                                    Total a Pagar, $</div>
                                                                <div class="offer__value-number">67</div>
                                                            </li>
                                                            <li class="offer__value-item">
                                                                <div class="offer__value-title">
                                                                    CAT, %</div>
                                                                <div class="offer__value-number">12</div>
                                                            </li>
                                                            <li class="offer__value-item offer__value-item--last">
                                                                <div class="offer__value-title">
                                                                    Nuestra calificación</div>
                                                                <div class="offer__value-number">4,3</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="offer__info">
                                                        <div class="offer__buttons">
                                                            <input type="checkbox" checked class="checkbox">
                                                            <div class="offer__links">
                                                                <div class="offer__open button button--secondary open">Más info</div>
                                                                <a class="offer__receive button button--primary" href="#">Recibir dinero</a>
                                                            </div>
                                                        </div>
                                                        <div class="offer__repute repute">
                                                            <div class="repute__rating">
                                                                <img class="repute__rating-image" src="/img/stars.svg" alt="stars">
                                                                <div class="repute__rating-number">4,1</div>
                                                            </div>
                                                            <div class="repute__comments">
                                                                Leer <a href="#" class="repute__comments-link">19 comentarios</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="offer__dropdown offer-dropdown">
                                                <div class="offer-dropdown__items">
                                                    <div class="offer-dropdown__item offer-dropdown__repute">
                                                        <ul class="offer-dropdown__repute-list">
                                                            <li class="offer-dropdown__repute-item">
                                                                <div class="offer-dropdown__repute-title">Nuestra calificación</div>
                                                                <div class="offer-dropdown__repute-rating">
                                                                    <img class="offer-dropdown__repute-image" src="/img/stars.svg" alt="stars">
                                                                    <span class="offer-dropdown__repute-number">4,8</span>
                                                                </div>
                                                            </li>
                                                            <li class="offer-dropdown__repute-item">
                                                                <p class="offer-dropdown__repute-text">Interés & Costes</p>
                                                                <img class="offer-dropdown__repute-image" src="/img/stars.svg" alt="stars">
                                                            </li>
                                                            <li class="offer-dropdown__repute-item">
                                                                <p class="offer-dropdown__repute-text">Condiciones</p>
                                                                <img class="offer-dropdown__repute-image" src="/img/stars.svg" alt="stars">
                                                            </li>
                                                            <li class="offer-dropdown__repute-item">
                                                                <p class="offer-dropdown__repute-text">Atención al cliente</p>
                                                                <img class="offer-dropdown__repute-image" src="/img/stars.svg" alt="stars">
                                                            </li>
                                                            <li class="offer-dropdown__repute-item">
                                                                <p class="offer-dropdown__repute-text">Funcionalidad</p>
                                                                <img class="offer-dropdown__repute-image" src="/img/stars.svg" alt="stars">
                                                            </li>
                                                            <li class="offer-dropdown__repute-item">
                                                                <a href="#" class="offer-dropdown__repute-link">Información precisa</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="offer-dropdown__item offer-dropdown__info">
                                                        <ul class="offer-dropdown__info-list">
                                                            <li class="offer-dropdown__info-item">
                                                                <p class="offer-dropdown__info-text">Ser mayor de</p>
                                                                <div class="offer-dropdown__info-number">18</div>
                                                            </li>
                                                            <li class="offer-dropdown__info-item">
                                                                <p class="offer-dropdown__info-text">La tasa de interés</p>
                                                                <div class="offer-dropdown__info-number">5-15%</div>
                                                            </li>
                                                            <li class="offer-dropdown__info-item">
                                                                <p class="offer-dropdown__info-text">Acepta mal historial crediticio</p>
                                                                <img class="offer-dropdown__info-image" src="/img/checkbox.svg" alt="checkbox">
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="offer-dropdown__item offer-dropdown__connection">
                                                        <ul class="offer-dropdown__connection-list">
                                                            <li class="offer-dropdown__connection-item">
                                                                <p class="offer-dropdown__connection-text">Abierto 24/7</p>
                                                                <img class="offer-dropdown__connection-image" src="/img/checkbox.svg" alt="checkbox">
                                                            </li>
                                                            <li class="offer-dropdown__connection-item offer-dropdown__connection-item--column">
                                                                <p class="offer-dropdown__connection-text">WhatsApp</p>
                                                                <a href="tel:+525580703990" class="offer-dropdown__connection-phone">+52 55 8070 3990</a>
                                                            </li>
                                                            <li class="offer-dropdown__connection-item">
                                                                <p class="offer-dropdown__connection-text">Tiene app</p>
                                                                <img class="offer-dropdown__connection-image" src="/img/checkbox.svg" alt="checkbox">
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tabs-content__item" data-tab-content="2">
                                <h2 class="tabs-lk__title">
                                    2
                                </h2>
                            </div>
                            <div class="tabs-content__item" data-tab-content="3">
                                <h2 class="tabs-reviews__title">
                                    3
                                </h2>
                            </div>
                            <div class="tabs-content__item" data-tab-content="4">
                                <h2 class="tabs-reviews__title">
                                    4
                                </h2>
                            </div>
                        </div>
                    </div>
                </section>
                <sidebar class="sidebar">
                    <div class="rating-sidebar">
                        <div class="rating-sidebar__row background-set">
                            <h2 class="rating-sidebar__title title sidebar-title">Rating calificación</h2>
                            <div class="rating-sidebar__repute repute">
                                <div class="repute__rating">
                                    <img class="repute__rating-image" src="/img/stars.svg" alt="stars">
                                    <div class="repute__rating-number">4,8</div>
                                </div>
                                <div class="repute__comments">
                                    Leer <a href="#" class="repute__comments-link">25 comentarios</a>
                                </div>
                            </div>
                            <ul class="rating-sidebar__list">
                                <li class="rating-sidebar__item">
                                    <div class="rating-sidebar__text">Interés & Costes</div>
                                    <div class="rating-sidebar__rating">
                                        <img class="rating-sidebar__rating-image" src="/img/stars.svg" alt="stars">
                                        <div class="rating-sidebar__rating-number">4</div>
                                    </div>
                                </li>
                                <li class="rating-sidebar__item">
                                    <div class="rating-sidebar__text">Condiciones</div>
                                    <div class="rating-sidebar__rating">
                                        <img class="rating-sidebar__rating-image" src="/img/stars.svg" alt="stars">
                                        <div class="rating-sidebar__rating-number">4</div>
                                    </div>
                                </li>
                                <li class="rating-sidebar__item">
                                    <div class="rating-sidebar__text">Atención al cliente</div>
                                    <div class="rating-sidebar__rating">
                                        <img class="rating-sidebar__rating-image" src="/img/stars.svg" alt="stars">
                                        <div class="rating-sidebar__rating-number">4</div>
                                    </div>
                                </li>
                                <li class="rating-sidebar__item">
                                    <div class="rating-sidebar__text">Funcionalidad</div>
                                    <div class="rating-sidebar__rating">
                                        <img class="rating-sidebar__rating-image" src="/img/stars.svg" alt="stars">
                                        <div class="rating-sidebar__rating-number">4</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="entities entities-sidebar">
                        <div class="entities__row background-set">
                            <h2 class="entities__title title sidebar-title">TOP 3 Entidades</h2>
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
                </sidebar>
            </div>
        </div>
    </div>
</div>