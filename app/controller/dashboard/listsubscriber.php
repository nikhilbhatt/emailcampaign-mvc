<?php
  //show list of subscriber here accordingly
  session_start();
  if(!$_SESSION['user_email'])
  {
    header('location:login');
  }
  //call model and update your view.
  //get values here in $res from Listsubscriber class.
  require_once 'app/model/dashboard/Listsubscriber.php';
  $pdo=require_once 'app/core/connection.php';
  $subscriberlist=new ListSubscriber($pdo);
  $result=$subscriberlist->getvalues('subscriber');
  require_once 'app/view/dashboard/listsubscriber.view.php';
  
?>
