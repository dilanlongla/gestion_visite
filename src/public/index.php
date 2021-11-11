<?php

session_start();
require '../../vendor/autoload.php';

// if (!isset($_SESSION['user_id'])) {
//     header("Location: views/auth/login.php");
// exit();
// }
?>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Preskool - Acceuil</title>

    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">

    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/plugins/summernote/dist/summernote-bs4.css">

    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

    <link rel="stylesheet" href="assets/plugins/fullcalendar/fullcalendar.min.css">

    <link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="main-wrapper">

        <div class="header">

            <div class="header-left">
                <a href="index-2.html" class="logo">
                    <img src="assets/img/logo.png" alt="Logo">
                </a>
                <a href="index-2.html" class="logo logo-small">
                    <img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
                </a>
            </div>

            <a href="javascript:void(0);" id="toggle_btn">
                <i class="fas fa-align-left"></i>
            </a>

            <a class="mobile_btn" id="mobile_btn">
                <i class="fas fa-bars"></i>
            </a>

        </div>

        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">
                            <span>Menu</span>
                        </li>
                        <li class="">
                            <a href="index.php"><i class="fas fa-th-large active"></i> <span class="active">Acceuil</span></a>
                        </li>
                        <li class="">
                            <a href="views/rapport/index.php"><i class="fas fa-user-graduate"></i> <span>Rapports</span></a>
                        </li>
                        <li class="">
                            <a href="views/medecin/index.php"><i class="fas fa-user-graduate"></i> <span>Medecin</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="page-wrapper">
            <div class="content container-fluid">

            </div>
            <footer>
                <p>Copyright © 2021 ViZit.</p>
            </footer>
        </div>
    </div>



</body>



<script src="assets/js/jquery-3.5.1.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/plugins/summernote/dist/summernote-bs4.min.js"></script>

<script src="assets/js/form-validation.js"></script>

<script src="assets/js/jquery.maskedinput.min.js"></script>
<script src="assets/js/mask.js"></script>

<script src="assets/plugins/select2/js/select2.min.js"></script>

<script src="assets/js/moment.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="assets/plugins/datatables/datatables.min.js"></script>

<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/plugins/fullcalendar/fullcalendar.min.js"></script>
<script src="assets/plugins/fullcalendar/jquery.fullcalendar.js"></script>


<script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from preschool.dreamguystech.com/laravel/public/add-books by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Aug 2021 15:39:17 GMT -->

</html>