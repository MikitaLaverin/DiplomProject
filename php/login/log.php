<?php
include '../connect/SQLconnect.php';

session_start();
include '../login/proverkaPHP.php';
$email=$_POST['email'];
$inOnline="Онлайн";
$time = date("d H:i");

$pass=md5($_POST['password']);
    $sqli= mysqli_query($link,"SELECT `id_user`,`email`,`password`,`level` FROM `user` where `email`='{$_POST['email']}'");
    $result = mysqli_fetch_array($sqli);
    $id_user=$result['id_user'];
    if($result['email']==$email && $result['password']==$pass)
    {
        $_SESSION['id']=$result['id_user'];
        $level=$result['level'];
        $online = mysqli_query($link,"UPDATE `user` SET `status`='{$inOnline}' WHERE `id_user` ='$id_user'");
        if($online){
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
    else{ echo "Ошибка";}
}
else{
echo "Ошибка";
}

/*
<?php
include '../connect/SQLconnect.php';

session_start();
include '../login/proverkaPHP.php';
$email=$_POST['email'];
$inOnline="Онлайн";
$time = date("d H:i");

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
    $pass=md5($_POST['password']);
    $sqli= mysqli_query($link,"SELECT `id_user`,`email`,`password`,`level` FROM `user` where `email`='{$_POST['email']}'");
    $result = mysqli_fetch_array($sqli);
    $id_user=$result['id_user'];
    if($result['email']==$email && $result['password']==$pass)
    {
        $_SESSION['id']=$result['id_user'];
        $level=$result['level'];
        $online = mysqli_query($link,"UPDATE `user` SET `status`='{$inOnline}' WHERE `id_user` ='$id_user'");
        if($online){
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
    else{ echo "Ошибка";}
}
else{
echo "Ошибка";
}
    }
 */