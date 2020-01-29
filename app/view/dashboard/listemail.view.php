<!doctype html>
<html lang="en">
  <head>
  	<title>Email list</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="/public/css/dashboardstyle.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			 
			<?php
			 require_once 'public/sidebar.php';
			?>
  
        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5 bg-light">
        <div class="container">
        <h1>Previous Email campaign List</h1>
        </div>
        <div class="container bg-light text-center mt-4">
             <?php
                  echo "<table id='t01'>";
                  echo "<tr><th>S.no.</th><th>Subject</th><th>Body</th><th>Send by</th> <th>Time</th>";
                  foreach($res as $key=>$value)
                  {
                       echo "<tr><td>".++$key."</td><td>".$value['subject']."</td><td>".$value['body']."</td><td>".$value['sendby']."</td><td>".$value['time']."</td></tr>";
                  }
                  echo "</table>";
              ?>
        </div>
        </div>
		</div>

  </body>
</html>