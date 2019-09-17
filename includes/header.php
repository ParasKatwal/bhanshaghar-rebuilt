<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo Title ?></title>
    <link rel="stylesheet" href="assets_front/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets_front/css/custom.css">
    <link rel="stylesheet" href="assets_front/css/responsive.css" media="screen and (max-width: 1200px)">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="assets_front/css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="assets_front/css/slick-theme.css"/>
    <!-- OWL -->
    <link rel="stylesheet" href="assets_front/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets_front/css/owl.theme.default.min.css">
    <!-- LIGHTBOX -->
    <link rel="stylesheet" href="assets_front/css/lightbox.min.css">
</head>
<body> 

<header>
    <nav>
        <ul>
            <li><a class="active" href="#">HOME</a></li>
            <li><a href="#">MENU</a></li>
            <li><a href="#">RESTAURANTS</a></li>
            <li><a href="#">ABOUT US</a></li>
            <li><a id="poplog" class="poplog" href="#">LOGIN</a></li>
        </ul>
    </nav>
    <div class="menu-toggle">
        <i class="fa fa-bars" aria-hidden="true"></i>
    </div>
</header>

<section class="h-background">
    <img src="assets_front/img/topphoto.jpg" class="h-img1" alt="">
    <img src="assets_front/img/logo.jpg" class="logo" alt="">
    <div class="social-media">
        <a class="sm-btn" href="#">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a class="sm-btn" href="#">
            <i class="fab fa-instagram"></i>
        </a>
        <a class="sm-btn" href="#">
            <i class="fab fa-google-plus-g"></i>
        </a>
        <a class="sm-btn" href="#">
            <i class="fab fa-twitter"></i>
        </a>
        <a class="sm-btn" href="#">
            <i class="fab fa-youtube"></i>
        </a>
    </div>    
</section>

<section class="login">
    <div class="log-box">
        <div class="close">+</div>
        <div class="lg">
            <img src="image/lg.jpg" alt="">
        </div>
        <form action="assets_back/login.class.php" method="post">
            <label for="uname">Email</label>
            <input type="text" name="email" id=""><br>
            <label for="password">Password</label>
            <input type="password" name="password" id=""><br>
            <input type="submit" value="Log In"><br>
        </form>
        <p>OR</p>
        <h3>LOGIN WITH</h3>
        <div class="log-social-media">
            <button><a href="#"><i class="fab fa-facebook-f"></i> facebook</a></button>
            <button><a href="#"><i class="fab fa-google-plus-g"></i> google+</a></button>
        </div>
        <p>Don't have an account? <a href="signup.php">Signup</a></p>
        <p><a href="#">Forgot Password?</a></p>
    </div>
</section>
