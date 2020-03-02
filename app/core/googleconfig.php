<?php 

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
   require_once 'public/googleapi/vendor/autoload.php';

    $google_client=new Google_Client();
     
    $google_client->setApplicationName("Email Campaign");
    $google_client->setClientId(YOUR_ID);
    $google_client->setClientSecret(YOUR_SECREY);
    $google_client->setRedirectUri('http://localhost/googlelogin');
    $google_client->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
