<?php

use yii\db\Migration;

/**
 * Class m220919_184714_update_table_main_info
 */
class m220919_184714_update_table_main_info extends Migration
{
    public function up()
    {
        $this->addColumn('main_info', 'name', $this->string(255)->notNull());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('main_info', 'name');
    }
}
