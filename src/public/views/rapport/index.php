<?php

use GestionVisites\Models\Medecin;
use GestionVisites\Models\Rapport;

session_start();

if (!isset($_SESSION['user'])) {
    header("Location: ../auth/login.php");
    exit();
}

require "../../../../vendor/autoload.php";
require "../../../../start.php";

$rapportController = new Rapport($dbConnection);
$medecinController = new Medecin($dbConnection);

if (!isset($_SESSION['user'])) {
    header("Location: ../auth/login.php");
    exit();
}

if (isset($_GET['date'])) {
    $rapports = $rapportController->findByDate($_GET['date']);
} elseif (isset($_GET['med_id'])) {
    $rapportController->setPath('idMedecin');
    $rapports = $rapportController->findByPath($_GET['med_id']);
} else {
    $rapports = $rapportController->findAll();
}

?>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

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

            <div class="top-nav-search">
                <form action="index.php" method="GET">
                    <input type="date" name='date' class="form-control">
                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>

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
                        <a class="dropdown-item" href="../../logout.php?page=index.php">Logout</a>
                    </div>
                </li>

            </ul>

        </div>

        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">
                            <span>Menu</span>
                        </li>
                        <li class="">
                            <a href="../../index.php"><i class="fas fa-th-large"></i> <span>Acceuil</span></a>
                        </li>
                        <li class="">
                            <a href="index.php"><i class="fas fa-user-graduate active"></i> <span> Rapports</span></a>
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
                            <h3 class="page-title">Rapports</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../../index.php">Acceuil</a></li>
                                <li class="breadcrumb-item active">Rapports</li>
                            </ul>
                        </div>
                        <div class="col-auto text-right float-right ml-auto">
                            <a href="#" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i> Telecharger</a>
                            <a href="ajouter.php" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-table">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0 datatable">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nom Medecin</th>
                                                <th>Motif</th>
                                                <th>Bilan</th>
                                                <th>Date</th>
                                                <th class="text-right">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($rapports as $rapport) {
                                                $medecin = $medecinController->findById($rapport['idMedecin']);
                                            ?>
                                                <tr>
                                                    <td><?php echo $rapport['id'] ?></td>
                                                    <td><?php echo $medecin['nom'] ?></td>
                                                    <td><?php echo $rapport['motif'] ?></td>
                                                    <td><?php echo $rapport['bilan'] ?></td>
                                                    <td><?php echo $rapport['date'] ?></td>
                                                    <td class="text-right">
                                                        <div class="actions">
                                                            <a href="modifier.php?id=<?php echo $rapport['id'] ?>" class="btn btn-sm bg-success-light mr-2">
                                                                <i class="fas fa-pen"></i>
                                                            </a>
                                                            <a href="supprimer.php?id=<?php echo $rapport['id'] ?>" class="btn btn-sm bg-danger-light">
                                                                <i class="fas fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
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