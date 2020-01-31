<?php 

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
   require_once 'public/googleapi/vendor/autoload.php';

    $google_client=new Google_Client();
     
    $google_client->setApplicationName("Email Campaign");
    $google_client->setClientId("208036174903-l26l8qc0q3gdp3a0ui3p65g447lh8jfk.apps.googleusercontent.com");
    $google_client->setClientSecret("vqwQwzMY2TUbbJIeP1OtGy72");
    $google_client->setRedirectUri('http://localhost/googlelogin');
    $google_client->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
