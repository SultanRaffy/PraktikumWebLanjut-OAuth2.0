<?php
    require_once "GoogleOAuth.php";
    unset($_SESSION['access_token']);
    session_destroy();
    header('Location: home.php');
    exit();
?>