<?php
session_start();
include '../connect/SQLconnect.php';
$NOnline="не в сети";
$day=date('d');
$mounth=date('m');
$yaer=date('Y');
$time = date("H:i");
$inKab=$day.".".$mounth.".".$yaer." в ".$time;
$online = mysqli_query($link,"UPDATE `user` SET `status`='{$NOnline}',`time`='{$inKab}' WHERE `id_user` ='{$_SESSION['id']}'");
if($online){
session_unset();
echo "login.html";
}
?>