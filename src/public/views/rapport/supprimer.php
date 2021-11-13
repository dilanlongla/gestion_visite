<?php

use GestionVisites\Models\Rapport;

require "../../../../vendor/autoload.php";
require "../../../../start.php";

session_start();

if (!isset($_SESSION['user'])) {
    header("Location: ../auth/login.php");
    exit();
}

$rapportController = new Rapport($dbConnection);
$result = $rapportController->delete($_GET['id']);

if ($result) {
    header("Location: index.php");
    exit();
} else {
    echo 'error occured';
}
