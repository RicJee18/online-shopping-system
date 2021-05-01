
  <body>

    <?php

    include_once('./inc/addchart.php');

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
                <a class="nav-link active" href="index.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="products.php">Products</a>
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
    <!-- Banner Starts Here -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item item-1">
            <div class="img-fill">
                <div class="text-content">
                  <h6>#The Next Big Thing</h6>
                  <h4>Samsung GALAXY</h4>
                  <p>Inspire the World, Create the future.<br>Designed for Human.<br>Simply SAMSUNG</p>
                  <a href="products.php" class="filled-button">Products</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item item-2">
            <div class="img-fill">
                <div class="text-content">
                  <h6>#Brave new World</h6>
                  <h4>VIVO</h4>
                  <p>"Camera & Music"<br>Bringing New Focus on Photography and Audio Experience.</p>
                  <a href="about.php" class="filled-button">About Us</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item item-3">
            <div class="img-fill">
                <div class="text-content">
                  <h6>#Flaunt Your Night</h6>
                  <h4>OPPO</h4>
                  <p>Selfie EXPERT<br>It's Your Turn.<br>Designed for Life.</p>
                  <a href="contact.php" class="filled-button">Contact Us</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
          <div class="item item-3">
            <div class="img-fill">
                <div class="text-content">
                  <h6>#Dare to Leap</h6>
                  <h4>realme</h4>
                  <p>Proud to be Young<br>A brand of the young, by the young and for the young.</p>
                  <a href="contact.php" class="filled-button">Contact Us</a>
                </div>
            </div>
          </div>
        </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="request-form">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h4>Request a call back right now ?</h4>
            <span>Because you want a bigger screen not a bigger phone<br>"Be WISE, Shop WISE"</span>
          </div>
          <div class="col-md-4">
            <a href="contact.php" class="border-button">Contact Us</a>
          </div>
        </div>
      </div>
    </div>

    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Featured <em>Products</em></h2>
              <span>"Be Wise, Shop WISE"</span>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <img src="product-images/samsung-img/Galaxy Z Fold2 99990.png" alt="">
              <div class="down-content">
                <h4>Galaxy Z Fold2</h4>
                <div style="margin-bottom:10px;">
                  <span> <del><sup>Php</sup>100,990.00</del>  <sup>Php</sup>99,990.00 </span>
                </div>
                <p>The Samsung Galaxy Z Fold 2 is an Android-based foldable smartphone developed by Samsung Electronics for its Samsung Galaxy Z series, succeeding the Samsung Galaxy Z Fold.</p>
                <a href="product-details.php" class="filled-button">View More</a>
              </div>
            </div>
            
            <br>
          
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <img src="product-images/vivo-img/Y17 Pro 21999.png" alt="">
              <div class="down-content">
                <h4>Vivo Y17 Pro</h4>
                <div style="margin-bottom:10px;">
                  <span> <del><sup>Php</sup> 21,999.00</del>  <sup>Php</sup> 21,999.00 </span>
                </div>

                <p>Vivo Y17 Android smartphone.Y17 features a 6.35-inch Halo FullView™ Display with a 19.3:9 aspect ratio. The screen’s divine halo rests atop the display, the perfect accent to its elegant flowing outline. </p>
                <a href="product-details.php" class="filled-button">View More</a>
              </div>
            </div>

            <br>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <img src="product-images/realme-img/realme X3 SuperZoom 22990.jpg" alt="">
              <div class="down-content">
                <h4>realme X3 SuperZoom</h4>
                <div style="margin-bottom:10px;">
                  <span> <del><sup>Php</sup>24990.00</del>  <sup>Php</sup>22,990.00 </span>
                </div>
                <p>The realme X3 SuperZoom camera system is equipped with a new periscope zoom lens, bringing you an all-new photography experience. Explore the world with 60X Super Zoom.</p>
                <a href="product-details.php" class="filled-button">View More</a>
              </div>
            </div>

            <br>
          </div>
        </div>
      </div>
    </div>

    <div class="fun-facts">
      <div class="container">
        <div class="more-info-content">
          <div class="row">
            <div class="col-md-6">
              <div class="left-image">
                <img src="assets/images/about-1-570x350.jpg" class="img-fluid" alt="">
              </div>
            </div>
            <div class="col-md-6 align-self-center">
              <div class="right-content">
                <span>Who we are</span>
                <h2>Get to know about <em>our company</em></h2>
                <p>RRJ MOBILE SHOP is an incorporated online bussiness. It was launch by the creators when they studied at University of San Carlos. They made a system for online store that makes people easy access of mobile phones they wanted.</p>
                <a href="about.php" class="filled-button">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="more-info">
      <div class="container">
        <div class="section-heading">
          <h2>Read our <em>Blog</em></h2>
          <span>"Stay Closer to people around the World, Distance is not a hinder yet Our products is the gateway."</span>
        </div>

        <div class="row" id="tabs">
          <div class="col-md-4">
            <ul>
              <li><a href='#tabs-1'>Chief Executive Officer<br> <small>Jeric Baterna &nbsp;|&nbsp; baterna@gmail.com</small></a></li>
              <li><a href='#tabs-2'>President<br> <small>Jurick Baybayanun &nbsp;|&nbsp; jurick@gmail.com</small></a></li>
              <li><a href='#tabs-3'>Manager<br> <small>Rhea Amancio &nbsp;|&nbsp; yyhaer@gmail.com</small></a></li>
              </ul>

            <br>

            <div class="text-center">
              <a href="blog.php" class="filled-button">Read More</a>
            </div>

            <br>
          </div>

          <div class="col-md-8">
            <section class='tabs-content'>
              <article id='tabs-1'>
                <img src="assets/images/pn.png" alt="">
                <h4><a href="blog-details.php">RRJ COMPANY FAMILY</a></h4>
                <p>RRJ Company Family is the non-profit organization where they were trained and became a professional as well as a bussiness owner. Passerelles Numeriques Philippines is the the gateway for life that made this company possible.</p>
              </article>
              <article id='tabs-2'>
                <img src="assets/images/blog-image-2-940x460.jpg" alt="">
                <h4><a href="blog-details.php">Mauris lobortis quam id dictum dignissim</a></h4>
                <p>Sed ut dolor in augue cursus ultrices. Vivamus mauris turpis, auctor vel facilisis in, tincidunt vel diam. Sed vitae scelerisque orci. Nunc non magna orci. Aliquam commodo mauris ante, quis posuere nibh vestibulum sit amet</p>
              </article>
              <article id='tabs-3'>
                <img src="assets/images/blog-image-3-940x460.jpg" alt="">
                <h4><a href="blog-details.php">Class aptent taciti sociosqu ad litora torquent per</a></h4>
                <p>Mauris lobortis quam id dictum dignissim. Donec pellentesque erat dolor, cursus dapibus turpis hendrerit quis. Suspendisse at suscipit arcu. Nulla sed erat lectus. Nulla facilisi. In sit amet neque sapien. Donec scelerisque mi at gravida efficitur. Nunc lacinia a est eu malesuada. Curabitur eleifend elit sapien, sed pulvinar orci luctus eget. 
                </p>
              </article>
            </section>
          </div>
        </div>

        
      </div>
    </div>

    <div class="testimonials">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>What they say <em>about us</em></h2>
              <span>testimonials from our greatest clients</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-testimonials owl-carousel">
              
              <div class="testimonial-item">
                <div class="inner-content">
                <img src="product-images/aldrin.jpg" alt="">
                  <h4>James Aldrin Odiong</h4>
                  <span>Web Developer</span>
                  <p>"Amazing products that worth the price. If you want original phone? Be WISE and Shop Wise in RRJ Mobile Store"</p>
                </div>                
              </div>
              
              <div class="testimonial-item">
                <div class="inner-content">
                <img src="product-images/aldrin.jpg" alt="">
                  <h4>Daryll Vildosola</h4>
                  <span>Full Stack Developer</span>
                  <p>"RRJ Company is the best online mobile store. You can choose different authenric phones that meet your expectations."</p>
                </div>                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="callback-form">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Request a <em>call back</em></h2>
              <span>Etiam suscipit ante a odio consequat</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="border-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

        <br>
        <br>
        <br>
        <br>
      </div>
    </div>

   <?php include_once('./inc/footer.php'); ?>

  </body>
</html>
