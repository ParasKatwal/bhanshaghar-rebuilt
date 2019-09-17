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
    <div class="container">
        
    </div>
</section>

<?php include('includes/footer.php') ?>