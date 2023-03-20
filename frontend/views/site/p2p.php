<?php

use common\models\Reviews;
use frontend\widgets\MainPageWidget;
use yii\helpers\Url;

/* @var $dataProvider yii\data\ActiveDataProvider */

if(isset($text->title_seo) && !empty($text->title_seo)) { $this->title = $text->title_seo; }
if(isset($text->keywords) && !empty($text->keywords)) { $this->registerMetaTag(['name' => 'keywords','content' => $text->keywords]); }
if(isset($text->description) && !empty($text->description)) { $this->registerMetaTag(['name' => 'description','content' => $text->description]); }
?>
<div class="breadcrumbs">
    <div class="container">
        <ul class="breadcrumbs__items">
            <li class="breadcrumbs__item">
                <a href="/" class="breadcrumbs__link">Inicio</a>
            </li>
            <li class="breadcrumbs__item">
                Préstamos P2P
            </li>
        </ul>
    </div>
</div>
<div class="content">
    <div class="container">
        <h1 class="main__title main-title">Préstamos P2P</h1>
<!--        --><?php //if($text->text_top) : ?>
            <div class="values__descr">
                Si estás buscando de un minicrédito o un préstamo que no te involucre con otras instituciones financieras,
                entonces los préstamos p2p son la mejor opción para ti. Podrás solicitar el dinero completando un sencillo
                formulario y en poco tiempo inversores comenzarán a aportar capital, permitiéndote recibir el dinero en tu
                cuenta bancaria. Aprende todo sobre préstamos p2p México y obtén tu crédito ahora.
<!--                --><?php //= $text->text_top ?>
            </div>
<!--        --><?php //endif; ?>
        <div class="content__block">
            <div class="content__row">
                <section class="cards">
                    <?php foreach ($mfos as $mfo) :
                        $reviewsCount = Reviews::find()->where(['mfo_id' => $mfo->id, 'status' => 1])->count();
                        $sum = $mfo->sum;
                        $term = $mfo->term;
                        $procent = (float)str_replace(',', '.', $mfo->data['condiciones']['rate_first']);

                        $sumAll = $sum * ($procent/100) * $term;
                        $sumWithVat = $sumAll * 0.16;
                        $totalSum = $sumAll + $sumWithVat;
                        $total = $sum + $totalSum;

                        $totalFormat = number_format($total, 2, '.', '');
                        ?>
                        <div class="offer change-text">
                            <div class="offer__row">
                                <div class="offer__company">
                                    <?php if(isset($mfo['params']['color']) && $mfo['params']['color']['name']) : ?>
                                    <div class="offer__company-line" style="background: <?= $mfo['params']['color']['color'] ?>;"><?= $mfo['params']['color']['name'] ?></div>
                                    <?php endif; ?>
                                    <div class="offer__company-logo">
                                        <?php if($mfo->logo) : ?>
                                            <div class="offer__company-img">
                                                <a href="<?= Url::toRoute(['mfo/view', 'url' => $mfo->url]) ?>">
                                                    <img src="<?= $mfo->logo ?>" alt="<?= $mfo->name ?>">
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                        <div class="repute">
                                            <div class="repute__rating">
                                                <img class="repute__rating-image" src="/img/stars.svg" alt="stars">
                                                <div class="repute__rating-number">4,4</div>
                                            </div>
                                            <div class="repute__comments">
                                                <?php if($reviewsCount > 0) : ?>
                                                    Leer <a href="<?= Url::toRoute(['mfo/reviews', 'url' => $mfo->url]) ?>" class="repute__comments-link"><?= $reviewsCount ?> comentarios</a>
                                                <?php else: ?>
                                                    <a href="<?= Url::toRoute(['mfo/reviews', 'url' => $mfo->url]) ?>" class="repute__comments-link">Danos tu opinión
                                                    </a>
                                                <?php endif; ?>
                                            </div>

                                        </div>
                                    </div>
                                    <?php if(isset($mfo->data['data_company']['legal_name_company']) && $mfo->data['data_company']['legal_name_company'] != '-') : ?>
                                        <div class="offer__company-title"><?= $mfo->data['data_company']['legal_name_company'] ?></div>
                                    <?php endif; ?>
                                </div>
                                <div class="offer__content">
                                    <div class="offer__value">
                                        <ul class="offer__value-list">
                                            <li class="offer__value-item">
                                                <div class="offer__value-title">
                                                    Monto del Préstamo, $</div>
                                                <div class="offer__value-number"><?= $sum ?></div>
                                            </li>
                                            <li class="offer__value-item">
                                                <div class="offer__value-title">
                                                    Fecha de Pago, días</div>
                                                <div class="offer__value-number"><?= $term ?></div>
                                            </li>
                                            <li class="offer__value-item">
                                                <div class="offer__value-title">
                                                    Tasa de interés, %</div>
                                                <div class="offer__value-number"><?= $mfo->data['condiciones']['rate_first'] ?></div>
                                            </li>
                                            <li class="offer__value-item">
                                                <div class="offer__value-title">
                                                    Total a Pagar, $</div>
                                                <div class="offer__value-number"><?= $totalFormat ?></div>
                                            </li>
                                            <li class="offer__value-item">
                                                <div class="offer__value-title">
                                                    CAT, %</div>
                                                <?php
                                                    $cat = 11;
                                                    if($mfo->data['condiciones']['min_total_cost'] != '-'){
                                                        $cat = $mfo->data['condiciones']['min_total_cost'];
                                                    }
                                                    if($mfo->data['condiciones']['max_total_cost'] != '-'){
                                                        $cat = $mfo->data['condiciones']['max_total_cost'];
                                                    }
                                                    if($mfo->data['condiciones']['min_total_cost'] != '-' && $mfo->data['condiciones']['max_total_cost'] != '-'){
                                                        $cat = $mfo->data['condiciones']['min_total_cost'].' - '.$mfo->data['condiciones']['max_total_cost'];
                                                    }
                                                ?>
                                                <div class="offer__value-number"><?= $cat ?></div>
                                            </li>
<!--                                            <li class="offer__value-item offer__value-item--last">-->
<!--                                                <div class="offer__value-title">-->
<!--                                                    Nuestra calificación</div>-->
<!--                                                <div class="offer__value-number">--><?php //= $mfo['params']['rating_auto']['rating']['allRating'] ?><!--</div>-->
<!--                                            </li>-->
                                        </ul>
                                    </div>
                                    <div class="offer__info">
                                        <div class="offer__buttons">
                                            <input type="checkbox" checked class="checkbox">
                                            <div class="offer__links">
                                                <div class="offer__open button button--secondary open">Más info</div>
                                                <?php if(isset($mfo->data['meta_tags']['affiliate']) && $mfo->data['meta_tags']['affiliate'] != '-') : ?>
                                                    <a class="offer__receive button button--primary" target="_blank" href="//<?= $mfo->data['meta_tags']['affiliate'] ?>">Recibir dinero</a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="offer__repute repute">

                                            <div class="repute__comments">
                                                <?php if($reviewsCount > 0) : ?>
                                                    Leer <a href="<?= Url::toRoute(['mfo/reviews', 'url' => $mfo->url]) ?>" class="repute__comments-link"><?= $reviewsCount ?> comentarios</a>
                                                <?php else: ?>
                                                    <a href="<?= Url::toRoute(['mfo/reviews', 'url' => $mfo->url]) ?>" class="repute__comments-link">Danos tu opinión
                                                    </a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="offer__dropdown offer-dropdown">
                                <div class="offer-dropdown__items">
                                    <div class="offer-dropdown__item offer-dropdown__repute">

                                    </div>
                                    <div class="offer-dropdown__item offer-dropdown__info">
                                        <ul class="offer-dropdown__info-list">
                                            <?php if(isset($mfo->data['requisitos']['older_than']) && $mfo->data['requisitos']['older_than'] != '-') : ?>
                                                <li class="offer-dropdown__info-item">
                                                    <p class="offer-dropdown__info-text">Ser mayor de</p>
                                                    <div class="offer-dropdown__info-number"><?= $mfo->data['requisitos']['older_than'] ?></div>
                                                </li>
                                            <?php endif; ?>
                                            <?php if(isset($mfo->data['condiciones']['rate_first']) && $mfo->data['condiciones']['rate_first'] != '-') : ?>
                                                <li class="offer-dropdown__info-item">
                                                    <p class="offer-dropdown__info-text">Tasa de interés anual</p>
                                                    <div class="offer-dropdown__info-number"><?= $mfo->data['condiciones']['rate_first'] ?></div>
                                                </li>
                                            <?php endif; ?>

                                            <li class="offer-dropdown__info-item">
                                                <p class="offer-dropdown__info-text">Acepta mal historial crediticio</p>
                                                <img class="offer-dropdown__info-image" src="/img/checkbox.svg" alt="checkbox">
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="offer-dropdown__item offer-dropdown__connection">
                                        <ul class="offer-dropdown__connection-list">
                                            <?php if(isset($mfo->data['characteristic']['round_the_clock']) && $mfo->data['characteristic']['round_the_clock'] != '-') : ?>
                                                <li class="offer-dropdown__connection-item">
                                                    <p class="offer-dropdown__connection-text">Abierto 24/7</p>
                                                    <img class="offer-dropdown__connection-image" src="/img/checkbox.svg" alt="checkbox">
                                                </li>
                                            <?php endif; ?>

                                            <?php if(isset($mfo->data['contacts']['whatsapp']) && $mfo->data['contacts']['whatsapp'] != '-') : ?>
                                                <li class="offer-dropdown__connection-item offer-dropdown__connection-item--column">
                                                    <p class="offer-dropdown__connection-text">WhatsApp</p>
                                                    <a href="tel:<?= $mfo->data['contacts']['whatsapp'] ?>" class="offer-dropdown__connection-phone"><?= $mfo->data['contacts']['whatsapp'] ?></a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if(isset($mfo->data['characteristic']['tiene_app']) && $mfo->data['characteristic']['tiene_app'] != '-') : ?>
                                                <li class="offer-dropdown__connection-item">
                                                    <p class="offer-dropdown__connection-text"><?= $mfoText['characteristic']['tiene_app'] ?></p>
                                                    <img class="offer-dropdown__connection-image" src="/img/checkbox.svg" alt="checkbox">
                                                </li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
<!--                    <button class="offer__all button button--secondary">Mostrar todas las ofertas</button>-->
                </section>
                <!-- <sidebar class="sidebar"></sidebar> -->
            </div>
        </div>
<!--        --><?php //if($text->text_bottom) : ?>
            <div class="values__descr">
                <h2>¿Qué son los Préstamos P2P?</h2>

                <p>Un préstamo p2p, también llamado préstamo “peer to peer” es una transacción entre 2 personas en las cuáles
                se brinda un crédito o préstamo. Esto permite que la transacción no tenga intervención de una institución
                financiera, pero también conlleva una tasa de interés más alta.</p>

                <h2>¿Qué Tan Conveniente es un Préstamo P2P?</h2>

                <p>Al momento de solicitar los p2p préstamos, se realiza un análisis de tu perfil y se te asigna un grado de riesgo,
                    según tu buró de crédito e historial crediticio, con lo que después se publicará una oferta para que múltiples
                    inversionistas aporten capital a tu crédito. Una vez el importe total del crédito es alcanzado, se te abona en tu cuenta
                    bancaria, pero es importante tener en cuenta algunos aspectos para que sea conveniente para ti solicitarlo.</p>
                <p>
                    Las plataformas intermediarias siempre cobran una comisión por el servicio, por lo que es importante tomarlo en cuenta al hacer los pagos
                    de nuestras cuotas mes tras mes.
                    La tasa de interés será más alta que en una institución financiera, pero te permitirá acceder a un préstamo de manera más sencilla.
                    Los créditos suelen denominarse “microcréditos”, ya que su importe es bajo.</p>
                <p>Si requieres de un préstamo corto y no tienes los requisitos para solicitar uno en el banco, te
                    conviene solicitar un préstamo P2P, siempre y cuando cumplas con todas las cuotas correctamente.</p>

                <h2>¿Dónde Puedo Contratar un Préstamo P2P Confiable y Seguro?</h2>

                <p>Lo primero que debes hacer es consultar el sitio web del prestamista y analizar toda la información que
                    contiene, como las comisiones, montos de préstamo, cuotas, entre otros. Asegúrate de que el intermediario
                    prestamista es de confiar y se encuentra validado. Algunas de las plataformas de préstamos p2p son Kubo Financiero,
                    Doopla, 100 Ladrillos y RedGirasol, posicionándose como las más utilizadas en México. </p>

                <h2>¿Cuáles son las Tasas de Interés en los Préstamos P2P?</h2>

                <p>Al momento de rellenar el formulario, el intermediario prestamista realizará un análisis detallado,
                    el cuál definirá el porcentaje de riesgo de cada persona. Esto significa, que el riesgo será mayor
                    entre más cuotas atrasadas, no pagadas o en general, peor historial crediticio se tenga. Por el otro
                    lado, entre mejor sea nuestro historial crediticio, menor será el riesgo asignado a nuestro perfil.
                    Así como los inversionistas definirán el monto con el que quieren aportar a tu crédito, según el
                    porcentaje de riesgo, así el intermediario marcará una tasa de interés. Las tasas de interés suelen
                    variar entre el 0.5% y el 70%, por lo que es importante tomar esto en cuenta al momento de cumplir
                    con nuestras cuotas mensuales.</p>

                <h2>¿Qué Características Debo Revisar al Solicitar un Préstamo P2P?</h2>
                <p>A lo largo del proceso de solicitar un préstamo p2p, se debe tomar en cuenta ciertas características,
                    que nos permitirán tener una mejor experiencia y evitar fraudes. Antes de realizar una solicitud,
                    debemos verificar lo siguiente:</p>
                <ul>
                    <li>Año de Fundación de la Empresa de Créditos. Esto te permitirá saber la permanencia con la que cuenta la empresa.</li>
                    <li>Casos de Éxito.  Revisa el porcentaje de personas que han tenido buenas experiencias y si es posible, el número
                        de personas con un préstamo actualmente.
                    </li>
                    <li>Redes Sociales. Saber la presencia que tiene la empresa, así como la clase de comentarios que recibe en
                        sus publicaciones, te brindará una seguridad más real en cuanto a la opinión de personas que ya han solicitado un crédito.
                    </li>
                    <li>Tipos de Préstamos. Algo importante es revisar si los créditos son generales o si existen categorías como
                        créditos para salud, para remodelación, para emergencias, entre otros. </li>
                </ul>
                <p>Si has verificado los datos anteriores y te encuentras seguro de querer solicitar un préstamo con dicha
                    empresa, entonces te invitamos a hacerlo. Por otro lado, debes verificar los siguientes datos al
                    momento de aceptar la oferta que te brindan:</p>
                <ul>
                    <li>Tasa de Interés. Es importante que revises cuál es tu tasa de interés y la tomes en cuenta, en caso de no poder realizar un pago a tiempo.</li>
                    <li>Garantías Aportadas. Revisa detalladamente las garantías que se brindan tanto a ti, como a los inversionistas,
                        con el objetivo de saber exactamente cómo será el crédito que recibirás.
                    </li>
                    <li>Monto de Crédito. En muchas ocasiones, los préstamos p2p manejan montos de crédito bajos,
                        por lo que antes de aceptar, debes asegurarte de recibir exactamente lo que necesitas.
                    </li>
                </ul>
                <p>
                    Teniendo eso en cuenta y estando de acuerdo con dichos datos, entonces puedes ir adelante y aceptar el crédito que te están brindando.
                </p>
                <h2>Conclusión</h2>
                <p>Los préstamos peer 2 peer son una gran herramienta para cualquiera, independientemente del motivo al
                    cuál están destinados. Sin embargo, es importante que tengamos cuidado en cada paso del proceso,
                    ya que, al no estar conectado a una institución financiera, siempre existirá un riesgo durante su uso. </p>
                <p>Te invitamos a que siempre leas las opiniones de los demás usuarios, para así poder tener un contexto
                    mucho más completo de estos préstamos ya que le permitirán a cualquiera que no cuenta con los requisitos
                    para tener un préstamo del banco, recibir un crédito p2p y así, incluso mejorar su historial crediticio en el proceso.</p>
                <p>
                    ¡Esperamos que este artículo te haya resultado de utilidad y que te ayudara a entender mejor los préstamos p2p!
                </p>

                <!--                --><?php //= $text->text_bottom ?>
            </div>
<!--        --><?php //endif; ?>
    </div>
</div>
