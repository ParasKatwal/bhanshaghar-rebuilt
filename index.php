<?php 
    define("Title","HOME");
?> 

<?php 

if(isset($_GET['msg'])){
    $msg=$_GET['msg'];
    
    if ($msg=='error')
        echo "<script>alert('sorry, there was an error...')</script>";

    if ($msg=='exists')
        echo "<script>alert('sorry, email exists already...')</script>";
    
    if ($msg=='notexists')
        echo "<script>alert('sorry, email does not exists already...')</script>";
            
    if ($msg=='success')
        echo "<script>alert('Sign up Successful...')</script>";
    
    if ($msg=='match')
        echo "<script>alert('email and password didn\'t match....')</script>";
    
    if ($msg=='novalidName')
        echo "<script>alert('enter a valid name...')</script>";
}

include('includes/header.php') 

?>

<section class="quick_menu">
    <h2 class="title">Quick Menu</h2>
    <div class="container quick_menu-slider">
        <div class="item"><a href="food.php"><img src="assets_front/img/momo.jpg" alt=""></a></div>
        <div class="item"><a href="food.php"><img src="assets_front/img/chicken.png" alt=""></a></div>
        <div class="item"><a href="food.php"><img src="assets_front/img/burger.png" alt=""></a></div>
        <div class="item"><a href="food.php"><img src="assets_front/img/chowmin.png" alt=""></a></div>
        <div class="item"><a href="food.php"><img src="assets_front/img/drinks.png" alt=""></a></div>
        <div class="item"><a href="food.php"><img src="assets_front/img/pizza.png" alt=""></a></div>
        <div class="item"><a href="food.php"><img src="assets_front/img/softdrink.png" alt=""></a></div>
    </div>
</section>

<section class="trending">
    <div class="container">
        <h2 class="title">Trending Dishes in Valley</h2>
        <div class="row">
            <div class="trending_item col-sm-12 col-md-6">
                <a href="">
                    <img src="assets_front/img/d1.jpg" alt="">
                    <div class="read-hover d-flex flex-column justify-content-center align-items-center">
                        <i class="fab fa-readme"></i>
                        <p>Read More</p>
                    </div>
                    <div class="info">
                        <h4>Bajeko Sekuwa</h4>
                        <span>Behind Police Headquatar, Kathmandu</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, vitae.</p>
                    </div>
                </a>
            </div>
            <div class="trending_item col-sm-12 col-md-6">
                <a href="">
                    <img src="assets_front/img/d2.jpg" alt="">
                    <div class="read-hover d-flex flex-column justify-content-center align-items-center">
                        <i class="fab fa-readme"></i>
                        <p>Read More</p>
                    </div>
                    <div class="info">
                        <h4>Crust Pizza</h4>
                        <span>Baneshwor, Kathmandu</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, vitae.</p>
                    </div>
                </a>
            </div>
            <div class="trending_item col-sm-12 col-md-6">
                <a href="">
                    <img src="assets_front/img/d3.png" alt="">
                    <div class="read-hover d-flex flex-column justify-content-center align-items-center">
                        <i class="fab fa-readme"></i>
                        <p>Read More</p>
                    </div>
                    <div class="info">
                        <h4>KFC - Maitidevi</h4>
                        <span>Maitidevi</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, vitae.</p>
                    </div>
                </a>
            </div>
            <div class="trending_item col-sm-12 col-md-6">
                <a href="">
                    <img src="assets_front/img/d4.png" alt="">
                    <div class="read-hover d-flex flex-column justify-content-center align-items-center">
                        <i class="fab fa-readme"></i>
                        <p>Read More</p>
                    </div>
                    <div class="info">
                        <h4>Thai Ghar</h4>
                        <span>Jhamshikhel, opposite of MOKSHA, Lalitpur</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, vitae.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<?php include('includes/footer.php') ?>