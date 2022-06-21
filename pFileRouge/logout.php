<?php
    session_start();
    include('header.php');
    include('datacon.php');

    unset($_SESSION['id_free']);
    unset($_SESSION['id_cli']);
    header("Location:login.php");
?>