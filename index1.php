<?php

session_start();
include('db.php');
$status="";

if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query($con,"SELECT * FROM `products` WHERE `code`='$code'");
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];
$image = $row['image'];

$cartArray = array(
	$code=>array(
	'name'=>$name,
	'code'=>$code,
	'price'=>$price,
	'quantity'=>1,
	'image'=>$image)
);

if(empty($_SESSION["shopping_cart"])) {
	$_SESSION["shopping_cart"] = $cartArray;
	$status = "<div class='box'>Product is added to your cart!</div>";
}else{
	$array_keys = array_keys($_SESSION["shopping_cart"]);
	if(in_array($code,$array_keys)) {
		$status = "<div class='box' style='color:red;'>
		Product is already added to your cart!</div>";	
	} else {
	$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
	$status = "<div class='box'>Product is added to your cart!</div>";
	}

	}
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<title>Simple Shopping Cart</title>
	<link rel='stylesheet' href='./css/style.css' type='text/css' media='all' />

  </head>
  <body>
  
		<nav class="navbar navbar-expand-md navbar-light bg-dark">
					<a class="navbar-brand text-white" href="index.php" target="_blank">ShOeRack</a>	
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto py-4 py-md-0 ">
							<li class=" nav-item pl-4 pl-md-0 ml-0 ml-md-4">
								<a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">Action</a>
									<a class="dropdown-item" href="#">Another action</a>
									<a class="dropdown-item" href="#">Something else here</a>
									<a class="dropdown-item" href="#">Another action</a>
								</div>
							</li>
							<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
								<a class="nav-link text-white" href="#">Contact</a>
							</li>
							<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
								<a href="./Registration/login.php" class= "btn btn-success">Sign In</a> 
							</li>
							<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
								<?php
								if(!empty($_SESSION["shopping_cart"])) {

									$cart_count = count(array_keys($_SESSION["shopping_cart"]));
								?>
								<div class="cart_div">
									<a href="cart.php"><i class="fa fa-shopping-cart fa_custom fa-2x" style="color:white;"></i><span><?php echo $cart_count; ?></span></a>
								</div>

								<!-- Cart -->
								</div>
							<!-- /Cart -->

							</li>
					</ul>
			</div>
					
		</nav>	

        <!-- <div class="container">
		    <div class="row">
			    <div class="col-md">
			      
					<div class="container mt-5">
					   <h2>Sample Online Shopping</h2> 
					   <div class="row">
						   <div class="col-md-12">
							   

		                  
						</div>

                            
						

						</div>
					</div>
			    </div>
	  	    </div>
	    </div> -->
        
        <h2>Sample Online Shopping</h2> 

		<div class="container py-5">
			<div class="row justify-content-center">

				<?php }

					$result = mysqli_query($con,"SELECT * FROM `products`");

					while($row = mysqli_fetch_assoc($result))
					
					{ 
						
				      ?>

						<div class="col-md-3">

							<div class="card text-center">
                                
							   <div class="card-header">
								  <img src='<?php echo $row['image']; ?>' width="200" height="200" class="m-2" >
								</div>
								<div class="card-body">
									
								    <form action="" method="post">
									<p class="card-text"><?php echo $row['name']; ?></p>

									<p card="card-text"><input type='hidden' name='code' value = "<?php echo $row['code']; ?>" /></p>

									<p card="card-text"><?php echo $row['price']; ?></p>

									<div class='product-rating'>
										<i class='fa fa-star'></i>
										<i class='fa fa-star'></i>
										<i class='fa fa-star'></i>
										<i class='fa fa-star'></i>
										<i class='fa fa-star'></i>
									</div>
									
									<button type='submit' class='buy btn btn-success rounded-pill'>Add to Cart</button>
                                   </form>
								</div>
							</div>

						</div>
							
					<?php }

						mysqli_close($con);

					?>
				

				
				<div style="clear:both;">

                </div>

                <div class="message_box" style="margin:10px 0px;">
	                  <?php echo $status ; ?>;
                </div>

			</div>
	    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
