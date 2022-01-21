<?php
include '../connect/SQLconnect.php';
session_start();

$name=$_POST['name'];
$addres=$_POST['addres'];
$phone=$_POST['phone'];
$comment_custom=$_POST['comment_custom'];
$date=date("y-m-d");
$date_next=$_POST['date_next'];
$date_end=$_POST['date_end'];
//var_dump($email);die();
$sql= mysqli_query($link,"UPDATE `custom` SET `name` = '{$name}', `legal_addres` ='{$addres}', `phone` ='{$phone}',
`date_next` ='{$date_next}', `date_end` ='{$date_end}', `comment_custom` ='{$comment_custom}'  WHERE `id_custom` ='{$_SESSION['ID_D']}' ");
if($sql==true){
    echo "Данные изменены";
}else{
  echo "Ошибка";
}
?>
