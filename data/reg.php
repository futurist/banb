<?php

header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: X-Requested-With');
mb_http_input("utf-8");
mb_http_output("utf-8");
date_default_timezone_set("PRC");
error_reporting(E_ERROR|E_WARNING);
session_start();

require_once("config.php");

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

$name = $POST["name"];
$phone = $POST["phone"];
$address = $POST["address"];
$openid = $POST["openid"];
$award = $POST["award"];

$date = date("Y-m-d H:i:s");
$time = time();

if(!$name) exit();

$regCount = q1("select count(*) from banbo_reg where phone='$phone' ");
$regCount = reset($regCount);

if($regCount==0){
	q("insert into banbo_reg (name,phone, address, openid, ip, dtime, award) values( '$name', '$phone', '$address', '$openid', '$ip', '$date', '$award') ");
}

$reg = q1("select count(*) from banbo_reg");

if($reg>=20000){
	echo "end";
}else{
	echo "ok";
}

echo $regCount;

exit();


?>
