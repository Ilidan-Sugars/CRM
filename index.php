<?php
$title = "Вход";
$css = "index.css";
require "block_front/header.php";
?>

<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="block">
                <form action="router.php" method="post">

                    
                    <h5>Логин</h5>
                    <input type="text" name="input_login" maxlength="30"> <br>
                    <h5>Пароль</h5>
                    <input type="password" name="input_password" maxlength="32">
                    <div class="mb-3">
                        <button class="btn btn-light" type="submit">Войти</button>
                    </div>

                </form>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>







<?php 
require "block_front/footer.php";
?>