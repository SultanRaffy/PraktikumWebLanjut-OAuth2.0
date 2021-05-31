<?php 
  session_start();
  if (isset($_SESSION['access_token'])){
    header('Location: index.php');
    exit();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='style.css' rel='stylesheet' type='text/css' >
  <title>Login With Google</title>
</head>
<body>
  <div class="container">
    <h1>Login With Google</h1>
    <div class="card">
      <div class="input">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">  
      </div>
      <div class="button">
        <a class="login-button" href="#">Sign In</a>
        <a class="login-google-button" href="GoogleOAuth.php">Login With Google</a>
      </div>
    </div>  
  </div>
  
</body>