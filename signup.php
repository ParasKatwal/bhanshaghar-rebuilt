<?php 
    define("Title","HOME");
?> 

<?php include('includes/header.php') ?>

<section class="signup">
    <div class="container">
        <h1>Sign UP here !!</h1>
        <form>
            <div class="form-row">
                <div class="form-group col-sm-12 col-md-6">
                <label for="">First Name</label>
                <input type="text" class="form-control" id="" placeholder="Enter first name">
                </div>
                <div class="form-group col-sm-12 col-md-6">
                <label for="">Last Name</label>
                <input type="text" class="form-control" id="" placeholder="Enter last name">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-sm-12 col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="" placeholder="Enter email">
                </div>
                <div class="form-group col-sm-12 col-md-6">
                <label for="">Password</label>
                <input type="password" class="form-control" id="" placeholder="Enter password">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-sm-12 col-md-6">
                <label for="">Address</label>
                <input type="text" class="form-control" id="" placeholder="Enter address">
                </div>
                <div class="form-group col-sm-12 col-md-6">
                <label for="">Phone Number</label>
                <input type="text" class="form-control" id="" placeholder="Enter phone no.">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign Up</button>
        </form>
    </div>
</section>

<?php include('includes/footer.php') ?>