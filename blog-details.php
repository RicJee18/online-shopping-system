<!DOCTYPE html>
<html lang="en">

  <head>
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
            <h1>The greatest journey of online shop. The place for fun. The place to be. The quality service you expect.</h1>
            <span><i class="fa fa-user"></i> CEO&nbsp;|&nbsp;MANAGER &nbsp;|&nbsp;PRESIDENT &nbsp;|&nbsp; <i class="fa fa-calendar"></i> 07.05.2021 10:10</span>
          </div>
        </div>
      </div>
    </div>

    <div class="more-info about-info">
      <div class="container">
        <div class="more-info-content">
          <div class="right-content">
            <div>
              <img src="assets/images/blog-image-fullscren-1-1920x700.jpg" class="img-fluid" alt="">
            </div>
            <br>
            <p>A cell is a device that helps you to receive and make calls easily through radio frequency within a network area. A cell phone is popularly known as mobile phones, handphones, mobile, cells and also the phone. Modern mobile telephone services use the cellular network that’s why it is also known as cellular phones. With calling service it also gives you other services such as text messaging, email, internet, video games, photography, etc. it was first discovered in 1973.</p>
            
            <p><i><b>“End-users, not technologies, shape the market. Consequently, marketers need to stay abreast not only of technological developments but also of the way people respond to them.”</b></i></p>

            <p><i><b>“Mobile use is growing faster than all of Google’s internal predictions.”</b></i></p>

            <p><i><b>“The trend has been that mobile was winning. It’s now won.”</b></i></p>

            <p><i><b>“The expansion of mobile internet consumption is an opportunity for traditional publishers and broadcasters, as much as a threat. Traditional media has invested heavily in online brand extensions, and some of them have larger audiences online than they ever had for the offline products.”</b></i></p>

            <p><i><b>“The mobile device has become our communications hub, our diary, our entertainment portal, our primary source of media consumption, our wallet and our gateway to real-time information tailored to our needs. The revolution is now!”</b></i></p>

            <p><i><b>“A lot of brands weren’t secure in this mobile revolution that we’ve stumbled into, and the trust still isn’t there for many of them.”</b></i></p>

            <p><i><b>“In today’s modern world, people are either asleep or connected.”</b></i></p>

            <p><i><b>“The mobile phone is used from when you get up in the morning and is often the last thing you interact with at night.”</b></i></p>

            <p><i><b>“With our phones acting as supercomputers in our pockets, we can find, learn, do, and buy whenever the need arises—or the whim strikes.”</b></i></p>

            <p><i><b>“The future of mobile is the future of online. It is how people access online content now.”</b></i></p>

            <p><i><b>“Mobile is not the future, it is the now. Meet your customers in the environment of their choice, not where it’s convenient for you.”</b></i></p>


            <h4>Benefits and Offers of our Company</h4>

            <br>

            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>*</b>Making communication easier <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>*</b>Closer to people <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>*</b>Packed with features <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>*</b>Love every moment  <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>*</b>Your true companion <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>*</b>Only the essentials <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>*</b>Quality at the best prices <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>*</b>The phone you always desired  <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>*</b>Just a click away <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>*</b>Communicate effortlessly <br>
            </p>

          </div>
        </div>
      </div>
    </div>

    <div class="callback-form contact-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Leave a <em>comment</em></h2>
              <span>"Be WISE, Shop WISE"</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
              <form id="contact" action="" method="get">
                <div class="row">
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
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
                      <button type="submit" id="form-submit" class="filled-button">Submit</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer Starts Here -->
    <?php include_once('./inc/footer.php'); ?>

  </body>
</html>