<?php
   class Login
   {
      protected $pdo;
      public function __construct($pdo)
      {
         $this->pdo=$pdo;
      }
      public function getvalues($table)
      {
        $email=$_POST['useremail'];
        $password=sha1($_POST['userpassword']);
        $statement=$this->pdo->query("SELECT email FROM {$table} WHERE email='$email' AND password='$password'");
        $res=$statement->fetchAll(PDO::FETCH_ASSOC);
        return sizeof($res);  
         
      }
   }

?>
