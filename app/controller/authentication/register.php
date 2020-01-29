<?php
      require_once 'app/view/authentication/register.view.php';
      if(isset($_POST['registersubmit']))
      {
         require_once 'app/model/authentication/Register.php';
         $pass1=$_POST['userpassword'];
         $pass2=$_POST['confirmpassword'];
         if($pass1==$pass2)
         {
            $pdo=require_once 'app/core/connection.php';
            $register=new Register($pdo);
            $register->setvalues('user');          
         }    
         else
         {
               echo '<script>alert("Password doesnt matches")</script>';
         }
      }
?>
