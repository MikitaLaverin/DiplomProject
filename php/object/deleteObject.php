<?php
include '../connect/SQLconnect.php';
$id_object=(int)$_POST['ID'];
$sql= mysqli_query($link,"DELETE FROM `object` where `id_object`='{$id_object}'");

//$february= mysqli_query($link,"DELETE * FROM `january`,`february`,`april`,`may`,`june`,`july`,`august`,`september`,`october`,`november`,`december` where `id_object`='{$id_object}'");
//february= mysqli_query($link,"DELETE * FROM `january`,`february`,`april`,`may`,`june`,`july`,`august`,`september`,`october`,`november`,`december` where `id_object`='{$id_object}'");
if($sql && $sqli)
{
echo "Удалилось!!!";
}
?>