<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="public/css/loginregister.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
           
	</div>
<div class="container col-lg-5 mt-5 mx-auto  h-100">
    <div class="row mt-5 mx-auto justify-content-center align-self-center">
      <div class="col-lg-12 col-xl-9 mx-auto ">
        <div class="card card-signin bg-light flex-row my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Login</h5>
            <form class="form-signin" method="post" action="login">

              <div class="form-label-group mt-4">
                <input type="email" name="useremail" id="inputEmail" class="form-control" placeholder="Email address" required value="<?php if(isset($_COOKIE['login_email'])){ echo $_COOKIE['login_email']; } ?>" autofocus="">
                <label for="inputEmail">Email address</label>
              </div>
              
              <!-- <hr> -->

              <div class="form-label-group mt-4">
                <input type="password" name="userpassword" class="form-control" placeholder="Password" required value="<?php if(isset($_COOKIE['login_password'])){ echo $_COOKIE['login_password']; }  ?>">
                <label for="inputPassword">Password</label>
              </div>
                
               <div class="form-label-group mt-4 ">
                <input type="checkbox" value="selected" name="rememberme">Remember me<br>
              <div>

              <button class="btn mt-4 btn-lg btn-primary btn-block text-uppercase" type="submit" name="loginsubmit">Login</button>
              <hr class="my-4">
              <a class="d-block text-center mt-4 small" href="register">Register</a>
              <hr class="my-4">
             </form>
          </div>
        </div>
        <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit" style="border-radius: 30px; font-weight: bold;font-size: 80%; height:12%"
        onclick="window.location.href = 'gcallback';"
        >Sign up with Google</button>
      </div>
    </div>
  </div>
</body>
</html>