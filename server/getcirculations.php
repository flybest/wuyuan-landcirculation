<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: x-requested-with");
//echo "{err:'ok',token:'token123456'}";

$circulation1 = array('cirId'=>'a'.rand(100000,999999), 'cirType'=>'土地出租', 'publishDate'=>'2016-03-12', 'title'=>'发布一条出租信息', 'img'=>'http://'.$_SERVER['HTTP_HOST'].'/wuyuan-landcirculation/server/img/muwu.jpg');
$circulation2 = array('cirId'=>'a'.rand(100000,999999), 'cirType'=>'土地互换', 'publishDate'=>'2016-03-12', 'title'=>'发布一条出租信息', 'img'=>'http://'.$_SERVER['HTTP_HOST'].'/wuyuan-landcirculation/server/img/muwu.jpg');
$circulation3 = array('cirId'=>'a'.rand(100000,999999), 'cirType'=>'土地转包', 'publishDate'=>'2016-03-12', 'title'=>'发布一条出租信息', 'img'=>'http://'.$_SERVER['HTTP_HOST'].'/wuyuan-landcirculation/server/img/muwu.jpg');
$circulation4 = array('cirId'=>'a'.rand(100000,999999), 'cirType'=>'土地入股', 'publishDate'=>'2016-03-12', 'title'=>'发布一条出租信息', 'img'=>'http://'.$_SERVER['HTTP_HOST'].'/wuyuan-landcirculation/server/img/muwu.jpg');
$circulation5 = array('cirId'=>'a'.rand(100000,999999), 'cirType'=>'土地转让', 'publishDate'=>'2016-03-12', 'title'=>'发布一条出租信息', 'img'=>'http://'.$_SERVER['HTTP_HOST'].'/wuyuan-landcirculation/server/img/muwu.jpg');
$circulation6 = array('cirId'=>'a'.rand(100000,999999), 'cirType'=>'土地求租', 'publishDate'=>'2016-03-12', 'title'=>'发布一条出租信息', 'img'=>'http://'.$_SERVER['HTTP_HOST'].'/wuyuan-landcirculation/server/img/muwu.jpg');
$circulationArray = array($circulation1,$circulation2,$circulation3,$circulation4,$circulation5,$circulation6);
$result = array('err' => 'ok', 'requestCount'=>10, 'respondCount'=>6, 'cirs' => $circulationArray);
echo json_encode($result);
?>