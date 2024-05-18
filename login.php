<?php
include('C:\xampp\htdocs\Cafe\connection.php');
if (isset($_POST['login'])) {
  $user = mysqli_real_escape_string($connected, $_POST['username']);
  $pass = mysqli_real_escape_string($connected, $_POST['password']);
  $quser = "SELECT * from `users` where `Username` = '$user'";
  $res_user = mysqli_query($connected, $quser);
  if (mysqli_num_rows($res_user) > 0) {
    $user_data = mysqli_fetch_assoc($res_user);
    if ($user_data['password'] == $pass) {
      session_start();
      $_SESSION['username'] = $user;
      header("Location: ../home.php");
    } else {
      echo 'there is an issue in login';
    }
  }
}

?>
<!DOCTYPE HTML>
<html lang="en">
<html>

<head>
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="./css/login.css">
</head>

<body class="body">
  <div class="login-page">
    <div class="form">
      <form method="post">
        <img src="./image/3127336.png"></img>
        <input type="text" name="username" placeholder="username" />
        <input type="password" name="password" id="password" placeholder="password" />
        <i class="fas fa-eye" onclick="show()"></i>
        <br>
        <br>
        <button type="submit" name="login">login</button>
        <p class="message"></p>

      </form>
      <form class="login-form">
        <button type="button" onclick="window.location.href= "http://localhost/Cafe/login/signup.php" ">SIGN UP</button>

      </form>
      <a href="" style="text-decoration: none; color: bisque;">forgot password?</a>
    </div>
  </div>
  <script>
    function show() {
      var password = document.getElementById("password");
      var icon = document.querySelector(".fas")
      if (password.type === "password") {
        password.type = "text";
      } else {
        password.type = "password";
      }
    };
  </script>
</body>

</html>