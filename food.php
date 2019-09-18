<?php 
    if (isset($_GET['item'])){
        
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
                    <span>Price: NPR <?php echo $item_array['price']; ?></span><br>
                    <button class="btn" onclick="notify_login();">Add to Cart</button>
                    <script>
                        function notify_login(){
                            alert("please login to order the food...");
                        }
                    </script>
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
