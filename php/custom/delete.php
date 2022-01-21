<?php
include '../connect/SQLconnect.php';
$id_custom=(int)$_POST['ID'];
$id_sql_object= mysqli_query($link,"SELECT `id_object` FROM `object` where `id_custom`='{$id_custom}'");
while ($result = mysqli_fetch_array($id_sql_object)) 
{
    $delete= mysqli_query($link,"DELETE * FROM `june` where `id_object`='{$result['id_object']}'");
    
    // UNION february= mysqli_query($link,"DELETE * FROM `january`,`february`,`april`,`may`,`june`,`july`,`august`,`september`,`october`,`november`,`december` where `id_object`='{$id_object}'");
}
var_dump($delete); 
exit;
$sql= mysqli_query($link,"DELETE FROM `object` where `id_custom`='{$id_custom}'");
if($sql){
    $sql_delete=mysqli_query($link,"DELETE FROM `custom` where `id_custom`='{$id_custom}'");
    if($sql_delete){
        echo "Удалилось!!!";
    }
}
?>