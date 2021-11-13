<?php

use GestionVisites\Models\Medecin;

session_start();

require "../../../../vendor/autoload.php";
require "../../../../start.php";

if (!isset($_SESSION['user'])) {
    header("Location: ../auth/login.php");
    exit();
}

$medecinController = new Medecin($dbConnection);

if (isset($_GET['id'])) {
    $medecin = $medecinController->findById($_GET['id']);
}

if (isset($_POST['submit'])) {
    $data = [];
    if (isset($_POST['nom'])) {
        $data['nom'] = $_POST['nom'];
    }
    if (isset($_POST['prenom'])) {
        $data['prenom'] =  $_POST['prenom'];
    }
    if (isset($_POST['adresse'])) {
        $data['adresse'] =  $_POST['adresse'];
    }
    if (isset($_POST['tel'])) {
        $data['tel'] = $_POST['tel'];
    }
    if (isset($_POST['departement'])) {
        $data['departement'] =  $_POST['departement'];
    }
    if (isset($_POST['specialiteComplementaire'])) {
        $data['specialiteComplementaire'] = $_POST['specialiteComplementaire'];
    }
    $id = $_POST['id'];
    $result = $medecinController->update($id, $data);

    if ($result) {
        header('Location: index.php');
        exit();
    } else {
        header('Location: index.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Preskool - Rapports</title>

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

<body>
    <div class="main-wrapper">

        <div class="header">

            <div class="header-left">
                <a href="index-2.html" class="logo">
                    <img src="../../assets/img/logo.png" alt="Logo">
                </a>
                <a href="index-2.html" class="logo logo-small">
                    <img src="../../assets/img/logo-small.png" alt="Logo" width="30" height="30">
                </a>
            </div>

            <a href="javascript:void(0);" id="toggle_btn">
                <i class="fas fa-align-left"></i>
            </a>

            <a class="mobile_btn" id="mobile_btn">
                <i class="fas fa-bars"></i>
            </a>

        </div>

        <ul class="nav user-menu">

            <li class="nav-item dropdown has-arrow">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    <span class="user-img"><img class="rounded-circle" src="../../assets/img/profiles/avatar-01.jpg" width="31" alt="Ryan Taylor"></span>
                </a>
                <div class="dropdown-menu">
                    <div class="user-header">
                        <div class="avatar avatar-sm">
                            <img src="../../assets/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle">
                        </div>
                        <div class="user-text">
                            <h6><?php echo $_SESSION['user']['prenom'] ?></h6>
                            <p class="text-muted mb-0">Visiteur</p>
                        </div>
                    </div>
                    <a class="dropdown-item" href="../../logout.php?page=modifier.php">Logout</a>
                </div>
            </li>

        </ul>

        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">
                            <span>Menu</span>
                        </li>
                        <li class="">
                            <a href="../../index.php"><i class="fas fa-th-large"></i> <span>Dashboard</span></a>
                        </li>
                        <li class="">
                            <a href="../rapport/index.php"><i class="fas fa-user-graduate"></i> <span> Rapports</span></a>
                        </li>

                        <li class="">
                            <a href="../medecin/index.php"><i class="fas fa-user-graduate"></i> <span>Medecins</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Ajouter Medecin</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Medecins</a></li>
                                <li class="breadcrumb-item active">Ajouter Medecin</li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="modifier.php" method="POST">
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="form-title"><span>Information</span></h5>
                                        </div>
                                        <input type="text" name="id" hidden value="<?php echo $medecin['id'] ?>" required class="form-control">

                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Nom</label>
                                                <input type="text" name="nom" value="<?php echo $medecin['nom'] ?>" required class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Prenom</label>
                                                <input type="text" name="prenom" value="<?php echo $medecin['prenom'] ?>" required class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Adresse</label>
                                                <input type="text" name="adresse" value="<?php echo $medecin['adresse'] ?>" required class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>tel</label>
                                                <input type="text" name="tel" value="<?php echo $medecin['tel'] ?>" required class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Specialite</label>
                                                <input type="text" name="specialiteComplementaire" value="<?php echo $medecin['specialiteComplementaire'] ?>" required class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Department</label>
                                                <input type="text" name="departement" value="<?php echo $medecin['departement'] ?>" required class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer>
                <p>Copyright © 2021 ViZit.</p>
            </footer>
        </div>

    </div>


</body>

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