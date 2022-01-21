<?php
include '../connect/SQLconnect.php';
$name=$_POST['name'];
$addres=$_POST['addres'];
$phone=$_POST['phone'];
$comment_custom=$_POST['comment_custom'];
$date=date("y-m-d");
$date_next=$_POST['date_next'];
$date_end=$_POST['date_end'];
$sqli = mysqli_query($link, "SELECT * FROM `custom`");
  while ($resulti = mysqli_fetch_array($sqli)) 
{
    if($resulti['name']==$name && $resulti['legal_addres']==$addres){
        echo "неОК";
        exit;
    }
}
$sql = mysqli_query($link,"INSERT INTO `custom`( `name`, `legal_addres`, `phone`, `comment_custom`,`date_next`,`date_end`) 
VALUES ('$name','$addres','$phone','$comment_custom','$date_next','$date_end')");
if($sql=true)
{
    echo("Успешно");
}else
{
    echo(mysqli_error($link));
}
?>
