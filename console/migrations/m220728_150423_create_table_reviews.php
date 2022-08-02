<?php

use yii\db\Migration;

/**
 * Class m220728_150423_create_table_reviews
 */
class m220728_150423_create_table_reviews extends Migration
{
    public function up()
    {
        $this->createTable('reviews', [
            'id' => $this->primaryKey(),
            'mfo_id' => $this->string()->notNull(),
            'costs' => $this->integer(1)->notNull(),
            'conditions' => $this->integer(1)->notNull(),
            'support' => $this->integer(1)->notNull(),
            'functionality' => $this->integer(1)->notNull(),
            'body' => $this->text()->notNull(),
            'plus' => $this->text()->null(),
            'minus' => $this->text()->null(),
            'recommendation' => $this->integer(1)->defaultValue(0),
            'status' => $this->integer(1)->defaultValue(2),
            'sort' => $this->integer(11)->defaultValue(0),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('reviews');
    }
}
