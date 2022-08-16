<?php

namespace common\models;

use yii\db\ActiveRecord;
use yii\helpers\Json;

/**
 * This is the model class for table "main_info".
 *
 * @property int $id
 * @property string|null $work
 * @property string|null $mission
 * @property string|null $text_main
 */
class MainInfo extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'main_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['work', 'mission'], 'safe'],
            [['text_main'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'work' => 'Как мы работаем',
            'mission' => 'Наши цели, миссия',
            'text_main' => 'О ценностях',
        ];
    }

    public function afterFind() {
        parent::afterFind();
        $this->work = Json::decode($this->work);
        $this->mission = Json::decode($this->mission);
    }
}
