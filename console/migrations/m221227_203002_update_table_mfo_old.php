<?php

use yii\db\Migration;

/**
 * Class m221227_203002_update_table_mfo_old
 */
class m221227_203002_update_table_mfo_old extends Migration
{
    public function up()
    {
        $this->addColumn('mfo', 'old', $this->integer(11)->null());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('mfo', 'old');
    }
}
