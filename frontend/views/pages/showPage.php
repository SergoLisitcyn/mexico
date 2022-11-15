<?php
if(isset($model->title_seo) && !empty($model->title_seo)) { $this->title = $model->title_seo; }
if(isset($model->keywords) && !empty($model->keywords)) { $this->registerMetaTag(['name' => 'keywords','content' => $model->keywords]); }
if(isset($model->description) && !empty($model->description)) { $this->registerMetaTag(['name' => 'description','content' => $model->description]); }
?>
<div class="main__page-information">
    <div class="container">
        <h1 class="main__title main-title"><?= $model->name ?></h1>
        <div class="tabs-content">
            <div class="tabs">
                <div class="tabs-content__info tabs-content-info">
                    <?= $model->content ?>
                </div>
            </div>
        </div>
    </div>
</div>