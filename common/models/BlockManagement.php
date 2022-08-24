<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "block_management".
 *
 * @property int $id
 * @property string $name
 * @property string $tag
 * @property string|null $title
 * @property string|null $sub_title
 * @property int|null $status
 */
class BlockManagement extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'block_management';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'tag'], 'required'],
            [['status'], 'integer'],
            [['name', 'tag', 'title', 'sub_title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название блока',
            'tag' => 'Tag',
            'title' => 'Заголовок',
            'sub_title' => 'Подзаголовок',
            'status' => 'Статус',
        ];
    }
}
