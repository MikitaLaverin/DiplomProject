<?php
include '../connect/SQLconnect.php';
session_start();
$date=date("Y-m-d");
$time=date("H:M");
$one=1;
$two=2;
$nok=0;
$all=0;
$mira=$_POST['mira'];
$sql = mysqli_query($link, "SELECT * FROM `custom`");
  while ($result = mysqli_fetch_array($sql)) 
{
	$sqli=mysqli_query($link, "SELECT COUNT(*) FROM `object` where `id_custom`='{$result['id_custom']}'");{
		$row = mysqli_fetch_row($sqli);
		$total = $row[0];
		}
		$sqli1=mysqli_query($link, "SELECT COUNT(*) FROM `object` where `id_custom`='{$result['id_custom']}' and `status`='{$two}'");{
		$row1 = mysqli_fetch_row($sqli1);
		$total1 = $row1[0];
		}
	$result['name']; 
	$lev = similar_text($mira,$result['name']);
	if($lev>=strlen($mira))
	{
				echo ' 
				<tr class="">
          <td >'.$result['name'].'</td>
          <td>'.$result['legal_addres'].'</td>
          <td>'.$result['phone'].'</td>
          <td>'.$result['date_next'].'</td>
          <td>'.$result['date_end'].'</td>  
		  <td>Выполненно '.$total1.' из '.$total.'</td>  
		  <td>'.$result['comment_custom'].'</td>  
          <td>   
<div class="btn-group" >
  <button type="button" class="btn dropdown-toggle text-dark" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <strong>Действие</strong>
  </button>
  <div class="dropdown-menu dropdown-menu-rigth" >
  <a  href="./objectAdd.html">    
  <button href="./objectAdd.html" class="allObject" style="vertical-align:middle" data-id="'.$result['id_custom'].'"><span>Перейти к объектам</span></button>
  </a>

  <button href="#profile" class="upData" style="vertical-align:middle" data-target="#modalProfile" data-toggle="modal" data-id="'.$result['id_custom'].'"><span> Изменить </span></button>

  <button class="delete" style="vertical-align:middle" data-id="'.$result['id_custom'].'" type="submit"><span>Удалить...</span></button>
  </div>
</div>
          </td>  
     
        </tr>
			   ';
	}
}
