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
            [['mfo_id', 'costs', 'conditions', 'support', 'functionality', 'body','name','email'], 'required'],
            [['costs', 'conditions', 'support', 'functionality', 'recommendation', 'status', 'sort', 'created_at', 'updated_at'], 'integer'],
            [['body', 'plus', 'minus'], 'string'],
            [['mfo_id','name','email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mfo_id' => 'МФО',
            'costs' => 'Interés & Costes',
            'conditions' => 'Condiciones',
            'support' => 'Atención al cliente',
            'functionality' => 'Funcionalidad',
            'body' => 'Danos tu opinión',
            'plus' => 'Плюсы',
            'minus' => 'Минусы',
            'name' => 'Name',
            'email' => 'E-mail',
            'recommendation' => 'Recommendation',
            'status' => 'Статус',
            'sort' => 'Сортировка',
            'created_at' => 'Дата создания',
            'updated_at' => 'Дата обновления',
        ];
    }

    public static function getSumRating($id)
    {
        $reviews = self::find()->where(['mfo_id' => $id,'status' => 1])->all();
        $sum = 0;
        if($reviews){
            foreach ($reviews as $item) {
                $total = ((int)$item['costs'] + (int)$item['conditions'] + (int)$item['support'] + (int)$item['functionality']) / 4;
                $sum += $total;
            }

            $sumAll = $sum / count($reviews);
            return number_format($sumAll,2);
        }

        return 0;
    }

    public static function getReviewsRatingList($id)
    {
        $reviews = self::find()->where(['mfo_id' => $id,'status' => 1])->all();
        $sum = 0;
        $costs = 0;
        $conditions = 0;
        $support = 0;
        $functionality = 0;
        if($reviews){
            $count = count($reviews);
            foreach ($reviews as $item) {
                $total = ((int)$item['costs'] + (int)$item['conditions'] + (int)$item['support'] + (int)$item['functionality']) / 4;
                $costs +=  (int)$item['costs'];
                $conditions +=  (int)$item['conditions'];
                $support +=  (int)$item['support'];
                $functionality +=  (int)$item['functionality'];
                $sum += $total;
            }
            $costs = $costs / $count;
            $conditions = $conditions / $count;
            $support = $support / $count;
            $functionality = $functionality / $count;

            $sumAll = $sum / count($reviews);

            $starWidthAll = (100 * $sumAll)/5;
            $starWidthCosts = (100 * $costs)/5;
            $starWidthConditions = (100 * $conditions)/5;
            $starWidthSupport = (100 * $support)/5;
            $starWidthFunctionality = (100 * $functionality)/5;
            return [
                'costs' => number_format($costs,2),
                'conditions' => number_format($conditions,2),
                'support' => number_format($support,2),
                'functionality' => number_format($functionality,2),
                'all' => number_format($sumAll,2),
                'starWidthAll' => $starWidthAll,
                'starWidthCosts' => $starWidthCosts,
                'starWidthConditions' => $starWidthConditions,
                'starWidthSupport' => $starWidthSupport,
                'starWidthFunctionality' => $starWidthFunctionality,
            ];
        }

        return 0;
    }
}
