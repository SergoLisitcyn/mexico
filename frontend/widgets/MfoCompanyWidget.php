<?php

namespace frontend\widgets;


use common\models\Reviews;
use yii\bootstrap\Widget;

class MfoCompanyWidget  extends Widget
{
    public $mfo;
    public $sum;
    public $term;
    public $mfoText;


    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $reviewsCount = Reviews::find()->where(['mfo_id' => $this->mfo['params']['id'], 'status' => 1])->count();
        $ratingReviews = Reviews::getSumRating($this->mfo['params']['id']);
        $starReviews = 0;
        if($ratingReviews > 0){
            $starReviews = (100 * $ratingReviews)/5;
        }

        if(isset($this->mfo['params']['data']['condiciones'])){
            $procent = (float)str_replace(',', '.', $this->mfo['params']['data']['condiciones']['rate_first']);
        }
        $procent = 1;

        $sumAll = $this->sum * ($procent/100) * $this->term;
        $sumWithVat = $sumAll * 0.16;
        $totalSum = $sumAll + $sumWithVat;
        $total = $this->sum + $totalSum;

        $totalFormat = number_format($total, 2, '.', '');

        $montoText = 'Monto del Préstamo, $';
        $fechaText = 'Fecha de Pago, días';
        $tasaText = 'Tasa de interés, %';
        $pagarText = 'Total a Pagar, $';
        $catText = 'CAT, %';

        if($this->mfo['params']['type'] == 'PDL'){
            return $this->render('company/pdl',[
                'mfo' => $this->mfo,
                'sum' => $this->sum,
                'term' => $this->term,
                'montoText' => $montoText,
                'fechaText' => $fechaText,
                'tasaText' => $tasaText,
                'pagarText' => $pagarText,
                'catText' => $catText,
                'totalFormat' => $totalFormat,
                'reviewsCount' => $reviewsCount,
                'starReviews' => $starReviews,
                'ratingReviews' => $ratingReviews,
                'mfoText' => $this->mfoText,
            ]);
        }


        if(isset($this->mfoText)){
            if($this->mfoText['condiciones']){
                if($this->mfoText['condiciones']['other_loan_min']){
                    $montoText = $this->mfoText['condiciones']['other_loan_min'];
                }
                if($this->mfoText['condiciones']['other_loan_max']){
                    $fechaText = $this->mfoText['condiciones']['other_loan_max'];
                }
                if($this->mfoText['condiciones']['other_term_months_min']){
                    $tasaText = $this->mfoText['condiciones']['other_term_months_min'];
                }
                if($this->mfoText['condiciones']['other_term_months_max']){
                    $pagarText = $this->mfoText['condiciones']['other_term_months_max'];
                }
            }
            if($this->mfoText['requisitos']){
                if($this->mfoText['requisitos']['older_than']){
                    $catText = $this->mfoText['requisitos']['older_than'];
                }
            }
        }
        $data = $this->mfo['params']['data'];
        $monto = 0;
        $fecha = 0;
        $tasa = 0;
        $pagar = 0;
        $cat = 0;
        if($data['condiciones']['other_loan_min'] && $data['condiciones']['other_loan_min'] != '-'){
            $monto = $data['condiciones']['other_loan_min'];
        }
        if($data['condiciones']['other_loan_max'] && $data['condiciones']['other_loan_max'] != '-'){
            $fecha = $data['condiciones']['other_loan_max'];
        }
        if($data['condiciones']['other_term_months_min'] && $data['condiciones']['other_term_months_min'] != '-'){
            $tasa = $data['condiciones']['other_term_months_min'];
        }
        if($data['condiciones']['other_term_months_max'] && $data['condiciones']['other_term_months_max'] != '-'){
            $pagar = $data['condiciones']['other_term_months_max'];
        }
        if($data['requisitos']['older_than'] && $data['requisitos']['older_than'] != '-'){
            $cat = $data['requisitos']['older_than'];
        }



        return $this->render('company/company',[
            'mfo' => $this->mfo,
            'monto' => $monto,
            'fecha' => $fecha,
            'tasa' => $tasa,
            'pagar' => $pagar,
            'cat' => $cat,
            'montoText' => $montoText,
            'fechaText' => $fechaText,
            'tasaText' => $tasaText,
            'pagarText' => $pagarText,
            'catText' => $catText,
            'totalFormat' => $totalFormat,
            'reviewsCount' => $reviewsCount,
            'starReviews' => $starReviews,
            'ratingReviews' => $ratingReviews,
            'mfoText' => $this->mfoText
        ]);



    }
}