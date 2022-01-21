<?php
$host='127.0.0.1:3306';
$user='root';
$pass='';
$db_name='update_dez';
$link=mysqli_connect($host,$user,$pass,$db_name);
if (!$link) {
    echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
  }
  /*
  <?php
  $host='localhost';
  $user='kit191lk_men_dez';
  $pass='Nikita22';
  $db_name='kit191lk_men_dez';
  $link=mysqli_connect($host,$user,$pass,$db_name);
  if (!$link) {
      echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
    }
    */