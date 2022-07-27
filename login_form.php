<?php
include("config.php");

session_start();

if(isset($_POST['submit'])){
   
    $email = mysqli_real_escape_string($db, $_POST['usermail']);
    $pass = md5($_POST['password']);
   

    $sql = "SELECT * FROM user_form WHERE email='$email' && password='$pass'";

    $result = mysqli_query($db, $sql);
    if(mysqli_num_rows($result)>0){
       $_SESSION['usermail'] = $email;
       header('location:index.php');
    }else{
       $error[]= "user email or password is incorrect";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Login Form</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
         
                <div class="login-form">
                    <h1>Login Form</h1>
                    <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo '<p class="error_msg">'.$error.'</p>';
                    }
                }
                ?>
                <form method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="usermail" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <button type="submit" name="submit" class="btn btn-primary w-100 py-2">Login</button>
                </form>
                <p>Dont't have an account <a href="register_form.php">Register</a></p>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>