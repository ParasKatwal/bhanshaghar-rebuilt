<?php
session_start();

if(isset($_SESSION['admin']))
    unset($_SESSION['admin']);
    
if(isset($_SESSION['admin_id']))
    unset($_SESSION['admin_id']);
    
if(isset($_SESSION['item']))
    unset($_SESSION['item']);
    
if(isset($_SESSION['bhanshaghar_admin']))
    unset($_SESSION['bhanshaghar_admin']);
    
session_destroy();

if(!isset($_SESSION['admin']) && !isset($_SESSION['bhanshaghar_admin']))
    header('location:../index.php');
?>