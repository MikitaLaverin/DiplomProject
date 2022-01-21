<?php
include '../connect/SQLconnect.php';
$email=$_POST['deleteAkk'];
session_start();

$sql= mysqli_query($link,"SELECT `id_user`,`photo`,`status`,`level` FROM `user` where `email`='{$email}'");
$result = mysqli_fetch_array($sql);
$id=$result['id_user'];
$idint=(int)$id;
$sqli=mysqli_query($link, "SELECT COUNT(*) FROM `user` where `level`=2");{
    $row = mysqli_fetch_row($sqli);
    $total = $row[0];
    }
if(($result['status']=="Онлайн") AND ($result['level']==2 || $total==1)){
    echo "Невозможно удалить данный аккаунт";
}else
{
$sqli=mysqli_query($link,"DELETE FROM `user` WHERE `id_user`=$idint");
if(!empty($result['photo'])){
    if($result['photo']!="user.jpg"){
        $put='upload/'.$result['photo'];
        unlink((string)$put);
    }
}
if($sqli)
{
echo "Удалилось!!!";
}
}
?>