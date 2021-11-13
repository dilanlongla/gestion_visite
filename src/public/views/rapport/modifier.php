<?php

use GestionVisites\Models\Medecin;
use GestionVisites\Models\Medicament;
use GestionVisites\Models\Offrir;
use GestionVisites\Models\Rapport;

session_start();

require "../../../../vendor/autoload.php";
require "../../../../start.php";

if (!isset($_SESSION['user'])) {
    header("Location: ../auth/login.php");
    exit();
}

$rapportController = new Rapport($dbConnection);
$medecinController = new Medecin($dbConnection);
$medicamentController = new Medicament($dbConnection);

$medecins = $medecinController->findAll();
if (isset($_GET['id'])) {
    $rapportActif = $rapportController->findById($_GET['id']);
}

if (isset($_POST['submit'])) {
    $data = [];

    $data['idVisiteur'] = $_SESSION['user']['id'];

    if (isset($_POST['date'])) {
        $data['date'] = $_POST['date'];
    }
    if (isset($_POST['motif'])) {
        $data['motif'] =  $_POST['motif'];
    }
    if (isset($_POST['bilan'])) {
        $data['bilan'] =  $_POST['bilan'];
    }
    if (isset($_POST['idMedecin'])) {
        $data['idMedecin'] = $_POST['idMedecin'];
    }
    if (isset($_POST['specialiteComplementaire'])) {
        $data['specialiteComplementaire'] = $_POST['specialiteComplementaire'];
    }

    $id = $_POST['id'];
    $result = $rapportController->update($id, $data);

    $offrirController = new Offrir($dbConnection);
    if ($result) {
        $offrir = [];
        $last_id = $dbConnection->lastInsertId();

        foreach ($_POST['idMedicament'] as $idMedicament) {
            $offrir['idMedicament'] = $idMedicament;
            $offrir['idRapport'] = $last_id;
        }
        $offrirController->create($offrir);

        header('Location: index.php');
        exit();
    } else {
        echo 'error occured';

        exit();
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
                        <a class="dropdown-item" href="../../logout.php?page=ajouter.php">Logout</a>
                    </div>
                </li>

            </ul>
        </div>

        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">
                            <span>Main Menu</span>
                        </li>
                        <li class="">
                            <a href="../../index.php"><i class="fas fa-th-large"></i> <span>Dashboard</span></a>
                        </li>
                        <li class="">
                            <a href="../rapport/index.php"><i class="fas fa-user-graduate"></i> <span> Rapports</span></a>
                        </li>

                        <li class="">
                            <a href="../medecin/index.php"><i class="fas fa-user-graduate"></i> <span>Medecin</span></a>
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
                            <h3 class="page-title">Modifier Rapport</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Rapport</a></li>
                                <li class="breadcrumb-item active">Modifier Rapport</li>
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
                                            <h5 class="form-title"><span>Formulaire</span></h5>
                                        </div>
                                        <input type="text" name="id" hidden value="<?php echo $rapportActif['id'] ?>" required class="form-control">
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Medecin</label>
                                                <select name="idMedecin" class="form-control">
                                                    <option>Selectionne un Medecin</option>
                                                    <?php
                                                    foreach ($medecins as $medecin) {
                                                    ?>
                                                        <option value="<?php echo $medecin['id'] ?>" <?php echo $rapportActif['idMedecin'] == $medecin['id'] ? "selected='selected'" : "" ?>> <?php echo $medecin['nom'] . ' - ' . $medecin['departement'] ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Date</label>
                                                <input type="date" name="date" value="<?php echo $rapportActif['date'] ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Bilan</label>
                                                <input type="text" name="bilan" value="<?php echo $rapportActif['bilan'] ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>motif</label>
                                                <input type="textarea" name="motif" value="<?php echo $rapportActif['motif'] ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Medicaments</label>
                                                <select class="form-control" name="idMedicament[]" multiple>
                                                    <option>Selectionne les Medicaments</option>
                                                    <?php
                                                    foreach ($medicaments as $medicament) {
                                                    ?>
                                                        <option value="<?php echo $medicament['id'] ?>"><?php echo $medicament['nomCommercial'] ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
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
                <p>Copyright © 2020 ViZit.</p>
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