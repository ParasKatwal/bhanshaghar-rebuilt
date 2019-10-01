<?php
session_start();
if(!isset( $_SESSION['bhanshaghar_admin'] ) ) {
    header('location:index.php');  
}
include_once('assets_back/orders.class.php');
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
                <li><a class="logout" href="admin.php">Home</a></li>
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
        <h4 class="text-center title"><span>Orders</span></h4>
        <table style="text-align:center;margin: auto; width:90%">
            <thead>
                <th>Order_id.</th>
                <th>UserName</th>
                <th>email</th>
                <th>Orders</th>
                <th>Total Price</th>
                <th>Order DateTime</th>
                <th>action</th>
            </thead>
            <?php
                $orders = new orders();
                $order = $orders->select();
                if(count($order)>0){
                    foreach($order as $o => $property){
                        echo "<tr>";
                            echo "<td>".$o."</td>";
                            echo "<td>".$property['username']."</td>";
                            echo "<td>".$property['email']."</td>";
                            echo "<td>".$property['orders']."</td>";
                            echo "<td>".$property['total_price']."</td>";
                            echo "<td>".$property['order_time']."</td>";
                            echo "<td><a style='background:#dad7d7;border:none;border-radius:4px;' href='assets_back/delete_order.class.php?id=$o'>
                                <i class='fa fa-trash' aria-hidden='true'></i></a></td>";
                        echo "</tr>";
                    }   
                }else{
                    echo "<tr><td colspan='6'>There is no orders</td></tr>";
                }
            ?>
        </table>
    </section>
<?php include('includes/footer.php'); ?>    
