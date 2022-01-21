<?php
include '../connect/SQLconnect.php';
session_start();

$_SESSION['ID_Object']=(int)$_POST['ID'];
$sql = mysqli_query($link, "SELECT * FROM `object` where `id_object`='{$_SESSION['ID_Object']}'");
$result = mysqli_fetch_array($sql);
echo '
<div class="col-md-2">
    <label align="left">
        <h5>Наименование</h5>
    </label>
        <input type="text" class="form-control  md-lg-4 px-2" name="name" class="span12" value="'.$result['name'].'" required />
</div>
<div class="col-md-2">
    <label align="left">
        <h5>Адресс</h5>
    </label>
        <input type="text" class="form-control md-lg-4 px-2" name="addres" class="span12" value="'.$result['addres'].'" required />
</div>
<div class="col-md-2">
    <label align="left">
        <h5>Телефон</h5>
    </label>
        <input type="text" class="form-control md-lg-4 px-2" name="phone" class="span12" value="'.$result['telephone'].'" required />
</div>
<div class="col-md-1">
    <label align="left">
        <h5>Дезинсекции</h5>
    </label>
        <input type="text" class="form-control md-lg-4 px-2" name="squere" class="span12" value="'.$result['squere'].'" />
</div>  
<div class="col-md-1">
    <label align="left">
        <h5>Дератизации</h5>
    </label>
        <input type="text" class="form-control md-lg-4 px-2" name="squere_1" value="'.$result['squere_1'].'" class="span12" />
</div>
<div class="col-md-1">
    <label align="left">
        <h5>Дезинфекции</h5>
    </label>
        <input type="text" class="form-control" name="squere_2" class="span12" value="'.$result['squere_2'].'"  />
</div>
<div class="col-md-3">
    <label align="left"><h5>Комментарий</h5></label>
     <input type="text" class="form-control" name="comment" class="span12" value="'.$result['comment'].'"  />
     <br>
</div> 

<div class="container col-md-12 text-right">
<button type="submit" class="btn btn-outline-warning btn-lg">Изменить</button>
<button class="btn btn-outline-secondary btn-lg" data-dismiss="modal" aria-hidden="true">Отменить</button>
</div>  

';
