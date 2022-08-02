<?php

use yii\db\Migration;

/**
 * Class m220802_192420_create_table_main_info
 */
class m220802_192420_create_table_main_info extends Migration
{
    /**
     * @throws \yii\base\Exception
     */
    public function up()
    {
        $this->createTable('main_info', [
            'id' => $this->primaryKey(),
            'work' => $this->json()->null(),
            'mission' => $this->json()->null(),
            'text_main' => $this->text(),
        ]);
    }

    public function down()
    {
        $this->dropTable('main_info');
    }
}
