<?php

use yii\db\Migration;

/**
 * Class m231101_222608_update_table_team
 */
class m231101_222608_update_table_team extends Migration
{
    public function up()
    {
        $this->addColumn('main_team', 'array_url', $this->text()->null());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('main_team', 'array_url');
    }
}
