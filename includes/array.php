<?php
    include_once('assets_back/array.class.php');
    $menu_hot = new menu('hot drinks');
    $menu_soft = new menu('soft drinks');
    $menu_momo = new menu('momo');
    
    $navitem = array(
        array(
            "link" => 'index.php',
            "Title" => "HOME"
        ),
        array(
            "link" => "menu.php",
            "Title" => "MENU"
        ),
        array(
            "link" => "menu.php",
            "Title" => "RESTAURANT"
        ),
        array(
            "link" => "contact.php",
            "Title" => "CONTACT US"
        )
    );

    $menuItem = $menu_hot->select();
    $menuItem2 = $menu_soft->select();
    $menuItem3 = $menu_momo->select(); 
?>
