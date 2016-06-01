<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: x-requested-with");
//echo "{err:'ok',token:'token123456'}";

$attach1 = array('display'=>"一个文档",'url'=>'http://'.$_SERVER['HTTP_HOST'].'/wuyuan-prevetion/server/obj/DebugBar.7.5.rar');
$attach2 = array('display'=>"另一个文档",'url'=>'http://'.$_SERVER['HTTP_HOST'].'/wuyuan-prevetion/server/obj/DebugBar.7.5.rar');

$attachArray = array($attach1,$attach2);

$result = array('err' => 'ok', 'telOut'=>'13811100222', 'contactOut'=>'李四', 'telIn'=>'13811100223', 'contactIn'=>'李五', 'cirPeriod'=>'10', 'cirPrice'=>'500',  'cirType' => '02', 'contractNum' => '334455667788-213', 'landNum' =>'1234567890987654321', 'landHolder' =>'李四', 'landRegion' =>'150821103200','landRegionName' =>'永旺村', 'landArea'=>'13亩', 'landPos'=>'村东', 'landLevel'=>'六等地', 'landType'=>'盐碱地', 'landLimit'=>'左边是农田,左边是农田,左边是农田,左边是农田','attach' =>$attachArray);
echo json_encode($result);
?>