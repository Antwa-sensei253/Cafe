<?php
include('connection.php');
if (isset($_POST['submit'])) {
  if ($conn -> connect_error) {
  }else{
      $name=$_POST['name'];
      $email=$_POST['email'];
      $password=$_POST['password'];
      $confirm=$_POST['confirm'];
      $sql =" INSERT INTO `customers`(`email`,`name` , `password`, `confirm`) VALUES ('$email','$name','$password','$confirm')";
      mysqli_query($conn, $sql);

      
      

  }
}

?>

<!DOCTYPE html>
<html lang="en">
  <html>
    <head>
      <title>Sign Up</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta charset="utf-8" />
      <link rel="stylesheet" type="text/css" href="signup_style.css" />
      <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
      />
      <link
        href="https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600"
        rel="stylesheet"
        type="text/css"
      />
      <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    </head>

    <body class="body">

      <div class="login-page">
        <form class="form" method="post";>
          <form>
          
            <img src="3127336.png"></img>
            <br>

            <?php
            if (isset($error)) {
              echo($error);
            }
            ?>
            <input type="text" name="name" placeholder="username" required/>
            <input type="email" name="email" placeholder="email address" required />
            <input type="password" name="password" placeholder="password" required />
            <input type="password" name="confirm" placeholder="confirm password" required />
            <i class="fas fa-eye" onclick="show()"></i>
            <button type="submit" name="submit">submit</button>
            <button type="button" onclick="window.location.href='login.php'">SIGN UP</button>

            <br>
            <br>
          </form>

          <form class="login-form">
            
          </form>
        </div>
      </div>
    </body>
    <script>
      function show() {
        var password = document.getElementById("password");
        var icon = document.querySelector(".fas");
        if (password.type === "password") {
          password.type = "text";
        } else {
          password.type = "password";
        }
      }
    </script>
  </html>
</html>
