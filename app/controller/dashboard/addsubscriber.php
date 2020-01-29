<?php

   session_start();
   if(!isset($_SESSION['user_email']))
   {
       header("location:login");
   }
   require_once 'app/view/dashboard/addsubscriber.view.php';
   if(isset($_POST['addsubscriber']))
   {
       require_once 'app/model/dashboard/Addsubscriber.php';
       $pdo=require_once 'app/core/connection.php';
       $addsubscriber= new Addsubscriber($pdo);
       $addsubscriber->add('subscriber');
   }
?>