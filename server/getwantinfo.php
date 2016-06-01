<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: x-requested-with");
//echo "{err:'ok',token:'token123456'}";

$result = array('err' => 'ok', 'tel'=>'13811100222', 'contact'=>'李四', 'aviDate'=>'30', 'cirPeriod'=>'10', 'cirPrice'=>'500',  'cirType' => '02', 'cirTitle' =>'这是一条测试信息', 'landArea'=>'13亩', 'relDemond'=>'越快越好');
echo json_encode($result);
?>