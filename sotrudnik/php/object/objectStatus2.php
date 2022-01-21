<?php
include '../connect/SQLconnect.php';
session_start();
$obj=(int)$_SESSION['ID_OTC'];
$date1 = '2020-01-01';
$date2 = date("Y-m-d");
$date3 = date("d-m-Y");
$ts1 = strtotime($date1);
$ts2 = strtotime($date2);
$year1 = date('Y', $ts1);
$year2 = date('Y', $ts2);
$month1 = date('m', $ts1);
$month2 = date('m', $ts2);
$diff = ((($month2 - $month1)%10)+1) - (($year2 - $year1) * 12) ; 
$object=mysqli_query($link,"SELECT * FROM `object` where `id_object`='{$obj}'");
$object_array=mysqli_fetch_array($object);
$id_custom=$object_array['id_custom'];
$custom=mysqli_query($link,"SELECT `name` FROM `custom` where `id_custom`='{$id_custom}'");
$custom_data=mysqli_fetch_array($custom);
$custom_name=$custom_data['name'];
$sotrudnik=mysqli_query($link,"SELECT `name`,`famil` FROM `user` where `id_user`={$_SESSION['id']}");
$sotrudnik_data=mysqli_fetch_array($sotrudnik);
$sotr_name=$sotrudnik_data['name'];
$sotr_famil=$sotrudnik_data['famil'];
$sotr_all_name=$sotr_name."_".$sotr_famil;
$object_name=$object_array['name'];
$object_addres=$object_array['addres'];
$squere=(int)$object_array['squere'];
$squere_1=(int)$object_array['squere_1'];
$squere_2=(int)$object_array['squere_2'];
$comment=$_POST['comment_sotrud'];
$phone=$object_array['telephone'];
$sql=mysqli_query($link,"UPDATE `object` SET `status`=2 ,`sotrudnik_status`='{$sotr_all_name}',`comment_sotr`='{$comment}' where `id_object`='{$obj}'");
$history=mysqli_query($link,"INSERT INTO `history_object`
(`name_custom`, `name_object`, `addres_object`, `squere`, `squere_1`, `squere_2`, `comment_sotr`, `name_sotr`, `date`, `month`, `phone`) 
VALUES ('$custom_name','$object_name','$object_addres','$squere','$squere_1','$squere_2','$comment','$sotr_all_name','$date2','$diff','$phone')");
  $history_photo=mysqli_query($link,"SELECT `id_history_object` FROM `history_object` where `name_object`='{$object_name}' and `name_custom`='{$custom_name}' and `date`='{$date2}' and `month`='{$diff}'");
  $id_history_object=mysqli_fetch_array($history_photo);
  $lop=$id_history_object['id_history_object'];
  if(!empty($_FILES['files']['tmp_name'])){
  for($key=0;$key<count($_FILES['files']['tmp_name']);$key++){
    $upload_path=__DIR__."/upload/";
    $user_filename=$_FILES['files']['name'][$key];
    $user_dasenam=pathinfo($user_filename,PATHINFO_FILENAME);
    $user_exten=pathinfo($user_filename,PATHINFO_EXTENSION);
    $server_filename=$user_dasenam.".".$user_exten;
    $server_filepath=$upload_path.$server_filename;
    $i=0;
    while(file_exists($server_filepath)){
      $i++;
      $server_filepath=$upload_path.$user_dasenam."($i)".".".$user_exten;
    } 
    if(copy($_FILES['files']['tmp_name'][$key],$server_filepath)){
      if($i==0){
        $s=$user_dasenam.".".$user_exten;
    }else{
      $s=$user_dasenam."($i)".".".$user_exten;
    }
}
    $photo=mysqli_query($link,"INSERT INTO `photo` (`id_object_history`,`name_photo`) VALUES ('$lop','$s')");
  }
}else{
  $user="null.jpg";
  $photo=mysqli_query($link,"INSERT INTO `photo` (`id_object_history`,`name_photo`) VALUES ('$lop','$user')");
}
if($history==true AND $sql==true){
  echo "Ок";
}

















