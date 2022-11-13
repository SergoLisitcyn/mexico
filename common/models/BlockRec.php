<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "block_rec".
 *
 * @property int $id
 * @property string $name
 * @property string $color
 * @property int|null $status
 */
class BlockRec extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'block_rec';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'color'], 'required'],
            [['status'], 'integer'],
            [['name', 'color'], 'string', 'max' => 255],
            [['name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'color' => 'Цвет',
            'status' => 'Статус',
        ];
    }
}
