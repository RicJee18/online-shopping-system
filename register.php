<?php

include_once('server.php');

?>
<?php include_once('inc/header.php'); ?>

<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="border-0">
        <div class="row d-flex" style="margin-top:-50px">
            <div class="col-lg-6">
                <div class="card1 pb-5">
                    <div class="row">
                        <a href="index.php" style="margin-top:50px"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a><img src="https://i.imgur.com/CXQmsmF.png" class="logo"></div>
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line"><img src="https://i.imgur.com/uNGdWHi.png" class="image"> </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">

                   <?php include('error.php'); ?>
                    
                    <form action="" method="post" id="contact-form">
                        <div class="row mb-4 px-3">
                            <h6 class="mb-0 mr-4 mt-2">Sign up with</h6>
                            <div class="facebook text-center mr-3">
                                <div class="fa fa-facebook"></div>
                            </div>
                            <div class="twitter text-center mr-3">
                                <div class="fa fa-twitter"></div>
                            </div>
                            <div class="linkedin text-center mr-3">
                                <div class="fa fa-linkedin"></div>
                            </div>
                        </div>
                        <div class="row px-3 mb-4">
                            <div class="line"></div> <small class="or text-center">Or</small>
                            <div class="line"></div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <label class="mb-1"><h6 class="mb-0 text-sm">Name</h6></label>
                                <input class="mb-4" type="text" name="name" placeholder="Enter your full name">
                            </div>
                            <div class="col-6">
                                <label class="mb-1"><h6 class="mb-0 text-sm">Username</h6></label>
                                <input class="mb-4" type="text" name="username" placeholder="Enter your username">
                            </div>           
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label class="mb-1"><h6 class="mb-0 text-sm">Mobile Number</h6></label>
                                <input class="mb-4" type="text" name="mobile" placeholder="Enter your phone number">
                            </div>
                            <div class="col-6">
                                <label class="mb-1"><h6 class="mb-0 text-sm">Address</h6></label>
                                <input class="mb-4" type="text" name="address" placeholder="Enter your address">
                            </div>           
                        </div>
                        <div class="row px-3">
                             <label class="mb-1">
                                <h6 class="mb-0 text-sm">Email Address</h6>
                             </label>
                            <input class="mb-4" type="email" name="email" placeholder="Enter a valid email address" required > </div>
                        
                        <div class="row">
                            <div class="col-6">
                                <label class="mb-1"><h6 class="mb-0 text-sm">Password</h6></label>
                                <input class="mb-4" type="password" name="password_1" placeholder="Enter your password">
                            </div>
                            <div class="col-6">
                                <label class="mb-1"><h6 class="mb-0 text-sm">Confirm Password</h6></label>
                                <input class="mb-4" type="password" name="password_2" placeholder="Re-enter your password">
                            </div>           
                        </div>
                        <div class="row px-3 mb-4">
                            <div class="custom-control custom-checkbox custom-control-inline"> <input id="chk1" type="checkbox" name="chk" class="custom-control-input"> <label for="chk1" class="custom-control-label text-sm">Remember me</label> </div> <a href="#" class="ml-auto mb-0 text-sm">Forgot Password?</a>
                        </div>
                        
                        <div class="row mb-3 px-3"> <button type="submit" name="reg_user" class="btn btn-blue text-center">Register</button> </div>
                    </form>
                    <div class="row mb-4 px-3"> <small class="font-weight-bold">Already have an account? <a class="text-danger" href="login.php">Sign in</a></small> </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include_once('./inc/footer.php'); ?>