<?php

include 'app/core/googleconfig.php';

session_start();

$google_client->revokeToken();

unset($_SESSION['user_email']);
session_destroy();
header('location:login');
?>