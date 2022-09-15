<?php

use common\models\Mfo;
use yii\helpers\Json;

ini_set("display_errors", "on");
ini_set('memory_limit', '2048M');
// error_reporting(E_ALL);
error_reporting(0);
date_default_timezone_set('Europe/Moscow');

//require_once '/var/www/vhosts/findzhin.ru/httpdocs/vendor/autoload.php';
require __DIR__ . '../../../../vendor/autoload.php';
//require_once __DIR__ . '/../../inc/func.php';
// require_once __DIR__ . '/../../../private/sheets/vendor/autoload.php';

$defaultAddScore = 2;
$addScore = $defaultAddScore;
if(!empty($_GET["addScore"])) $addScore = (float)$_GET["addScore"];

$servicesConumn = "B";
$startLineFrom = 4;
$maxLineColumn = "B";
$maxLineLine = 0;

$orgName = null;
if(!empty($argv[1])) $orgName = trim($argv[1]);
if(!empty($_GET["name"])) $orgName = trim($_GET["name"]);

$sheetsData = array();
$columnNameToDigital = array(
    "A"=>0, "B"=>1, "C"=>2, "D"=>3, "E"=>4, "F"=>5, "G"=>6, "H"=>7, "I"=>8, "J"=>9, "K"=>10, "L"=>11, "M"=>12, "N"=>13, "O"=>14, "P"=>15, "Q"=>16, "R"=>17, "S"=>18, "T"=>19, "U"=>20, "V"=>21, "W"=>22, "X"=>23, "V"=>24, "Z"=>25,
);
$servicesConumn = $columnNameToDigital[$servicesConumn];
$sheets = array(
    "Semántica" => array(
    ),
    "Condiciones de préstamos" => array(
        "data"=> array(
            "Минимальная сумма" => "N",
            "Максимальная сумма" => "O",
            "Дневная ставка" => "G",
            "Максимальный срок на первый заем" => "A",
        ),
        "maxline" => 100,
    ),
    "Requisitos" => array(
        "data"=> array(
            "Минимальный возраст" => "K",
            "Максимальный возраст" => "L",
            "Документы" => "H,I,Q,R,S",
            "Регулярный доход" => "P",
            "Наличие кредитной истории" => "M",
        ),
        "maxline" => 100,
    ),
    "Características de la compañía" => array(
        "data"=> array(
            "Круглосуточная работа" => "N",
            "Специальные условия на 1 заем" => "D",
            "Наличие приложения" => "O,P,Q",
        ),
        "maxline" => 100,
    ),
    "Medios de disposición del crédito" => array(
    ),
    "Métodos de pago" => array(
        "data"=> array(
            "Способы погашения" => "G,H,I,J,K,L,M,N,O,P,Q,R",
            "Безакцептное списание" => "S",
        ),
        "maxline" => 100,
    ),
    "Datos de la compañia" => array(
        "data"=> array(
            "Опубликован CLABE" => "L",
            "Есть LEI" => "U",
        ),
        "maxline" => 100,
    ),
    "Empresa matriz" => array(
        "data"=> array(
            "Есть LinkedIn CEO" => "I",
        ),
        "maxline" => 100,
    ),
    "La cuenta" => array(
    ),
    "Atención al cliente" => array(
        "data"=> array(
            "Онлайн чат" => "F",
            "Форма обратной связи" => "E",
            "Términos y Condiciones (онлайн)" => "D"
        ),
        "maxline" => 100,
    ),
    "Contacto" => array(
        "data"=> array(
            "Соцсети" => "J,K,L,M,N",
            "WhatsApp" => "I",
        ),
        "maxline" => 100,
    ),
);

$pagamsGroup = array(
//    "Условия / Interés & Costes" => array(
    "interes_costes" => array(
        "Минимальный возраст" => array(
            4=>["between", [18, 19]], 3=>["between", [19, 21]], 2=>["between", [22, 23]], 1=>[">", 23],
        ),
        "Максимальный возраст" => array(
            4=>[">=", 0], 3=>[">", 70], 2=>["between", [66, 70]], 1=>["between", [61, 65]],
        ),
        "Минимальная сумма" => array(
            4=>[">=", 500], 3=>["between", [501, 1000]], 2=>["between", [1001, 1500]], 1=>[">", 1500],
        ),
        "Максимальная сумма" => array(
            4=>[">=", 10000], 3=>["between", [4001, 10000]], 2=>["between", [2001, 4000]], 1=>["<", 2000],
        ),
        "Дневная ставка" => array(
            4=>["<", 0.01], 3=>["between", [0.01, 0.014999999]], 2=>["between", [0.015, 0.02]], 1=>[">", 0.02],
        ),
        "Круглосуточная работа" => array(
            3=>["=", "Да"], 1=>["=", "Нет"],
        ),
        "Специальные условия на 1 заем" => array(
            4=>["=", "Да"], 1=>["=", "Нет"],
        ),
        "Максимальный срок на первый заем" => array(
            3=>[">", 40], 2=>["between", [30, 40]], 1=>["<", 30],
        ),
    ),
//    "Требования / Condiciones" => array(
    "condiciones" => array(
        "Документы" => array(
            1=>["sum(if not null)=", 1], 2=>["sum(if not null)=", "2"], 3=>["sum(if not null)=", 3], 4=>["sum(if not null)>", 3],
        ),
        "Регулярный доход" => array(
            4=>["=", "Нет"], 1=>["=", "Да"],
        ),
        "Наличие кредитной истории" => array(
            2=>["=", "Нет"], 1=>["=", "Да"],
        ),
    ),
//    "Поддержка / Atención al cliente" => array(
    "atencion" => array(
        "Соцсети" => array(
            1=>["sum(if not null)<=", 1], 2=>["sum(if not null)between", [2, 3]], 3=>["sum(if not null)=", 4], 4=>["sum(if not null)>=", 5],
        ),
        "Онлайн чат" => array(
            3=>["=", "Да"], 1=>["=", "Нет"],
        ),
        "WhatsApp" => array(
            4=>["=", "Да"], 1=>["=", "Нет"],
        ),
        "Форма обратной связи" => array(
            2=>["=", "Да"], 1=>["=", "Нет"],
        ),
        "Términos y Condiciones (онлайн)" => array(
            2=>["=", "Да"], 1=>["=", "Нет"],
        ),
    ),
//    "Удобство / Funcionalidad" => array(
    "funcionalidad" => array(
        "Наличие приложения" => array(
            1=>["sum(if not null)=", 0], 2=>["sum(if not null)=", 1], 3=>["sum(if not null)>=", 2],
        ),
        "Способы погашения" => array(
            1=>["sum(if not null)<=", 2], 2=>["sum(if not null)between", [3,4]], 3=>["sum(if not null)between", [5,6]], 4=>["sum(if not null)>", 6],
        ),
        "Безакцептное списание" => array(
            3=>["=", "Да"], 1=>["=", "Нет"],
        ),
        "Опубликован CLABE" => array(
            2=>["=", "Да"], 1=>["=", "Нет"],
        ),
        "Есть LEI" => array(
            2=>["=", "Да"], 1=>["=", "Нет"],
        ),
        "Есть LinkedIn CEO" => array(
            3=>["=", "Да"], 1=>["=", "Нет"],
        ),
    ),
);

$spreadsheetId = '1tOkaC26ROLFQeC6tQ7_zxmbXGu2xg3rGBObY6der85o';

// $googleAccountKeyFilePath = __DIR__ . '/../../private/sheets/mexicocrm-d704a62af6ba.json';
$googleAccountKeyFilePath = '/var/www/vhosts/findzhin.ru/private/mexicocrm-d704a62af6ba.json';
$googleAccountKeyFilePath = __DIR__ . '/../mfo/mexicocrm.json';
putenv('GOOGLE_APPLICATION_CREDENTIALS=' . $googleAccountKeyFilePath);
$client = new Google_Client();
$client->useApplicationDefaultCredentials();
$client->addScope('https://www.googleapis.com/auth/spreadsheets');
$service = new Google_Service_Sheets($client);

$sheetService = new Google_Service_Sheets($client);
$spreadSheet = $sheetService->spreadsheets->get($spreadsheetId);
$sheetsApi = $spreadSheet->getSheets();

$service_to_params_value = array();
$checkSum = array();

foreach($sheets as $sheetName => $sheetParams){
    if(empty($sheetParams)) continue;
    foreach($sheetsApi as $sheet) {
        if($sheet["properties"]["title"] == $sheetName) {
            foreach($sheetParams["data"] as $paramName => $paramValues){
// var_dump($paramName);
                $paramValues = explode(",", trim($paramValues));

                $values = $sheetService->spreadsheets_values->get($spreadsheetId, $sheetName);
                if(!empty($values["values"])){
                    $values = $values["values"];
                    foreach($paramValues as $paramN){
                        if(isset($columnNameToDigital[$paramN])) $paramN = $columnNameToDigital[$paramN];
                        if(isset($values[$maxLineLine]) && isset($values[$maxLineLine][$columnNameToDigital[$maxLineColumn]])) {
                            $sheetParams["maxline"] = $values[$maxLineLine][$columnNameToDigital[$maxLineColumn]]-1;
                        }

                        foreach($values as $sheetLine => $valuesRow){
                            if($sheetLine < $startLineFrom) continue;
                            if($sheetLine > $sheetParams["maxline"]) continue;

                            foreach($valuesRow as $sheetServicesCell=>$sheetServicesVal){
                                $sheetServicesVal = trim($sheetServicesVal);
                                if(empty($sheetServicesVal)) continue;
                                if($sheetServicesCell != $servicesConumn) continue;
                                if(isset($values[$sheetLine]) && isset($values[$sheetLine][$paramN])) $sheetVal = $values[$sheetLine][$paramN]; else $sheetVal = null;

                                // замены написания
                                if($sheetVal = preg_replace("/^\s*[\$]+\s*([\s0-9]+)+\s*$/imsu", "$1", $sheetVal)) $sheetVal = preg_replace("/\s+/imsu","", $sheetVal);
                                if($sheetVal == "+") $sheetVal = "Да";
                                if(empty($sheetVal)) $sheetVal = "Нет";
                                if(preg_match("/^\s*(\d+(?:\.\d+)*)\s*%\s*$/imsu",$sheetVal, $ma)) $sheetVal=(float)$ma[1]/100;


// var_dump($sheetServicesVal . " = " . $sheetVal . " [{$sheetLine}; {$paramN}]");
//die("STOP\n");
                                foreach($pagamsGroup as $group_name => $group_params) {
                                    foreach($group_params as $group_param_name => $group_param_compare) {
                                        if($group_param_name == $paramName) {
                                            if(!isset($service_to_params_value[$sheetServicesVal])) $service_to_params_value[$sheetServicesVal] = array();
                                            if(!isset($service_to_params_value[$sheetServicesVal][$group_param_name])) $service_to_params_value[$sheetServicesVal][$group_param_name] = null;
                                            foreach($group_param_compare as $wigth => $compare_params){
                                                if(isset($compare_params[0])) {
                                                    if($compare_params[0] == "between" && isset($compare_params[1]) && is_array($compare_params[1]) && count($compare_params[1])==2) {
                                                        $sheetValDigit = $sheetVal;
                                                        if($sheetValDigit >= $compare_params[1][0] && $sheetValDigit <= $compare_params[1][1]) $service_to_params_value[$sheetServicesVal][$group_param_name] = $wigth;
                                                    }
                                                    if($compare_params[0] == ">" && isset($compare_params[1])) {
                                                        $sheetValDigit = $sheetVal;
                                                        if($sheetValDigit > $compare_params[1]) $service_to_params_value[$sheetServicesVal][$group_param_name] = $wigth;
                                                    }
                                                    if($compare_params[0] == ">=" && isset($compare_params[1])) {
                                                        $sheetValDigit = $sheetVal;
                                                        if($sheetValDigit >= $compare_params[1]) $service_to_params_value[$sheetServicesVal][$group_param_name] = $wigth;
                                                    }
                                                    if($compare_params[0] == "<" && isset($compare_params[1])) {
                                                        $sheetValDigit = $sheetVal;
                                                        if($sheetValDigit < $compare_params[1]) $service_to_params_value[$sheetServicesVal][$group_param_name] = $wigth;
                                                    }
                                                    if($compare_params[0] == "<=" && isset($compare_params[1])) {
                                                        $sheetValDigit = $sheetVal;
                                                        if($sheetValDigit <= $compare_params[1]) $service_to_params_value[$sheetServicesVal][$group_param_name] = $wigth;
                                                    }
                                                    if($compare_params[0] == "=" && isset($compare_params[1])) {
                                                        $sheetValDigit = $sheetVal;
                                                        if($sheetValDigit == $compare_params[1]) $service_to_params_value[$sheetServicesVal][$group_param_name] = $wigth;
                                                    }
                                                    if($compare_params[0] == "in" && isset($compare_params[1]) && is_array($compare_params[1])) {
                                                        if(in_array($sheetVal, $compare_params[1])) $service_to_params_value[$sheetServicesVal][$group_param_name] = $wigth;
                                                    }
                                                    if(preg_match("/^sum\s*\(([^\)]+)\s*\)\s*(.*?)$/imsu", $compare_params[0], $ma) && isset($compare_params[1])) {
                                                        $sheetVal = trim($sheetVal);
                                                        if(preg_match("/Нет/iu", $sheetVal)) $sheetVal = "";
                                                        if($ma[1] == "if not null"){
                                                            if($sheetVal != "") {
                                                                $service_to_params_value[$sheetServicesVal][$group_param_name] += 1;
                                                                $checkSum[$sheetServicesVal][$group_param_name][$wigth] = array($ma[2], $compare_params[1], $wigth, count($group_param_compare));
                                                            }

// var_dump("sheetServicesVal = ".$sheetServicesVal);
// var_dump("group_param_name = ".$group_param_name);
// var_dump("sheetVal = ".$sheetVal);
// var_dump("N = ".$service_to_params_value[$sheetServicesVal][$group_param_name]);
// var_dump("===================");
                                                        }
                                                        if($ma[1] == "not null"){
                                                            if($sheetVal == "") {
                                                                $service_to_params_value[$sheetServicesVal][$group_param_name] += 1;
                                                                $checkSum[$sheetServicesVal][$group_param_name][$wigth] = array($ma[2], $compare_params[1], $wigth, count($group_param_compare));
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                    // var_dump("========================");
                }
            }
        }
    }
}
if(!empty($checkSum)){
    foreach($checkSum as $sheetServicesVal => $checkData) {
        if(is_array($checkData)){
            foreach($checkData as $group_param_name => $checkParamAll) {
                foreach($checkParamAll as $checkParam){
                    if($checkParam[0] == "=" && floor($service_to_params_value[$sheetServicesVal][$group_param_name] / $checkParam[3]) == $checkParam[1]) $service_to_params_value[$sheetServicesVal][$group_param_name] = $checkParam[2];
                    if($checkParam[0] == ">" && floor($service_to_params_value[$sheetServicesVal][$group_param_name] / $checkParam[3]) > $checkParam[1]) $service_to_params_value[$sheetServicesVal][$group_param_name] = $checkParam[2];
                    if($checkParam[0] == ">=" && floor($service_to_params_value[$sheetServicesVal][$group_param_name] / $checkParam[3]) >= $checkParam[1]) $service_to_params_value[$sheetServicesVal][$group_param_name] = $checkParam[2];
                    if($checkParam[0] == "<" && floor($service_to_params_value[$sheetServicesVal][$group_param_name] / $checkParam[3]) < $checkParam[1]) $service_to_params_value[$sheetServicesVal][$group_param_name] = $checkParam[2];
                    if($checkParam[0] == "<=" && floor($service_to_params_value[$sheetServicesVal][$group_param_name] / $checkParam[3]) <= $checkParam[1]) $service_to_params_value[$sheetServicesVal][$group_param_name] = $checkParam[2];
                    if($checkParam[0] == "between" && is_array($checkParam[1]) && floor($service_to_params_value[$sheetServicesVal][$group_param_name] / $checkParam[3]) >= $checkParam[1][0] && floor($service_to_params_value[$sheetServicesVal][$group_param_name] / $checkParam[3]) <= $checkParam[1][1]) $service_to_params_value[$sheetServicesVal][$group_param_name] = $checkParam[2];
                }
            }
        }
    }
}
// print_r($service_to_params_value);
// print_r($checkSum);

$pagamsGroup_data = array();
foreach($pagamsGroup as $group_name => $group_params) {
    foreach($group_params as $group_param_name => $group_param_compare) {
        $keys = array_keys($group_param_compare);
        if(!empty($keys)){
            rsort($keys, SORT_NUMERIC);
            $max_key = $keys[0];
            if(isset($keys[0])){
                if(!isset($pagamsGroup_data[$group_name])) $pagamsGroup_data[$group_name] = array("max_sum" => 0, "by_service" => array(), "by_service_in_percet" => array());
                $pagamsGroup_data[$group_name]["max_sum"] += (int)$max_key;
            }
        }

        foreach($service_to_params_value as $service_name => $service_params_data) {
            foreach($service_params_data as $service_params_name => $service_params_value) {
                if(!isset($pagamsGroup_data[$group_name]["by_service"][$service_name])) $pagamsGroup_data[$group_name]["by_service"][$service_name] = 0;
                if($service_params_name == $group_param_name) $pagamsGroup_data[$group_name]["by_service"][$service_name] += $service_params_value;
            }
        }
    }
}
foreach($pagamsGroup_data as $group_name => $pagamsGroup_data_row) {
    if(!empty($pagamsGroup_data_row["max_sum"])) {
        foreach($pagamsGroup_data_row["by_service"] as $service_name => $value) {
            $pagamsGroup_data[$group_name]["by_service_in_percet"][$service_name] = ($value / $pagamsGroup_data_row["max_sum"]) + ($addScore / 5);
            if($pagamsGroup_data[$group_name]["by_service_in_percet"][$service_name] > 1) $pagamsGroup_data[$group_name]["by_service_in_percet"][$service_name] = 1;
        }
    }
}

$service_params_data = array();
foreach($pagamsGroup_data as $group_name => $group_data) {
    if(isset($group_data["by_service_in_percet"])) {
        foreach($group_data["by_service_in_percet"] as $service_name => $percent_value) {
            if(!isset($service_params_data[$service_name])) $service_params_data[$service_name] = array();
            $service_params_data[$service_name][$group_name] = $percent_value;
        }
    }
}

if(!empty($orgName)) $_GET["only-mfo"] = $orgName;
if(isset($_GET["only-mfo"]) && isset($service_params_data[$_GET["only-mfo"]])) $service_params_data = $service_params_data[$_GET["only-mfo"]];

foreach ($service_params_data as $key => $value){
    $mfo = Mfo::find()->where(['url' => $key])->one();
    $mfoRating = Mfo::generateRating($value['interes_costes'],$value['condiciones'],$value['atencion'],$value['funcionalidad']);
    if($mfoRating){
        $value = [
            'rating' => $mfoRating
        ];
    }
    if($mfo){
        $mfo->rating_auto = Json::encode($value);
        $mfo->data = Json::encode($mfo->data);
        if($mfoRating){
            $mfo->rating = $mfoRating['allRating'];
        }

        if($mfo->save()){
            echo $key.' добавлен!<br>';
        } else {
            var_dump($mfo->errors);
            die;
        }
    }
}
//if(isset($_GET["html"])){
//    echo "<pre>";
//    print_r($service_params_data);
//} else {
//    header("Content-Type: application/json; charset=utf-8");
//    echo json_encode($service_params_data, JSON_UNESCAPED_UNICODE);
//}