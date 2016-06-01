<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: x-requested-with");
//echo "{err:'ok',token:'token123456'}";

$animal1 = array('id'=>'b'.rand(100000,999999), 'name'=>'牛', 'count'=>'10', 'unit'=>'头');
$animal2 = array('id'=>'b'.rand(100000,999999), 'name'=>'马', 'count'=>'10', 'unit'=>'匹');

$attach1 = array('display'=>"一个文档",'url'=>'http://'.$_SERVER['HTTP_HOST'].'/wuyuan-prevetion/server/obj/DebugBar.7.5.rar');
$attach2 = array('display'=>"另一个文档",'url'=>'http://'.$_SERVER['HTTP_HOST'].'/wuyuan-prevetion/server/obj/DebugBar.7.5.rar');

$animalArray = array($animal1,$animal2);
$attachArray = array($attach1,$attach2);
$result = array('err' => 'ok', 'tel'=>'13811100222', 'addr'=>'隆兴昌镇乌兰村北路12号', 'lat'=>'41', 'lon'=>'103', 'region'=>'五原县',  'animals' => $animalArray, 'attach' =>$attachArray);
echo json_encode($result);
?>