<?php

namespace frontend\controllers;

use common\models\MainSolicita;
use common\models\Mfo;
use common\models\Pages;
use Yii;
use yii\web\Controller;

class SitemapController  extends Controller
{
    public function actionIndex()
    {
        $urls = [];
        $mfo = Mfo::find()->where(['status' => 1])->all();

        foreach ($mfo as $item) {
            $urls[] = [
                'loc' => 'entidad/'.$item->url,
                'lastmod' => date( DATE_W3C ),
                'priority' => 0.8
            ];
            $urls[] = [
                'loc' => 'entidad/'.$item->url.'/reviews',
                'lastmod' => date( DATE_W3C ),
                'priority' => 0.64
            ];
        }
        $pages = Pages::find()->where(['status' => 1])->all();
        foreach ($pages as $page) {
            $urls[] = [
                'loc' => 'contenido/'.$page->slug,
                'lastmod' => date( DATE_W3C ),
                'priority' => 0.80
            ];
        }
        $solicita = MainSolicita::find()->all();
        foreach ($solicita as $sol) {
            $urls[] = [
                'loc' => $sol->url,
                'lastmod' => date( DATE_W3C ),
                'priority' => 0.80
            ];
        }

        $xml_sitemap = $this->renderPartial('index', [
            'host' => Yii::$app->request->hostInfo,
            'urls' => $urls,
        ]);

        Yii::$app->response->format = \yii\web\Response::FORMAT_RAW;
        $headers = Yii::$app->response->headers;
        $headers->add('Content-Type', 'text/xml');
        return $xml_sitemap;
    }
}