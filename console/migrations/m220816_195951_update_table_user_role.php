<?php

use yii\db\Migration;

/**
 * Class m220816_195951_update_table_user_role
 */
class m220816_195951_update_table_user_role extends Migration
{
    public function up()
    {
        $this->addColumn('user', 'role', $this->string()->defaultValue('client'));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('user', 'role');
    }
}
