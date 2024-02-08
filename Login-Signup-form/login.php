<?php

session_start();

include('connection.php');
if (isset($_POST['login'])) {
  $email=$_POST['email'];
      $password=$_POST['password'];
      $q ="SELECT * FROM `customers` WHERE email= '$email' and password ='$password'";
      $res =mysqli_query($conn,$q);
      $row =mysqli_fetch_array($res);
      if (mysqli_num_rows($res)>0) 
      {
        $_SESSION['name']= $row['name'];
        $_SESSION['email']=$email;
        header('location:http://localhost/coffee_shop_website/');
      }
      else{
        header('location:http://localhost/coffee_shop_website/login-signup-form/login.php');
      }
    }
?>

<!DOCTYPE HTML>
<html lang="en" >
<html>
<head>
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="login_style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>  
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'> 
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>
<body class="body">
<div class="login-page">
  <div class="form" >
    <form method="post">
      <img src="3127336.png"></img>
      <input type="email" name="email" placeholder="&#xf007;  username"/>
      <input type="password" name="password" id="password" placeholder="&#xf023;  password"/>
      <i class="fas fa-eye" onclick="show()"></i> 
      <br>
      <br>
      <button type="submit" name="login">login</button>
      <p class="message"></p>
    </form>
    <form class="login-form">
      <button type="button" onclick="window.location.href='http://localhost/coffee_shop_website/login-signup-form/signup.php'">SIGN UP</button>
    </form>
  </div>
</div>
  <script>
    function show(){
      var password = document.getElementById("password");
      var icon = document.querySelector(".fas")
      if(password.type === "password"){
        password.type = "text";
      }
      else {
        password.type = "password";
      }
    };
  </script>
</body>
</html>

