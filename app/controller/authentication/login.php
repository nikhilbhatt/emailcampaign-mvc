<?php

   session_start();
   require_once 'app/view/authentication/login.view.php';
   if($_SESSION['user_email'])
   {
       header("location:sendemail");
   }
   if(isset($_POST['loginsubmit']))
   {
       
       require_once 'app/model/authentication/Login.php';
       $pdo=require_once 'app/core/connection.php';
       $login=new Login($pdo); 
       $n=$login->getvalues('user');
       
       if($n>0)
       {

            if(!empty($_POST['rememberme']))
            {
              setcookie("login_email",$_POST['useremail'],time()+(10*24*60*60));
              setcookie("login_password",$_POST['userpassword'],time()+(10*24*60*60));
            }

             $_SESSION['user_email']=$_POST['useremail']; 
        //    goto new location means validation successful ;
              header("location:sendemail");
       }
       else
       {
        //    show error
        echo '<script>alert("Wrong Email or Password")</script>';
        
       }
   }
?>
