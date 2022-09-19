<?php

use yii\db\Migration;

/**
 * Class m220917_201803_create_table_seo_tags
 */
class m220917_201803_create_table_seo_tags extends Migration
{
    public function up()
    {
        $this->createTable('seo_tags', [
            'id' => $this->primaryKey(),
            'slug' => $this->string()->notNull()->unique(),
            'title_h1' => $this->text(),
            'title_seo' => $this->string()->defaultValue(null),
            'description' => $this->string()->defaultValue(null),
            'keywords' => $this->string()->defaultValue(null),
            'status' => $this->integer(1)->defaultValue(1),
        ]);
    }

    public function down()
    {
        $this->dropTable('seo_tags');
    }
}
