<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: x-requested-with");
//echo "{err:'ok',token:'token123456'}";

$animal1 = array('id'=>'b'.rand(100000,999999), 'name'=>'牛', 'count'=>'10', 'unit'=>'头');
$animal2 = array('id'=>'b'.rand(100000,999999), 'name'=>'马', 'count'=>'10', 'unit'=>'匹');
$animalArray = array($animal1,$animal2);

$farmer1 = array('id' => 'a12341', 'name'=>'张三', 'tel'=>'13811100222', 'animals' => $animalArray );
$farmer2 = array('id' => 'a12342', 'name'=>'李四', 'tel'=>'13811100222', 'animals' => $animalArray );
$farmerArray = array($farmer1, $farmer2);

$attach1 = array('display'=>"一个文档",'url'=>'http://'.$_SERVER['HTTP_HOST'].'/wuyuan-prevetion/server/obj/DebugBar.7.5.rar');
$attach2 = array('display'=>"另一个文档",'url'=>'http://'.$_SERVER['HTTP_HOST'].'/wuyuan-prevetion/server/obj/DebugBar.7.5.rar');
$attachArray = array($attach1,$attach2);

$result = array('err' => 'ok', 'vacname'=>'测试疫苗', 'spec'=>'10拼装', 'usecount'=>'41', 'useunit'=>'头/份', 'vaccount'=>'10', 'vacunit' => '瓶', 'recdate' => '2016-03-19', 'farmers' => $farmerArray, 'attach' =>$attachArray);
echo json_encode($result);
?>