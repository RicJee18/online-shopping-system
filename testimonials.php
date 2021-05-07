<!DOCTYPE html>
<html lang="en">

  <head>
  <body>
  <?php
      include_once('./inc/header.php');
      include_once('./inc/sub-header.php');
    ?>
    <!-- Navigation -->
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
              <li class="nav-item dropdown active">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About</a>
              
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="about.php">About Us</a>
                    <a class="dropdown-item" href="blog.php">Blog</a>
                    <a class="dropdown-item active" href="testimonials.php">Testimonials</a>
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

    <!-- Testimonials -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Testimonials</h1>
            <span>testimonials from our greatest clients</span>
          </div>
        </div>
      </div>
    </div>

    <div class="testimonials" style="margin: 0">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="owl-testimonials owl-carousel">
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <img src="http://placehold.it/60x60" alt="">
                  <h4>April Grace Diez</h4>
                  <span>Team Lead</span>
                  <p>"RRJ Mobile store is the best online shop that sells phones that are authentic and worth of it's price. Features are true and best phones to have and dream of."</p>
                </div>
              </div>
              
              <div class="testimonial-item">
                <div class="inner-content">
                <img src="product-images/aldrin.jpg" alt="">
                  <h4>James Aldrin Odiong</h4>
                  <span>Web Developer</span>
                  <p>"RRJ Mobile store, amazing products that worth the price. If you want original phone? Be WISE and Shop Wise in RRJ Mobile Store. I recommend to people who wants to own phones, "Be WISE, Shop WISE"</p>
                </div>                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer -->
    <?php include_once('./inc/footer.php'); ?> 

  </body>
</html>