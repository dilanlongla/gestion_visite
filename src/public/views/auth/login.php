<?php

use GestionVisites\Models\Visiteur;

session_start();

require "../../../../vendor/autoload.php";
require "../../../../start.php";

$visiteurController = new Visiteur($dbConnection);
$login = '';
$mdp = '';
if (isset($_POST['submit'])) {
    if (isset($_POST['login'])) {
        $login = $_POST['login'];
    }
    if (isset($_POST['mdp'])) {
        $mdp = $_POST['mdp'];
    }
}

$loginResult = $visiteurController->login($login, $mdp);
if ($loginResult) {
    session_start();
    $_SESSION['user'] = $loginResult;
    header("Location: ../../index.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Preskool - Login</title>

    <link rel="shortcut icon" href="../../assets/img/favicon.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">

    <link rel="stylesheet" href="../../assets/plugins/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="../../assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../../assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="../../assets/plugins/summernote/dist/summernote-bs4.css">

    <link rel="stylesheet" href="../../assets/plugins/select2/css/select2.min.css">

    <link rel="stylesheet" href="../../assets/css/bootstrap-datetimepicker.min.css">

    <link rel="stylesheet" href="../../assets/plugins/fullcalendar/fullcalendar.min.css">

    <link rel="stylesheet" href="../../assets/plugins/datatables/datatables.min.css">

    <link rel="stylesheet" href="../../assets/css/style.css">
</head>

<div class="main-wrapper login-body">
    <div class="login-wrapper">
        <div class="container">
            <div class="loginbox">
                <div class="login-left">
                    <img class="img-fluid" src="../../assets/img/logo-white.png" alt="Logo">
                </div>
                <div class="login-right">
                    <div class="login-right-wrap">
                        <h1>Login</h1>
                        <p class="account-subtitle">Access to our dashboard</p>

                        <form action="login.php" method="POST">
                            <div class="form-group">
                                <input class="form-control" name="login" required type="text" placeholder="Login">
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="mdp" required type="password" placeholder="Mot de passe">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block" name="submit" type="submit">Login</button>
                            </div>
                        </form>

                        <div class="text-center forgotpass"><a href="forgot-password.html">Forgot Password?</a></div>
                        <div class="login-or">
                            <span class="or-line"></span>
                            <span class="span-or">or</span>
                        </div>

                        <div class="social-login">
                            <span>Login with</span>
                            <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i class="fab fa-google"></i></a>
                        </div>

                        <div class="text-center dont-have">Don’t have an account? <a href="register.php">Register</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="../../assets/js/jquery-3.5.1.min.js"></script>

<script src="../../assets/js/popper.min.js"></script>
<script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<script src="../../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="../../assets/plugins/summernote/dist/summernote-bs4.min.js"></script>

<script src="../../assets/js/form-validation.js"></script>

<script src="../../assets/js/jquery.maskedinput.min.js"></script>
<script src="../../assets/js/mask.js"></script>

<script src="../../assets/plugins/select2/js/select2.min.js"></script>

<script src="../../assets/js/moment.min.js"></script>
<script src="../../assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="../../assets/plugins/datatables/datatables.min.js"></script>

<script src="../../assets/js/jquery-ui.min.js"></script>
<script src="../../assets/plugins/fullcalendar/fullcalendar.min.js"></script>
<script src="../../assets/plugins/fullcalendar/jquery.fullcalendar.js"></script>


<script src="../../assets/js/script.js"></script>
</body>

</html>