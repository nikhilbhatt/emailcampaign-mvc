<?php
  //list of email send previously
  session_start();
  if(!isset($_SESSION['user_email']))
  {
      header("location:login");
  }
  $pdo=require_once 'app/core/connection.php';
  require_once 'app/model/dashboard/Listemail.php';
  $listemail=new ListEmail($pdo);
  $res=$listemail->getvalues('listpreviousemail');
  require_once 'app/view/dashboard/listemail.view.php';
?>
