<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pages".
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string|null $content
 * @property string|null $title
 * @property string|null $title_seo
 * @property string|null $description
 * @property string|null $keywords
 * @property int|null $status
 */
class Pages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'slug'], 'required'],
            [['content'], 'string'],
            [['status'], 'integer'],
            [['name', 'slug', 'title', 'title_seo', 'description', 'keywords'], 'string', 'max' => 255],
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
            'slug' => 'URL',
            'content' => 'Content',
            'title' => 'Заголовок',
            'title_seo' => 'Title Seo',
            'description' => 'Description',
            'keywords' => 'Keywords',
            'status' => 'Статус',
        ];
    }
}
