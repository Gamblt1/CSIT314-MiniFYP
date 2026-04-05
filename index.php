<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.php');
    exit();
}

error_reporting(E_ALL);
ini_set('display_errors', 1);

$action = isset($_GET['action']) ? $_GET['action'] : 'home';

require_once __DIR__ . '/controllers/FundraisingController.php';
$controller = new FundraisingController();

switch ($action) {
    case 'fundraisers':
        $controller->listFundraisers();
        break;
    case 'donees':
        $controller->listDonees();
        break;
    case 'home':
    default:
        $controller->home();
        break;
}
?>