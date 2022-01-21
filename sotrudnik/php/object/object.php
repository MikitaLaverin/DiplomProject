<?php
include '../connect/SQLconnect.php';
$mira=$_POST['mira'];
$sql=mysqli_query($link,"SELECT * FROM `object` where `status`=1");
while($result=mysqli_fetch_array($sql)){
    $lev = similar_text($mira,$result['name']);
    if($lev>=strlen($mira))
{
    echo '
    <tr>
    <td data-label="Название">'.$result['name'].'</td>
    <td data-label="Адрес">'.$result['addres'].'</td>
    <td data-label="Телефон" ><p><a href="tel:'.$result['telephone'].'" class="phone">'.$result['telephone'].'</a></p></td>
    <td data-label="Площать">
    Дезинсекция:'.$result['squere'].' кв.м
    <br>
    Дератизации:'.$result['squere_1'].' кв.м
    <br>
    Дезинфекции:'.$result['squere_2'].' кв.м
    </td>
    <td data-label="Коментарий">'.$result['comment'].'<br></td> 
    <td><a class="button7" href="#profile" data-target="#modalProfile" data-toggle="modal"  data-id="'.$result['id_object'].'">Отчитаться</a></td>
</tr>
    ';
}
}