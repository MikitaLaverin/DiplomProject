<?php
include '../connect/SQLconnect.php';
session_start();
include '../login/proverkaPHP.php';
    $name=$_POST['name'];
    $famil=$_POST['famil'];
    $otch=$_POST['otch'];
    $profesion=$_POST['profesion'];
//var_dump($email);die();
$sql= mysqli_query($link,"UPDATE `user` SET `name` = '{$name}', `famil` ='{$famil}',`otch` ='{$otch}'  WHERE `id_user` ='{$_SESSION['id']}' ");
if($sql==true){
    echo "Данные изменены";
}else{

  echo "Ошибка";
  
}
?>
