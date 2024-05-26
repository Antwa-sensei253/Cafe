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
        <a href="coffee_shop_website/login-signup-form/login.php" class="btn">
        <?php  
            if(isset($_SESSION['username']))
        echo($_SESSION['username']);
        echo('Guest');
    
    ?></a>
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
        <h1 class="heading">about us <span>why choose us</span></h1>
        <div class="row">
            <div class="image">
                <img src="image/about-img.png" alt="">
            </div>
            <div class="content">
                <h3 class="title">what's make our coffee special!</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore amet praesentium autem iure veniam, doloribus rerum quis vero minima quas ex asperiores assumenda totam, dicta nisi pariatur inventore a. Cupiditate.</p>
                <a href="#" class="btn">read more</a>
                <div class="icons-container">
                    <div class="icons">
                        <img src="image/about-icon-1.png" alt="">
                        <h3>quality coffee</h3>
                    </div>
                    <div class="icons">
                        <img src="image/about-icon-2.png" alt="">
                        <h3>our branches</h3>
                    </div>
                    <div class="icons">
                        <img src="image/about-icon-3.png" alt="">
                        <h3>free delivery</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="menu" id="menu">
        <h1 class="heading">our menu <span>popular menu</span></h1>
        <div class="box-container">
            <a href="#" class="box">
                <img src="image/menu-1.png" alt="">
                <div class="content">
                    <h3>Cold brew</h3>
                    <p>Cold brew coffee,is the process of steeping coffee grounds in water at cool temperatures for an extended period. </p>
                    <span>$7.99</span>
                </div>
            </a>
            <a href="#" class="box">
                <img src="image/menu-2.png" alt="">
                <div class="content">
                    <h3>Caffe mocha</h3>
                    <p>A caffè mocha, also called mocaccino, is a chocolate-flavoured warm beverage that is a variant of a caffè latte,</p>
                    <span>$8.99</span>
                </div>
            </a>
            <a href="#" class="box">
                <img src="image/menu-3.png" alt="">
                <div class="content">
                    <h3>Flat white</h3>
                    <p>A flat white is a coffee drink consisting of espresso with microfoam.</p>
                    <span>$9.99</span>
                </div>
            </a>
            <a href="#" class="box">
                <img src="image/menu-4.png" alt="">
                <div class="content">
                    <h3>nescafe</h3>
                    <p>the bestseller coffee in our coffee shop last year</p>
                    <span>$10.99</span>
                </div>
            </a>
            <a href="#" class="box">
                <img src="image/menu-5.png" alt="">
                <div class="content">
                    <h3>Cappuccino</h3>
                    <p>A cappuccino is an espresso-based coffee drink and is traditionally prepared with steamed milk foam.</p>
                    <span>$11.99</span>
                </div>
            </a>
            <a href="#" class="box">
                <img src="image/menu-6.png" alt="">
                <div class="content">
                    <h3>Iced latte</h3>
                    <p>Iced Latte. This is 2 shots of espresso milk and a touch of sweetness, poured over ice cubes and shaken. Iced Coconut Latte.</p>
                    <span>$12.99</span>
                </div>
            </a>
        </div>
    </section>
    <section>
        <div id="myDIV" class="header1">
            <input type="text" id="myInput" placeholder="ex: nescafe">
            <span onclick="newElement()" class="addBtn">Add</span>
            </div>
            
            <ul id="myUL">
            <li>Caffe  mocha</li>
            <li class="checked">latte</li>
            
            
            </ul>
            <button class="btn">Finish</button>
    </section>
    <section class="book" id="book" name="contact  us">
        <h1 class="heading">Contact Us<span>send us a message</span></h1>
        <form action="">
            <input type="text" placeholder="Name" class="box" >
            <input type="email" placeholder="Email" class="box">
            <textarea name="" placeholder="Message" class="box" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" class="btn">
        </form>
    </section>
    <section class="footer">

    </section>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>

</body>

</html>