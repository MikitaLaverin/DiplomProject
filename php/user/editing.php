<?php
include '../connect/SQLconnect.php';
session_start();
include '../login/proverkaPHP.php';
$id=(int)$_SESSION['id'];
$sql = mysqli_query($link, "SELECT * FROM `user` WHERE `id_user`='{$id}' ");
while ($result = mysqli_fetch_array($sql)) {
  echo '


<div class="col-md-12">
  <table class="table">
      <br>
      <tbody>
      <tr>
      <td><img src="/dez_center.2.0/./php/user/upload/'.$result['photo'].'" class="rounded-circle bg-dark" alt=""></td>
      <td></td>
    </tr>
          <tr>
              <td class="text-uppercase">Имя</td>
              <td>'.$result['name'].'</td>
          </tr>
          <tr>
              <td class="text-uppercase">Фамилия</td>
              <td>'.$result['famil'].'</td>
          </tr>
          <tr>
              <td class="text-uppercase">Отчество</td>
              <td>'.$result['otch'].'</td>
          </tr>
      </tbody>
  </table>
</div>
  ';
}
//var_dump($ooo);die;
?>
                                                  
                                      