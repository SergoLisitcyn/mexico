<?php
if(isset($model->title_seo) && !empty($model->title_seo)) { $this->title = $model->title_seo; }
if(isset($model->keywords) && !empty($model->keywords)) { $this->registerMetaTag(['name' => 'keywords','content' => $model->keywords]); }
if(isset($model->description) && !empty($model->description)) { $this->registerMetaTag(['name' => 'description','content' => $model->description]); }
?>