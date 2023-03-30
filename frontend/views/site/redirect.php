<?php
$this->registerMetaTag(['http-equiv' =>'Refresh', 'content' => '3; https://'.$redirect]);
?>
<style>
    .redirect-box__content {
        display: flex;
        align-items: center;
        justify-content: space-between;
        max-width: 580px;
        margin: 0 auto 0;
    }
    .redirect-box__logo {
        /*width: 180px;*/
        max-width: 180px;
        flex-shrink: 0;
        margin: 0;
    }
    .redirect-box__logo img {
        height: auto;
        object-fit: contain;
    }
    .redirect-box__button-outer {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        max-width: 180px;
    }
    .redirect-box__button-outer:before {
        content: '';
        position: absolute;
        top: 6px;
        left: 5px;
        right: 5px;
        z-index: 1;
        margin: 0 auto;
        border-bottom: 3px solid #6236ff;
    }
    .redirect-box__button-outer-circle {
        position: relative;
        z-index: 2;
        display: block;
        width: 14px;
        height: 14px;
        border: 3px solid #6236ff;
        border-radius: 100%;
        background-color: #6236ff;
    }
    .redirect-box__button-outer-arrow {
        position: relative;
        z-index: 2;
        display: block;
        border-top: 6px solid transparent;
        border-bottom: 6px solid transparent;
        border-left: 12px solid #6236ff;
    }
    .redirect-box__description {
        display: block;
        margin-bottom: 30px;
        font-size: 16px;
        font-weight: 400;
        letter-spacing: normal;
        text-align: center;
        color: #000;
    }
    .redirect-box__title {
        margin-bottom: 25px;
        padding: 30px 0 7px;
        font-size: 24px;
        font-weight: 700;
        line-height: normal;
        letter-spacing: normal;
        color: #000;
        text-align: center;
    }
    .redirect-box__logo img{
        width: 100%;
    }
</style>
<section class="main__block-checkbox block-checkbox" style="margin-bottom: 42px">
    <div class="container">
        <div class="block-checkbox__row background-set">
            <h1 class="redirect-box__title">El equipo de Finjenios te envía a la página oficial de la <?= $mfo->name ?>.</h1>
            <span class="redirect-box__description">Por favor, ¡espera 3 segundos!</span>
            <div class="redirect-box__content">
                <figure class="redirect-box__logo">
                    <img src="/img/logo-footer.svg" alt="Finjenios">
                </figure>
                <div class="redirect-box__button-outer">
                    <span class="redirect-box__button-outer-circle"></span>
                    <span class="redirect-box__button-outer-arrow"></span>
                </div>
                <figure class="redirect-box__logo">
                    <img src="<?= $mfo->logo ?>" alt="<?= $mfo->name ?>">
                </figure>
            </div>
        </div>
    </div>
</section>