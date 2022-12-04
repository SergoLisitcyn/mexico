<!--Contacts-->
<?php if($contacts->status == 1 ) : ?>
<section class="main__datas datas">
    <div class="container">
        <h2 class="datas__title title">Contacto</h2>
        <div class="datas__columns">
            <ul class="datas__column">
                <?php if($contacts->city) : ?>
                <li class="datas__col">
                    <div class="datas__caption">La ciudad</div>
                    <p class="datas__text"><?= $contacts->city ?></p>
                </li>
                <?php endif; ?>
                <?php if($contacts->direction) : ?>
                <li class="datas__col">
                    <div class="datas__caption">La dirección</div>
                    <p class="datas__text"><?= $contacts->direction ?></p>
                </li>
                <?php endif; ?>
                <?php if($contacts->postal_code) : ?>
                <li class="datas__col">
                    <div class="datas__caption">Código Postal</div>
                    <p class="datas__text"><?= $contacts->postal_code ?></p>
                </li>
                <?php endif; ?>
                <?php if($contacts->phone) : ?>
                <li class="datas__col">
                    <div class="datas__caption">Teléfono</div>
                    <p class="datas__text"><?= $contacts->phone ?></p>
                </li>
                <?php endif; ?>
            </ul>
            <ul class="datas__column">
                <?php if($contacts->phone_second) : ?>
                <li class="datas__col">
                    <div class="datas__caption">Teléfono</div>
                    <p class="datas__text"><?= $contacts->phone_second ?></p>
                </li>
                <?php endif; ?>
                <?php if($contacts->email) : ?>
                <li class="datas__col">
                    <div class="datas__caption">Correo electrónico</div>
                    <a href="mailto:<?= $contacts->email ?>" class="datas__email"><?= $contacts->email ?></a>
                </li>
                <?php endif; ?>
                <?php if($contacts->whatsapp) : ?>
                <li class="datas__col">
                    <div class="datas__caption">WhatsApp:</div>
                    <p class="datas__text"><?= $contacts->whatsapp ?></p>
                </li>
                <?php endif; ?>
                <?php if($contacts->facebook || $contacts->instagram || $contacts->youtube) : ?>
                <li class="datas__col">
                    <div class="datas__caption">Las redes sociales</div>
                    <div class="datas__social">
                        <?php if($contacts->facebook) : ?>
                        <a href="<?= $contacts->facebook ?>" class="datas__social-link">
                            <img class="datas__social-img" src="/img/social/facebook.svg" alt="facebook">
                        </a>
                        <?php endif; ?>
                        <?php if($contacts->instagram) : ?>
                        <a href="<?= $contacts->instagram ?>" class="datas__social-link">
                            <img class="datas__social-img" src="/img/social/instagram.svg" alt="instagram">
                        </a>
                        <?php endif; ?>
                        <?php if($contacts->twitter) : ?>
                        <a href="<?= $contacts->twitter ?>" class="datas__social-link">
                            <img class="datas__social-img" src="/img/social/twitter.svg" alt="twitter">
                        </a>
                        <?php endif; ?>
                        <?php if($contacts->youtube) : ?>
                        <a href="<?= $contacts->youtube ?>" class="datas__social-link">
                            <img class="datas__social-img" src="/img/social/youtube.svg" alt="youtube">
                        </a>
                        <?php endif; ?>
                        <?php if($contacts->linkedin) : ?>
                        <a href="<?= $contacts->linkedin ?>" class="datas__social-link">
                            <img class="datas__social-img" src="/img/social/linkedin.svg" alt="linkedin">
                        </a>
                        <?php endif; ?>
                    </div>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</section>
<?php endif; ?>