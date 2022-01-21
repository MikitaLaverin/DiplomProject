<?php
session_start();
include '../connect/SQLconnect.php';
$sql = mysqli_query($link, "SELECT `name` FROM `custom` where `id_custom`='{$_SESSION['ID']}'");
$result = mysqli_fetch_array($sql);
echo ' <label align="left"><h3>Объекты заказщика: '.$result['name'].'</h3>';