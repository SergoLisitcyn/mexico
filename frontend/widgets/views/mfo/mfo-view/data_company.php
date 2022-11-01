<div class="tabs-content__datas datas">
    <h2 class="datas__title title">Datos de la compañia</h2>
    <div class="datas__columns">
        <ul class="datas__column">
            <?php if(isset($model['legal_name_company']) && $model['legal_name_company'] != '-') : ?>
                <li class="datas__col">
                    <div class="datas__caption"><?= $mfoText['data_company']['legal_name_company'] ?></div>
                    <p class="datas__text"><?= $model['legal_name_company'] ?></p>
                </li>
            <?php endif; ?>
            <?php if(isset($model['sector']) && $model['sector'] != '-') : ?>
                <li class="datas__col">
                    <div class="datas__caption"><?= $mfoText['data_company']['sector'] ?></div>
                    <p class="datas__text"><?= $model['sector'] ?></p>
                </li>
            <?php endif; ?>
            <?php if(isset($model['product']) && $model['product'] != '-') : ?>
                <li class="datas__col">
                    <div class="datas__caption"><?= $mfoText['data_company']['product'] ?></div>
                    <p class="datas__text"><?= $model['product'] ?></p>
                </li>
            <?php endif; ?>
            <?php if(isset($model['short_name']) && $model['short_name'] != '-') : ?>
                <li class="datas__col">
                    <div class="datas__caption"><?= $mfoText['data_company']['short_name'] ?></div>
                    <p class="datas__text"><?= $model['short_name'] ?></p>
                </li>
            <?php endif; ?>
            <?php if(isset($model['trademark']) && $model['trademark'] != '-') : ?>
                <li class="datas__col">
                    <div class="datas__caption"><?= $mfoText['data_company']['trademark'] ?></div>
                    <p class="datas__text"><?= $model['trademark'] ?></p>
                </li>
            <?php endif; ?>
            <?php if(isset($model['year_foundation']) && $model['year_foundation'] != '-') : ?>
                <li class="datas__col">
                    <div class="datas__caption"><?= $mfoText['data_company']['year_foundation'] ?></div>
                    <p class="datas__text"><?= $model['year_foundation'] ?></p>
                </li>
            <?php endif; ?>
            <?php if(isset($model['start_operations']) && $model['start_operations'] != '-') : ?>
                <li class="datas__col">
                    <div class="datas__caption"><?= $mfoText['data_company']['start_operations'] ?></div>
                    <p class="datas__text"><?= $model['start_operations'] ?></p>
                </li>
            <?php endif; ?>
            <?php if(isset($model['bank']) && $model['bank'] != '-') : ?>
                <li class="datas__col">
                    <div class="datas__caption"><?= $mfoText['data_company']['bank'] ?></div>
                    <p class="datas__text"><?= $model['bank'] ?></p>
                </li>
            <?php endif; ?>
            <?php if(isset($model['clabe']) && $model['clabe'] != '-') : ?>
                <li class="datas__col">
                    <div class="datas__caption"><?= $mfoText['data_company']['clabe'] ?></div>
                    <p class="datas__text"><?= $model['clabe'] ?></p>
                </li>
            <?php endif; ?>
            <?php if(isset($model['bank_2']) && $model['bank_2'] != '-') : ?>
                <li class="datas__col">
                    <div class="datas__caption"><?= $mfoText['data_company']['bank_2'] ?></div>
                    <p class="datas__text"><?= $model['bank_2'] ?></p>
                </li>
            <?php endif; ?>
        </ul>
        <ul class="datas__column">
            <?php if(isset($model['clabe_2']) && $model['clabe_2'] != '-') : ?>
                <li class="datas__col">
                    <div class="datas__caption"><?= $mfoText['data_company']['clabe_2'] ?></div>
                    <p class="datas__text"><?= $model['clabe_2'] ?></p>
                </li>
            <?php endif; ?>

            <?php if(isset($model['national_commission']) && $model['national_commission'] != '-') : ?>
                <li class="datas__col">
                    <div class="datas__image">
                        <img src="/img/condusef.svg" alt="condusef">
                    </div>
                    <div class="datas__caption"><?= $mfoText['data_company']['national_commission'] ?></div>
                    <p class="datas__text"><?= $model['national_commission'] ?></p>
                </li>
            <?php endif; ?>

            <?php if(isset($model['condusef_ficha']) && $model['condusef_ficha'] != '-') : ?>
                <li class="datas__col">
                    <div class="datas__caption ttu"><a href="<?= $model['condusef_ficha'] ?>"><?= $mfoText['data_company']['condusef_ficha'] ?></a></div>
<!--                    <div class="datas__caption ttu"></div>-->
                </li>
            <?php endif; ?>

            <?php if(isset($model['registration_number_condusef']) && $model['registration_number_condusef'] != '-') : ?>
                <li class="datas__col">
                    <div class="datas__caption"><?= $mfoText['data_company']['registration_number_condusef'] ?></div>
                    <p class="datas__text"><?= $model['registration_number_condusef'] ?></p>
                </li>
            <?php endif; ?>
            <?php if(isset($model['lei_code']) && $model['lei_code'] != '-') : ?>
                <li class="datas__col">
                    <div class="datas__caption"><?= $mfoText['data_company']['lei_code'] ?></div>
                    <p class="datas__text"><?= $model['lei_code'] ?></p>
                </li>
            <?php endif; ?>
            <?php if(isset($model['entity_legal_code']) && $model['entity_legal_code'] != '-') : ?>
                <li class="datas__col">
                    <div class="datas__caption"><?= $mfoText['data_company']['entity_legal_code'] ?></div>
                    <p class="datas__text"><?= $model['entity_legal_code'] ?></p>
                </li>
            <?php endif; ?>
            <?php if(isset($model['corporate_address']) && $model['corporate_address'] != '-') : ?>
                <li class="datas__col">
                    <div class="datas__caption"><?= $mfoText['data_company']['corporate_address'] ?></div>
                    <p class="datas__text"><?= $model['corporate_address'] ?></p>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</div>