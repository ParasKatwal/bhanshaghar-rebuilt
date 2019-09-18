<?php
    session_start();
    if(!isset($_SESSION['admin']))
    header('location:index.php');

    if(isset($_GET['msg'])){
        $msg=$_GET['msg'];
        
        if ($msg=='success')
            echo "<script>alert('Item added succesfully to your cart.')</script>";
    }
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
        <h1 class="text-center title">Welcome, <span><?php echo $_SESSION['admin']; ?></span></h1>
    </section>
    
    <section class="user">
        <h4 class="text-center title"><span>Items on Your cart</span></h4>
        <table style="text-align:center;margin: auto;">
            <thead>
                <th>items</th>
                <th>quantity</th>
                <th>price</th>
            </thead>
            <?php
            if(isset($_SESSION["item"])){
                if (count($_SESSION["item"])<1){
                    echo "There is no item in your cart";
                }else{
                    $total=0;
                    foreach($_SESSION["item"] as $item => $property){
                        $price = $property['item_price']*$property['item_quantity'];
                        $total = $total+$price;
                        $_SESSION['total']=$total;
                        echo "<tr>";
                        echo "<td>".$property['item_name']."</td>";
                        echo "<td>".$property['item_quantity']."</td>";
                        echo "<td>".$price."</td>";
                        echo "</tr>";
                    }
                    echo "<tr style='font-weight:bold;'><td colspan='2'><span>Total</span></td><td><span>".$total."</span></td></tr>";
                    echo "<tr><td colspan='3'><button onclick='checkout();'>CHECK OUT</button></td></tr>";
                    echo "<tr><td colspan='3'><a href='assets_back/resetcart.class.php'>Reset Cart</a></td></tr>";
                    
                    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
                        $link = "https"; 
                    else
                        $link = "http"; 
                        
                    $link .= "://"; 
                        
                    $link .= $_SERVER['HTTP_HOST']; 
                        
                    $link .= $_SERVER['REQUEST_URI']; 
                    
                    $link = substr($link, 0, strpos($link, "cart"));
                    
                    $link .= "assets_back/checkout.class.php";
                    
                    echo "<script>function checkout(){location.replace('".$link."');}</script>";
                }    
            }else{
                echo "<td colspan='3'>There is no item in your cart<td>";
            }
            echo "<tr><td colspan='3'><a href='welcome.php'>Back</a></td></tr>";
            ?>
        </table>
    </section>
<?php include('includes/footer.php'); ?>    
