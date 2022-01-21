<?php
include '../connect/SQLconnect.php';
session_start();
$date = date("Y-m-20");
$date1 = date("Y-m-d");
$mira=$_POST['mira'];
$sql = mysqli_query($link, "SELECT * FROM `object` where `id_custom`='{$_SESSION['ID']}' ORDER BY `id_object` DESC");
  while ($result = mysqli_fetch_array($sql)) 
{
    $result['name']; 
	$lev = similar_text($mira,$result['name']);
	if($lev>=strlen($mira))
	{
		if($result['status']==2){
			echo ' 
			<tr>
			<td class="alert-success text-dark">'.$result['name'].'</td>
			<td class="alert-success text-dark">'.$result['addres'].'</td>
			<td class="alert-success text-dark">'.$result['telephone'].'</td>
			<td class="alert-success text-dark">'.$result['squere'].' кв.м</td>
			<td class="alert-success text-dark">'.$result['squere_1'].' кв.м</td>
			<td class="alert-success text-dark">'.$result['squere_2'].' кв.м</td>
			<td class="alert-success text-dark">'.$result['sotrudnik_status'].'</td>
			<td class="alert-success text-dark">'.$result['comment'].'</td>
			<td class="alert-success text-dark">
			<div class="btn-group">
			  <button type="button" class="btn dropdown-toggle text-dark" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<strong>Действие</strong>
			  </button>
			  <div class="dropdown-menu dropdown-menu-rigth">
			  <button  href="#profile" class="upData" style="vertical-align:middle" data-target="#modalProfile" data-toggle="modal" data-id="'.$result['id_object'].'" type="submit"><span>Изменить</span></button>
			  <button class="delete" style="vertical-align:middle" data-id="'.$result['id_object'].'" type="submit"><span>Удалить</span></button>
			  </div>
			</div>   
		  </td>  
		  <tr>
		   ';
	}
	if($result['status']==1) 
		{
		if((strtotime($date)<strtotime($date1))==true){
			echo ' 
			<tr>
			<td class="alert-danger text-dark">'.$result['name'].'</td>
			<td class="alert-danger text-dark">'.$result['addres'].'</td>
			<td class="alert-danger text-dark">'.$result['telephone'].'</td>
			<td class="alert-danger text-dark">'.$result['squere'].' кв.м</td>
			<td class="alert-danger text-dark">'.$result['squere_1'].' кв.м</td>
			<td class="alert-danger text-dark">'.$result['squere_2'].' кв.м</td>
			<td class="alert-danger text-dark">'.$result['sotrudnik_status'].'</td>
			<td class="alert-danger text-dark">'.$result['comment'].'</td>
			<td class="alert-danger text-dark">
			<div class="btn-group">
			<button type="button" class="btn dropdown-toggle text-dark" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			  <strong>Действие</strong>
			</button>
			<div class="dropdown-menu dropdown-menu-rigth">
			<button  href="#profile" class="upData" style="vertical-align:middle" data-target="#modalProfile" data-toggle="modal" data-id="'.$result['id_object'].'" type="submit"><span>Изменить</span></button>
			<button class="delete" style="vertical-align:middle" data-id="'.$result['id_object'].'" type="submit"><span>Удалить</span></button>
			</div>
		  </div>  
		  </td>  
		  </tr>
		';	
		}else{
			echo ' 
			<tr>
		   <td class="alert-warning text-dark">'.$result['name'].'</td>
		   <td class="alert-warning text-dark">'.$result['addres'].'</td>
		   <td class="alert-warning text-dark">'.$result['telephone'].'</td>
		   <td class="alert-warning text-dark">'.$result['squere'].' кв.м</td>
		   <td class="alert-warning text-dark">'.$result['squere_1'].' кв.м</td>
		   <td class="alert-warning text-dark">'.$result['squere_2'].' кв.м</td>
		   <td class="alert-warning text-dark">'.$result['sotrudnik_status'].'</td>
		   <td class="alert-warning text-dark">'.$result['comment'].'</td>
		   <td class="alert-warning text-dark">
		   <div class="btn-group">
		   <button type="button" class="btn dropdown-toggle text-dark" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			 <strong>Действие</strong>
		   </button>
		   <div class="dropdown-menu dropdown-menu-rigth">
		   <button  href="#profile" class="upData" style="vertical-align:middle" data-target="#modalProfile" data-toggle="modal" data-id="'.$result['id_object'].'" type="submit"><span>Изменить</span></button>
		   <button class="delete" style="vertical-align:middle" data-id="'.$result['id_object'].'" type="submit"><span>Удалить</span></button>
		   </div>
		 </div>  
		 </td>  
		 </tr>
			';
			}
		}
    }
}
