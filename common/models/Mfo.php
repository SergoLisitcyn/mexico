<?php

namespace common\models;

use Google_Client;
use Google_Service_Sheets;
use Yii;
use yii\base\Exception;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\helpers\FileHelper;
use yii\helpers\Json;
use yii\web\HttpException;
use yii\web\UploadedFile;

/**
 * This is the model class for table "mfo".
 *
 * @property int $id
 * @property string $name
 * @property string $url
 * @property string $title
 * @property string|null $data
 * @property string|null $rating_auto
 * @property string|null $logo
 * @property int|null $status
 * @property int|null $sort
 * @property string|null $description
 * @property string|null $keywords
 * @property string|null $rating
 * @property int $created_at
 * @property int $updated_at
 */
class Mfo extends ActiveRecord
{
    public $logo_file;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mfo';
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
            [['name', 'url', 'title'], 'required'],
            [['data','rating_auto'], 'safe'],
            [['status', 'sort', 'created_at', 'updated_at'], 'integer'],
            [['name', 'url', 'title', 'logo', 'description', 'keywords'], 'string', 'max' => 255],
            [['rating'], 'string', 'max' => 11],
            [['logo_file'], 'file'],
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
            'url' => 'Url',
            'title' => 'Title',
            'data' => 'Data',
            'rating_auto' => 'Автоматический рейтинг',
            'logo' => 'Логотип МФО',
            'logo_file' => 'Логотип',
            'status' => 'Статус',
            'sort' => 'Сортировка',
            'rating' => 'Рейтинг',
            'description' => 'Description',
            'keywords' => 'Keywords',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
    public function afterFind() {
        parent::afterFind();
        $this->data = Json::decode($this->data);
        $this->rating_auto = Json::decode($this->rating_auto);
    }

    /**
     * @throws Exception
     */
    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);

        $imageSquareFile = UploadedFile::getInstance($this, 'logo_file');
        if ($imageSquareFile) {
            $directory = Yii::getAlias('@frontend/web/uploads/images/mfo/logo') . DIRECTORY_SEPARATOR;
            if (!is_dir($directory)) {
                FileHelper::createDirectory($directory);
            }

            $uid = date('YmdHs').Yii::$app->security->generateRandomString(6);
            $fileName = $uid . '-mfo_logo.' . $imageSquareFile->extension;
            $filePath = $directory . $fileName;
            if ($imageSquareFile->saveAs($filePath)) {
                $path = '/uploads/images/mfo/logo/' . $fileName;

                @unlink(Yii::getAlias('@frontend/web') . $this->logo_file);
                $this->setAttribute('logo', $path);
                $this->save();
            }
        }
    }


    public static function getResponseSheet()
    {
        $googleAccountKeyFilePath = __DIR__ . '/../../backend/views/mfo/mexicocrm.json';
        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . $googleAccountKeyFilePath);

        $client = new Google_Client();
        $client->useApplicationDefaultCredentials();
        $client->addScope('https://www.googleapis.com/auth/spreadsheets');

        return new Google_Service_Sheets($client);
    }

    /**
     * @throws HttpException
     */
    public static function getMfoUpdate()
    {
        $service = self::getResponseSheet();
        $spreadsheetId = Yii::$app->params['mfoSheet'];
        $response = $service->spreadsheets->get($spreadsheetId);

        if(!$response){
            throw new HttpException(500, 'Что-то пошло не так.');
        }

        $data = [];
        $dataText = [];
        $countSave = 0;
        $countUpdate = 0;

        foreach($response->getSheets() as $sheet) {
            $sheetProperties = $sheet->getProperties();
            $range = $sheetProperties->title;
            $response = $service->spreadsheets_values->get($spreadsheetId, $range);
            $mfoKey = 0;
            foreach ($response['values']  as $key => $value){
                if($key == 0 || $key == 1 || $key == 2){
                    continue;
                }
                if($range == 'Condiciones de préstamos'){
                    $data[$mfoKey]['condiciones'] = self::getCondiciones($value);
                    if($key == 3){
                        $dataText['text']['condiciones'] = self::getCondiciones($value);
                        continue;
                    }
                }
                if($range == 'Requisitos'){
                    $data[$mfoKey]['requisitos'] = self::getRequisitos($value);
                    if($key == 3){
                        $dataText['text']['requisitos'] = self::getRequisitos($value);
                        continue;
                    }
                }
                if($range == 'Características de la compañía'){
                    $data[$mfoKey]['characteristic'] = self::getCharacteristic($value);
                    if($key == 3){
                        $dataText['text']['characteristic'] = self::getCharacteristic($value);
                        continue;
                    }
                }
                if($range == 'Medios de disposición del crédito'){
                    $data[$mfoKey]['means'] = self::getMeans($value);
                    if($key == 3){
                        $dataText['text']['means'] = self::getMeans($value);
                        continue;
                    }
                }
                if($range == 'Métodos de pago'){
                    $data[$mfoKey]['payment_methods'] = self::getPaymentMethods($value);
                    if($key == 3){
                        $dataText['text']['payment_methods'] = self::getPaymentMethods($value);
                        continue;
                    }
                }
                if($range == 'Datos de la compañia'){
                    $data[$mfoKey]['data_company'] = self::getDataCompany($value);
                    if($key == 3){
                        $dataText['text']['data_company'] = self::getDataCompany($value);
                        continue;
                    }
                }
                if($range == 'Empresa matriz'){
                    $data[$mfoKey]['mother_company'] = self::getMotherCompany($value);
                    if($key == 3){
                        $dataText['text']['mother_company'] = self::getMotherCompany($value);
                        continue;
                    }
                }
                if($range == 'La cuenta'){
                    $data[$mfoKey]['account'] = self::getAccount($value);
                    if($key == 3){
                        $dataText['text']['account'] = self::getAccount($value);
                        continue;
                    }
                }
                if($range == 'Atención al cliente'){
                    $data[$mfoKey]['customer_support'] = self::getCustomerSupport($value);
                    if($key == 3){
                        $dataText['text']['customer_support'] = self::getCustomerSupport($value);
                        continue;
                    }
                }
                if($range == 'Contacto'){
                    $data[$mfoKey]['contacts'] = self::getContacts($value);
                    if($key == 3){
                        $dataText['text']['contacts'] = self::getContacts($value);
                        continue;
                    }
                }
                if($range == 'Páginas Temáticas'){
                    $data[$mfoKey]['pages'] = self::getThemePages($value);
                    if($key == 3){
                        $dataText['text']['pages'] = self::getThemePages($value);
                        continue;
                    }
                }

                if($range == 'Meto'){
                    $data[$mfoKey]['meta_tags'] = self::getMetaTags($value);
                    if($key == 3){
                        $dataText['text']['meta_tags'] = self::getMetaTags($value);
                    }

                    if($key == 3){
                        $mfoText = MfoText::find()->where(['name' => 'Text'])->one();
                        if($mfoText){
                            $mfoText->text_mfo = json_encode($dataText);
                            if($mfoText->save()){
                                continue;
                            } else {
                                echo 'Ошибка при обновлении таблицы MfoText';
                                var_dump($mfoText->errors); die;
                            }
                        } else {
                            $modelText = new MfoText();
                            $modelText->name = 'Text';
                            $modelText->text_mfo = json_encode($dataText);
                            if($modelText->save()){
                                continue;
                            } else {
                                echo 'Ошибка при формировании таблицы MfoText ';
                                var_dump($modelText->errors); die;
                            }
                        }
                    }
                }
                $mfoKey++;
            }
        }
        if($data){
            foreach ($data as $datum){
                if($datum['meta_tags']['url'] && $datum['meta_tags']['on']){
                    $mfo = Mfo::find()->where(['url' => $datum['meta_tags']['url']])->one();
                    if($mfo){
                        $mfo->data = json_encode($datum);
                        $mfo->rating_auto = json_encode($mfo->rating_auto);
                        $mfo->save();
                        $countUpdate++;
                    } else {
                        $model = new Mfo();
                        $model->name = $datum['meta_tags']['url'];
                        $model->url = $datum['meta_tags']['url'];
                        $model->title = $datum['meta_tags']['title'];
                        $model->data = json_encode($datum);
                        $model->rating_auto = null;
                        $model->save();
                        $countSave++;
                    }
                } else {
                    $line = $key + 1;
                    throw new HttpException(500, 'В строке '.$line.' отсутствует URL');
                }
            }
        } else {
            throw new HttpException(500, 'Ошибка c Google таблицей');
        }
        return [
            'countSave' => $countSave,
            'countUpdate' => $countUpdate,
        ];
    }

    /**
     * Возвращает массив из таблицы 'Condiciones de préstamos'
     * @param string|null $value
     * @return array
     */
    public static function getCondiciones($value)
    {
        $data['plazo_min'] = $value[4]; //Срок, min
        $data['plazo_max'] = $value[5]; // Срок, max
        $data['rate_first'] = $value[6]; // Ставка, первый заем
        $data['rate_repeat'] = $value[7]; // Ставка, повторный заем
        $data['rate_annual'] = $value[8]; // Годовая процентная ставка
        $data['min_total_cost'] = $value[9]; // Полная стоимость кредита,  min
        $data['max_total_cost'] = $value[10]; // Полная стоимость кредита,  max
        $data['late_fee'] = $value[11]; // Штраф за просрочку
        $data['overdue_loan'] = $value[12]; // Процент, начисляемый на остаток просроченного займа
        $data['first_loan_min'] = $value[13]; // Сумма, первый займ, min
        $data['first_loan_max'] = $value[14]; // Сумма, первый займ, max
        $data['repeat_loan_min'] = $value[15]; // Сумма, повторный займ, min
        $data['repeat_loan_max'] = $value[16]; // Сумма, повторный займ, max
        $data['decision_time'] = $value[17]; // Срок принятия решения
        $data['term_transfer'] = $value[18]; // Срок перевода денежных средст
        $data['initial_fee'] = $value[19]; // Первоначальный взнос
        $data['extension'] = $value[20]; // Продление

        return $data;
    }

    /**
     * Возвращает массив из таблицы 'Requisitos'
     * @param string|null $value
     * @return array
     */
    public static function getRequisitos($value)
    {
        $data['individual'] = $value[4]; // Физическое лицо
        $data['nationality'] = $value[5]; // Гражданство
        $data['location'] = $value[6]; // Местонахождения
        $data['voter_card'] = $value[7]; // Карта избирателя
        $data['inn'] = $value[8]; // Федеральный реестр налогоплатильщиков (ИИН)
        $data['personal_id'] = $value[9]; // Персональный ID
        $data['double_sided_photo'] = $value[10]; // Двусторонее фото FE/INE
        $data['older_than'] = $value[11]; // Старше чем
        $data['younger_than'] = $value[12]; // Младше чем
        $data['have_credit_history'] = $value[13]; // Иметь кредитную историю
        $data['bank_card'] = $value[14]; // Банковская карта
        $data['bank_account'] = $value[15]; // Банковский счет
        $data['regular_income'] = $value[16]; // Регулярный доход
        $data['payment_receipts'] = $value[17]; // Платежные квитанции
        $data['bank_statement'] = $value[18]; // Банковская выписка
        $data['address_verification'] = $value[19]; // Подтверждение адреса
        $data['mobile_phone'] = $value[20]; // Мобильный телефон
        $data['email'] = $value[21]; // Электронная почта
        $data['facebook'] = $value[22]; // Личный аккаунт в Facebook

        return $data;
    }

    /**
     * Возвращает массив из таблицы 'Características de la compañía'
     * @param string|null $value
     * @return array
     */
    public static function getCharacteristic($value)
    {
        $data['first_loan_zero'] = $value[4]; // Первый займ под ноль
        $data['operates_mexico'] = $value[5]; // Компания работает на всей территории Мексики
        $data['loans_individuals'] = $value[6]; // Кредиты физическим лицам
        $data['for_persons_older'] = $value[7]; // Для лиц старше чем
        $data['quick_loan'] = $value[8]; // Бытрый займ
        $data['online'] = $value[9]; // 100% онлайн
        $data['rate_fixed'] = $value[10]; // Тип процентной ставки (фиксированная)
        $data['early_repayment'] = $value[11]; // Досрочное погашение с уменьшением переплаты
        $data['prolongation'] = $value[12]; // Продление
        $data['without_call'] = $value[13]; // Офрмление без звонка
        $data['round_the_clock'] = $value[14]; // Круглосуточная (7/24) работа компании
        $data['tiene_app'] = $value[15]; // Tiene app
        $data['google_play'] = $value[16]; // Google Play
        $data['app_store'] = $value[17]; // App Store

        return $data;
    }

    /**
     * Возвращает массив из таблицы 'Medios de disposición del crédito'
     * @param string|null $value
     * @return array
     */
    public static function getMeans($value)
    {
        $data['means_online'] = $value[4]; // 100% онлайн
        $data['means_bank_card'] = $value[5]; // Банковская карта
        $data['check'] = $value[6]; // Счет
        $data['test_call'] = $value[7]; // Проверочный звонок

        return $data;
    }

    /**
     * Возвращает массив из таблицы 'Métodos de pago'
     * @param string|null $value
     * @return array
     */
    public static function getPaymentMethods($value)
    {
        $data['payment_prolongation'] = $value[4]; // Продление
        $data['full_repayment'] = $value[5]; // Полное погашение
        $data['payment_by_card'] = $value[6]; // Оплата картой
        $data['bank_account'] = $value[7]; // Банковский счёт / Перевод /Национальная система межбанковских переводов
        $data['payment_phone_operator'] = $value[8]; // Оплата по телефону через оператора
        $data['qr_code'] = $value[9]; // Национальная система платежей через QR-коды/Телефон
        $data['bank_teller'] = $value[10]; // Погашение через кассу банка
        $data['shops'] = $value[11]; // Магазины "у дома", аналог Пятерочки
        $data['largest_bank'] = $value[12]; // Крупнейший банк / платёж через интернет-банк
        $data['payment_terminals'] = $value[13]; // Банкоматы или платёжные терминалы
        $data['wallet'] = $value[14]; // Кошелёк / Платёжка
        $data['lata'] = $value[15]; // Система денежных переводов по ЛАТАм
        $data['own_payment'] = $value[16]; // Собственная платёжка
        $data['wallet_payment'] = $value[17]; // Кошелёк / Платёжка
        $data['direct_debit'] = $value[18]; // Прямой дебет /(безакцептное списание) / подписка

        return $data;
    }

    /**
     * Возвращает массив из таблицы 'Datos de la compañia'
     * @param string|null $value
     * @return array
     */
    public static function getDataCompany($value)
    {
        $data['legal_name_company'] = $value[4]; // Юридическое название финансовой компании
        $data['sector'] = $value[5]; // Сектор
        $data['product'] = $value[6]; // Продукт
        $data['short_name'] = $value[7]; // Короткое название
        $data['trademark'] = $value[8]; // Nombre Comercial
        $data['year_foundation'] = $value[9]; // Год основания
        $data['start_operations'] = $value[10]; // Начало операционной деятельности
        $data['bank'] = $value[11]; // Банк
        $data['clabe'] = $value[12]; // CLABE
        $data['bank_2'] = $value[13]; // Банк 2
        $data['clabe_2'] = $value[14]; // CLABE 2
        $data['rfc'] = $value[15]; // RFC
        $data['cnbv'] = $value[16]; // CNBV
        $data['national_commission'] = $value[17]; // Comisión Nacional para la Protección y Defensa de los usuarios de Servicios Financieros. Número de registro
        $data['condusef'] = $value[18]; // CONDUSEF
        $data['condusef_ficha'] = $value[19]; // CONDUSEF (Ficha Technica)
        $data['registration_number_condusef'] = $value[20]; // Número de registro ante la CONDUSEF (Registro de Contrato de Adhesión "RECA")
        $data['lei_code'] = $value[21]; // Код идентификации юридических лиц LEI
        $data['entity_legal_code'] = $value[22]; // Código de la forma legal de la entidad
        $data['corporate_address'] = $value[23]; // Domicilio del Corporativo

        return $data;
    }

    /**
     * Возвращает массив из таблицы 'Empresa matriz'
     * @param string|null $value
     * @return array
     */
    public static function getMotherCompany($value)
    {
        $data['mother_company'] = $value[4]; // Материнская компания
        $data['sitio'] = $value[5]; // Sitio
        $data['president'] = $value[6]; // Presidente
        $data['director'] = $value[7]; // Director Ejecutivo
        $data['linkedin'] = $value[8]; // linkedin
        $data['office_locations'] = $value[9]; // Headquarters and office locations
        $data['direction'] = $value[10]; // La dirección

        return $data;
    }

    /**
     * Возвращает массив из таблицы 'La cuenta'
     * @param string|null $value
     * @return array
     */
    public static function getAccount($value)
    {
        $data['log_your_account'] = $value[4]; // Accede a tu cuenta
        $data['account_facebook'] = $value[5]; // Facebook
        $data['account_email'] = $value[6]; // Correo electrónico
        $data['cell_phone_number'] = $value[7]; // Número de celular (10 dígitos)

        return $data;
    }

    /**
     * Возвращает массив из таблицы 'Atención al cliente'
     * @param string|null $value
     * @return array
     */
    public static function getCustomerSupport($value)
    {
        $data['terms_conditions'] = $value[4]; // Términos y Condiciones
        $data['contact_form'] = $value[5]; // Formulario de Contacto
        $data['chat_online'] = $value[6]; // Сharla en línea
        $data['unidad'] = $value[7]; // Unidad Especializada de Atención (UNE)
        $data['unidad_1'] = $value[8]; // Unidad Especializada de Atención (UNE)
        $data['unidad_2'] = $value[9]; // Unidad Especializada de Atención (UNE)

        return $data;
    }

    /**
     * Возвращает массив из таблицы 'Contacto'
     * @param string|null $value
     * @return array
     */
    public static function getContacts($value)
    {
        $data['contact_city'] = $value[4]; // La ciudad
        $data['contact_direction'] = $value[5]; // La dirección
        $data['postal_code'] = $value[6]; // Código Postal
        $data['phone'] = $value[7]; // Teléfono
        $data['phone_1'] = $value[8]; // Teléfono 2
        $data['whatsapp'] = $value[9]; // WhatsApp
        $data['facebook'] = $value[10]; // Facebook
        $data['instagram'] = $value[11]; // Instagram
        $data['twitter'] = $value[12]; // Twitter
        $data['youtube'] = $value[13]; // YouTube
        $data['linkedin'] = $value[14]; // linkedin
        $data['business_hours'] = $value[15]; // Horario de atención
        $data['email'] = $value[16]; // Correo electrónico
        $data['google_maps'] = $value[17]; // Google Maps

        return $data;
    }

    /**
     * Возвращает массив из таблицы 'Meto'
     * @param string|null $value
     * @return array
     */
    public static function getMetaTags($value)
    {
        $data['site'] = $value[0]; // site
        $data['url'] = $value[1]; // URL
        $data['on'] = $value[4]; // ON
        $data['h1'] = $value[5]; // H1
        $data['title'] = $value[6]; // Title
        $data['description'] = $value[7]; // Description

        return $data;
    }

    /**
     * Возвращает массив из таблицы 'Páginas Temáticas'
     * @param string|null $value
     * @return array
     */
    public static function getThemePages($value)
    {
        $data['linea'] = $value[4]; // Prestamos en linea
        $data['rapidos'] = $value[5]; // Prestamos rapidos
        $data['buro'] = $value[6]; // Prestamos en linea sin buro
        $data['personales'] = $value[7]; // Prestamos personales urgentes

        return $data;
    }
}
