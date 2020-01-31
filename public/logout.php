<?php

include 'app/core/googleconfig.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$google_client->revokeToken();

unset($_SESSION['user_email']);
session_destroy();
header('location:login');
?>