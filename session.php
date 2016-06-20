<?php
    include("dbconfig.php");
    session_start();

    $login_session=$_SESSION["login_admin"];

    if(!isset($_SESSION['login_admin']))
    {
        header('location: admin_login.php');
        exit();
    }
?>