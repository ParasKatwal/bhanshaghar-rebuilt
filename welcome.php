<?php 
    include('includes/array.php') 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
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
            <li><a class="logout" href="#">LOGOUT</a></li>
        </ul>
    </nav>
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

<section class="user">
    <h1 class="text-center title">Welcome, <span>Ram Prashad</span></h1>
</section>

<section class="recommendation">
    <div class="container">
    <h3>Recommendation of your taste</h3>
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <a href="">
                    <img src="assets_front/img/mo.jpg" alt="">
                    <div class="info">
                        <h5>Momo</h5>
                        <p>Price: NPR 200</p>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-4">
                <a href="">
                    <img src="assets_front/img/mo.jpg" alt="">
                    <div class="info">
                        <h5>Momo</h5>
                        <p>Price: NPR 200</p>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-4">
                <a href="">
                    <img src="assets_front/img/mo.jpg" alt="">
                    <div class="info">
                        <h5>Momo</h5>
                        <p>Price: NPR 200</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include('includes/footer.php') ?>    