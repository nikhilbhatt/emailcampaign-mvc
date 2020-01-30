<!doctype html>
<html lang="en">
  <head>
  	<title>Send Email</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="/public/css/dashboardstyle.css">
  </head>
  <body >
		
		<div class="wrapper d-flex align-items-stretch">
			<?php
			 require_once 'public/sidebar.php';
			?>
        <div id="content" class="p-4 p-md-5 pt-5 bg-light  mt-5 mb-5">
            <!-- Page Content make a form and send it through amazon ses-->
            <div class="container">
            <h1>Launch Email Campaign:</h1>
            </div>
            <div class="container bg-light mt-3 ">
            <form class="container" method="post" action='sendemail'>
                <div class="form-group mt-5">
                  <label for="subject">Subject</label>
                  <input type="text" class="form-control mt-2" name="emailsubject" required>
                </div>
                  <div class="form-group mt-3">
                    <label for="body">Body</label>
                    <textarea class="col-md-12" name="emailbody" rows="10" style="height:100%" required ></textarea>
                  </div>
               <div class="text-center">
                  <button type="submit" class="btn btn-primary mt-2 bg-dark" name="sendemailbutton">Launch Campaign<i class="fas fa-seedling"></i></button>
               </div>
            </form>
            </div>
         </div>
		</div>

  </body>
</html>