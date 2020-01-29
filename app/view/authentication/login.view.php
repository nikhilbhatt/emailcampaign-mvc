<?php
  require_once "app/core/googleconfig.php";
  $loginurl= $google_client->createAuthUrl();
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <form action='login' method="post">
            <div>
                <label for="email">Email:</label>
                <input type="email" name="useremail" required value="<?php if(isset($_COOKIE['login_email'])){ echo $_COOKIE['login_email']; } ?>" >
            </div>
            <div>
                <label for="password">Password: </label>
                <input type="password" name="userpassword" required value="<?php if(isset($_COOKIE['login_password'])){ echo $_COOKIE['login_password']; }  ?>">
            </div>
            <div>
            <input type="checkbox" value="selected" name="rememberme">Remember me<br>
            <div>
                <input type="submit" value="submit" name="loginsubmit">
            </div>
            <div><a href='register'>Register Here</a>
            </div>
            </div>
            <div><input type="button" onClick="window.location= '<?php echo $loginurl ?>';" value="Google login">
            </div>
             </form>
    </body>
</html>