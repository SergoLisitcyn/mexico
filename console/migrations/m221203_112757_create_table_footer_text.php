<?php

use yii\db\Migration;

/**
 * Class m221203_112757_create_table_footer_text
 */
class m221203_112757_create_table_footer_text extends Migration
{
    public function up()
    {
        $this->createTable('footer_text', [
            'id' => $this->primaryKey(),
            'title' => $this->text(),
            'text_bottom' => $this->text(),
            'text_top' => $this->text(),
        ]);
    }

    public function down()
    {
        $this->dropTable('footer_text');
    }
}
