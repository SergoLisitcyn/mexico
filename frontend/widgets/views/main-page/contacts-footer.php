<div class="footer__col footer__col--contacts">
    <div class="footer__contacts">
        <div class="footer__box">
            <div class="footer__caption">Contacto</div>
            <div class="footer__socials socials">
                <?php if($contacts->phone) : ?>
                    <div class="socials__item">
                        <a href="tel:<?= $contacts->phone ?>" class="socials__link">
                            <img src="/img/social/icon-phone.svg" alt="Phone" class="socials__icon socials__icon--phone">
                            <span><?= $contacts->phone ?></span>
                        </a>
                    </div>
                <?php endif; ?>
                <?php if($contacts->facebook || $contacts->twitter) : ?>
                    <div class="socials__item">

                        <?php if($contacts->facebook) : ?>
                            <a href="<?= $contacts->facebook ?>" class="socials__link">
                                <img src="/img/social/icon-facebook.svg" alt="Facebook" class="socials__icon socials__icon--facebook">
                            </a>
                        <?php endif; ?>

                        <?php if($contacts->twitter) : ?>
                            <a href="<?= $contacts->twitter ?>" class="socials__link">
                                <img src="/img/social/icon-twitter.svg" alt="Twitter" class="socials__icon socials__icon--twitter">
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <?php if($contacts->city) : ?>
            <div class="footer__box">
                <div class="footer__caption">La ciudad</div>
                <div class="footer__info"><?= $contacts->city ?></div>
            </div>
        <?php endif; ?>

        <?php if($contacts->direction) : ?>
            <div class="footer__box">
                <div class="footer__caption">La dirección</div>
                <div class="footer__info"><?= $contacts->direction ?></div>
            </div>
        <?php endif; ?>

        <?php if($contacts->postal_code) : ?>
            <div class="footer__box">
                <div class="footer__caption">Código Postal</div>
                <div class="footer__info"><?= $contacts->postal_code ?></div>
            </div>
        <?php endif; ?>

        <?php if($contacts->email) : ?>
            <div class="footer__box">
                <div class="footer__caption">Correo electrónico</div>
                <a href="mailto:<?= $contacts->email ?>" class="footer__info"><?= $contacts->email ?></a>
            </div>
        <?php endif; ?>
    </div>
</div>