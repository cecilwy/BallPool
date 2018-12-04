<?php

//メタ情報をここで設定
$title = '';
$keyword = '';
$description = '';

$url = 'https://mat-room.com/api/itemcode/bpmh4000hu/prices/';
$json = file_get_contents($url);
$json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
$arr = json_decode($json,true);

$itemname = $arr['itemname'];
$title = $itemname;

//ない場合があるみたい
if(isset($arr['photos'][0])){
    $product_photo = $arr['photos'][0];
}

//ない場合があるみたい
if(isset($arr['photos'][1])) {
    $drawing_photo = $arr['photos'][1];
}

$product_code = $arr['code'];
$size = $arr['size_string'];

$price_list = $arr['listprice_array'];
$dsp_price = $arr['listprice_array']['A'];  //商品名の所に表示する金額

if(isset($arr['parts_array'])) {
    $parts_array = $arr['parts_array'];
}
$count = count($price_list);

$myPath = dirname(__FILE__);

include '../../template/item_detail.php';

/**
 * 外部ファイル存在チェック関数
 * @param $url
 * @return bool
 */
function is_url_exist($url){
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_NOBODY, true);
    curl_exec($ch);
    $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    if($code == 200){
        $status = true;
    }else{
        $status = false;
    }
    curl_close($ch);
    return $status;
}
