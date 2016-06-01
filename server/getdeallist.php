<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: x-requested-with");
//echo "{err:'ok',token:'token123456'}";


$info1 = array('err' => 'ok', 'infoId' => 'a'.rand(100000,999999), 'landHolder'=>'张三', 'landNum' => '1234567890987654321', 'type' => '成交', 'publishDate' => '2016-03-12', 'statue' => '待审核');
$info2 = array('err' => 'ok', 'infoId' => 'a'.rand(100000,999999), 'landHolder'=>'张三', 'landNum' => '1234567890987654321', 'type' => '成交', 'publishDate' => '2016-03-12', 'statue' => '已发布');
$info3 = array('err' => 'ok', 'infoId' => 'a'.rand(100000,999999), 'landHolder'=>'张三', 'landNum' => '1234567890987654321', 'type' => '成交', 'publishDate' => '2016-03-12', 'statue' => '已退回');
$info4 = array('err' => 'ok', 'infoId' => 'a'.rand(100000,999999), 'landHolder'=>'张三', 'landNum' => '1234567890987654321', 'type' => '成交', 'publishDate' => '2016-03-12', 'statue' => '待审核');
$info5 = array('err' => 'ok', 'infoId' => 'a'.rand(100000,999999), 'landHolder'=>'张三', 'landNum' => '1234567890987654321', 'type' => '成交', 'publishDate' => '2016-03-12', 'statue' => '已发布');
$info6 = array('err' => 'ok', 'infoId' => 'a'.rand(100000,999999), 'landHolder'=>'张三', 'landNum' => '1234567890987654321', 'type' => '成交', 'publishDate' => '2016-03-12', 'statue' => '已退回');
$infoArray = array($info1,$info2,$info3,$info4,$info5,$info6);
$result = array('err' => 'ok', 'requestCount'=>10, 'respondCount'=>6, 'info' => $infoArray);
echo json_encode($result);
?>