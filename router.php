<?php
    require "config.php";

    $mysql = new mysqli($bd_host,$bd_login,$bd_password,$bd_name);
    if($mysql->connect_error) {
        echo 'Error: '.$mysql->connect_error;
    }


    //сначала он запрашивает пароль, проверяя логин. При удаче, то он сверяет пароли, если такого пароля нет то мы получим пустоту.
    $input_login = $_POST['input_login'];
    $input_password = strval($_POST['input_password']);
    $password_from_bd = $mysql->query("SELECT password FROM `users` WHERE login = '$input_login'");
    if($input_password == strval($password_from_bd)){
        echo 'yes';
    }
    


    $mysql->close();
?>
ок тест