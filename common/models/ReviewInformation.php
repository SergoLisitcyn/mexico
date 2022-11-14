<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "review_information".
 *
 * @property int $id
 * @property string $url
 * @property string|null $content
 * @property string|null $title
 * @property string|null $title_seo
 * @property string|null $description
 * @property string|null $keywords
 */
class ReviewInformation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'review_information';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['url'], 'required'],
            [['content'], 'string'],
            [['url', 'title', 'title_seo', 'description', 'keywords'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'url' => 'Url',
            'content' => 'Content',
            'title' => 'Заголовок',
            'title_seo' => 'Title Seo',
            'description' => 'Description',
            'keywords' => 'Keywords',
        ];
    }
}
