<?php
    session_start();
    if(!isset($_SESSION["username"])) {
        header("Location: /BMS/login/login.php");
        exit();
    }
?>