<?php

use yii\db\Migration;

/**
 * Class m221113_222516_create_table_block_rec
 */
class m221113_222516_create_table_block_rec extends Migration
{
    public function up()
    {
        $this->createTable('block_rec', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
            'color' => $this->string()->notNull(),
            'status' => $this->integer(1)->defaultValue(1),
        ]);
    }

    public function down()
    {
        $this->dropTable('block_rec');
    }
}
