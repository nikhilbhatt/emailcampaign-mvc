<?php
class GoogleLogin
{
    protected $pdo;
    public function __construct($pdo)
    {
        $this->pdo=$pdo;
    }
    public function checkdata($table,$email)
    {
      $stmt=$this->pdo->query("SELECT * from {$table} WHERE email='$email'");
      $res=$stmt->fetchAll(PDO::FETCH_ASSOC);
      return $res;
    }
    public function adduser($table)
    {
        $name=$_SESSION['user_name'];
        $email=$_SESSION['email'];
        $res=$this->checkdata($table,$email);
        if(sizeof($res))
        {
           foreach($res as $key=>$value)
           {
               $googleuser=$value['isgoogleuser'];
           }
           if($googleuser)
           {
               $_SESSION['user_email']=$_SESSION['email'];
               header("location:sendemail");
           }
           echo "<script>alert('login with email and password')</script>";
           header("location:login");
        }
        else
        {
            $stmt=$this->pdo->prepare("INSERT INTO {$table}(`name`,`email`,`isgoogleuser`) VALUES('$name','$email',1)");
            $stmt->execute();
            echo '<script>alert("Successfully Registered")</script>';
            $_SESSION['user_email']=$email;
            header("location:sendemail");
        }
       
    }
}
?>