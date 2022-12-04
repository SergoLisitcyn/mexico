<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "footer_text".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $text_bottom
 * @property string|null $text_top
 */
class FooterText extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'footer_text';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'text_bottom', 'text_top'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Слоган',
            'text_bottom' => 'Текст снизу',
            'text_top' => 'Текст верх',
        ];
    }
}
