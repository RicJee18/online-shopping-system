<?php

include_once('./inc/addchart.php');

?>

<body>

    <?php

      // Preloader Start 
      include_once('./inc/header.php');

      //header 
      include_once('./inc/preloader.php');

      //sub-header
      include_once('./inc/sub-header.php');

      ?>

    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>RJJ Mobile<em> &nbsp;Shop</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="products.php">Products</a>
              </li>
              <li class="nav-item">
     
                <?php
								  if(!empty($_SESSION["shopping_cart"])) {
								  	$cart_count = count(array_keys($_SESSION["shopping_cart"]));
								?>

                <div class="cart_div">
                   <a class="nav-link text-white" href="checkout.php">Checkout<span><?php echo $cart_count; }?></span></a>
								 </div>


              </li>
              <li class="nav-item dropdown">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About</a>
              
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="about.php">About Us</a>
                    <a class="dropdown-item" href="blog.php">Blog</a>
                    <a class="dropdown-item" href="testimonials.php">Testimonials</a>
                    <a class="dropdown-item" href="terms.php">Terms</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="mt-1 btn btn-success" href="login.php">Sign In</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Products</h1>
            <span>Lorem ipsum dolor sit amet.</span>
          </div>
        </div>
      </div>
    </div>

    <div class="services">
      <div class="container">
        <div class="row mt-1">


        <?php
        
            $result = mysqli_query($con,"SELECT * FROM `products`");

            while($row = mysqli_fetch_assoc($result))
      
           { 
        
        ?>
           

           <div class="col-md-4">
            <div class="service-item">
              <img src="<?php echo $row['image'];?>" alt=""   width="250" height="200" >
              <div class="down-content">
                <form action="" method="post">
                  <input type='hidden' name='code' value = "<?php echo $row['code']; ?>" />
                  <h4><?php echo $row['name'];?></h4>
                  <div style="margin-bottom:10px;">
                    <span>
                      <del><sup>$</sup>1999 </del> &nbsp; <sup>$</sup><?php echo $row['price'];?>
                    </span>
                  </div>
                  <div class='product-rating'>
                    <i class='fa fa-star'></i>
                    <i class='fa fa-star'></i>
                    <i class='fa fa-star'></i>
                    <i class='fa fa-star'></i>
                    <i class='fa fa-star'></i>
                  </div>
                  
                  <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis asperiores eveniet iure impedit soluta aliquid. </p>
                  <a href="product-details.php" class="filled-button">View More</a>
                  <button type="submit" id="cart-btn" class="btn">Add to Cart</button>
                </form>
              </div>
            </div>

            <br>
          </div>


        <?php

           }

           mysqli_close($con);         

        ?>

      </div>

      <br>
      <br>

      <nav>
          <ul class="pagination pagination-lg justify-content-center">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">«</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">»</span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
        </nav>

        <br>
        <br>
        <br>
        <br>
      </div>
    </div>

    <!-- Footer-->
    <?php include_once('./inc/footer.php'); ?>

  </body>
</html>