<?php
include '../connect/SQLconnect.php';
session_start();

$_SESSION['ID']=(int)$_POST['ID'];
if(!empty($_SESSION['ID'])){
    echo "норм";
}
?>