<?php
if($zone == 'title' && $footer->title){ ?>
    <h2 class="footer__title"><?= $footer->title ?></h2>
<?php }
?>
<?php
if($zone == 'text_top' && $footer->text_top){ ?>
    <div class="footer__col footer__col--text">
        <?= $footer->text_top ?>
    </div>
<?php }
?>
<?php
if($zone == 'text_bottom' && $footer->text_bottom){ ?>
<!--    <div class="footer__col footer__col--text">-->
        <?= $footer->text_bottom ?>
<!--    </div>-->
<?php }
?>
