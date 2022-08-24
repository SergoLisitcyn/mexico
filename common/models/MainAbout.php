<?php

namespace common\models;

use Yii;
use yii\base\Exception;
use yii\db\ActiveRecord;
use yii\helpers\FileHelper;
use yii\web\UploadedFile;

/**
 * This is the model class for table "main_about".
 *
 * @property int $id
 * @property string|null $image
 * @property string|null $alt
 * @property string|null $url
 * @property int|null $sort
 * @property int|null $status
 */
class MainAbout extends ActiveRecord
{
    public $image_file;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'main_about';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sort', 'status'], 'integer'],
            [['image', 'alt', 'url'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'alt' => 'Alt изображения',
            'sort' => 'Сортировка',
            'text' => 'Текст',
            'image' => 'Картинка',
            'image_file' => 'Картинка',
            'status' => 'Статус',
            'url' => 'Url',
        ];
    }

    /**
     * @throws Exception
     */
    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);

        $imageSquareFile = UploadedFile::getInstance($this, 'image_file');
        if ($imageSquareFile) {
            $directory = Yii::getAlias('@frontend/web/uploads/images/main-page/about') . DIRECTORY_SEPARATOR;
            if (!is_dir($directory)) {
                FileHelper::createDirectory($directory);
            }

            $uid = date('YmdHs').Yii::$app->security->generateRandomString(6);
            $fileName = $uid . '-main-page_about.' . $imageSquareFile->extension;
            $filePath = $directory . $fileName;
            if ($imageSquareFile->saveAs($filePath)) {
                $path = '/uploads/images/main-page/about/' . $fileName;

                @unlink(Yii::getAlias('@frontend/web') . $this->image_file);
                $this->setAttribute('image', $path);
                $this->save();
            }
        }
    }
}
