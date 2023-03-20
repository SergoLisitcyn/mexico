<?php

use yii\db\Migration;

/**
 * Class m230320_224029_update_table_main_team_linkedin
 */
class m230320_224029_update_table_main_team_linkedin extends Migration
{
    public function up()
    {
        $this->addColumn('main_team', 'linkedin', $this->string(255)->null());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('main_team', 'linkedin');
    }
}
