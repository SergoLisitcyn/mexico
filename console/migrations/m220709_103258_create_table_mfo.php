<?php

use yii\db\Migration;

/**
 * Class m220709_103258_create_table_mfo
 */
class m220709_103258_create_table_mfo extends Migration
{
    /**
     * @throws \yii\base\Exception
     */
    public function up()
    {
        $this->createTable('mfo', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'url' => $this->string()->notNull(),
            'title' => $this->string()->notNull(),
            'data' => $this->json()->null(),
            'logo' => $this->string()->null(),
            'status' => $this->integer(11)->defaultValue(1),
            'sort' => $this->integer(11)->defaultValue(0),
            'description' => $this->string()->null(),
            'keywords' => $this->string()->null(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('mfo');
    }
}
