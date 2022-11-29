<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "seo_codes".
 *
 * @property int $id
 * @property string $name
 * @property string|null $seo_codes_top
 * @property int|null $seo_codes_top_status
 * @property string|null $seo_codes_bottom
 * @property int|null $seo_codes_bottom_status
 */
class SeoCodes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'seo_codes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['seo_codes_top', 'seo_codes_bottom'], 'string'],
            [['seo_codes_top_status', 'seo_codes_bottom_status'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'seo_codes_top' => 'Код счетчика в хедере',
            'seo_codes_top_status' => 'Статус счетчика в хедере',
            'seo_codes_bottom' => 'Код счетчика в футере',
            'seo_codes_bottom_status' => 'Статус счетчика в футере',
        ];
    }
}
