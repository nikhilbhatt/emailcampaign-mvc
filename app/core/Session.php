<?php
class Session
{
    private $logged_in=false;
    private $user_email;
    function __construct()
    {
        session_start();
        $this->checklogin();
        if($this->logged_in)
        {
            //take user to main
            header("location:listsubscriber");
        }
        else
        {
            header("location:login");
            //take user to login page
        }
    }
    public function is_logged_in()
    {
          return $this->logged_in;
    }
    public function logout()
    {
        unset($_SESSION['user_email']);
        unset($this->user_email);
        $this->logged_in=false;
    }
    public function login($user)
    {
       if($user)
       {
           $this->user_email=$_SESSION['user_email']=$user->id;
       }
    }
    public function check_login()
    {
        if(isset($_SESSION['user_email']))
        {
            $this->user_email=$_SESSION['user_email'];
            $this->logged_in=true;
        }
        else
        {
            unset($this->user_email);
            $this->logged_in=false;
        }
    }
}

?>
