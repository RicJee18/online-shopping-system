<!DOCTYPE html>
<html lang="en">

  <head>
  <body>

  <?php
      include_once('./inc/header.php');
      include_once('./inc/sub-header.php');
    ?>
    
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
                    <a class="dropdown-item" href="testimonials.php">Testimonials</a>
                    <a class="dropdown-item active" href="terms.php">Terms</a>
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
            <h1>Terms</h1>
            <span>Don't get a charge out of unsafe conditions</span>
          </div>
        </div>
      </div>
    </div>

    <div class="more-info about-info">
      <div class="container">
        <div class="more-info-content">
          <div class="right-content">
            <h5>1. Limitation of Liability</h5>
            <br>  
            <p>This clause lets our customers know that we or our business will not be held responsible in case of any liability issues. These may be related to personal injury, death, fraudulent misrepresentation, defective items or other product, service or delivery problems.</p>

            <br>
            <h5>2. Intellectual Property/Trademarks</h5>
            <br>  
            <p>As the owner of an RRJ Mobile store, we likely have unique items, designs, content or other proprietary rights that we want to protect. We can do this with a properly written clause dedicated to establishing our Intellectual Property Rights.</p>

            <br>
            <h5>3. Pricing and Payment Terms</h5>
            <br>  
            <p>Product prices are almost always subject to change, and our right to make these changes should be established in a dedicated Pricing or Payments clause. Other details of customer transactions, such as shipping, returns, refunds and discounts also should be addressed in this clause in order to give you the legal rights to manage these matters in the interest of your online store.</p>

            <br>
            <h5>4. Dispute Resolution</h5>
            <br>  
            <p> This clause typically establishes the jurisdiction where any disputes will be arbitrated if it comes to that, and the governing law that will apply. Obviously, these decisions should be made in the interest of the store's owner.This clause is particularly important for ecommerce stores that cater to a global audience. Different countries have different laws which could impact the outcome of any dispute.</p>

            <br>  
            <br>  
            <br>  
            <br>  
          </div>
        </div>
      </div>
    </div>

    <?php include_once('./inc/footer.php'); ?>

  </body>
</html>