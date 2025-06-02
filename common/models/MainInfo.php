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
 * @property string|null $progress_title
 * @property string|null $progress_text
 * @property string|null $progress_value
 * @property int|null $progress_status
 * @property string|null $work_title
 * @property int|null $work_status
 * @property string|null $text_main_title
 * @property int|null $text_main_status
 * @property string|null $mission_title
 * @property int|null $mission_status
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
            [['progress_status', 'work_status', 'text_main_status', 'mission_status'], 'integer'],
            [['progress_title', 'progress_text', 'progress_value', 'work_title', 'text_main_title', 'mission_title'], 'string', 'max' => 255],
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
            'progress_title' => 'Title',
            'progress_text' => 'Текст',
            'progress_value' => 'Значение',
            'progress_status' => 'Статус',
            'work_title' => 'Title',
            'work_status' => 'Статус',
            'text_main_title' => 'Title',
            'text_main_status' => 'Статус',
            'mission_title' => 'Title',
            'mission_status' => 'Статус',
        ];
    }

    public function afterFind() {
        parent::afterFind();
        $this->work = $this->work ? Json::decode($this->work) : null;
        $this->mission = $this->mission ? Json::decode($this->mission) : null;
    }
}
