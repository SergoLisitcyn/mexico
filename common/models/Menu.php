<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property int $id
 * @property string $name
 * @property int $zone
 * @property string $link
 * @property int|null $status
 * @property int|null $sort
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'zone', 'link'], 'required'],
            [['zone', 'status', 'sort'], 'integer'],
            [['name', 'link'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название страницы',
            'zone' => 'Зона',
            'link' => 'Ссылка на страницу',
            'status' => 'Статус',
            'sort' => 'Сортировка',
        ];
    }
}
