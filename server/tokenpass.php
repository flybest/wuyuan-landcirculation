<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: x-requested-with");
//echo "{'err':‘ok’,'data':‘’}";

$result = array('err' => 'ok');
echo json_encode($result);
?>