<?php
session_start();

if (!isset($_SESSION['User_Name'])) {
    header('location: index.php');
    exit;
}

include "./function/functions.php";
include "./admin/include/header.php";
include "./admin/include/sidebar.php";
?>