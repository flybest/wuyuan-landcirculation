<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: x-requested-with");
//echo "{err:‘error’,code:‘INVALID_USER’}";

$result = array('err' => 'error', 'code' => 'INVALID_USER');
echo json_encode($result);
?>