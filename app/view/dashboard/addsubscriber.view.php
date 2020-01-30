<!doctype html>
<html lang="en">
  <head>
  	<title>Add subscriber</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="/public/css/dashboardstyle.css" type="text/css">
  </head>
  <body >
		
		<div class="wrapper d-flex align-items-stretch">
			<?php
			 require_once 'public/sidebar.php';
			?>
        <div id="content" class="bg-light">
        <div class="container mt-5 col-md-5" >
            <h1> Add Subscriber</h1>
            </div>
        <div class="container bg-light mt-5 col-md-5" >
            <form method="post" class="container" action='addsubscriber'>
                <div class="form-group mt-5">
                  <label for="name" class="mt-5 ml-5">Name:</label>
                  <input type="text" class="form-control mt-2 ml-5 col-md-10" name="subscribername" required >
                </div>
                  <div class="form-group mt-3">
                    <label for="email" class="ml-5">Email:</label>
                    <input type="email" class="form-control mt-2 ml-5 col-md-10" name="subscriberemail" required >
                  </div>
               <div class="text-center">
                  <button type="submit" class="btn btn-primary mt-4 mb-5 bg-dark" name="addsubscriber">Add subscriber<i class="fas fa-seedling"></i></button>
               </div>
            </form>
            </div>
         </div>
		</div>

  </body>
</html>