<?php

use yii\db\Migration;

/**
 * Class m220824_193536_create_table_block_about
 */
class m220824_193536_create_table_block_about extends Migration
{
    public function up()
    {
        $this->createTable('main_about', [
            'id' => $this->primaryKey(),
            'image' => $this->string()->null(),
            'alt' => $this->string(255)->null(),
            'url' => $this->string(255)->null(),
            'sort' => $this->integer(11)->defaultValue(0),
            'status' => $this->integer(1)->defaultValue(1)
        ]);
        $this->createTable('main_partners', [
            'id' => $this->primaryKey(),
            'image' => $this->string()->null(),
            'alt' => $this->string(255)->null(),
            'url' => $this->string(255)->null(),
            'sort' => $this->integer(11)->defaultValue(0),
            'status' => $this->integer(1)->defaultValue(1)
        ]);
    }

    public function down()
    {
        $this->dropTable('main_about');
        $this->dropTable('main_partners');
    }
}
