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
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header class="header">
    <div class="top-menu">
        <div class="container">
            <div class="main-menu">
                <div class="logo">
                    <a href="/"><img src="/img/logo.svg" alt="logo"></a>
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

<main class="main">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
</main>

<footer class="footer">
    <div class="container">
        <div class="footer__row">
            <ul class="footer-list">
                <li class="footer-list__item">
                    © Zaimomat.ru <?= date('Y') ?>.<br>
                    Все права защищены
                </li>
                <li class="footer-list__item">
                    <a class="footer__tel" href="tel:+74996579635">
                        +7 499 657-96-35
                    </a>
                </li>
                <li class="footer-list__item">
                    Содержание сайта носит исключительно информационно-справочный характер.
                    Сервис Zaimomat.ru не является кредитной организацией и не выдает кредиты.
                </li>
            </ul>

            <ul class="footer-list">
                <li class="footer-list__item">
                    Все представленные компании имеют лицензии на соответствующую деятельность.
                </li>
                <li class="footer-list__item">
                    При использовании материалов активная гиперссылка на Zaimomat.ru обязательна.
                </li>
            </ul>

            <?= MainPageWidget::widget(['type' => 'menu-footer']) ?>

            <ul class="footer-list">
                <li class="footer-list__item">
                    Мы в социальных сетях
                </li>
                <li class="footer-list__item">
                    <ul class="footer-list-soc">
                        <li class="footer-list-soc__item footer-list-soc__item--inst">
                            <a href="#"></a>
                        </li>
                        <li class="footer-list-soc__item footer-list-soc__item--youtube">
                            <a href="#"></a>
                        </li>
                        <li class="footer-list-soc__item footer-list-soc__item--facebook">
                            <a href="#"></a>
                        </li>
                    </ul>
                </li>
                <li class="footer-list__item">
                    <a href="/" class="footer-list__item-logo"></a>
                </li>
            </ul>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
