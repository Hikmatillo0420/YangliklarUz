<?
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Yangilik.uz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<div class="container"><br>
    <h1>Login</h1>
    <div class="row justify-content-start">

        <?php
        if(isset($_SESSION["error"])){
            echo "<div class='alert alert-danger' role='alert'>
                            ".$_SESSION['error']."
                </div>";
            unset($_SESSION['error']);
        }
        if(isset($_SESSION["success"])){
            echo "";
            unset($_SESSION['success']);
        }
        ?>

        <div class="col-md-5">
            <form method="post" action="loginCheck.php">
                <div class="mb-3"><br>
                    <label for="usernameInput" class="form-label">Elektron pochta manzil</label>
                    <input type="email" class="form-control" id="usernameInput" name="username" value="<?php echo isset($_SESSION['username']) ? $_SESSION['username']:null ;unset($_SESSION['username']) ?>">
                </div>
                <div class="mb-3">
                    <label for="passInput" class="form-label">Parol</label>
                    <input type="password" class="form-control" id="passInput" name="password">
                </div>
                <button type="submit" class="btn btn-primary" name="login">Yuborish</button>
                <a href="/index.php" class="btn btn-secondary"">Ortga qaytish</a>
<!--                <a href="/Register/register.php" class="btn btn-success" style="float: right;">Ro‘yxatdan o‘tish</a>-->

            </form>
        </div>
    </div>
</div>
