<?php
  require_once "app/core/googleconfig.php";
  $loginurl= $google_client->createAuthUrl();
  header("location:$loginurl");
?>