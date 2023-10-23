<?php if($data) : ?>
<ul class="offer-dropdown__repute-list">
    <li class="offer-dropdown__repute-item">
        <div class="offer-dropdown__repute-title">Nuestra calificación</div>
        <div class="offer-dropdown__repute-rating">
            <div class="rating__stars_similar" style="width:<?= $data['starWidthAll'] ?>%"></div>
            <span class="offer-dropdown__repute-number"><?= $data['all'] ?></span>
        </div>
    </li>
    <li class="offer-dropdown__repute-item">
        <p class="offer-dropdown__repute-text">Interés & Costes</p>
        <div class="rating__stars_similar" style="width:<?= $data['starWidthCosts'] ?>%"></div>
    </li>
    <li class="offer-dropdown__repute-item">
        <p class="offer-dropdown__repute-text">Condiciones</p>
        <div class="rating__stars_similar" style="width:<?= $data['starWidthConditions'] ?>%"></div>
    </li>
    <li class="offer-dropdown__repute-item">
        <p class="offer-dropdown__repute-text">Atención al cliente</p>
        <div class="rating__stars_similar" style="width:<?= $data['starWidthSupport'] ?>%"></div>
    </li>
    <li class="offer-dropdown__repute-item">
        <p class="offer-dropdown__repute-text">Funcionalidad</p>
        <div class="rating__stars_similar" style="width:<?= $data['starWidthFunctionality'] ?>%"></div>
    </li>
<!--    <li class="offer-dropdown__repute-item">-->
<!--        <a href="/review-information" class="offer-dropdown__repute-link">Información precisa</a>-->
<!--    </li>-->
</ul>
<?php endif; ?>