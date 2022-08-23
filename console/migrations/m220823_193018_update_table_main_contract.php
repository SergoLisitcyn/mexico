<?php

use yii\db\Migration;

/**
 * Class m220823_193018_update_table_main_contract
 */
class m220823_193018_update_table_main_contract extends Migration
{
    public function up()
    {
        $this->addColumn('main_contact', 'status', $this->integer(1)->defaultValue(1));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('main_contact', 'status');
    }
}
