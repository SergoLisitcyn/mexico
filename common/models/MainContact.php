<?php

namespace common\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "main_contact".
 *
 * @property int $id
 * @property string|null $city
 * @property string|null $direction
 * @property string|null $postal_code
 * @property string|null $phone
 * @property string|null $phone_second
 * @property string|null $email
 * @property string|null $whatsapp
 * @property string|null $facebook
 * @property string|null $instagram
 * @property string|null $twitter
 * @property string|null $youtube
 * @property string|null $linkedin
 * @property string|null $company_name
 * @property string|null $bin
 * @property string|null $ocde
 * @property string|null $registration_date
 * @property string|null $certificate
 * @property string|null $text
 */
class MainContact extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'main_contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['city', 'direction', 'postal_code', 'phone', 'phone_second', 'email', 'whatsapp', 'facebook', 'instagram',
                'twitter', 'youtube', 'linkedin','company_name', 'bin',
                'ocde', 'registration_date', 'certificate'], 'string', 'max' => 255],
            [['text'] ,'string']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'city' => 'La ciudad',
            'direction' => 'La dirección',
            'postal_code' => 'Código Postal',
            'phone' => 'Teléfono',
            'phone_second' => 'Дополнительный телефон',
            'email' => 'Correo electrónico',
            'whatsapp' => 'Whatsapp',
            'facebook' => 'Facebook',
            'instagram' => 'Instagram',
            'twitter' => 'Twitter',
            'youtube' => 'YouTube',
            'linkedin' => 'Linkedin',
            'company_name' => 'Nombre de la empresa',
            'bin' => 'BIN',
            'ocde' => 'OCDE',
            'registration_date' => 'Fecha de inscripción',
            'certificate' => 'Certificado de IVA',
            'text' => 'Text',
        ];
    }
}
