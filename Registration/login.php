<?php

include('server.php');
include '../inc/header.php';


?>

<div class="container">
    <div class="row">
      <div class="col-xl-8 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body">
            <h5 class="card-title text-center">Log In</h5>
            <form class="form-signin" method="post" action="login.php" >

			  <?php include 'error.php'; ?>

              <div class="form-label-group">
                <input type="text" id="inputUserame" name ="username" class="form-control" placeholder="Username" required autofocus>
                <label for="inputUserame">Username</label>
              </div>
              <div class="form-label-group">
                <input type="password" id="inputPassword"  name ="password" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="login_user">Log In</button>
              <a class="d-block text-center mt-2 small" href="register.php">Sign Up</a>
              <hr class="my-4">
              <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign up with Google</button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign up with Facebook</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php
include '../inc/footer.php';
?>
