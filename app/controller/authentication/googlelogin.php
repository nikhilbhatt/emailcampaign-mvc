<?php
   

   require_once "app/core/googleconfig.php";

   if(isset($_GET['code']))
   {
       $token=$google_client->fetchAccessTokenWithAuthCode($_GET['code']);
       $_SESSION['access_token']=$token;
   }
   $oAuth=new Google_Service_Oauth2($google_client);
   $userdata=$oAuth->userinfo_v2_me->get();

   $_SESSION['email']=$userdata['email'];
   $_SESSION['user_name']=$userdata['givenName'];

   require_once 'app/model/authentication/Googlelogin.php';
   $pdo= require_once  'app/core/connection.php';
   $googlelogin=new GoogleLogin($pdo);
   $googlelogin->adduser('user');

?>