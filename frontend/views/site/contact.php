<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \frontend\models\ContactForm $model */

use himiklab\yii2\recaptcha\ReCaptcha2;
use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
?>
<div class="main__page-info">
    <div class="container">
        <div class="main__breadcrumbs breadcrumbs">
            <ul class="breadcrumbs__items">
                <li class="breadcrumbs__item">
                    <a href="/" class="breadcrumbs__link">Inicio</a>
                </li>
                <li class="breadcrumbs__item">
                    Contacto
                </li>
            </ul>
        </div>
        <h1 class="main__title main-title">Contacto</h1>
    </div>
</div>
<div class="content">
    <div class="container">
        <div class="content__block">
            <div class="content__row">
                <section class="content__comments-sect comments-sect" style="margin-bottom: 30px">
                    <div class="row">
                        <div class="col-lg-12" style="padding-bottom: 20px">
                            <?php $form = ActiveForm::begin([
                                'options' => [
                                    'class' => 'main-form',
                                    'id' => 'contacts-form'
                                ]
                            ]); ?>
                            <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
                            <div class="row">
                                <div class="col-lg-6">
                                    <?= $form->field($model, 'name')->textInput(['class' => 'main-form__input main-form__input--person','placeholder' => "Nombre"])->label(false) ?>
                                </div>
                                <div class="col-lg-6">
                                    <?= $form->field($model, 'email')->textInput(['class' => 'main-form__input main-form__input--person','placeholder' => "Email"])->label(false) ?>
                                </div>
                            </div>
                            <?= $form->field($model, 'body')->textarea(['rows' => 6,'placeholder' => "Mensaje",'class' => 'main-form__input'])->label(false) ?>

<!--                            --><?php //= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
//                                'template' => '<div class="row"><div class="col-lg-6">{image}</div><div class="col-lg-6">{input}</div></div>',
//                            ]) ?>
                            <?= $form->field($model, 'reCaptcha')->widget(
                                ReCaptcha2::className(),
                                [
                                    'siteKey' => '6Le-e1slAAAAAGdE1gHlP5RNeCT26P_fhaAmqAGJ',
                                ]
                            ) ?>

                            <?= Html::submitButton('Enviar un mensaje', ['class' => 'main-form__button button button--primary']) ?>

                            <?php ActiveForm::end(); ?>
                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1137.1291845491928!2d76.95641077480387!3d43.22914106561237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38836f040a6f3b65%3A0x16edea719373425f!2zb2ZpY2luYSAzYywg0L_RgNC-0YHQv9C10LrRgiBB0LvRjC3QpNCw0YDQsNCx0LggMTksINCQ0LvQvNCw0YLRiyAwNTAwNTEsINCa0LDQt9Cw0YXRgdGC0LDQvQ!5e0!3m2!1sru!2sru!4v1682347468607!5m2!1sru!2sru" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
