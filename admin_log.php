<?php
session_start();
echo 'Ордо Админус, Админ '.$_SESSION['user_name'].' ID: '.$_SESSION['user_id'];
?>