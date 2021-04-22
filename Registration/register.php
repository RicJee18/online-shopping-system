<?php

include_once('server.php');
include_once('inc/header.php');
?>
  <div class="container">
    <div class="row">
      <div class="col-xl-8 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body">
            <h5 class="card-title text-center">Register</h5>
            <form class="form-signin" method="post" action="register.php" >

			  <?php include('error.php'); ?>

              <div class="form-label-group">
                <input type="text" id="inputUserame" name ="username" class="form-control" placeholder="Username" value="<?php echo $username; ?>" required autofocus>
                <label for="inputUserame">Username</label>
              </div>

			  <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name ="email" required>
                <label for="inputEmail">Email address</label>
              </div>
              
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name ="password_1" required>
                <label for="inputPassword">Password</label>
              </div>
              
              <div class="form-label-group">
                <input type="password" id="inputConfirmPassword" class="form-control" placeholder="Re-type Password"  name ="password_2" required>
                <label for="inputConfirmPassword">Confirm password</label>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="reg_user">Sign Up</button>
              <a class="d-block text-center mt-2 small" href="login.php">Sign In</a>
              <!-- <hr class="my-4">
              <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign up with Google</button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign up with Facebook</button> -->
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

