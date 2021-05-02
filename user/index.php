<?php

session_start();

if(!isset($_SESSION['username'])){
    header('location:../login.php');
    exit;
}

if (isset($_GET['logout'])) {
    unset($_SESSION['username']);
    header("location: ../login.php");
}

include_once('./inc/addchart.php');



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
      
        <?php  
            include_once('./inc/sidebar.php');
        ?>

        <!-- PAGE CONTAINER-->
        <div class="page-container">

            <?php
             include_once('inc/head.php');
             ?>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <!-- <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap" style="margin-top:-5px;">
                                    <h2 class="title-1">Feature Products</h2>
                                    <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add item</button>
                                </div>
                            </div>
                        </div> -->
                       

                        <div class="row m-t-25">

                            <?php
                                
                                $result = mysqli_query($db,"SELECT * FROM `product`");

                                while($row = mysqli_fetch_assoc($result))
                        
                            { 
                            
                            ?>

                            <div class="col-sm-6 col-lg-3">

                                <div class="card">
                                    <img class="card-img-top" src="<?php echo $row['image'];?>" alt="Card image cap">
                                    <div class="card-body">
                                       <form action="" method="post">
                                           <input type='hidden' name='code' value = "<?php echo $row['code']; ?>" />
                                           <h4 class="card-title mb-3 text-center" ><?php echo $row['name'];?></h4>
                                           <div style="margin-bottom:10px;" class="text-center">
                                               <span>
                                                  <del><sup>$</sup>1999 </del> &nbsp; <sup>$</sup><?php echo $row['price'];?>
                                               </span>
                                           </div>
                                           <div class='product-rating text-center'>
                                                <em>RATING</em>&nbsp;&nbsp;
                                                <i class='fa fa-star'></i>
                                                <i class='fa fa-star'></i>
                                                <i class='fa fa-star'></i>
                                                <i class='fa fa-star'></i>
                                                <i class='fa fa-star'></i>
                                           </div>
                                           <p class="card-text">
                                           </p>
                                           <button type="submit" id="cart-btn" class="btn btn-primary mt-1">Add to cart</button>
                                        </form>
                                    </div>
                                </div>   
                            </div>

                            <?php

                                }

                                mysqli_close($db);         

                                ?>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2021. All rights reserved.</p>
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
