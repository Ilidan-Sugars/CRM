<?php
session_start();
require "config.php";
$previous_page = mb_strimwidth($_SERVER['HTTP_REFERER'], -9, 10); // Получаем предыдущюю страницу, обрезается с конца.

$mysql = new mysqli($bd_host,$bd_login,$bd_password,$bd_name);
if($mysql->connect_error) {
    echo 'Error: '.$mysql->connect_error;
}


// Получаем логин и пароль, шифруем последний,
$input_login = $_POST['input_login'];
$input_password = md5($_POST['input_password']);


// Смотрим откуда пользователь.
// Если с входа, то делаем вход и направляем на нужную страницу.
// Если с регестрации, то регестрируем.

if($previous_page = 'index.php'){

    $info_bd = $mysql->query("SELECT id, id_role, name FROM `users` WHERE login = '$input_login' AND password = '$input_password'");
    $row = ($info_bd->fetch_assoc());
    
    // ЗАгружаем в сессию name и id.
    $_SESSION['user_name'] = $row['name'];
    $_SESSION['user_id'] = $row['id'];

    if($info_bd != '' && $row['id_role'] === '1'){    // Проверка пароля и логина, приём админов.
        header('location: /admin_log.php');
        exit();
    }
    if($info_bd != '' && $row['id_role'] === '0'){    // Проверка пароля и логина, приём пользователей.
        header('location: /news.php');
        exit();
    }
}

if($previous_page = 'ation.php'){       
    header('location: /index.php');                 // Пока заглушка.
    exit();
}

header('location: /index.php');                     // Если перешли из вне, то перенаправят на страницу входа.
exit();


$mysql->close();
?>
