<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: x-requested-with");
//echo "{err:'ok',token:'token123456'}";

$result = array('err' => 'ok', 'landNum' =>'1234567890987654321', 'landArea'=>'13亩', 'landPos'=>'村东', 'landLevel'=>'六等地', 'landType'=>'盐碱地', 'landLimit'=>'左边是农田,左边是农田,左边是农田,左边是农田',);
echo json_encode($result);
?>