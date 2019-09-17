<?php 
    define("Title","MENU");
    include('includes/header.php'); 

    // $menu = null;
    // $dish = null;

    // function strip_bad_chars( $input ) {
    //     $output = preg_replace( "/[^a-zA-Z0-9_-]/", "", $input );
    //     return $output;
    // }

    // if (isset($_GET['item'])) {
    //     $menu = strip_bad_chars( $_GET['item'] );
    //     $dish = $menuItem[$menu];
    // }
?>

<div class="food">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 d-flex">
                <div class="food-img">
                    <img src="assets_front/img/mo.jpg" alt="">
                </div>
                <div class="food-info">
                    <h2>Buff Momo</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti nesciunt earum, placeat provident omnis repellendus dignissimos exercitationem ducimus libero blanditiis.</p>
                    <span>Price: NPR 200</span><br>
                    <button class="btn">CheckOut</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php') ?>    
