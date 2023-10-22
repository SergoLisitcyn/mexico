<div class="tabs-content__datas datas">
    <h2 class="datas__title title">Contacto</h2>
    <div class="datas__columns">
        <ul class="datas__column">
            <?php if(isset($model->data['contacts']['contact_city']) && $model->data['contacts']['contact_city'] != '-') : ?>
                <li class="datas__col">
                    <div class="datas__caption"><?= $mfoText['contacts']['contact_city'] ?></div>
                    <p class="datas__text"><?= $model->data['contacts']['contact_city'] ?></p>
                </li>
            <?php endif; ?>

            <?php if(isset($model->data['contacts']['contact_direction']) && $model->data['contacts']['contact_direction'] != '-') : ?>
                <li class="datas__col">
                    <div class="datas__caption"><?= $mfoText['contacts']['contact_direction'] ?></div>
                    <p class="datas__text"><?= $model->data['contacts']['contact_direction'] ?></p>
                </li>
            <?php endif; ?>

            <?php if(isset($model->data['contacts']['postal_code']) && $model->data['contacts']['postal_code'] != '-') : ?>
                <li class="datas__col">
                    <div class="datas__caption"><?= $mfoText['contacts']['postal_code'] ?></div>
                    <p class="datas__text"><?= $model->data['contacts']['postal_code'] ?></p>
                </li>
            <?php endif; ?>

            <?php if(isset($model->data['contacts']['phone']) && $model->data['contacts']['phone'] != '-') : ?>
                <li class="datas__col">
                    <div class="datas__caption"><?= $mfoText['contacts']['phone'] ?></div>
                    <p class="datas__text"><a href="tel:<?= $model->data['contacts']['phone'] ?>"><?= $model->data['contacts']['phone'] ?></a></p>
                </li>
            <?php endif; ?>

            <?php if(isset($model->data['contacts']['phone_1']) && $model->data['contacts']['phone_1'] != '-') : ?>
                <li class="datas__col">
                    <div class="datas__caption"><?= $mfoText['contacts']['phone_1'] ?></div>
                    <p class="datas__text"><a href="tel:<?= $model->data['contacts']['phone_1'] ?>"><?= $model->data['contacts']['phone_1'] ?></a></p>
                </li>
            <?php endif; ?>
<!--            <li class="datas__col">-->
<!--                <div class="datas__caption">Google maps</div>-->
<!--            </li>-->
        </ul>
        <ul class="datas__column">
            <?php if(isset($model->data['contacts']['whatsapp']) && $model->data['contacts']['whatsapp'] != '-') : ?>
                <li class="datas__col">
                    <div class="datas__caption"><?= $mfoText['contacts']['whatsapp'] ?></div>
                    <p class="datas__text"><?= $model->data['contacts']['whatsapp'] ?></p>
                </li>
            <?php endif; ?>
            <li class="datas__col">
                <div class="datas__caption">Las redes sociales</div>
                <div class="datas__social">
                    <?php if(isset($model->data['contacts']['facebook']) && $model->data['contacts']['facebook'] != '-') : ?>
                        <a href="//<?= $model->data['contacts']['facebook'] ?>" target="_blank" class="datas__social-link">
                            <img class="datas__social-img" src="/img/social/facebook.svg" alt="facebook">
                        </a>
                    <?php endif; ?>
                    <?php if(isset($model->data['contacts']['instagram']) && $model->data['contacts']['instagram'] != '-') : ?>
                        <a href="//<?= $model->data['contacts']['instagram'] ?>" target="_blank" class="datas__social-link">
                            <img class="datas__social-img" src="/img/social/instagram.svg" alt="instagram">
                        </a>
                    <?php endif; ?>

                    <?php if(isset($model->data['contacts']['twitter']) && $model->data['contacts']['twitter'] != '-') : ?>
                        <a href="//<?= $model->data['contacts']['twitter'] ?>" target="_blank" class="datas__social-link">
                            <img class="datas__social-img" src="/img/social/twitter.svg" alt="twitter">
                        </a>
                    <?php endif; ?>

                    <?php if(isset($model->data['contacts']['youtube']) && $model->data['contacts']['youtube'] != '-') : ?>
                        <a href="//<?= $model->data['contacts']['youtube'] ?>" target="_blank" class="datas__social-link">
                            <img class="datas__social-img" src="/img/social/youtube.svg" alt="youtube">
                        </a>
                    <?php endif; ?>

                    <?php if(isset($model->data['contacts']['linkedin']) && $model->data['contacts']['linkedin'] != '-') : ?>
                        <a href="//<?= $model->data['contacts']['linkedin'] ?>" target="_blank" class="datas__social-link">
                            <img class="datas__social-img" src="/img/social/linkedin.svg" alt="linkedin">
                        </a>
                    <?php endif; ?>
                </div>
            </li>
            <?php if(isset($model->data['contacts']['business_hours']) && $model->data['contacts']['business_hours'] != '-') : ?>
                <li class="datas__col">
                    <div class="datas__caption"><?= $mfoText['contacts']['business_hours'] ?></div>
                    <p class="datas__text"><?= $model->data['contacts']['business_hours'] ?></p>
                </li>
            <?php endif; ?>
            <?php if(isset($model->data['contacts']['email']) && $model->data['contacts']['email'] != '-') : ?>
                <li class="datas__col">
                    <div class="datas__caption"><?= $mfoText['contacts']['email'] ?></div>
                    <a href="mailto:<?= $model->data['contacts']['email'] ?>" class="datas__email"><?= $model->data['contacts']['email'] ?></a>
                </li>
            <?php endif; ?>
            <?php if(isset($model->data['meta_tags']['affiliate']) && $model->data['meta_tags']['affiliate'] != '-') : ?>
                <li class="datas__col">
                    <div class="datas__caption"><?= $mfoText['mother_company']['sitio'] ?></div>
                    <a href="//<?= $model->data['meta_tags']['affiliate'] ?>" target="_blank" rel="nofollow" class="datas__email"><?= $model->data['meta_tags']['site'] ?></a>
                </li>
            <?php elseif (isset($model->data['mother_company']['sitio']) && $model->data['mother_company']['sitio'] != '-') : ?>
                <li class="datas__col">
                    <div class="datas__caption"><?= $mfoText['mother_company']['sitio'] ?></div>
                    <a href="//<?= $model->data['mother_company']['sitio'] ?>" target="_blank" rel="nofollow" class="datas__email"><?= $model->data['meta_tags']['site'] ?></a>
                </li>
            <?php elseif (isset($model->data['meta_tags']['site']) && $model->data['meta_tags']['site'] != '-') : ?>
                <li class="datas__col">
                    <div class="datas__caption"><?= $mfoText['mother_company']['sitio'] ?></div>
                    <a href="//<?= $model->data['meta_tags']['site'] ?>" target="_blank" rel="nofollow" class="datas__email"><?= $model->data['meta_tags']['site'] ?></a>
                </li>
            <?php endif; ?>

        </ul>
    </div>
</div>
<?php if(isset($model->data['contacts']['google_maps']) && $model->data['contacts']['google_maps'] != '-') : ?>
<!--    <div class="datas__caption" style="margin-top: 30px;">Google maps</div>-->
<div class="tabs-content__map map">
    <?= $model->data['contacts']['google_maps'] ?>
</div>
<?php endif; ?>