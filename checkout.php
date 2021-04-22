<?php

session_start();

$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
	foreach($_SESSION["shopping_cart"] as $key => $value) {
		if($_POST["code"] == $key){
		unset($_SESSION["shopping_cart"][$key]);
		$status = "<div class='box' style='color:red;'>
		Product is removed from your cart!</div>";
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
                <a class="nav-link " href="index.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="products.php">Products</a>
              </li>
              <li class="nav-item active">
                   <a class="nav-link" href="checkout.php">Checkout</a>
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
            <h1>Checkout</h1>
            <span>Lorem ipsum dolor sit amet.</span>
          </div>
        </div>
      </div>
    </div>
  
    <div class="contact-information">
      <div class="container">
        <div>
          <a href="products.php" class="btn btn-primary"> < Continue shopping </a>
        </div>
        <br>

        <ul class="list-group list-group-flush">

          <li class="list-group-item">

              <div class="row">

                  <?php
                    if(isset($_SESSION["shopping_cart"])){
                      $total_price = 0;
                  ?>	

                 <div class="table">
                   <table class="table table-striped">
                      <thead>
                              <tr>
                                <td></td>
                                <td>ITEM NAME</td>
                                <td>QUANTITY</td>
                                <td>ACTIONS</td>
                                <td>UNIT PRICE</td>
                                <td>ITEMS TOTAL</td>
                                
                              </tr>   
                      </thead>
                      <tbody>
                        <tr>
                            <?php		
                            foreach ($_SESSION["shopping_cart"] as $product){
                            ?>

                            <td><img src='<?php echo $product["image"]; ?>' width="50" height="40" /></td>
                            <td><?php echo $product["name"]; ?><br/>

                            <td>
                              <form method='post' action=''>
                                <input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
                                <input type='hidden' name='action' value="change" />
                                  <select name='quantity' class='quantity form-control w-50 text-center' onchange="this.form.submit()">
                                    <option <?php if($product["quantity"]==1) echo "selected";?> value="1">1</option>
                                    <option <?php if($product["quantity"]==2) echo "selected";?> value="2">2</option>
                                    <option <?php if($product["quantity"]==3) echo "selected";?> value="3">3</option>
                                    <option <?php if($product["quantity"]==4) echo "selected";?> value="4">4</option>
                                    <option <?php if($product["quantity"]==5) echo "selected";?> value="5">5</option>
                                  </select>
                              </form>
                          </td>
                          <td>
                            <form method='post' action=''>
                              <input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
                              <input type='hidden' name='action' value="remove" />
                              <button type='submit' class='remove btn btn-danger'>Remove</button>
                            </form>
                          </td>
                          <td>
                            <?php echo "$".$product["price"]; ?>
                          </td>
                          <td>
                            <?php echo "$".$product["price"]*$product["quantity"]; ?>
                          </td>
                          

                          </tr>	
                            <?php
                              $total_price += ($product["price"]*$product["quantity"]);
                            }
                          ?>

                          <tr>

                            <td colspan="6" class="text-right">
                              <strong style="margin-right:120px;" >TOTAL:&nbsp;&nbsp; <?php echo "$ ".$total_price; ?> </strong>
                            </td>
                          </tr>
                        </tbody>
                     </table>
                      
                      <?php
                        }
                        else{
                          echo "<h3>Your cart is empty!</h3>";
                        }
                      ?>
                      
                      <div style="clear:both;"></div>

                      <div class="message_box" style="margin:10px 0px;">
                          <?php echo $status; ?>
                      </div>
                      

                     

                  </div>
                </div>
                
              </div>
            </li>
        </ul>
      </div>  
    </div>

    <div class="callback-form contact-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="contact-form">
              <form action="#" id="contact">
                 <div class="row">
                      <div class="col-sm-6 col-xs-12">
                           <div class="form-group">
                                <select class="form-control" data-msg-required="This field is required.">
                                     <option value="">-- Choose Title --</option>
                                     <option value="dr">Dr.</option>
                                     <option value="miss">Miss</option>
                                     <option value="mr">Mr.</option>
                                     <option value="mrs">Mrs.</option>
                                     <option value="ms">Ms.</option>
                                     <option value="other">Other</option>
                                     <option value="prof">Prof.</option>
                                     <option value="rev">Rev.</option>
                                </select>
                           </div>
                      </div>
                      <div class="col-sm-6 col-xs-12">
                           <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name:">
                           </div>
                      </div>
                 </div>
                 <div class="row">
                      <div class="col-sm-6 col-xs-12">
                           <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email:">
                           </div>
                      </div>
                      <div class="col-sm-6 col-xs-12">
                           <div class="form-group">
                                <input type="text" class="form-control" placeholder="Phone:">
                           </div>
                      </div>
                 </div>
                 <div class="row">
                      <div class="col-sm-6 col-xs-12">
                           <div class="form-group">
                                <input type="text" class="form-control" placeholder="Address 1:">
                           </div>
                      </div>
                      <div class="col-sm-6 col-xs-12">
                           <div class="form-group">
                                <input type="text" class="form-control" placeholder="Address 2:">
                           </div>
                      </div>
                 </div>
                 <div class="row">
                      <div class="col-sm-6 col-xs-12">
                           <div class="form-group">
                                <input type="text" class="form-control" placeholder="City:">
                           </div>
                      </div>
                      <div class="col-sm-6 col-xs-12">
                           <div class="form-group">
                                <input type="text" class="form-control" placeholder="State:">
                           </div>
                      </div>
                 </div>
                 <div class="row">
                      <div class="col-sm-6 col-xs-12">
                           <div class="form-group">
                                <input type="text" class="form-control" placeholder="Zip:">
                           </div>
                      </div>
                      <div class="col-sm-6 col-xs-12">
                           <div class="form-group">
                                <select class="form-control">
                                     <option value="">-- Choose Country --</option>
                                     <option value="">-- Choose --</option>
                                     <option value="">-- Choose --</option>
                                     <option value="">-- Choose --</option>
                                </select>
                           </div>
                      </div>
                 </div>

                 <div class="row">
                      <div class="col-sm-6 col-xs-12">
                           <div class="form-group">
                                <select class="form-control">
                                     <option value="">-- Choose Payment method --</option>
                                     <option value="bank">Bank account</option>
                                     <option value="cash">Cash</option>
                                     <option value="paypal">PayPal</option>
                                </select>
                           </div>
                      </div>

                      <div class="col-sm-6 col-xs-12">
                           <div class="form-group">
                                <input type="text" class="form-control" placeholder="Captcha">
                           </div>
                      </div>
                 </div>

                 <div class="row">
                   <div class="col-lg-12">
                      <button type="submit" id="form-submit" class="filled-button">Finish</button>
                  </div>
                 </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
   <?php include_once('./inc/footer.php'); ?>
  </body>
</html>