<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "seo_tags".
 *
 * @property int $id
 * @property string $slug
 * @property string|null $title_h1
 * @property string|null $title_seo
 * @property string|null $description
 * @property string|null $keywords
 * @property int|null $status
 */
class SeoTags extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'seo_tags';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['slug'], 'required'],
            [['title_h1'], 'string'],
            [['status'], 'integer'],
            [['slug', 'title_seo', 'description', 'keywords'], 'string', 'max' => 255],
            [['slug'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'slug' => 'Url',
            'title_h1' => 'Title H1',
            'title_seo' => 'Title Seo',
            'description' => 'Description',
            'keywords' => 'Keywords',
            'status' => 'Статус',
        ];
    }
}
