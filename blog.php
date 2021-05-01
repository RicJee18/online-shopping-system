<!DOCTYPE html>
<html lang="en">
  <head>
  </head>
  <body>
    <?php
      include_once('./inc/header.php');
      include_once('./inc/sub-header.php');
    ?>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>Mobile Store<em> Website</em></h2></a>
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
              <li class="nav-item">
                <a class="nav-link" href="products.php">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="checkout.php">Checkout</a>
              </li>
              <li class="nav-item dropdown active">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About</a>
              
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="about.php">About Us</a>
                    <a class="dropdown-item active" href="blog.php">Blog</a>
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
            <h1>Read our Blog</h1>
            <span>"Stay Closer to people around the World, Distance is not a hinder yet Our products is the gateway."</span>
          </div>
        </div>
      </div>
    </div>

    <div class="single-services">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <section class='tabs-content'>
              <article id='tabs-1'>
                <img src="assets/images/blog-image-1-940x460.jpg" alt="">
                <h4><a href="blog-details.html">Browsing while Chillin'</a></h4>
                <div style="margin-bottom:10px;">
                  <span>yyhaer&nbsp;|&nbsp; 01.05.2021 11:22&nbsp;|&nbsp; 15 comments</span>
                </div>
                <p>Mobile phones used for relax and chill our minds. Browsing social networking sites and connect to other people. Fast mobile phones are best for this leisure time to used. "Be WISE, Shop WISE!</p>
                <br>
                <div>
                  <a href="blog-details.php" class="filled-button">Continue Reading</a>
                </div>
              </article>

              <br>
              <br>
              <br>

              <article id='tabs-2'>
                <img src="assets/images/blog-image-2-940x460.jpg" alt="">
                <h4><a href="blog-details.html">Phone while Drinking Coffee</a></h4>
                <div style="margin-bottom:10px;">
                  <span>Jurick Anthony &nbsp;|&nbsp; 27.07.2020 12:10 &nbsp;|&nbsp; 15 comments</span>
                </div>
                <p>Drinking coffee is everyday is normal especially early in the morning to heat up our body. While let the coffee luke warm, using our mobiles phones is best because we may entertained while browsing in the internet, play games, watch videos, listen music, or check emails and messages.</p>
                <br>
                <div>
                  <a href="blog-details.php" class="filled-button">Continue Reading</a>
                </div>
              </article>
            </section>
          </div>

          <div class="col-md-4">
              <h4 class="h4">Search</h4>
              
              <form id="search_form" name="gs" method="GET" action="#">
                <input type="text" name="q" class="form-control form-control-lg" placeholder="type to search..." autocomplete="on">
              </form>

              <br>
              <br>

              <h4 class="h4">Recent posts</h4>

              <ul>
                  <li>
                      <h5 style="margin-bottom:10px;"><a href="blog-details.php">Vlog is Life with excelent gadgets</a></h5>
                      <small><i class="fa fa-user"></i> Jeric Baterna &nbsp;|&nbsp; <i class="fa fa-calendar"></i> 18.09.2020 07:45</small>
                  </li>

                  <li><br></li>

                  <li>
                      <h5 style="margin-bottom:10px;"><a href="blog-details.php"> Explore the unseen, Capture the scene</a></h5>
                      <small><i class="fa fa-user"></i> yhang &nbsp;|&nbsp; <i class="fa fa-calendar"></i> 07.11.2020 05:52</small>
                  </li>

                  <li><br></li>

                  <li>
                    <h5 style="margin-bottom:10px;"><a href="blog-details.php">Food is my happiness and gadgets is endless</a></h5>

                    <small><i class="fa fa-user"></i> Jurick Anthony Baybayanon &nbsp;|&nbsp; <i class="fa fa-calendar"></i> 07.01.2021 07:00</small>
                  </li>
              </ul>
          </div>
        </div>
      </div>
    </div>

    <br>  
    <br>  
    <br>  
    <br>  

    <!-- Footer Starts Here -->
    <?php include_once('./inc/footer.php'); ?>

  </body>
</html>