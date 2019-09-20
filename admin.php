<?php
session_start();
if(!isset( $_SESSION['bhanshaghar_admin'] ) ) {
    header('location:index.php');  
}
include_once('assets_back/users.class.php');
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
                <li><a class="logout" href="assets_back/logout.class.php">LOGOUT</a></li>
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
        <h1 class="text-center title">Welcome, <span>ADMIN</span></h1>
    </section>
    
    <section class="user">
        <h4 class="text-center title"><span>Users list</span></h4>
        <table style="text-align:center;margin: auto;">
            <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Contact</th>
            </thead>
            <?php
                $users = new users();
                $user = $users->select();
                if(count($user)>0){
                    foreach($user as $u => $property){
                        echo "<tr>";
                            echo "<td>".$u."</td>";
                            echo "<td>".$property['name']."</td>";
                            echo "<td>".$property['email']."</td>";
                            echo "<td>".$property['address']."</td>";
                            echo "<td>".$property['contact']."</td>";
                        echo "</tr>";
                    }   
                }else{
                    echo "<tr><td colspan='3'>There is no users</td></tr>";
                }
            ?>
        </table>
    </section>
<?php include('includes/footer.php'); ?>    
