<?php

/** @var yii\web\View $this */

use frontend\widgets\MainPageWidget;

$this->title = 'My Yii Application';
?>
<section class="main__main-sect main-sect">
    <?php
    if($blocks){
        foreach ($blocks as $block){
           echo MainPageWidget::widget(['type' => $block['tag']]);
        }
    }
    ?>
</section>
