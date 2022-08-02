<?php

use yii\db\Migration;

/**
 * Class m220802_181911_create_table_main_team
 */
class m220802_181911_create_table_main_team extends Migration
{
    public function up()
    {
        $this->createTable('main_team', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'text' => $this->string(255)->notNull(),
            'image' => $this->string()->null(),
            'status' => $this->integer(1)->defaultValue(1)
        ]);
    }

    public function down()
    {
        $this->dropTable('main_team');
    }
}
