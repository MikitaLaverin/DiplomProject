<?php
include '../connect/SQLconnect.php';
session_start();
$name=$_POST['name'];
$addres=$_POST['addres'];
$phone=$_POST['phone'];
$squere=(int)$_POST['squere'];
$squere_1=(int)$_POST['squere_1'];
$squere_2=(int)$_POST['squere_2'];
$comment=$_POST['comment'];
$date=date("y-m-d");
//var_dump($email);die();
$sql= mysqli_query($link,"UPDATE `object` SET `name` = '{$name}', `addres` ='{$addres}', `telephone` ='{$phone}',
`squere` ='{$squere}', `squere_1` ='{$squere_1}' , `squere_2` ='{$squere_2}', `comment` ='{$comment}'   WHERE `id_object` ='{$_SESSION['ID_Object']}' ");
if($sql==true){
    echo "Данные изменены";
}else{
  echo "Ошибка";
}
?>
