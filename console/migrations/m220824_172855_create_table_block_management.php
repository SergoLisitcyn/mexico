<?php

use yii\db\Migration;

/**
 * Class m220824_172855_create_table_block_management
 */
class m220824_172855_create_table_block_management extends Migration
{
    public function up()
    {
        $this->createTable('block_management', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'tag' => $this->string(255)->notNull(),
            'title' => $this->string(255)->null(),
            'sub_title' => $this->string(255)->null(),
            'status' => $this->integer(1)->defaultValue(1),
        ]);
    }

    public function down()
    {
        $this->dropTable('block_management');
    }
}
