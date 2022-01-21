<?php

 include '../connect/SQLconnect.php';
 session_start();
 $mira=$_POST['mira'];
 $select=(int)$_POST['year'];
 $sql = mysqli_query($link, "SELECT * FROM `history_object` where `month`=12");
 while ($resulti = mysqli_fetch_array($sql)) {
  $year = strtotime($resulti['date']);
  $year_ok = (int)date('Y', $year);
    $lev = similar_text($mira,$resulti['name_custom']);
    $levi = similar_text($mira,$resulti['name_object']);
    if($lev>=strlen($mira) || $levi>=strlen($mira))
{
  if( $year_ok==$select){
   echo '
   <tr>
   <td class="alert-success text-dark">'.$resulti['name_custom'].'</td>
   <td class="alert-success text-dark">'.$resulti['name_object'].'</td>
   <td class="alert-success text-dark">'.$resulti['addres_object'].'</td>
   <td class="alert-success text-dark">'.$resulti['phone'].'</td>
   <td class="alert-success text-dark">
   Дезинсекция: '.$resulti['squere'].' кв.м
   <br>
   Дератизация: '.$resulti['squere_1'].' кв.м
   <br>
   Дезинфекция: '.$resulti['squere_2'].' кв.м
   </td>
   <td class="alert-success text-dark">'.$resulti['comment_sotr'].'</td>
   <td class="alert-success text-dark"> <a class="dropdown" data-id="'.$resulti['id_history_object'].'" href="#Photo" data-target="#Photo" data-toggle="modal"> <i class="icon-docs icons"></i> Просмотреть</a></td>
   <td class="alert-success text-dark">'.$resulti['name_sotr'].'</td>
   <td class="alert-success text-dark">'.$resulti['date'].'</td>
 </td>  
   ';
 }
 }}
 ?>   