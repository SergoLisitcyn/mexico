<?php

use yii\db\Migration;

/**
 * Class m220911_170516_update_table_main_solicita
 */
class m220911_170516_update_table_main_solicita extends Migration
{
    public function up()
    {
        $this->addColumn('main_solicita', 'url', $this->string(255)->null());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('main_solicita', 'url');
    }
}
