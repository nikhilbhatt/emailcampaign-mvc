<?php

  class Register{
    protected $pdo;
    public function __construct($pdo)
    {
        $this->pdo=$pdo;
    }
    public function setvalues($table)
    {
        $name=$_POST['name'];
        $email=$_POST['useremail'];
        $password=sha1($_POST['userpassword']);
        $statement=$this->pdo->query("SELECT email from {$table} WHERE email='$email'");
        $row=$statement->fetchAll(PDO::FETCH_NUM);
        if(sizeof($row))
        {
           echo '<script>alert("Email already Registered")</script>';
        }
        else
        {
            $stmt=$this->pdo->prepare("INSERT INTO {$table}(`name`,`email`,`password`) VALUES('$name','$email','$password')");
            $stmt->execute();
            echo '<script>alert("Successfully Registered")</script>';
            header("location:login");
       }
    }

  }
?>
