<?php

use yii\db\Migration;

/**
 * Class m220823_175150_update_table_main_info
 */
class m220823_175150_update_table_main_info extends Migration
{
    public function up()
    {
        $this->addColumn('main_info', 'progress_title', $this->string(255)->defaultValue(null));
        $this->addColumn('main_info', 'progress_text', $this->string(255)->defaultValue(null));
        $this->addColumn('main_info', 'progress_value', $this->string(255)->defaultValue(null));
        $this->addColumn('main_info', 'progress_status', $this->integer(1)->defaultValue(1));

        $this->addColumn('main_info', 'work_title', $this->string(255)->defaultValue(null));
        $this->addColumn('main_info', 'work_status', $this->integer(1)->defaultValue(1));

        $this->addColumn('main_info', 'text_main_title', $this->string(255)->defaultValue(null));
        $this->addColumn('main_info', 'text_main_status', $this->integer(1)->defaultValue(1));

        $this->addColumn('main_info', 'mission_title', $this->string(255)->defaultValue(null));
        $this->addColumn('main_info', 'mission_status', $this->integer(1)->defaultValue(1));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('main_info', 'progress_title');
        $this->dropColumn('main_info', 'progress_text');
        $this->dropColumn('main_info', 'progress_value');
        $this->dropColumn('main_info', 'progress_status');

        $this->dropColumn('main_info', 'work_title');
        $this->dropColumn('main_info', 'work_status');

        $this->dropColumn('main_info', 'text_main_title');
        $this->dropColumn('main_info', 'text_main_status');

        $this->dropColumn('main_info', 'mission_title');
        $this->dropColumn('main_info', 'mission_status');
    }
}
