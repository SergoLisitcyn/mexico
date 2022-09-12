<?php

namespace common\models;

use Yii;
use yii\base\Exception;
use yii\db\ActiveRecord;
use yii\helpers\FileHelper;
use yii\web\UploadedFile;

/**
 * This is the model class for table "main_solicita".
 *
 * @property int $id
 * @property string|null $image
 * @property string|null $alt
 * @property string|null $text
 * @property string|null $url
 * @property int|null $sort
 * @property int|null $status
 * @property string|null $title_h1
 * @property string|null $title_seo
 * @property string|null $description
 * @property string|null $keywords
 * @property string|null $text_top
 * @property string|null $text_bottom
 */
class MainSolicita extends ActiveRecord
{
    public $image_file;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'main_solicita';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['url'], 'required'],
            [['sort', 'status'], 'integer'],
            [['text_top', 'text_bottom'], 'string'],
            [['image', 'alt', 'text', 'url', 'title_h1', 'title_seo', 'description', 'keywords'], 'string', 'max' => 255],
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
            'text' => 'Текст на главной',
            'image' => 'Картинка',
            'image_file' => 'Картинка',
            'status' => 'Статус',
            'url' => 'Url',
            'title_h1' => 'Заголовок H1',
            'title_seo' => 'Title Seo',
            'description' => 'Description',
            'keywords' => 'Keywords',
            'text_top' => 'Текст внутри карточки вверху',
            'text_bottom' => 'Текст внутри карточки внизу',
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
            $directory = Yii::getAlias('@frontend/web/uploads/images/main-page/solicita') . DIRECTORY_SEPARATOR;
            if (!is_dir($directory)) {
                FileHelper::createDirectory($directory);
            }

            $uid = date('YmdHs').Yii::$app->security->generateRandomString(6);
            $fileName = $uid . '-main-page_solicita.' . $imageSquareFile->extension;
            $filePath = $directory . $fileName;
            if ($imageSquareFile->saveAs($filePath)) {
                $path = '/uploads/images/main-page/solicita/' . $fileName;

                @unlink(Yii::getAlias('@frontend/web') . $this->image_file);
                $this->setAttribute('image', $path);
                $this->save();
            }
        }
    }
}
