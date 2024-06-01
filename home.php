<?php

session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="header">
        <div id="menu-btn" class="fas fa-bars"></div>
        <a href="#" class="logo">coffee <i class="fas fa-mug-hot"></i></a>
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#menu">menu</a>
        </nav>
        <span>
            <a href="#book" class="btn" style="margin-right: 3rem;">book a table</a>
            <a href="coffee_shop_website/login-signup-form/login.php" class="btn"><?php echo ($_SESSION['username']); ?></a>
        </span>
    </header>
    <section class="home" id="home">
        <div class="row">
            <div class="content">
                <h3>fresh coffee </h3>
                <h3>in the morning</h3>

            </div>
            <a href="#" class="btn">buy now</a>
        </div>
    </section>
    <section class="about" id="about">
        
    </section>
    <section class="menu" id="menu">
        <h1 class="heading">our menu</h1>
        <div class="box-container">
            <img class="imagine" style="height:1200px" src="./image/ok.png" alt="">
        </div>
    </section>
    <section>
        <div id="myDIV" class="header1">
            <input type="text" id="myInput" placeholder="ex: nescafe">
            <span onclick="newElement()" class="addBtn">Add</span>
        </div>

        <ul id="myUL">
            <li>Caffe mocha</li>
            <li class="checked">latte</li>


        </ul>
        <button class="btn">Finish</button>
    </section>

    </section>
    <script src="js/script.js"></script>

</body>

</html>