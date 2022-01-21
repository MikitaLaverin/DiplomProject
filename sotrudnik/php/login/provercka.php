<?php
session_start();
if (empty($_SESSION['id'])){
 echo 'Не вошел';
}else{
    echo 'норм';
}