<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome to shopping site...</title>
    <!-- owl carousel css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- my css file -->
    <link rel="stylesheet" href="css_js/color.css">
</head>
<body>
    <header>
        <div class="logo-search-bar">
            <div class="logo">
                <a href="index.php">shopnow</a>
            </div>
            <div class="search">
                <form id="search" action="search.php">
                    <input type="text" name="query" placeholder="search for..." autocomplete="off">
                    <button type="submit">search</button>
                </form>
            </div>
            <div class="user-like-cart">
                <a href="" id="fa-user"><i class="fa fa-user" aria-hidden="true"></i></a>
                <div class="user-options">
                    <a href="" id="login">login</a>
                    <a href="register.php">register</a>
                </div>
                <a href="wishlist.php"><i class="fa fa-heart" aria-hidden="true"></i> <span>8</span></a>
                <a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span>2</span></a>
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="#">laptops</a></li>
                <li><a href="#">mobiles</a></li>
                <li><a href="#">beds</a></li>
                <li><a href="#">sarees</a></li>
            </ul>
        </nav>
        <div class="login-popup">
            <div class="login-box">
                <div class="close">&times;</div>
                <h1>login here</h1>
                <form action="" id="login-form">
                    <label for="">username</label>
                    <input type="email" placeholder="username"><br><br>
                    <label for="">password</label>
                    <input type="password" placeholder="password"><br><br>
                    <input type="submit" value="login">
                </form>
                <span>dont have an account <a href="register.php">register</a></span>
            </div>
        </div>
    </header>
<?php
    function getCard($key,$val){
        return "<div class='card'>
        <div class='for-img'>
            <img src='images/$val[0]' alt=''>
            <div class='icon-box'>
                <a href='single_product.php?pid=$key'><i class='fa fa-eye' aria-hidden='true'></i></a>
                <a href='#'><i class='fa fa-shopping-cart' aria-hidden='true'></i></a>
                <a href='#'><i class='fa fa-heart' aria-hidden='true'></i></a>
            </div>
        </div>
        <div class='for-desc'>
            <a href='single_product.php?pid=$key'>$val[1]</a>
            <h2>rs. $val[2]</h2>
        </div>
    </div>";
    }
    $products = [
        "100" => ["tshirt-2.png","peps springkoil normal","10540"],
        "101" => ["saree-2.jpg","beautiful saree","1099"],
        "102" => ["saree.jpg","amazing saree","1299"],
        "103" => ["wedding-saree.jpg","wedding saree","1599"],
        "104" => ["saree-3.jpg","amazing saree","2099"],
        "105" => ["saree-4.jpg","supar saree","2099"],
        "106" => ["saree-5.jpg","good saree","3099"],
        "107" => ["shoes-1.png","best shoes","2099"],
        "108" => ["shoes-2.png","bata shoes","2199"]
    ];
?>