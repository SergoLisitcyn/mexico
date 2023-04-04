<?php

use yii\db\Migration;

/**
 * Class m230404_163945_update_table_main_contact_text
 */
class m230404_163945_update_table_main_contact_text extends Migration
{
    public function up()
    {
        $this->addColumn('main_contact', 'text', $this->text()->null());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('main_contact', 'text');
    }
}
