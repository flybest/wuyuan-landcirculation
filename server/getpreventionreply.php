<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: x-requested-with");

$farmer1 = array('id'=>'a'.rand(100000,999999), 'name'=>'张三', 'addr'=>'隆兴昌镇乌兰村北路12号', 'tel'=>'13811100222', 'animal'=>'牛20头', 'img'=>'http://'.$_SERVER['HTTP_HOST'].'/wuyuan-prevetion/server/img/muwu.jpg');
$farmer2 = array('id'=>'a'.rand(100000,999999), 'name'=>'李四', 'addr'=>'隆兴昌镇乌兰村北路12号', 'tel'=>'13811100222', 'animal'=>'牛20头', 'img'=>'http://'.$_SERVER['HTTP_HOST'].'/wuyuan-prevetion/server/img/muwu.jpg');

$farmerArray = array($farmer1,$farmer2);

$work1 = array('workid' => 'a123451', 'region'=>'乌兰村', 'sendtime' => '2016-03-18', 'farmers' => $farmerArray); 
$work2 = array('workid' => 'a123452', 'region'=>'永强村', 'sendtime' => '2016-03-19', 'farmers' => $farmerArray);

$workArray = array($work1, $work2);

$result = array('err' => 'ok', 'requestCount'=>10, 'respondCount'=>2, 'works' => $workArray);
echo json_encode($result);
?>