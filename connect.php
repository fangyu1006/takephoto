<?php
$host = "localhost";
$db_user = "root";
$db_pass = "fangyu2018";
$db_name = "HealthCareCenter";
$timezone = "Asia/Shanghai";

$link = mysqli_connect($host, $db_user, $db_pass, $db_name);
mysqli_query("SET names UTF8");
header("Content-Type: text/html; charset=utf-8");
date_default_timezone_set($timezone); 

?>