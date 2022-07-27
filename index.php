<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['usermail'])){
   header('location:login_form.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title> Home Page</title>
</head>
<body>

<div class="container">
      <div class="col-12">
            <h1>HElllo Home PAge</h1>
    	<p>Welcome home page</p>
        <p> Your email   <span><?php echo $_SESSION['usermail']; ?></span></p>
    	<p> <a href="login_form.php" style="color: red;">logout</a> </p>
        </div>
    </div>
</div>
    
</body>
</html>