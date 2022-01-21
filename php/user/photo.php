<?php
session_start();
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
$sqli= mysqli_query($link,"SELECT `email` FROM `user` where `email`='{$email}'");
$result = mysqli_fetch_array($sqli);
if($result['email']==$email){
    echo 'Такой уже существует';
}else{
    if(!empty($_FILES['image']['tmp_name'])){
    $upload_path=__DIR__."/upload/";
    $user_filename=$_FILES['image']['name'];
    $user_dasenam=pathinfo($user_filename,PATHINFO_FILENAME);
    $user_exten=pathinfo($user_filename,PATHINFO_EXTENSION);
    $server_filename=$user_dasenam.".".$user_exten;
    $server_filepath=$upload_path.$server_filename;
    $i=0;
    while(file_exists($server_filepath)){
      $i++;
      $server_filepath=$upload_path.$user_dasenam."($i)".".".$user_exten;
    } 
    if(copy($_FILES['image']['tmp_name'],$server_filepath)){
        if($i==0){
            $s=$user_dasenam.".".$user_exten;
        }else{
            $s=$user_dasenam."($i)".".".$user_exten;
        }
    }
  }
  if(empty($s)){
    $photo='user.jpg';    
  }else{
  $photo=(string)$s;
  }
  $sql= mysqli_query($link,"INSERT INTO `user` (`name`,`famil`,`otch`,`email`,`password`,`level`,`profesion`,`photo`) 
  VALUES ('$name','$famil','$otch','$email','$password','$level','$profesion','$photo')");
  echo 'Успешно зарегистрирован';
  
}}else{
  echo 'Пароли не совпадают';
  exit();
}
?>