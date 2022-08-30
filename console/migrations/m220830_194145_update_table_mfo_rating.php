<?php

use yii\db\Migration;

/**
 * Class m220830_194145_update_table_mfo_rating
 */
class m220830_194145_update_table_mfo_rating extends Migration
{
    public function up()
    {
        $this->addColumn('mfo', 'rating', $this->string(11)->null());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('mfo', 'rating');
    }
}
