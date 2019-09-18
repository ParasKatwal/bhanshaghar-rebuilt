<?php
session_start();

if(isset($_SESSION['admin']))
    unset($_SESSION['admin']);
if(isset($_SESSION['admin_id']))
unset($_SESSION['admin_id']);
if(isset($_SESSION['item']))
unset($_SESSION['item']);
    
session_destroy();

if(!isset($_SESSION['admin']))
    header('location:../index.php');
?>