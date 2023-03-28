<?php

use yii\db\Migration;

/**
 * Class m230328_224355_update_table_mfo_button_text
 */
class m230328_224355_update_table_mfo_button_text extends Migration
{
    public function up()
    {
        $this->addColumn('mfo', 'button_text', $this->string(255)->null());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('mfo', 'button_text');
    }
}
