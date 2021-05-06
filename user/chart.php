<?php

session_start();

$status="";

if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
	foreach($_SESSION["shopping_cart"] as $key => $value) {
		if($_POST["code"] == $key){
		unset($_SESSION["shopping_cart"][$key]);
        
		$status = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Product is remove from your chart!</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>';

		}
		if(empty($_SESSION["shopping_cart"]))
		unset($_SESSION["shopping_cart"]);
			}		
		}
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after we've found the product
    }
  }
  	
}


if(!isset($_SESSION['username'])){
    header('location:../login.php');
    exit;
}

if (isset($_GET['logout'])) {
    unset($_SESSION['username']);
    header("location: ../login.php");
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

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        
        <?php include_once('./inc/head.php');?>

        <!-- END HEADER MOBILE-->

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
                            <a class="js-arrow" href="index.php">
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

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <?php
             include_once('inc/head.php');
             ?>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        
                            <div>
                                <a href="index.php" class="btn btn-primary"> < Continue shopping </a>
                            </div>
                            <div class="row m-t-30 justify-content-center">
                                <div class="col-md-12">
                                        <?php
                                            if(isset($_SESSION["shopping_cart"])){
                                            $total_price = 0;
                                        ?>	
                                    <!-- DATA TABLE-->
                                    <div class="table-responsive m-b-40">
                                        <table class="table table-borderless table-data3">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Item Name</th>
                                                    <th>Quantity</th>
                                                    <th>Unit Price</th>
                                                    <th>Item Total</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <?php		
                                                        foreach ($_SESSION["shopping_cart"] as $product){
                                                    ?>
                                                    <td><img src='<?php echo $product["image"]; ?>' width="50" height="40" /></td>
                                                    <td><?php echo $product["name"]; ?></td>
                                                    <td class="process">
                                                        <form method='post' action=''>
                                                            <input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
                                                            <input type='hidden' name='action' value="change" />
                                                            <select name='quantity' class='quantity form-control  text-center' onchange="this.form.submit()">
                                                                <option <?php if($product["quantity"]==1) echo "selected";?> value="1">1</option>
                                                                <option <?php if($product["quantity"]==2) echo "selected";?> value="2">2</option>
                                                                <option <?php if($product["quantity"]==3) echo "selected";?> value="3">3</option>
                                                                <option <?php if($product["quantity"]==4) echo "selected";?> value="4">4</option>
                                                                <option <?php if($product["quantity"]==5) echo "selected";?> value="5">5</option>
                                                            </select>
                                                        </form>
                                                    </td>
                                                    <td>
                                                         <?php echo "$".$product["price"]; ?>
                                                    </td>
                                                    <td>
                                                          <?php echo "$".$product["price"]*$product["quantity"]; ?>
                                                    </td>
                                                    <td>
                                                        <form method='post' action=''>
                                                            <input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
                                                            <input type='hidden' name='action' value="remove" />
                                                            <button type='submit' class='remove btn btn-danger'>Remove</button>
                                                        </form>
                                                    </td>
                                                </tr>	
                                                      
                                                      <?php
                                                        $total_price += ($product["price"]*$product["quantity"]);
                                                        }
                                                        ?>

                                                <tr>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td>
                                                      <strong >TOTAL:&nbsp;&nbsp; <?php echo "$ ".$total_price; ?> </strong>
                                                    </td>
                                                   <td></td> 
                                               </tr>

                                               <tr>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td> 
                                                       <button type="submit"  class="btn btn-success"> Checkout</button>
                                                   </td>
                                               </tr>
                                                <tr>

                                                 <?php
                                                    }
                                                    else{
                                                     echo "<h3>Your cart is empty!</h3><br>";
                                                    }
                                                ?>
                                                </tr>
                                                <tr>
                                                    <?php echo $status; ?>
                                                </tr>
                                        
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- END DATA TABLE-->
                                </div>
                            </div>


                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
        </div>
        <!-- END PAGE CONTAINER-->

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
