<?php

/** @var View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use frontend\widgets\MainPageWidget;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\web\View;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <?= MainPageWidget::widget(['type' => 'seo']) ?>
    <?= MainPageWidget::widget(['type' => 'seo_code','zone' => 'header']) ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header class="header">
    <div class="top-menu">
        <div class="container">
            <div class="main-menu">
                <div class="logo mobile_view">
                    <a href="/"><img src="/img/finjenios-logo.svg" alt="logo"></a>
                </div>
                <div class="logo desktop_view">
                    <a href="/"><img src="/img/logo-white-yellow.svg" alt="logo"></a>
                </div>
            </div>
            <div class="menu__icon icon-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <nav class="main-nav">
        <?= MainPageWidget::widget(['type' => 'menu-top']) ?>
    </nav>
</header>

<!--<main class="main">-->
<main>
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
</main>

<footer class="footer">
    <div class="container">
        <div class="footer__content footer__content--desktop">
            <a href="/" class="footer__logo">
                <img src="/img/logo-footer.svg" alt="Logo">
            </a>
            <?= MainPageWidget::widget(['type' => 'footer-text','zone' => 'title']) ?>
            <div class="footer__columns">
                <?= MainPageWidget::widget(['type' => 'footer-text','zone' => 'text_top']) ?>
                <div class="footer__col footer__col--links">
                    <div class="footer__links">
                        <?= MainPageWidget::widget(['type' => 'menu-footer']) ?>
                        <div class="footer__lists">
                            <ul class="footer__list">
                                <li class="footer__item">
                                    <a href="https://www.condusef.gob.mx/" target="_blank" class="footer__item-link"  rel="nofollow">
                                        <img src="/img/condusef1.svg" alt="Condusef" class="footer__item-logo">
                                        <span>condusef.gob.mx</span>
                                    </a>
                                </li>
                                <li class="footer__item">
                                    <a href="https://www.buro.gob.mx/" target="_blank" class="footer__item-link"  rel="nofollow">
                                        <img src="/img/buro.svg" alt="Buro" class="footer__item-logo">
                                        <span>buro.gob.mx</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--                Contacto-->
                <?= MainPageWidget::widget(['type' => 'contacts-footer']) ?>
            </div>
            <?= MainPageWidget::widget(['type' => 'footer-text','zone' => 'text_bottom']) ?>
<!--            <p class="footer__descr">Finjenios es un servicio independiente, enfocado a categorizar y ofrecer la mejor opción de créditos. Finjenios no es quien administra las solicitudes, pagos ni la disponibilidad de las ofertas. Utilizamos un agloritmo avanzado para poder comparar y ofrecer las mejores opciones. Al momento de realizarse una solicitud, Finjenios recibe una comisión por medio de un link de afiliación. Nos encargamos de que la información de todas las compañías está actualizada, pero la información definitiva se encontrará disponible en la página de la empresa financiera. </p>-->

            <p class="footer__copyright">©FINJENIOS.COM.MX <?= date('Y') ?></p>
        </div>
        <div class="footer__content footer__content--mobile">
            <a href="/" class="footer__logo">
                <img src="/img/logo-footer.svg" alt="Logo">
            </a>
            <?= MainPageWidget::widget(['type' => 'footer-text','zone' => 'title']) ?>

            <div class="footer__columns">
                <div class="footer__col footer__col--text">
                    <p class="footer__text">Ayudamos a comparar cientas de empresas y compañías financieras que brindan servicios de préstamos, créditos, liquidación de deudas, entre muchos otros. Con información actualizada al momento, podrás acceder a tasas y comisiones, requisitos y ofertas vigentes de todas las compañías. Y ¡no te preocupes! Promovemos únicamente a prestamistas y compañías financieras verificadas, con el fin de mantener una alta protección del usuario y de sus finanzas.</p>
                    <p class="footer__text">Nuestra manera de trabajar es muy sencilla– recolectamos información de las compañías financieras, la procesamos usando redes neutrales y expertos en el ámbito, generamos una calificación utilizando un algoritmo con elementos de inteligencia artifical y, posteriormente, los comparamos con diferentes ofertas, para poder ofrecer la que mejor se ajusta al usuario y sus necesidades.</p>
                    <p class="footer__descr">Finjenios es un servicio independiente, enfocado a categorizar y ofrecer la mejor opción de créditos. Finjenios no es quien administra las solicitudes, pagos ni la disponibilidad de las ofertas. Utilizamos un agloritmo avanzado para poder comparar y ofrecer las mejores opciones. Al momento de realizarse una solicitud, Finjenios recibe una comisión por medio de un link de afiliación. Nos encargamos de que la información de todas las compañías está actualizada, pero la información definitiva se encontrará disponible en la página de la empresa financiera. </p>
                </div>
                <div class="footer__col footer__col--links">
                    <div class="footer__links">
                        <div class="footer__lists">
                            <ul class="footer__list">
                                <li class="footer__item">
                                    <a href="https://www.condusef.gob.mx/" target="_blank" class="footer__item-link"  rel="nofollow">
                                        <img src="/img/condusef1.svg" alt="Condusef" class="footer__item-logo">
                                        <span>condusef.gob.mx</span>
                                    </a>
                                </li>
                                <li class="footer__item">
                                    <a href="https://www.buro.gob.mx/" target="_blank" class="footer__item-link"  rel="nofollow">
                                        <img src="/img/buro.svg" alt="Buro" class="footer__item-logo">
                                        <span>buro.gob.mx</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer__line"></div>
                        <?= MainPageWidget::widget(['type' => 'menu-footer']) ?>
                    </div>
                </div>
<!--                Contacto-->
                <?= MainPageWidget::widget(['type' => 'contacts-footer']) ?>
            </div>
            <div class="footer__line"></div>
            <p class="footer__copyright">©FINJENIOS.COM.MX <?= date('Y') ?></p>
        </div>
    </div>
</footer>
<?= MainPageWidget::widget(['type' => 'seo_code','zone' => 'footer']) ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
