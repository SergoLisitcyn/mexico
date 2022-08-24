<?php

use yii\db\Migration;

/**
 * Class m220824_185009_create_table_block_solicita
 */
class m220824_185009_create_table_block_solicita extends Migration
{
    public function up()
    {
        $this->createTable('main_solicita', [
            'id' => $this->primaryKey(),
            'image' => $this->string()->null(),
            'alt' => $this->string(255)->null(),
            'text' => $this->string(255)->null(),
            'sort' => $this->integer(11)->defaultValue(0),
            'status' => $this->integer(1)->defaultValue(1)
        ]);
    }

    public function down()
    {
        $this->dropTable('main_solicita');
    }
}
