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
          <a class="navbar-brand" href="index.html"><h2>RJJ<em> Phone</em></h2></a>
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
                    <a class="dropdown-item" href="about.html">About Us</a>
                    <a class="dropdown-item" href="blog.html">Blog</a>
                    <a class="dropdown-item" href="testimonials.html">Testimonials</a>
                    <a class="dropdown-item" href="terms.html">Terms</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
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
<<<<<<< HEAD
        <div class="row">
          <div class="col-md-4">
            <div class="service-item">
              <img src="product-images/samsung-img/Galaxy A12 9990.png" alt="Galaxy A12">
              <div class="down-content">
                <h4>Galaxy A12</h4>
                <div style="margin-bottom:10px;">
                  <span>
                      <del><sup>Php</sup>10,990</del> &nbsp; <sup>Php</sup>9,990
                  </span>
                </div>

                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis asperiores eveniet iure impedit soluta aliquid. </p>
                <a href="product-details.html" class="filled-button">View More</a>
              </div>
            </div>

            <br>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="product-images/samsung-img/Galaxy A32 13990.png" alt="Galaxy A32">
              <div class="down-content">
                <h4>Galaxy A32</h4>
                <div style="margin-bottom:10px;">
                  <span>
                      <del><sup>Php</sup>14,990 </del> &nbsp; <sup>Php</sup>13,990
                  </span>
                </div>

                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, impedit itaque delectus laboriosam quas veniam. </p>
                <a href="product-details.html" class="filled-button">View More</a>
              </div>
            </div>
=======
        <div class="row mt-1">
>>>>>>> 0ccce30f9fb62f743903215749fbfdfe171c5c9f


<<<<<<< HEAD
          <div class="col-md-4">
            <div class="service-item">
              <img src="product-images/samsung-img/Galaxy A52 5G 23990.png" alt="Galaxy A52 5G">
              <div class="down-content">
                <h4>Galaxy A52 5G</h4>
                <div style="margin-bottom:10px;">
                  <span>
                      <del><sup>Php</sup>24,990 </del> &nbsp; <sup>Php</sup>23,990
                  </span>
                </div>
=======
        <?php
        
            $result = mysqli_query($con,"SELECT * FROM `products`");
>>>>>>> 0ccce30f9fb62f743903215749fbfdfe171c5c9f

            while($row = mysqli_fetch_assoc($result))
      
           { 
        
        ?>
           

           <div class="col-md-4">
            <div class="service-item">
<<<<<<< HEAD
              <img src="product-images/samsung-img/Galaxy A52 18990.png" alt="Galaxy A52">
              <div class="down-content">
                <h4>Galaxy A52</h4>
                <div style="margin-bottom:10px;">
                  <span>
                      <del><sup>Php</sup>19,990 </del> &nbsp; <sup>Php</sup>18,990
                  </span>
                </div>

                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab voluptatibus cupiditate repudiandae hic odio quas. </p>
                <a href="product-details.html" class="filled-button">View More</a>
=======
              <img src="<?php echo $row['image'];?>" alt=""   width="300" height="300" >
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
                  <a href="product-details.html" class="filled-button">View More</a>
                  <button type="submit" id="cart-btn" class="btn">Add to Cart</button>
                </form>
>>>>>>> 0ccce30f9fb62f743903215749fbfdfe171c5c9f
              </div>
            </div>

            <br>
          </div>

<<<<<<< HEAD
          <div class="col-md-4">
            <div class="service-item">
              <img src="product-images/samsung-img/Galaxy A72 23990.png" alt="Galaxy A72">
              <div class="down-content">
                <h4>Galaxy A72</h4>
                <div style="margin-bottom:10px;">
                  <span>
                      <del><sup>Php</sup>24,990 </del> &nbsp; <sup>Php</sup>23,990
                  </span>
                </div>
=======
>>>>>>> 0ccce30f9fb62f743903215749fbfdfe171c5c9f

        <?php

           }

<<<<<<< HEAD

          <div class="col-md-4">
            <div class="service-item">
              <img src="product-images/samsung-img/Galaxy Note20 48990.png" alt="Galaxy Note20">
              <div class="down-content">
                <h4>Galaxy Note20</h4>
                <div style="margin-bottom:10px;">
                  <span>
                      <del><sup>Php</sup>49,990 </del> &nbsp; <sup>Php</sup>48,990
                  </span>
                </div>

                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat in a repellendus nobis! Iure, eveniet! </p>
                <a href="product-details.html" class="filled-button">View More</a>
              </div>
            </div>

            <br>
          </div>


          <div class="col-md-4">
            <div class="service-item">
              <img src="product-images/samsung-img/Galaxy S21 5G 47990.png" alt="Galaxy S21 5G">
              <div class="down-content">
                <h4>Galaxy S21 5G</h4>
                <div style="margin-bottom:10px;">
                  <span>
                      <del><sup>Php</sup>48,990 </del> &nbsp; <sup>Php</sup>47,990
                  </span>
                </div>

                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat in a repellendus nobis! Iure, eveniet! </p>
                <a href="product-details.html" class="filled-button">View More</a>
              </div>
            </div>

            <br>
          </div>


          <div class="col-md-4">
            <div class="service-item">
              <img src="product-images/samsung-img/Galaxy S21 Ultra 5G 69990.png" alt="Galaxy S21 Ultra 5G">
              <div class="down-content">
                <h4>Galaxy S21 Ultra 5G</h4>
                <div style="margin-bottom:10px;">
                  <span>
                      <del><sup>Php</sup>70,990 </del> &nbsp; <sup>Php</sup>69,990
                  </span>
                </div>

                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat in a repellendus nobis! Iure, eveniet! </p>
                <a href="product-details.html" class="filled-button">View More</a>
              </div>
            </div>

            <br>
          </div>


          <div class="col-md-4">
            <div class="service-item">
              <img src="product-images/samsung-img/Galaxy S21+ 5G 57990.png" alt="Galaxy S21+ 5G">
              <div class="down-content">
                <h4>Galaxy S21+ 5G</h4>
                <div style="margin-bottom:10px;">
                  <span>
                      <del><sup>Php</sup>58,990 </del> &nbsp; <sup></sup>57,990
                  </span>
                </div>

                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat in a repellendus nobis! Iure, eveniet! </p>
                <a href="product-details.html" class="filled-button">View More</a>
              </div>
            </div>

            <br>
          </div>


          <div class="col-md-4">
            <div class="service-item">
              <img src="product-images/samsung-img/Galaxy Z Fold2 99990.png" alt="Galaxy Z Fold2">
              <div class="down-content">
                <h4>Galaxy Z Fold2</h4>
                <div style="margin-bottom:10px;">
                  <span>
                      <del><sup>Php</sup>100,990 </del> &nbsp; <sup>Php</sup>99,990
                  </span>
                </div>

                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat in a repellendus nobis! Iure, eveniet! </p>
                <a href="product-details.html" class="filled-button">View More</a>
              </div>
            </div>

            <br>
          </div>


          <div class="col-md-4">
            <div class="service-item">
              <img src="product-images/vivo-img/V9 14999.png" alt="V9">
              <div class="down-content">
                <h4>Vivo V9</h4>
                <div style="margin-bottom:10px;">
                  <span>
                      <del><sup>Php</sup>15,999 </del> &nbsp; <sup>Php</sup>14,999
                  </span>
                </div>

                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque quis quam porro. Sint, in, at. </p>
                <a href="product-details.html" class="filled-button">View More</a>
              </div>
            </div>

            <br>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="product-images/vivo-img/Y11 5999.png" alt="Y11">
              <div class="down-content">
                <h4>Vivo Y11</h4>
                <div style="margin-bottom:10px;">
                  <span>
                      <del><sup>Php</sup>8,999 </del> &nbsp; <sup>Php</sup>5,999
                  </span>
                </div>

                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque quis quam porro. Sint, in, at. </p>
                <a href="product-details.html" class="filled-button">View More</a>
              </div>
            </div>

            <br>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="product-images/vivo-img/Y12 6999.png" alt="Y12">
              <div class="down-content">
                <h4>Vivo Y12</h4>
                <div style="margin-bottom:10px;">
                  <span>
                      <del><sup>Php</sup>9,999 </del> &nbsp; <sup>Php</sup>6,999
                  </span>
                </div>

                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque quis quam porro. Sint, in, at. </p>
                <a href="product-details.html" class="filled-button">View More</a>
              </div>
            </div>

            <br>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="product-images/vivo-img/Y15 12999.png" alt="Y15">
              <div class="down-content">
                <h4>Vivo Y15</h4>
                <div style="margin-bottom:10px;">
                  <span>
                      <del><sup>Php</sup>15,999 </del> &nbsp; <sup>Php</sup>12,999
                  </span>
                </div>

                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque quis quam porro. Sint, in, at. </p>
                <a href="product-details.html" class="filled-button">View More</a>
              </div>
            </div>

            <br>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="product-images/vivo-img/Y17 9999.png" alt="Y17">
              <div class="down-content">
                <h4>Vivo Y17</h4>
                <div style="margin-bottom:10px;">
                  <span>
                      <del><sup>Php</sup>11,999 </del> &nbsp; <sup>Php</sup>9,999
                  </span>
                </div>

                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque quis quam porro. Sint, in, at. </p>
                <a href="product-details.html" class="filled-button">View More</a>
              </div>
            </div>

            <br>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="product-images/vivo-img/Y17 Pro 21999.png" alt="Y17 Pro">
              <div class="down-content">
                <h4>Vivo Y17 Pro</h4>
                <div style="margin-bottom:10px;">
                  <span>
                      <del><sup>Php</sup>24,999 </del> &nbsp; <sup>Php</sup>21,999
                  </span>
                </div>

                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque quis quam porro. Sint, in, at. </p>
                <a href="product-details.html" class="filled-button">View More</a>
              </div>
            </div>

            <br>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="product-images/vivo-img/Y53 5990.png" alt="Y53">
              <div class="down-content">
                <h4>Vivo Y53</h4>
                <div style="margin-bottom:10px;">
                  <span>
                      <del><sup>Php</sup>8,990 </del> &nbsp; <sup>Php</sup>5,990
                  </span>
                </div>

                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque quis quam porro. Sint, in, at. </p>
                <a href="product-details.html" class="filled-button">View More</a>
              </div>
            </div>

            <br>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="product-images/vivo-img/Y81 7999.png" alt="Y81">
              <div class="down-content">
                <h4>Vivo Y81</h4>
                <div style="margin-bottom:10px;">
                  <span>
                      <del><sup>Php</sup>10,999 </del> &nbsp; <sup>Php</sup>7,999
                  </span>
                </div>

                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque quis quam porro. Sint, in, at. </p>
                <a href="product-details.html" class="filled-button">View More</a>
              </div>
            </div>

            <br>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="product-images/vivo-img/Y91  32GB 5999.jpg" alt="Y91  32GB">
              <div class="down-content">
                <h4>Vivo Y91  32GB</h4>
                <div style="margin-bottom:10px;">
                  <span>
                      <del><sup>Php</sup>8,999 </del> &nbsp; <sup>Php</sup>5,999
                  </span>
                </div>

                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque quis quam porro. Sint, in, at. </p>
                <a href="product-details.html" class="filled-button">View More</a>
              </div>
            </div>

            <br>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="product-images/vivo-img/Y91C 4999.png" alt="Y91C">
              <div class="down-content">
                <h4>Vivo Y91C</h4>
                <div style="margin-bottom:10px;">
                  <span>
                      <del><sup>Php</sup>7,999 </del> &nbsp; <sup>Php</sup>4,999
                  </span>
                </div>

                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque quis quam porro. Sint, in, at. </p>
                <a href="product-details.html" class="filled-button">View More</a>
              </div>
            </div>

            <br>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="product-images/oppo-img/OPPO A3's 3899.00.jpg" alt="OPPO A3's">
              <div class="down-content">
                <h4>OPPO A3's</h4>
                <div style="margin-bottom:10px;">
                  <span>
                      <del><sup>Php</sup>5,899 </del> &nbsp; <sup>Php</sup>3,899
                  </span>
                </div>

                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque quis quam porro. Sint, in, at. </p>
                <a href="product-details.html" class="filled-button">View More</a>
              </div>
            </div>

            <br>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="product-images/oppo-img/OPPO A5s 2039.00.jpg" alt="OPPO A5s">
              <div class="down-content">
                <h4>OPPO A5s</h4>
                <div style="margin-bottom:10px;">
                  <span>
                      <del><sup>Php</sup>5,039 </del> &nbsp; <sup>Php</sup>2,039
                  </span>
                </div>

                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque quis quam porro. Sint, in, at. </p>
                <a href="product-details.html" class="filled-button">View More</a>
              </div>
            </div>

            <br>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="product-images/oppo-img/OPPO A9 2020 5,520.00.jpg" alt="OPPO A9 2020">
              <div class="down-content">
                <h4>OPPO A9 2020</h4>
                <div style="margin-bottom:10px;">
                  <span>
                      <del><sup>Php</sup>7,520 </del> &nbsp; <sup>Php</sup>5,520
                  </span>
                </div>

                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque quis quam porro. Sint, in, at. </p>
                <a href="product-details.html" class="filled-button">View More</a>
              </div>
            </div>

            <br>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="product-images/oppo-img/OPPO A37.jpg" alt="OPPO A37">
              <div class="down-content">
                <h4>OPPO A37</h4>
                <div style="margin-bottom:10px;">
                  <span>
                      <del><sup>Php</sup>8,990 </del> &nbsp; <sup>Php</sup>6,990
                  </span>
                </div>

                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque quis quam porro. Sint, in, at. </p>
                <a href="product-details.html" class="filled-button">View More</a>
              </div>
            </div>

            <br>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="product-images/oppo-img/OPPO F5 3080.00.jpg" alt="OPPO F5">
              <div class="down-content">
                <h4>OPPO F5</h4>
                <div style="margin-bottom:10px;">
                  <span>
                      <del><sup>Php</sup>5,080 </del> &nbsp; <sup>Php</sup>3,080
                  </span>
                </div>

                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque quis quam porro. Sint, in, at. </p>
                <a href="product-details.html" class="filled-button">View More</a>
              </div>
            </div>

            <br>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="product-images/oppo-img/OPPO F7 18,999.00.jpg" alt="OPPO F7">
              <div class="down-content">
                <h4>OPPO F7</h4>
                <div style="margin-bottom:10px;">
                  <span>
                      <del><sup>Php</sup>20,999 </del> &nbsp; <sup>Php</sup>18,999
                  </span>
                </div>

                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque quis quam porro. Sint, in, at. </p>
                <a href="product-details.html" class="filled-button">View More</a>
              </div>
            </div>

            <br>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="product-images/oppo-img/OPPO F9 5499.00.jpg" alt="5499">
              <div class="down-content">
                <h4>OPPO F9</h4>
                <div style="margin-bottom:10px;">
                  <span>
                      <del><sup>Php</sup>7,499 </del> &nbsp; <sup>Php</sup>5,499
                  </span>
                </div>

                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque quis quam porro. Sint, in, at. </p>
                <a href="product-details.html" class="filled-button">View More</a>
              </div>
            </div>

            <br>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="product-images/oppo-img/OPPO F11 10,299.00.jpg" alt="OPPO F11">
              <div class="down-content">
                <h4>OPPO F11</h4>
                <div style="margin-bottom:10px;">
                  <span>
                      <del><sup>Php</sup>12,299 </del> &nbsp; <sup>Php</sup>10,299
                  </span>
                </div>

                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque quis quam porro. Sint, in, at. </p>
                <a href="product-details.html" class="filled-button">View More</a>
              </div>
            </div>

            <br>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="product-images/oppo-img/OPPO F11 Pro 10,890.00.jpg" alt="OPPO F11 Pro">
              <div class="down-content">
                <h4>OPPO F11 Pro</h4>
                <div style="margin-bottom:10px;">
                  <span>
                      <del><sup>Php</sup>12,890 </del> &nbsp; <sup>Php</sup>10,890
                  </span>
                </div>

                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque quis quam porro. Sint, in, at. </p>
                <a href="product-details.html" class="filled-button">View More</a>
              </div>
            </div>

            <br>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="product-images/oppo-img/OPPO Reno 30,888.00.jpg" alt="OPPO Reno">
              <div class="down-content">
                <h4>OPPO Reno</h4>
                <div style="margin-bottom:10px;">
                  <span>
                      <del><sup>Php</sup>33,888 </del> &nbsp; <sup>Php</sup>30,888
                  </span>
                </div>

                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque quis quam porro. Sint, in, at. </p>
                <a href="product-details.html" class="filled-button">View More</a>
              </div>
            </div>

            <br>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="product-images/realme-img/realme  C12 5990.png" alt="realme  C12">
              <div class="down-content">
                <h4>realme  C12</h4>
                <div style="margin-bottom:10px;">
                  <span>
                      <del><sup>Php</sup>8,990 </del> &nbsp; <sup>Php</sup>5,990
                  </span>
                </div>

                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque quis quam porro. Sint, in, at. </p>
                <a href="product-details.html" class="filled-button">View More</a>
              </div>
            </div>

            <br>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="product-images/realme-img/realme 6 8990.jpg" alt="realme 6">
              <div class="down-content">
                <h4>realme 6</h4>
                <div style="margin-bottom:10px;">
                  <span>
                      <del><sup>Php</sup>10,990 </del> &nbsp; <sup>Php</sup>8,990
                  </span>
                </div>

                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque quis quam porro. Sint, in, at. </p>
                <a href="product-details.html" class="filled-button">View More</a>
              </div>
            </div>

            <br>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="product-images/realme-img/realme 6 Pro 12990.jpg" alt="realme 6 Pro">
              <div class="down-content">
                <h4>realme 6 Pro</h4>
                <div style="margin-bottom:10px;">
                  <span>
                      <del><sup>Php</sup>14,990 </del> &nbsp; <sup>Php</sup>12,990
                  </span>
                </div>

                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque quis quam porro. Sint, in, at. </p>
                <a href="product-details.html" class="filled-button">View More</a>
              </div>
            </div>

            <br>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="product-images/realme-img/realme 7 11990.jpg" alt="realme 7">
              <div class="down-content">
                <h4>realme 7</h4>
                <div style="margin-bottom:10px;">
                  <span>
                      <del><sup>Php</sup>13,990 </del> &nbsp; <sup>Php</sup>11,990
                  </span>
                </div>

                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque quis quam porro. Sint, in, at. </p>
                <a href="product-details.html" class="filled-button">View More</a>
              </div>
            </div>

            <br>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="product-images/realme-img/realme 7Pro 15990.jpg" alt="realme 7Pro">
              <div class="down-content">
                <h4>realme 7Pro</h4>
                <div style="margin-bottom:10px;">
                  <span>
                      <del><sup>Php</sup>17,990 </del> &nbsp; <sup>Php</sup>15,990
                  </span>
                </div>

                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque quis quam porro. Sint, in, at. </p>
                <a href="product-details.html" class="filled-button">View More</a>
              </div>
            </div>

            <br>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="product-images/realme-img/realme C11 4990.jpg" alt="realme C11">
              <div class="down-content">
                <h4>realme C11</h4>
                <div style="margin-bottom:10px;">
                  <span>
                      <del><sup>Php</sup>6,990 </del> &nbsp; <sup>Php</sup>4,990
                  </span>
                </div>

                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque quis quam porro. Sint, in, at. </p>
                <a href="product-details.html" class="filled-button">View More</a>
              </div>
            </div>

            <br>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="product-images/realme-img/realme C15 6490.png" alt="realme C15">
              <div class="down-content">
                <h4>realme C15</h4>
                <div style="margin-bottom:10px;">
                  <span>
                      <del><sup>Php</sup>6,490 </del> &nbsp; <sup>Php</sup>6,490
                  </span>
                </div>

                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque quis quam porro. Sint, in, at. </p>
                <a href="product-details.html" class="filled-button">View More</a>
              </div>
            </div>

            <br>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="product-images/realme-img/realme C25 7490.png" alt="realme C25">
              <div class="down-content">
                <h4>realme C25</h4>
                <div style="margin-bottom:10px;">
                  <span>
                      <del><sup>Php</sup>8,490 </del> &nbsp; <sup>Php</sup>7,490
                  </span>
                </div>

                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque quis quam porro. Sint, in, at. </p>
                <a href="product-details.html" class="filled-button">View More</a>
              </div>
            </div>

            <br>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="product-images/realme-img/realme narzo 20 7990.jpg" alt="realme narzo 20">
              <div class="down-content">
                <h4>realme narzo 20</h4>
                <div style="margin-bottom:10px;">
                  <span>
                      <del><sup>Php</sup>10,990 </del> &nbsp; <sup>Php</sup>7,990
                  </span>
                </div>

                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque quis quam porro. Sint, in, at. </p>
                <a href="product-details.html" class="filled-button">View More</a>
              </div>
            </div>

            <br>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <img src="product-images/realme-img/realme X3 SuperZoom 22990.jpg" alt="realme X3 SuperZoom">
              <div class="down-content">
                <h4>realme X3 SuperZoom</h4>
                <div style="margin-bottom:10px;">
                  <span>
                      <del><sup>Php</sup>25,990 </del> &nbsp; <sup>Php</sup>22,990
                  </span>
                </div>
=======
           mysqli_close($con);         
>>>>>>> 0ccce30f9fb62f743903215749fbfdfe171c5c9f

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

    <!-- Footer Starts Here -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3 footer-item">
            <h4>Mobile Store</h4>
            <p>Vivamus tellus mi. Nulla ne cursus elit,vulputate. Sed ne cursus augue hasellus lacinia sapien vitae.</p>
            <ul class="social-icons">
              <li><a rel="nofollow" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item">
            <h4>Useful Links</h4>
            <ul class="menu-list">
              <li><a href="#">Vivamus ut tellus mi</a></li>
              <li><a href="#">Nulla nec cursus elit</a></li>
              <li><a href="#">Vulputate sed nec</a></li>
              <li><a href="#">Cursus augue hasellus</a></li>
              <li><a href="#">Lacinia ac sapien</a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item">
            <h4>Additional Pages</h4>
            <ul class="menu-list">
              <li><a href="#">Products</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Terms</a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item last-item">
            <h4>Contact Us</h4>
            <div class="contact-form">
              <form id="contact footer-contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>
                Copyright © 2020 Company Name
                - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a>
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>