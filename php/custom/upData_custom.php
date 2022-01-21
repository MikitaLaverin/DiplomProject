<?php
include '../connect/SQLconnect.php';
session_start();
$_SESSION['ID_D']=(int)$_POST['ID'];
$sql = mysqli_query($link, "SELECT * FROM `custom` where `id_custom`='{$_SESSION['ID_D']}'");
$result = mysqli_fetch_array($sql);
echo '
<div class="col-md-2"></div>
<div class="col-md-2"></div>
<div class="col-md-2"></div>
<div class="col-md-2"></div>  
<div class="col-md-2"></div>
<div class="col-md-2"></div>  
<div class="w-100"></div>
<div class="col-md-2">
    <label align="left"><h5>Наименование</h5></label>
    <input type="text" class="form-control  md-lg-4 px-2" name="name" class="span12" value="'.$result['name'].'" required />
</div>
<div class="col-md-2">
    <label align="left"><h5>Юр.Адресс</h5></label>
    <input type="text" class="form-control md-lg-4 px-2" name="addres" class="span12" value="'.$result['legal_addres'].'" required/>
</div>
<div class="col-md-2">
    <label align="left"><h5>Телефон заказчика</h5></label>
    <input type="text" class="form-control md-lg-4 px-2" name="phone" class="span12" value="'.$result['phone'].'"/>
</div>

<div class="col-md-2">
    <label align="left"><h5>Дата заключения</h5></label>
     <input type="date" class="form-control md-lg-4 px-2" name="date_next" value="'.$result['date_next'].'" class="span12" />
</div>

<div class="col-md-2">
    <label align="left"><h5>Дата окончания</h5></label>
     <input type="date" class="form-control md-lg-4 px-2" name="date_end" class="span12" value="'.$result['date_end'].'" />
     <br>
</div>
<div class="col-md-2">
    <label align="left"><h5>Коментарий</h5></label>
     <input type="text" class="form-control md-lg-4 px-2" name="comment_custom" class="span12" value="'.$result['comment_custom'].'"/>
</div>
<div class="container col-md-12 text-right">
<button type="submit" class="btn btn-outline-warning btn-lg">Изменить</button>
<button class="btn btn-outline-secondary btn-lg" data-dismiss="modal" aria-hidden="true">Отменить</button>
</div>  
';
