<?php

session_start();

if(!isset($_SESSION['admin']))
header('location:../index.php');

$item_id=$_POST['item_id'];
$item_quantity=$_POST['item_quantity'];
$item_name=$_POST['item_name'];
$item_price=$_POST['item_price'];


$_SESSION["item"][$item_id]["item_name"]=$item_name;
$_SESSION["item"][$item_id]["item_quantity"]=$item_quantity;
$_SESSION["item"][$item_id]["item_price"]=$item_price;


header('location:../cart.php?msg=success');
?>