
<?php
include '../connect/SQLconnect.php';
$id_photo_object=$_POST['ID'];
$i=0;
$sql = mysqli_query($link, "SELECT `name_photo` FROM `photo` where `id_object_history`='{$id_photo_object}'");
while ($resulti = mysqli_fetch_array($sql)) {
    if($i==0){
echo '
<div class="carousel-item active">
<img src="/dez_center.2.0/sotrudnik/php/object/upload/'.$resulti['name_photo'].'">
<div class="container">
</div>
</div>';
     $i++;
    }else{
        echo '       
<div class="carousel-item">
<img src="/dez_center.2.0/sotrudnik/php/object/upload/'.$resulti['name_photo'].'" >
<div class="container">
</div>
</div>
        ';
    }
}

