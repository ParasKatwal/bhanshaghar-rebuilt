<?php 
    session_start();
    
    if (isset($_GET['item'])){
        
    define("Title","MENU");
    
    
    if(!isset($_SESSION['admin'])){
        include('includes/header.php');
    } 
    else{
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
<?php
    }
    // $menu = null;
    // $dish = null;

    // function strip_bad_chars( $input ) {
    //     $output = preg_replace( "/[^a-zA-Z0-9_-]/", "", $input );
    //     return $output;
    // }

    // if (isset($_GET['item'])) {
    //     $menu = strip_bad_chars( $_GET['item'] );
    //     $dish = $menuItem[$menu];
    // )
    
        
    $item_id = $_GET['item'];
    
    include_once('assets_back/item.class.php');
    
    $item = new item($item_id);
    $item_array = $item->select();
    
    if(!$item_array){
        echo "There is no item of id ".$item_id;
    }else{
?>

<div class="food">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 d-flex">
                <div class="food-img">
                    <img src="assets_front/img/mo.jpg" alt="">
                </div>
                <div class="food-info">
                    <h2><?php echo $item_array['title']; ?></h2>
                    <p><?php echo $item_array['blurb']; ?></p>
                    <span>Price: NPR <?php echo $item_array['price']; ?></span><br/>
                    <form action="assets_back/addcart.class.php" method="post">
                    <span><label>Quantity: </label>&nbsp;&nbsp;<input type="number" style="width:80px;" value="1" name="item_quantity" class="form-control" name=""/></span><br />
                    <input type="text" value="<?php echo $item_array['title'];?>" name="item_name" hidden="true"/>
                    <input type="number" value="<?php echo $item_array['price'];?>" name="item_price" hidden="true"/>
                    <input type="number" value="<?php echo $item_array['id'];?>" name="item_id" hidden="true"/>
                    <?php
                    if(!isset($_SESSION['admin'])){
                        echo '<button class="btn" onclick="notify_login();">Add to Cart</button>';
                    }
                    else{
                        echo '<button class="btn" type="submit">Add to Cart</a></button>';
                    }
                    ?>
                    
                    <a class="btn" href="index.php">Back</a>
                    <script>
                        function notify_login(){
                            alert("please login to order the food...");
                        }
                    </script>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
}
include('includes/footer.php');
}
else{
    echo "Error: there is no page, not found....";
}
?>    
