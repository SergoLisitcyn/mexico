<?php
if(isset($review->title_seo) && !empty($review->title_seo)) { $this->title = $review->title_seo; }
if(isset($review->keywords) && !empty($review->keywords)) { $this->registerMetaTag(['name' => 'keywords','content' => $review->keywords]); }
if(isset($review->description) && !empty($review->description)) { $this->registerMetaTag(['name' => 'description','content' => $review->description]); }
?>
<div class="main__page-information">
    <div class="container">
        <h1 class="main__title main-title"><?= $review->title ?></h1>
        <div class="tabs-content">
            <div class="tabs">
                <div class="tabs-content__info tabs-content-info">
                    <?= $review->content ?>
                </div>
            </div>
        </div>
    </div>
</div>
