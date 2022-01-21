<?php
include '../connect/SQLconnect.php';
$sql = mysqli_query($link, "SELECT * FROM `user`");
  while ($result = mysqli_fetch_array($sql)) 
{
  if($result['status']=="Онлайн"){
    echo ' 
    <br>
    <div class="row no-gutters border rounded ">
    <div >
      <img class="bd-placeholder-img" width="230" height="340" src="php/user/upload/'.$result['photo'].'" >
    </div>
    <div class="col p-12 d-flex flex-column position-static">
    <div class="col-md-12">
    <table class="table">
        <br>
        <tbody>
            <tr>
                <td class="text-uppercase">Имя:</td>
                <td>'.$result['name'].'</td>
            </tr>
            <tr>
                <td class="text-uppercase">Фамилия:</td>
                <td>'.$result['famil'].'</td>
            </tr>
            <tr>
                <td class="text-uppercase">Отчество:</td>
                <td>'.$result['otch'].'</td>
            </tr>
            <tr>
            <td class="text-uppercase">Логин:</td>
            <td>'.$result['email'].'</td>
        </tr>
        <tr>
        <td class="text-uppercase">Должность:</td>
        <td>'.$result['profesion'].'</td>
    </tr>
    <tr>
    <td class="text-uppercase">Статус:</td>
    <td class="text-success">'.$result['status'].' <br></td>
</tr>
        </tbody>
    </table>
  </div>
      <div class="mb-1 text-muted">
      </div>
    </div>
  </div>
  <br>
      ';
  }else{
    echo ' 
    <br>
    <div class="row no-gutters border rounded ">
    <div >
      <img class="bd-placeholder-img" width="230" height="340" src="php/user/upload/'.$result['photo'].'" >
    </div>
    <div class="col p-12">
    <div class="col-md-12">
    <table class="table">
        <br>
        <tbody>
            <tr>
                <td class="text-uppercase">Имя:</td>
                <td>'.$result['name'].'</td>
            </tr>
            <tr>
                <td class="text-uppercase">Фамилия:</td>
                <td>'.$result['famil'].'</td>
            </tr>
            <tr>
                <td class="text-uppercase">Отчество:</td>
                <td>'.$result['otch'].'</td>
            </tr>
            <tr>
            <td class="text-uppercase">Логин:</td>
            <td>'.$result['email'].'</td>
        </tr>
        <tr>
        <td class="text-uppercase">Должность:</td>
        <td>'.$result['profesion'].'</td>
    </tr>
    <tr>
    <td class="text-uppercase">Статус:</td>
    <td class="text-danger">Был в сети: <br> '.$result['time'].'</td>
</tr>
        </tbody>
    </table>
  </div>
      <div class="mb-1 text-muted">
      </div>
    </div>
  </div>
  <br>

   ';

  }
  }
  /*
  
   */