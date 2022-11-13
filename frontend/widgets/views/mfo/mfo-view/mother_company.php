<div class="tabs-content__datas datas">
    <h2 class="datas__title title">Empresa matriz</h2>
    <div class="datas__columns">
        <ul class="datas__column">
            <?php if(isset($model['mother_company']) && $model['mother_company'] != '-') : ?>
                <li class="datas__col">
                    <div class="datas__caption"><?= $mfoText['mother_company']['mother_company'] ?></div>
                    <p class="datas__text"><?= $model['mother_company'] ?></p>
                </li>
            <?php endif; ?>

            <?php if(isset($model['sitio']) && $model['sitio'] != '-') : ?>
                <li class="datas__col">
                    <div class="datas__caption"><?= $mfoText['mother_company']['sitio'] ?></div>
                    <a href="//<?= $model['sitio'] ?>" target="_blank" class="datas__link"><?= $model['sitio'] ?></a>
                </li>
            <?php endif; ?>
            <?php if(isset($model['president']) && $model['president'] != '-') : ?>
                <li class="datas__col">
                    <div class="datas__caption"><?= $mfoText['mother_company']['president'] ?></div>
                    <p class="datas__text"><?= $model['president'] ?></p>
                </li>
            <?php endif; ?>
            <?php if(isset($model['director']) && $model['director'] != '-') : ?>
                <li class="datas__col">
                    <div class="datas__caption"><?= $mfoText['mother_company']['director'] ?></div>
                    <p class="datas__text"><?= $model['director'] ?></p>
                </li>
            <?php endif; ?>
        </ul>
        <ul class="datas__column">
            <?php if(isset($model['linkedin']) && $model['linkedin'] != '-') : ?>
                <li class="datas__col">
                    <div class="datas__image">
                        <a href="//<?= $model['linkedin'] ?>" class="datas__link">
                            <img src="/img/social/linkedin.svg" alt="linkedin">
                        </a>
                    </div>
                </li>
            <?php endif; ?>
            <?php if(isset($model['pais']) && $model['pais'] != '-') : ?>
                <li class="datas__col">
                    <div class="datas__caption"><?= $mfoText['mother_company']['pais'] ?></div>
                    <p class="datas__text"><?= $model['pais'] ?></p>
                </li>
            <?php endif; ?>
            <?php if(isset($model['la_ciudad']) && $model['la_ciudad'] != '-') : ?>
                <li class="datas__col">
                    <div class="datas__caption"><?= $mfoText['mother_company']['la_ciudad'] ?></div>
                    <p class="datas__text"><?= $model['la_ciudad'] ?></p>
                </li>
            <?php endif; ?>
            <?php if(isset($model['direction']) && $model['direction'] != '-') : ?>
                <li class="datas__col">
                    <div class="datas__caption"><?= $mfoText['mother_company']['direction'] ?></div>
                    <p class="datas__text"><?= $model['direction'] ?></p>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</div>