<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:../index.php');
    exit;
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: ../landing.php");
}

?>


<body class="hero-anime bg-light">	

	<div class="navigation-wrap bg-light start-header start-style">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="navbar navbar-expand-md navbar-light">
						<a class="navbar-brand" href="index.php" target="_blank">ShOeRack</a>	
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto py-4 py-md-0">
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
										<a class="dropdown-item" href="#">Another action</a>
									</div>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Services</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
										<a class="dropdown-item" href="#">Another action</a>
									</div>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="#">Journal</a>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="#">Contact</a>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
								     <a href="welcome.php?logout='1'" class="nav-link" style="color: red;">Logout</a> 
								</li>
							</ul>
						</div>
						
					</nav>		
				</div>
			</div>
		</div>
	</div>
	
	<br>
	<br>
	<br>
	<br>
	<br>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>		
			  
	
	<div class="section full-height">
		<div class="absolute-center">
			<div class="section">
			<div class="main main-raised">
				<div class="container mainn-raised" style="width:100%;">
				
		                
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
							<img class="d-block w-100" src="../img/banner3.jpg" alt="First slide">
							</div>
							<div class="carousel-item">
							<img class="d-block w-100" src="../img/banner2.jpg" alt="Second slide">
							</div>
							<div class="carousel-item">
							<img class="d-block w-100" src="../img/banner1.jpg" alt="Third slide">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
						</div>
			            <div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>Holy <?php  if (isset($_SESSION['username'])) : ?>
						<?php echo $_SESSION['username']; ?>
					    <?php endif ?>!</strong> Welcome to shoerack!
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						</div>
						<div class="container">
							<div class="row">
								<div class="col-12">

								<h1><span>W</span><span>E</span><span>L</span><span>C</span><span>O</span><span>M</span><span>E</span><br>
								<!-- <span>m</span><span>e</span><span>n</span><span>u</span></h1> -->
								<span>
									<h2>FEATURED PRODUCTS</h2>
									<a class="feature-active" href="#">BEST SELLER</a> | <a href="#">NEW ARRIVAL</a> | <a href="#">MOST WANTED</a> 
								</span>
							</div>		
					</div>
					<!-- <div class="section mt-5">
						<div class="container">
							<div class="row">
								<div class="col-12">
									<div id="switch">
										<div id="circle"></div>
									</div>
								</div>	
							</div>		
						</div>			
					</div> -->
					<section class ="feature-products mt-5">
					<div class="container text-dark">
						<div class="row">
							<div class="col-md-12 text-center feature-title">
								<h2>FEATURED PRODUCTS</h2>
								<a class="feature-active" href="#">BEST SELLER</a> | <a href="#">NEW ARRIVAL</a> | <a href="#">MOST WANTED</a> 
							</div>
							<br>
							<br>
							<br>
							<br>
							<br>
						

							<div class="col-md-3 col-sm-6">
								<div class="product-grid">
									<div class="product-image">
										<a href="#" class="image" style="background-color:#F3F3F3;">
											<img class="pic-1" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQofPEHiwim1a6Qae7b4HL6NOCndOto5XnedA&usqp=CAU">
										</a>
										<a class="add-to-cart" href=""> + </a>
									</div>
									<div class="product-content">
										<h3 class="title"><a href="#">Product Name</a></h3>
										
										<div class="price">$21.60</div>
										<ul class="rating">
										<li class="fas fa-star"></li>
										<li class="fas fa-star"></li>
										<li class="fas fa-star"></li>
										<li class="fas fa-star"></li>
										<li class="fas fa-star disable"></li>
									</ul>
									</div>

									<div class="action-buttons">
										<a class="btn-outline">ADD TO CART</a>
										<a class="btn-outline-icon"><i class="far fa-heart"></i></a>
										<a class="btn-outline-icon"><i class="fas fa-chart-pie"></i></a>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="product-grid">
									<div class="product-image">
										<a href="#" class="image">
											<img class="pic-1" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQofPEHiwim1a6Qae7b4HL6NOCndOto5XnedA&usqp=CAU">
										</a>
										<a class="add-to-cart" href=""> + </a>
									</div>
									<div class="product-content">
										
										<h3 class="title"><a href="#">Product Name</a></h3>
										
										<div class="price">$21.60</div>
										<ul class="rating">
										<li class="fas fa-star"></li>
										<li class="fas fa-star"></li>
										<li class="fas fa-star"></li>
										<li class="fas fa-star"></li>
										<li class="fas fa-star"></li>
									</ul>
									</div>
									<div class="action-buttons">
										<a class="btn-outline">ADD TO CART</a>
										<a class="btn-outline-icon"><i class="far fa-heart"></i></a>
										<a class="btn-outline-icon"><i class="fas fa-chart-pie"></i></a>
									</div>

								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="product-grid">
									<div class="product-image">
										<a href="#" class="image">
											<img class="pic-1" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQofPEHiwim1a6Qae7b4HL6NOCndOto5XnedA&usqp=CAU">
										</a>
										<a class="add-to-cart" href=""> + </a>
									</div>
									<div class="product-content">
									

										<h3 class="title"><a href="#">Product Name</a></h3>
										
										<div class="price">$21.60</div>
										<ul class="rating">
										<li class="fas fa-star"></li>
										<li class="fas fa-star"></li>
										<li class="fas fa-star"></li>
										<li class="fas fa-star"></li>
										<li class="fas fa-star"></li>
									</ul>
									</div>
									<div class="action-buttons">
										<a class="btn-outline">ADD TO CART</a>
										<a class="btn-outline-icon"><i class="far fa-heart"></i></a>
										<a class="btn-outline-icon"><i class="fas fa-chart-pie"></i></a>
									</div>

								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="product-grid">
									<div class="product-image">
										<a href="#" class="image">
											<img class="pic-1" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQofPEHiwim1a6Qae7b4HL6NOCndOto5XnedA&usqp=CAU">
										</a>
										<a class="add-to-cart" href=""> + </a>
									</div>
									<div class="product-content">
									
										<h3 class="title"><a href="#">Product Name</a></h3>
										
										<div class="price">$21.60</div>
										<ul class="rating">
										<li class="fas fa-star"></li>
										<li class="fas fa-star"></li>
										<li class="fas fa-star"></li>
										<li class="fas fa-star"></li>
										<li class="fas fa-star"></li>
									</ul>
									</div>

									<div class="action-buttons">
										<a class="btn-outline">ADD TO CART</a>
										<a class="btn-outline-icon"><i class="far fa-heart"></i></a>
										<a class="btn-outline-icon"><i class="fas fa-chart-pie"></i></a>
									</div>

								</div>
							</div>
						</div>
					</div>           
					</section>
				</div>
	</div>
	<div class="my-5 py-5">
	</div>
  

</body>