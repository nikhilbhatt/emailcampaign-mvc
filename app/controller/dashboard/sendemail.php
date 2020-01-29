<?php
   session_start();
   if(!$_SESSION['user_email'])
   {
    header("location:login"); 
   }
   require_once 'app/view/dashboard/sendemail.view.php';
   if(isset($_POST['sendemailbutton']))
   {
       require_once 'app/model/dashboard/Sendemail.php';
       $pdo=require_once 'app/core/connection.php';
       $sendemail=new SendEmail($pdo);
       $sendemail->sesemailsend($_POST['emailsubject'],$_POST['emailbody']);   
   }
?>