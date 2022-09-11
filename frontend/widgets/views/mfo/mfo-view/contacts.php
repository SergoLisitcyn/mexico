<div class="tabs-content__datas datas">
    <h2 class="datas__title title">Contacto</h2>
    <div class="datas__columns">
        <ul class="datas__column">
            <?php if(isset($model['contact_city']) && $model['contact_city'] != '-') : ?>
                <li class="datas__col">
                    <div class="datas__caption"><?= $mfoText['contacts']['contact_city'] ?></div>
                    <p class="datas__text"><?= $model['contact_city'] ?></p>
                </li>
            <?php endif; ?>

            <?php if(isset($model['contact_direction']) && $model['contact_direction'] != '-') : ?>
                <li class="datas__col">
                    <div class="datas__caption"><?= $mfoText['contacts']['contact_direction'] ?></div>
                    <p class="datas__text"><?= $model['contact_direction'] ?></p>
                </li>
            <?php endif; ?>

            <?php if(isset($model['postal_code']) && $model['postal_code'] != '-') : ?>
                <li class="datas__col">
                    <div class="datas__caption"><?= $mfoText['contacts']['postal_code'] ?></div>
                    <p class="datas__text"><?= $model['postal_code'] ?></p>
                </li>
            <?php endif; ?>

            <?php if(isset($model['phone']) && $model['phone'] != '-') : ?>
                <li class="datas__col">
                    <div class="datas__caption"><?= $mfoText['contacts']['phone'] ?></div>
                    <p class="datas__text"><a href="tel:<?= $model['phone'] ?>"><?= $model['phone'] ?></a></p>
                </li>
            <?php endif; ?>

            <?php if(isset($model['phone_1']) && $model['phone_1'] != '-') : ?>
                <li class="datas__col">
                    <div class="datas__caption"><?= $mfoText['contacts']['phone_1'] ?></div>
                    <p class="datas__text"><a href="tel:<?= $model['phone_1'] ?>"><?= $model['phone_1'] ?></a></p>
                </li>
            <?php endif; ?>
<!--            <li class="datas__col">-->
<!--                <div class="datas__caption">Google maps</div>-->
<!--            </li>-->
        </ul>
        <ul class="datas__column">
            <?php if(isset($model['whatsapp']) && $model['whatsapp'] != '-') : ?>
                <li class="datas__col">
                    <div class="datas__caption"><?= $mfoText['contacts']['whatsapp'] ?></div>
                    <p class="datas__text"><?= $model['whatsapp'] ?></p>
                </li>
            <?php endif; ?>
            <li class="datas__col">
                <div class="datas__caption">Las redes sociales</div>
                <div class="datas__social">
                    <?php if(isset($model['facebook']) && $model['facebook'] != '-') : ?>
                        <a href="//<?= $model['facebook'] ?>" target="_blank" class="datas__social-link">
                            <img class="datas__social-img" src="/img/social/facebook.svg" alt="facebook">
                        </a>
                    <?php endif; ?>
                    <?php if(isset($model['instagram']) && $model['instagram'] != '-') : ?>
                        <a href="//<?= $model['instagram'] ?>" target="_blank" class="datas__social-link">
                            <img class="datas__social-img" src="/img/social/instagram.svg" alt="instagram">
                        </a>
                    <?php endif; ?>

                    <?php if(isset($model['twitter']) && $model['twitter'] != '-') : ?>
                        <a href="//<?= $model['twitter'] ?>" target="_blank" class="datas__social-link">
                            <img class="datas__social-img" src="/img/social/twitter.svg" alt="twitter">
                        </a>
                    <?php endif; ?>

                    <?php if(isset($model['youtube']) && $model['youtube'] != '-') : ?>
                        <a href="//<?= $model['youtube'] ?>" target="_blank" class="datas__social-link">
                            <img class="datas__social-img" src="/img/social/youtube.svg" alt="youtube">
                        </a>
                    <?php endif; ?>

                    <?php if(isset($model['linkedin']) && $model['linkedin'] != '-') : ?>
                        <a href="//<?= $model['linkedin'] ?>" target="_blank" class="datas__social-link">
                            <img class="datas__social-img" src="/img/social/linkedin.svg" alt="linkedin">
                        </a>
                    <?php endif; ?>
                </div>
            </li>
            <?php if(isset($model['business_hours']) && $model['business_hours'] != '-') : ?>
                <li class="datas__col">
                    <div class="datas__caption"><?= $mfoText['contacts']['business_hours'] ?></div>
                    <p class="datas__text"><?= $model['business_hours'] ?></p>
                </li>
            <?php endif; ?>
            <?php if(isset($model['email']) && $model['email'] != '-') : ?>
                <li class="datas__col">
                    <div class="datas__caption"><?= $mfoText['contacts']['email'] ?></div>
                    <a href="mailto:<?= $model['email'] ?>" class="datas__email"><?= $model['email'] ?></a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</div>
<?php if(isset($model['google_maps']) && $model['google_maps'] != '-') : ?>
    <div class="datas__caption" style="margin-top: 30px;">Google maps</div>
<div class="tabs-content__map map">
    <?= $model['google_maps'] ?>
</div>
<?php endif; ?>