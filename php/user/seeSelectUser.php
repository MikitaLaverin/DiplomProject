<?php
include '../connect/SQLconnect.php';
session_start();
include '../login/proverkaPHP.php';
$id=(int)$_SESSION['id'];
$sql = mysqli_query($link, "SELECT * FROM `user` ");
while ($result = mysqli_fetch_array($sql)) {
  echo '<option>'.$result['email'].'</option>';
}
//var_dump($ooo);die;
?>