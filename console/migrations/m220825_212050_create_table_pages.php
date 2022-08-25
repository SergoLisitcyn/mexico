<?php

use yii\db\Migration;

/**
 * Class m220825_212050_create_table_pages
 */
class m220825_212050_create_table_pages extends Migration
{
    public function up()
    {
        $this->createTable('pages', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'slug' => $this->string()->notNull(),
            'content' => $this->text(),
            'title' => $this->string()->defaultValue(null),
            'title_seo' => $this->string()->defaultValue(null),
            'description' => $this->string()->defaultValue(null),
            'keywords' => $this->string()->defaultValue(null),
            'status' => $this->integer(1)->defaultValue(1),
        ]);
        $this->createTable('menu', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'zone' => $this->integer()->notNull(),
            'link' => $this->string()->notNull(),
            'status' => $this->integer(1)->defaultValue(1),
            'sort' => $this->integer(11)->defaultValue(0),
        ]);
    }

    public function down()
    {
        $this->dropTable('pages');
        $this->dropTable('menu');
    }
}
