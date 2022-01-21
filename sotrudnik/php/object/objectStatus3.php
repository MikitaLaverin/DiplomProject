<?php
include '../connect/SQLconnect.php';
session_start();
$_SESSION['ID_OTC']=(int)$_POST['ID'];
echo $_SESSION['ID_OTC'];