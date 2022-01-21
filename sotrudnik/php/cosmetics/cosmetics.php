<?php
include '../connect/SQLconnect.php';
session_start();
$sql = mysqli_query($link, "SELECT * FROM `user` where `id_user`='{$_SESSION['id']}'");
$result = mysqli_fetch_array($sql); 
echo '<img src="../php/user/upload/'.$result['photo'].'" width="40px" height="40px" class="rounded-circle "> ',$result['name'],' ',$result['famil'];
