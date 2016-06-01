<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: x-requested-with");
//echo "{err:'ok',token:'token123456'}";


$result = array('err' => 'ok', 'tel'=>'13811100222', 'contact'=>'李四', 'aviDate'=>'30', 'cirPeriod'=>'10', 'cirPrice'=>'500',  'cirType' => '02', 'cirTitle' =>'这是一条测试信息', 'landNum' =>'1234567890987654321', 'landHolder' =>'李四', 'landRegion' =>'150821103200','landRegionName' =>'永旺村', 'landArea'=>'13亩', 'landPos'=>'村东', 'landLevel'=>'六等地', 'landType'=>'盐碱地', 'landLimit'=>'左边是农田,左边是农田,左边是农田,左边是农田');
echo json_encode($result);
?>