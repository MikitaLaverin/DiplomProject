
<?php
include '../connect/SQLconnect.php';

if($_POST['password_one']==$_POST['password_two'])
{
    $name=$_POST['name'];
    $famil=$_POST['famil'];
    $otch=$_POST['otch'];
    $email=$_POST['email'];
    $profesion=$_POST['profesion'];
    $password=md5($_POST['password_one']);
    if($profesion=="Менеджер"){
        $level=2;
    }
    else{
    $level=1;
    }
//var_dump($email);die();
$sqli= mysqli_query($link,"SELECT `email` FROM `user` where `email`='{$email}'");
$result = mysqli_fetch_array($sqli);
if($result['email']==$email){
    echo 'Такой уже существует';
}else{
  session_start();
$photo=$_SESSION['photo_user'];
  $sql= mysqli_query($link,"INSERT INTO `user` (`name`,`famil`,`otch`,`email`,`password`,`level`,`profesion`,`photo`) 
  VALUES ('$name','$famil','$otch','$email','$password','$level','$profesion','$photo')");
  echo 'Успешно зарегистрирован';
  
}}else{
  echo 'Пароли не совпадают';
  exit();
}
?>