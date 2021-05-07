<?php

session_start();
$swal= "";
$errors = array();

if(!isset($_SESSION['username'])){
    header('location:../login.php');
    exit;
}

if (isset($_GET['logout'])) {
    unset($_SESSION['username']);
    header("location: ../login.php");
}

include_once('./inc/addchart.php');
include_once('./inc/db.php');

if(isset($_POST['submit'])){
  if(!empty($_SESSION['shopping_cart'])){

      unset($_SESSION['shopping_cart']);
      // $swal = "<script>swal('Checkout Successfully!', 'Successfully!', 'success')</script>";
    
      // receive all input values from the form
      $fname = mysqli_real_escape_string($db, $_POST['fname']);
      $lname = mysqli_real_escape_string($db, $_POST['lname']);
      $location = mysqli_real_escape_string($db, $_POST['location']);
      $contact = mysqli_real_escape_string($db, $_POST['contact']);
      $email = mysqli_real_escape_string($db, $_POST['email']);
      $payment = mysqli_real_escape_string($db, $_POST['payment']);
      
      // form validation: ensure that the form is correctly filled ...
      // by adding (array_push()) corresponding error unto $errors array
    
      if (empty($fname)) { array_push($errors, "*firstname is required"); }
      if (empty($lname)) { array_push($errors, "*Lastname is required"); }
      if (empty($location)) { array_push($errors, "*Location is required"); }
      if (empty($contact)) { array_push($errors, "*Contact is required"); }
      if (empty($email)) { array_push($errors, "*Email phone is required"); }
      if (empty($payment)) { array_push($errors, "*Payment is required"); }
     
    
      // Finally, register user if there are no errors in the form
      if (count($errors) == 0) {
        //  session_destroy($_SESSION['shopping_cart']);
        $query = "INSERT INTO `customer`(`name`, `lastname`, `location`, `contact`, `email`, `payment`) VALUES ('$fname','$lname','$location','$contact','$email','$payment')";
        mysqli_query($db, $query);
        header('location:chart.php?msg1=insert');
        
       }
    }
  }

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Charts</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>
      
        <?php  
            include_once('./inc/head.php');
        ?>

        <!-- PAGE CONTAINER-->
        <div class="page-container">

           
            <!-- MENU SIDEBAR-->
            <aside class="menu-sidebar d-none d-lg-block">
                <div class="logo">
                    <a href="#">
                        <img src="images/icon/logo.png" alt="Cool Admin" />
                    </a>
                </div>
                <div class="menu-sidebar__content js-scrollbar1">
                    <nav class="navbar-sidebar">
                        <ul class="list-unstyled navbar__list">
                            <li class="has-sub">
                                <!-- <button class="js-arrow" onclick="window.location.href='index.php'"><i class="fas fa-tachometer-alt"></i>Shop</button> -->
                                <a href="index.php">
                                    <i class="fas fa-tachometer-alt"></i>Shop</a>
                              
                            </li>
                            <li class="active">
                                <a href="chart.php">
                                    <i class="fas fa-chart-bar"></i>Your cart</a>
                            </li>
                            <li>
                                <a href="chart.php">
                                    <i class="fas fa-table"></i>Your Profile</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>
            <!-- END MENU SIDEBAR-->


            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                       
                        <div class="row m-t-0">
                          
                          <div class="mb-3 ml-4">
                             <a href="index.php" class="btn btn-primary"> < Continue shopping </a>
                         </div>
                          <div class="col-md-12">
                            <div class="card-deck">

                              <div class="col-md-6">
                                <div class="card">
                                <div class="card-header">
                                  <h3>Checkout Products</h3>
                                </div>
                                    <div class="card-body">
                                    <?php include 'error.php'; ?>
                                      <form method="POST">
                                        <div class="form-row">
                                          <div class="form-group col-md-6">
                                            <label for="inputEmail4">Firstname</label>
                                            <input type="text" name='fname' class="form-control" id="inputEmail4" placeholder="" >
                                          </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputPassword4">Lastname</label>
                                            <input type="text" name="lname" class="form-control" id="inputPassword4" placeholder="">
                                          </div>
                                        </div>
                                        <div class="form-row">
                                          <div class="form-group col-md-6">
                                            <label for="inputEmail4">Location</label>
                                            <input type="text" name="location" class="form-control" id="inputEmail4" placeholder="">
                                          </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputPassword4">Contact Number</label>
                                            <input type="text" name="contact" class="form-control" id="inputPassword4" placeholder="">
                                          </div>
                                        </div>
                                        <div class="form-row">
                                          <div class="form-group col-md-6">
                                            <label for="inputCity">Email</label>
                                            <input type="email" name="email" class="form-control" id="inputCity" >
                                          </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputState">Payment</label>
                                            <select id="inputState" name="payment" class="form-control">
                                              <option selected>Cash on Delivery</option>
                                              <option>GCASH</option>
                                            </select>
                                          </div>
                                          
                                        </div>
                                        <div class="form-group">
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                              Check me out
                                            </label>
                                          </div>
                                        </div>
                                       
                                        <button type="submit" name="submit" class="btn btn-success">
                                          Checkout Now
                                        </button>
                                        <?php echo $swal;?>
                                      </form>   
                                  </div>
                                  </div>
                                </div>
                            
                            <div class="card">
                           
                              <!-- <div class="col-md-19"> -->
                                  
                                        <?php
                                            if(isset($_SESSION["shopping_cart"])){
                                            $total_price = 0;
                                        ?>	
                                    <!-- DATA TABLE-->
                                    <div class="table-sm-responsive">
                                        <table class="table table-sm table-borderless table-data3">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Qty</th>
                                                    <th>Unit Price</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <?php		
                                                        foreach ($_SESSION["shopping_cart"] as $product){
                                                    ?>
                                                    
                                                    <td><?php echo $product["name"]; ?></td>
                                                    <td><?php echo $product["quantity"]; ?></td>
                                                    <td><?php echo "$".$product["price"]; ?></td>
                                                    <td><?php echo "$".$product["price"]*$product["quantity"]; ?></td>
                                                </tr>	
                                                      
                                                      <?php
                                                        $total_price += ($product["price"]*$product["quantity"]);}
                                                        ?>

                                                <tr>
                                                   <td></td>
                                                   <td></td>
                                                   <td><strong><?php ?>TOTAL: </strong></td>
                                                   <td>
                                                      <?php echo "$".$total_price;}?>
                                                    </td>
                                            
                                               </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                  </div>

                                </div>
                            </div>
                            </div>

                     
                        </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
