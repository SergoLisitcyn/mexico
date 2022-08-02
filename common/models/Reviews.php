<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "reviews".
 *
 * @property int $id
 * @property string $mfo_id
 * @property int $costs
 * @property int $conditions
 * @property int $support
 * @property int $functionality
 * @property string $body
 * @property string|null $plus
 * @property string|null $minus
 * @property int|null $recommendation
 * @property int|null $status
 * @property int|null $sort
 * @property int $created_at
 * @property int $updated_at
 */
class Reviews extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reviews';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mfo_id', 'costs', 'conditions', 'support', 'functionality', 'body'], 'required'],
            [['costs', 'conditions', 'support', 'functionality', 'recommendation', 'status', 'sort', 'created_at', 'updated_at'], 'integer'],
            [['body', 'plus', 'minus'], 'string'],
            [['mfo_id'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mfo_id' => 'Mfo ID',
            'costs' => 'Interés & Costes',
            'conditions' => 'Condiciones',
            'support' => 'Atención al cliente',
            'functionality' => 'Funcionalidad',
            'body' => 'Body',
            'plus' => 'Plus',
            'minus' => 'Minus',
            'recommendation' => 'Recommendation',
            'status' => 'Статус',
            'sort' => 'Сортировка',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
