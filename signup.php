<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Signin Template · Bootstrap</title>
    
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">
    <!-- Bootstrap core CSS --> <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form class="form-signin" method="POST" action="" >
  <img class="mb-4" src="images/logo/favicon.png" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Please sign UP</h1>

  <label for="inputEmail" class="sr-only">Email address</label>
  <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>

  <label for="inputEmail" class="sr-only">Username</label>
  <input  name="username" type="text" id="inputEmail" class="form-control" placeholder="Username" required autofocus>

  <label for="inputEmail" class="sr-only">Phone Number</label>
  <input name="phone" type="text" id="inputEmail" class="form-control" placeholder="Phone Number" required autofocus>

  <label for="inputPassword" class="sr-only">Password</label>
  <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button name="request_for_user" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  <a href="login.php">Already have an account</a>
  <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
</form>




<?php
include 'inc/connection.php';
if (isset($_POST['request_for_user'])) {

    $new_user = $_REQUEST['username'];
    $new_email = $_REQUEST['email'];
    $new_phone = $_REQUEST['phone'];
    $new_pass = $_REQUEST['password'];
    $md5_new_pass = md5($new_pass);


    $sql1 = "INSERT INTO `user` (`username`, `email`, `phone`,`password`) 
    VALUES ('$new_user', ' $new_email', ' $new_phone', '$md5_new_pass');";
    if (mysqli_query($con , $sql1)) {
      header("location:login.php");
    }
   

}


?>
</body>
</html>
