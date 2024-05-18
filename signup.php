<?php
include 'connection.php';

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($connected, $_POST['username']);
    $email = mysqli_real_escape_string($connected, $_POST['email']);
    $number = mysqli_real_escape_string($connected, $_POST['number']);
    $password = mysqli_real_escape_string($connected, $_POST['password']);
    $confirm = mysqli_real_escape_string($connected, $_POST['confirm']);
    $q = "INSERT INTO users(Username, Email, Number, password) VALUES ('$username', '$email', '$number', '$password')";
    
    if ($password == $confirm) {
        $quser = "SELECT * FROM `users` WHERE `Username` =  '$username' ";
        $res = mysqli_query($connected, $quser);
        if(mysqli_num_rows($res)>0){
            $reg = 'this user is already registered';

        }
        else{
            mysqli_query($connected,$q);
            header('Location: login.php');
        }
        
    } else {
        $error = "Passwords do not match";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="./css/signup.css">
</head>
<body class="body">
    <div class="login-page">
        <form class="form" action="signup.php" method="post">
            <img src="./image/3127336.png" alt="Signup Image"/>
            <input type="text" name="username" placeholder="Username" required/>
            <input type="email" name="email" placeholder="Email Address" required />
            <input type="text" name="number" placeholder="Phone Number" required />
            <input type="password" name="password" placeholder="Password" required />
            <input type="password" name="confirm" placeholder="Confirm Password" required />
            <button type="submit" name="submit">Submit</button>
            <?php if (isset($reg)) { echo "<p>$reg</p>"; } ?>
            <?php if (isset($error)) { echo "<p>$error</p>"; } ?>
        </form>
    </div>
</body>
</html>
