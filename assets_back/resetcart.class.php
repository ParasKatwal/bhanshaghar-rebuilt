<?php
session_start();
if(isset($_SESSION['item']))
    unset($_SESSION['item']);
if(isset($_SESSION['total']))
    unset($_SESSION['total']);

header('location:../cart.php');
?>