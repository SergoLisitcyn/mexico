<?php

use yii\db\Migration;

/**
 * Class m231018_224132_update_table_mfo_general_text
 */
class m231018_224132_update_table_mfo_general_text extends Migration
{
    public function up()
    {
        $this->addColumn('mfo', 'general_text', $this->json()->null());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('mfo', 'general_text');
    }
}
