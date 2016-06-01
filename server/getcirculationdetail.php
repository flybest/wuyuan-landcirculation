<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: x-requested-with");
//echo "{err:'ok',token:'token123456'}";


$result = array('err' => 'ok', 'cirId' => 'a123456', 'landNum' => '12345', 'landInfo' => '土地面积：13亩；土地位置：村东；土地等级：六等地；土地类型：盐碱地；四至界限：农田', 'cirPrice' => '600元／年亩', 'cirPeriod' => '1年', 'aviDate' => '30天', 'contact' => '王一', 'tel' => '13811100098');
echo json_encode($result);
?>