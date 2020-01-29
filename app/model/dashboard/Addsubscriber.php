<?php

  Class AddSubscriber
  {
     protected $pdo;
     public function __construct($pdo)
     {
           $this->pdo=$pdo;
     }
     
     public function add($table)
     {
       $name=$_POST['subscribername'];
       $email=$_POST['subscriberemail'];
       $stmt=$this->pdo->query("SELECT email from {$table} WHERE email='$email'");
       $res=$stmt->fetchAll(PDO::FETCH_NUM);
       if(sizeof($res))
       {
            echo "<script>alert('user is already a subscriber')</script>";
       }
       else
       {
          $newstmt=$this->pdo->prepare("INSERT INTO {$table}(`name`,`email`) VALUES('$name','$email')");
          $newstmt->execute();
          echo "<script>alert('user added')</script>";
       }
     }
  }
?>