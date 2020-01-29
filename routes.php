<?php
 
 $router->define(
     [
         ''=>'app/controller/index.php',
         'login'=>'app/controller/authentication/login.php',
         'register'=>'app/controller/authentication/register.php',
         'listsubscriber'=>'app/controller/dashboard/listsubscriber.php',
         'logout'=>'public/logout.php',
         'addsubscriber'=>'app/controller/dashboard/addsubscriber.php',
         'sendemail'=>'app/controller/dashboard/sendemail.php',
         'listemail'=>'app/controller/dashboard/listemail.php',
         'listsubscriber'=>'app/controller/dashboard/listsubscriber.php',
         'googlelogin'=>'app/controller/authentication/googlelogin.php'
     ]
     );

?>
