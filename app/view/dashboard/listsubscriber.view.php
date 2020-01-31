<!doctype html>
<html lang="en">
  <head>
  	<title>Subscriber list</title>
      <style>
</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="/public/css/dashboardstyle.css">
  </head>
  <body >
		
		<div class="wrapper d-flex align-items-stretch bg-light">
			 
			<?php
			 require_once 'public/sidebar.php';
			?>
  
        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5 bg-light mt-5">
        <div class="container mb-5">
        <h1>Subscriber List</h1>
        </div>
          <div class="container bg-light text-center">
          
            <?php 
                echo "<table id='t01'>";
                echo "<tr><th>S.no.</th><th>Name</th><th>Email</th></tr>";
                foreach($result as $key=>$e)
                {
                    echo  "<tr><td>".++$key."</td><td>".$e['name']."</td><td>".$e['email']."</td></tr>";
                }
                echo "</table>";
            ?>
          
            </div>
        </div>
		</div>

  </body>
</html>