<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: x-requested-with");
//echo "{err:'ok',token:'token123456'}";


$result = array('err' => 'ok', 'token' => 'token123456', 'realname' => '张三', 'avatarurl' => 'http://'.$_SERVER['HTTP_HOST'].'/wuyuan-prevetion/server/img/muwu.jpg', 'tel' => '13811100098');
echo json_encode($result);
?>