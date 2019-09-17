<?php 
    define("Title","HOME");
?> 

<?php include('includes/header.php') ?>

<section class="signup">
    <div class="container">
        <h1>Sign UP here !!</h1>
        <form  action="assets_back/signup.class.php" method="post">
            <div class="form-row">
                <div class="form-group col-sm-12 col-md-6">
                <label for="">First Name</label>
                <input type="text" name="fname" class="form-control" id="" placeholder="Enter first name" required>
                </div>
                <div class="form-group col-sm-12 col-md-6">
                <label for="">Last Name</label>
                <input type="text" name="lname" class="form-control" id="" placeholder="Enter last name" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-sm-12 col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" name="email" class="form-control" id="" placeholder="Enter email" required>
                </div>
                <div class="form-group col-sm-12 col-md-6">
                <label for="">Password</label>
                <input type="password" name="pwd" class="form-control" id="" placeholder="Enter password" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-sm-12 col-md-6">
                <label for="">Address</label>
                <input type="text" name="address" class="form-control" id="" placeholder="Enter address" required>
                </div>
                <div class="form-group col-sm-12 col-md-6">
                <label for="">Phone Number</label>
                <input type="text" name="phone" class="form-control" id="" placeholder="Enter phone no." required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign Up</button>
        </form>
    </div>
</section>

<?php include('includes/footer.php') ?>