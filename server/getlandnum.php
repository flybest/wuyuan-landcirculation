<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: x-requested-with");

$land1 = array('text'=>'1234567890987654321', 'value'=>'1234567890987654321');
$land2 = array('text'=>'1234567890987654322', 'value'=>'1234567890987654322');
$land3 = array('text'=>'1234567890987654323', 'value'=>'1234567890987654323');
$land4 = array('text'=>'1234567890987654324', 'value'=>'1234567890987654324');
$landArray = array($land1,$land2,$land3,$land4);

$result = array('err' => 'ok', 'requestCount'=>10, 'respondCount'=>4, 'landList' => $landArray);
echo json_encode($result);
?>