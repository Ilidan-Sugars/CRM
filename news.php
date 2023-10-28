<?php
session_start();
echo 'Новости для пользователя '.$_SESSION['user_name'];
?>