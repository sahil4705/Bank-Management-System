<?php
    session_start();
    include 'db_connect.php';
    // session_unset();
    // session_destroy();
    unset($_SESSION['user']);
    header('location: ../index.php');
?>