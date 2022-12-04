<?php

use yii\db\Migration;

/**
 * Class m221204_174013_update_table_main_team_facebook_twotter
 */
class m221204_174013_update_table_main_team_facebook_twotter extends Migration
{
    public function up()
    {
        $this->addColumn('main_team', 'facebook', $this->string(255)->null());
        $this->addColumn('main_team', 'twitter', $this->string(255)->null());
        $this->addColumn('main_team', 'instagram', $this->string(255)->null());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('main_team', 'facebook');
        $this->dropColumn('main_team', 'twitter');
        $this->dropColumn('main_team', 'instagram');
    }
}
