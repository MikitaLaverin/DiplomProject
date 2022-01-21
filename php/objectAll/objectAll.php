<?php
include '../connect/SQLconnect.php';
session_start();
$mira=$_POST['mira'];
$order=$_POST['order'];

$sql = mysqli_query($link, "SELECT * FROM `object`");
  while ($result = mysqli_fetch_array($sql)) 
{
$sqli = mysqli_query($link, "SELECT `name` FROM `custom` where `id_custom`='{$result['id_custom']}'");
$resulti = mysqli_fetch_array($sqli);
$lev = similar_text($mira,$result['name']);
$levi = similar_text($mira,$resulti['name']);
if($lev>=strlen($mira) || $levi>=strlen($mira))
{
if($order==1)
{ 
	if($result['status']==2){
                echo '
                 
                <tr>
                  <td class="alert-success text-dark"><a>'.$resulti['name'].'</a></td>
				          <td class="alert-success text-dark"><a>'.$result['name'].'</a></td>
				          <td class="alert-success text-dark">'.$result['addres'].'</td>
				          <td class="alert-success text-dark">'.$result['telephone'].'</td>
                  <td class="alert-success text-dark">
                   Дезинсекция: '.$result['squere'].' кв.м
                   <br>
                   Дератизации: '.$result['squere_1'].' кв.м
                   <br>
                   Дезинфекции: '.$result['squere_2'].' кв.м
                  </td>
				          <td class="alert-success text-dark">'.$result['comment_sotr'].'</td>
                  <td class="alert-success text-dark">'.$result['sotrudnik_status'].'</td>
                 </tr>  
		
			   ';
      }
      if($result['status']==1) {
		  echo ' 
        <tr>
        <td class="alert-warning text-dark"><a>'.$resulti['name'].'</a></td>
        <td class="alert-warning text-dark"><a>'.$result['name'].'</a></td>
        <td class="alert-warning text-dark">'.$result['addres'].'</td>
        <td class="alert-warning text-dark">'.$result['telephone'].'</td>
        <td class="alert-warning text-dark">
        Дезинсекция: '.$result['squere'].' кв.м
        <br>
        Дератизации: '.$result['squere_1'].' кв.м
        <br>
        Дезинфекции: '.$result['squere_2'].' кв.м
        </td>
        <td class="alert-warning text-dark">'.$result['comment_sotr'].'</td>
        <td class="alert-warning text-dark">'.$result['sotrudnik_status'].'</td>
      </tr>  
	   ';
  }
}
if($order==2){
  if($result['status']==2){
    echo ' 
    <tr>
       <td class="alert-success text-dark"><a>'.$resulti['name'].'</a></td>
<td class="alert-success text-dark"><a>'.$result['name'].'</a></td>
<td class="alert-success text-dark">'.$result['addres'].'</td>
<td class="alert-success text-dark">'.$result['telephone'].'</td>
       <td class="alert-success text-dark">
       Дезинсекция: '.$result['squere'].' кв.м
       <br>
       Дератизации: '.$result['squere_1'].' кв.м
       <br>
       Дезинфекции: '.$result['squere_2'].' кв.м
</td>
<td class="alert-success text-dark">'.$result['comment_sotr'].'</td>
       <td class="alert-success text-dark">'.$result['sotrudnik_status'].'</td>
     </tr>  
';
}
  }
  if($order==3){
    if($result['status']==1) {
		  echo ' 
        <tr>
        <td class="alert-warning text-dark"><a>'.$resulti['name'].'</a></td>
        <td class="alert-warning text-dark"><a>'.$result['name'].'</a></td>
        <td class="alert-warning text-dark">'.$result['addres'].'</td>
        <td class="alert-warning text-dark">'.$result['telephone'].'</td>
        <td class="alert-warning text-dark">
        Дезинсекция: '.$result['squere'].' кв.м
        <br>
        Дератизации: '.$result['squere_1'].' кв.м
        <br>
        Дезинфекции: '.$result['squere_2'].' кв.м
    </td>
        <td class="alert-warning text-dark">'.$result['comment_sotr'].'</td>
        <td class="alert-warning text-dark">'.$result['sotrudnik_status'].'</td>
      </tr>  
	   ';
  }
  }
}
}

