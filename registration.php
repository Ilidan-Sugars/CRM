<?php 
$title = "Регестрация";
$css = "registration.css";
require "block_front/header.php";
?>

<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="block">
                <form action="router.php" method="post">

                    
                    <h5>Ведите логин</h5>
                    <input type="text" name="user_login" maxlength="30"> <br>
                    <h5>Ведите пароль</h5>
                    <input type="password" name="password" maxlength="32">
                    <h5>Повторите пароль</h5>
                    <input type="password" name="repeat-password" maxlength="32">
                    <div class="mb-3">
                        <button class="btn btn-light" type="submit">Зарегестрироваться</button>
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