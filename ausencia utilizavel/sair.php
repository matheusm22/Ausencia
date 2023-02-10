<?php
    session_start();
    unset($_SESSION['agente']);
    unset($_SESSION['senha']);
    header("Location: login.php");
?>