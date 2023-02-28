<section class="main__faq faq" id="faq_main">
    <div class="container">
        <div class="faq__row background-set">
            <h2 class="faq__title title">Preguntas Frecuentes</h2>
            <ul class="faq__accordion accordion-menu">
                <?php foreach ($data as $value) : ?>
                <li class="accordion-menu__item">
                    <div class="accordion-menu__link"><?= $value['title'] ?>
                        <div class="accordion-menu__icon">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class="accordion-menu__content">
                        <div class="accordion-menu__text">
                            <?= $value['text'] ?>
                        </div>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>