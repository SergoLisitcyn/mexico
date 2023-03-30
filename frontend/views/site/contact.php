<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \frontend\models\ContactForm $model */

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
                        <div class="col-lg-6">
                            <?php $form = ActiveForm::begin([
                                'options' => [
                                    'class' => 'main-form',
                                    'id' => 'contacts-form'
                                ]
                            ]); ?>
                            <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
                            <?= $form->field($model, 'name')->textInput(['class' => 'main-form__input main-form__input--person','placeholder' => "Nombre"]) ?>
                            <?= $form->field($model, 'email')->textInput(['class' => 'main-form__input main-form__input--person','placeholder' => "Email"]) ?>
                            <?= $form->field($model, 'body')->textarea(['rows' => 6,'placeholder' => "Mensaje",'class' => 'main-form__input']) ?>

<!--                            --><?php //= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
//                                'template' => '<div class="row"><div class="col-lg-6">{image}</div><div class="col-lg-6">{input}</div></div>',
//                            ]) ?>
<!--                            --><?php //= $form->field($model, 'reCaptcha')->widget(
//                                \himiklab\yii2\recaptcha\ReCaptcha2::className(),
//                                [
//                                    'siteKey' => '6LcVb0MlAAAAABQg6h9WqzweK1DCj-SWKs8UvLm_',
//                                ]
//                            ) ?>
                            <?= $form->field($model, 'reCaptcha')->widget(
                                \himiklab\yii2\recaptcha\ReCaptcha3::className(),
                                [
                                    'siteKey' => '6LcVb0MlAAAAABQg6h9WqzweK1DCj-SWKs8UvLm_',
                                    'action' => 'contact',
                                ]
                            ) ?>

                            <?= Html::submitButton('Enviar un mensaje', ['class' => 'main-form__button button button--primary']) ?>

                            <?php ActiveForm::end(); ?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
