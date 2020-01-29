<?php
   //this index.php will determine where to go whether main page or login page.
   //connect database with your php file here..
   //
    session_start();
    if(!isset($_SESSION['user_email']))
     {
        require_once 'app/controller/authentication/login.php';
     }
     else
     {
        require_once 'app/controller/dashboard/listsubscriber.php';
     }
   
   
?>