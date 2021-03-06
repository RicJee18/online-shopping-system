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
    <title>RJJ Mobile Store</title>

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
            
                        <div class="row m-t-25">

                            <?php
                                
                                $result = mysqli_query($db,"SELECT * FROM `product`");

                                while($row = mysqli_fetch_assoc($result))
                        
                            { 
                            
                            ?>

                            <div class="col-sm-6 mb-4 col-lg-3 mx-auto">

                                <div class="card mb-4 h-100 mx-auto">
                                    <img class="card-img-top mt-2 h-100" src="<?php echo $row['image'];?>" alt="Card image cap">
                                    <div class="card-body mx-auto justify-content-center ">
                                       <form action="" method="post" class="mx-auto">
                                           <input type='hidden' name='code' value = "<?php echo $row['code']; ?>" />
                                           <h4 class="card-title mb-3 text-center" ><?php echo $row['name'];?></h4>
                                           <div style="margin-bottom:10px;" class="text-center">
                                               <span>
                                                  <del><sup>Php</sup>1999 </del> &nbsp; <sup>Php</sup><?php echo $row['price'];?>
                                               </span>
                                           </div>
                                           <div class='product-rating text-center '>
                                                <em ></em>&nbsp;&nbsp;
                                                <i class='fa fa-star' style="color:red;"></i>
                                                <i class='fa fa-star' style="color:orange;"></i>
                                                <i class='fa fa-star' style="color:yellow;"></i>
                                                <i class='fa fa-star' style="color:green;"></i>
                                                <i class='fa fa-star' style="color:blue;"></i>
                                           </div>
                                           <p class="card-text">
                                           </p>
                                           <button type="submit" id="cart-btn" name= "added" class="btn ml-3 btn-success  mt-1">Add to cart</button>
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
                                    <p>Copyright ?? 2021. All rights reserved.</p>
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

    
<script>

<?php
if(isset($_POST['added'])){
?>
swal("Successfully", "Added To Your Cart!", "success");

<?php }?>
</script>

</body>

</html>
<!-- end document-->
