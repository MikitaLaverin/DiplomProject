<?php
include '../connect/SQLconnect.php';
session_start();
$id_custom=$_SESSION['ID'];
$name=$_POST['name'];
$addres=$_POST['addres'];
$phone=$_POST['telephone'];
$squere=(int)$_POST['squere'];
$squere_1=(int)$_POST['squere_1'];
$squere_2=(int)$_POST['squere_2'];
$comment=$_POST['comment'];
$status=1;
$sqli = mysqli_query($link, "SELECT * FROM `object`");
  while ($resulti = mysqli_fetch_array($sqli)) 
{
    if($resulti['name']==$name && $resulti['addres']==$addres){
        echo "noOK";
        exit;
    }
}
$sql = mysqli_query($link,"INSERT INTO `object`( `id_custom`, `name`, `addres`, `telephone`,`comment`, `squere`, `squere_1`, `squere_2`, `status`) 
VALUES ('$id_custom','$name','$addres','$phone','$comment','$squere','$squere_1','$squere_2','$status')");
if($sql=true)
{
    echo("ОК");
} else
{
    echo(mysqli_error($link));
}
