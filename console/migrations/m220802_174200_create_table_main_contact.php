<?php

use yii\db\Migration;

/**
 * Class m220802_174200_create_table_main_contact
 */
class m220802_174200_create_table_main_contact extends Migration
{
    public function up()
    {
        $this->createTable('main_contact', [
            'id' => $this->primaryKey(),
            'city' => $this->string()->null(),
            'direction' => $this->string()->null(),
            'postal_code' => $this->string()->null(),
            'phone' => $this->string()->null(),
            'phone_second' => $this->string()->null(),
            'email' => $this->string()->null(),
            'whatsapp' => $this->string()->null(),
            'facebook' => $this->string()->null(),
            'instagram' => $this->string()->null(),
            'twitter' => $this->string()->null(),
            'youtube' => $this->string()->null(),
            'linkedin' => $this->string()->null(),
        ]);
    }

    public function down()
    {
        $this->dropTable('main_contact');
    }
}
