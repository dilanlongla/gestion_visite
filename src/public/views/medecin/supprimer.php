<?php

use GestionVisites\Models\Medecin;

require "../../../../vendor/autoload.php";
require "../../../../start.php";

session_start();

if (!isset($_SESSION['user'])) {
    header("Location: ../auth/login.php");
    exit();
}

$medecinController = new Medecin($dbConnection);
$result = $medecinController->delete($_GET['id']);

if ($result) {
    header("Location: index.php");
    exit();
}
