<?php
include '../connect/SQLconnect.php';
session_start();
$email=$_POST['email'];
$pass=md5($_POST['password']);

if ( !$_POST['g-recaptcha-response']){
        exit('Заполните капчу');
}
	$url = 'https://www.google.com/recaptcha/api/siteverify';
	$key = '6LdP76UZAAAAAPMtxM2t_gKuyb-UcCil4B3IcWci';
	$query = $url.'?secret='.$key.'&response='.$_POST['g-recaptcha-response'].'&remoteip='.$_SERVER['REMOTE_ADDR'];

	$data = json_decode(file_get_contents($query));

    if ( $data->success == false){
		exit('Капча введена неверно');
    }else{

    $sqli= mysqli_query($link,"SELECT * FROM `user` where `email`='{$_POST['email']}'");
    $result = mysqli_fetch_array($sqli);
    if($result['email']==$email && $result['password']==$pass)
    {
        $_SESSION['id']=$result['id_user'];
        $level=$result['level'];
        switch($level){
            case 2:{
                echo "Менеджер";
            break;
        }; 
        case 1:{
            echo "Сотрудник";
        break;
    }
}
}
else{
echo "Ошибка";
}
}
//include '../login/proverkaPHP.php';