<?php 
    define("Title","MENU");
    include('includes/header.php'); 
?>

<section class="menu">
    <div class="container">
        <h1 class="text-center">Today's Menu</h1>
        <div class="row d-flex justify-content-around flex-wrap">
            <div class="menu-box col-sm-12 col-md-3">
                <h4>Hot Drinks</h4>
                <ul>
                    <?php foreach($menuItem as $coffee => $item) { ?>
                        <li class="center"><a href="food.php?item=<?php echo $coffee ?>"><?php echo $item['title'] ?></a><sup> NPR </sup><?php echo $item['price'] ?></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="menu-box col-sm-12 col-md-3">
                <h4>Cold Drinks</h4>
                <ul>
                    <?php foreach($menuItem2 as $coffee => $item) { ?>
                        <li class="center"><a href="food.php?item=<?php echo $coffee ?>"><?php echo $item['title'] ?></a><sup> NPR </sup><?php echo $item['price'] ?></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="menu-box col-sm-12 col-md-3">
                <h4>MoMo</h4>
                <ul>
                    <?php foreach($menuItem3 as $momo => $item) { ?>
                        <li class="center"><a href="food.php?item=<?php echo $momo ?>"><?php echo $item['title'] ?></a><sup> NPR </sup><?php echo $item['price'] ?></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</sec>

<?php include('includes/footer.php') ?>    
