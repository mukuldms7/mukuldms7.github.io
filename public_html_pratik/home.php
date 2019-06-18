<?php
include ('dbConfig.php');
session_start();
if (!isset($_SESSION['num']))
{
    $validate = "DELETE FROM cart ";
    $result2 = mysqli_query($con,$validate);
    $_SESSION['num']= 1;  
}
               
?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Pratik Copper - Auspiciously Healthy Copper Products Vessels - Pune</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Pratik Copper ranging from designs authenticity, product durability, manufacturing precision and long term customer associations we complete the growing value chain of copper utensils and copper market. With a legacy of over half a century we have led the change in copper utensil markets. Pratik has pioneered in manufacturing over 200 types of products and also have presence in industrials copper and elite copper utensils." />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="home.php"><img src="images/logo.png" alt="Pratik Copper Logo"><!--Store--></a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li class="active"><a href="home.php">Home</a></li>
								<li class="has-dropdown">
									<a href="shop.html">Shop</a>
								</li>
								<!--<li><a href="blog.html">Blog</a></li>-->
								<li><a href="about.html">About</a></li>
								<li><a href="contact.html">Contact</a></li>
								<li><a href="cart.php"><i class="icon-shopping-cart"></i> Cart</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/ah0.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-md-pull-2 col-sm-12 col-xs-12 slider-text" style="margin-left: 21%;">
				   				<div class="slider-text-inner" >
				   					<div class="desc" style="bottom: 10px;"> 
					   					<h1 class="head-1" >Apple</h1>
					   					<h2 class="head-2">Handa</h2>
					   					<h3 class="head-3">Collection</h3>
					   					<!--<p class="category"><span>New stylish shirts, pants &amp; Accessories</span></p>-->
					   					<center> <p class="pp1" style="position: absolute; bottom: -115px; left:12px;"><a href="product-detail%20-%20AppleHanda.html" class="btn btn-primary" style="background-color: #B37463">Shop Collection</a></p>  </center>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
                    
                <li style="background-image: url(images/km0.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-md-pull-2 col-sm-12 col-xs-12 slider-text" style="margin-left: 21%;">
				   				<div class="slider-text-inner">
				   					<div class="desc" style="top:39px;">
					   					<h1 class="head-1">Kulfi</h1>
					   					<h2 class="head-2">Matka</h2>
					   					<h4 class="head-3">Collection</h4>
					   					<!--<p class="category"><span>Also Disco Handa &amp; Accessories</span></p>-->
					   					<center> <p  style=" bottom: -190px; left:12px;"><p class="pp2"><a href="product-detail%20-%20PanihariKalshi.html" class="btn btn-primary" style="background-color: #B37463">Shop Collection</a></p> </center>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
                
			   	<li style="background-image: url(images/pk0.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-md-pull-2 col-sm-12 col-xs-12 slider-text" style="margin-left: 21%;">
				   				<div class="slider-text-inner" >
				   					<div class="desc">
					   					<h1 class="head-1">Pune</h1>
					   					<h2 class="head-2">Kalshi</h2>
					   					<!--<h2 class="head-3">45% off</h2>-->
					   					<p class="category"><span>Also Pune Kalshi <br> with Nakshi</span></p>
					   					<center> <p class="pp3" style="position: absolute; bottom: -115px; left:12px;"><a href="product-detail%20-%20PuneKalshi.html" class="btn btn-primary" style="background-color: #B37463">Shop Collection</a></p></center>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	
                <li style="background-image: url(images/cb0.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-md-pull-2 col-sm-12 col-xs-12 slider-text" style="margin-left: 21%;">
				   				<div class="slider-text-inner" >
				   					<div class="desc">
					   					<h1 class="head-1">Copper</h1>
					   					<h2 class="head-2">Water</h2>
                                        <h2 class="head-2">Bottle</h2>
					   					<!--<h2 class="head-3">45% off</h2>-->
					   					<!--<p class="category"><span>Also Pune Kalshi <br> with Nakshi</span></p>-->
					   					<center> <p class="pp3" style="position: absolute; bottom: -115px; left:12px;"><a href="product-detail%20-%20WaterBottle.html" class="btn btn-primary" style="background-color: #B37463">Shop Collection</a></p></center>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
                
                <li style="background-image: url(images/cb01.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-md-pull-2 col-sm-12 col-xs-12 slider-text" style="margin-left: 21%;">
				   				<div class="slider-text-inner" >
				   					<div class="desc">
					   					<h1 class="head-1">Copper</h1>
					   					<h2 class="head-2">Water Bottle</h2>
                                        <h2 class="head-2">Custom Designs</h2>
					   					<!--<h2 class="head-3">45% off</h2>-->
					   					<!--<p class="category"><span>Also Pune Kalshi <br> with Nakshi</span></p>-->
					   					<center> <p class="pp3" style="position: absolute; bottom: -115px; left:12px;"><a href="contact.html" class="btn btn-primary" style="background-color: #B37463">Contact Us</a></p></center>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
                    
                <li style="background-image: url(images/vg0.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-md-pull-2 col-sm-12 col-xs-12 slider-text" style="margin-left: 21%;">
				   				<div class="slider-text-inner" >
				   					<div class="desc">
                                        <p class="category" style="margin-bottom : 5px;"><span>Participated in</span></p>
					   					<h2 class="head-2">Vibrant</h2>
                                        <h2 class="head-2">Gujarat</h2>
                                        <h2 class="head-2">2019</h2>
					   					<!--<h2 class="head-3">45% off</h2>-->
					   					<!--<p class="category"><span>Also Pune Kalshi <br> with Nakshi</span></p>-->
					   					<center> <p class="pp3" style="position: absolute; bottom: -115px; left:12px;"><a href="about.html" class="btn btn-primary" style="background-color: #B37463">Read More</a></p></center>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
                
			  	</ul>
		  	</div>
		</aside>
		<div id="colorlib-featured-product">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<a href="product-detail%20-%20KaguHanda.html" class="f-product-1" style="background-image: url(images/kh1.jpg);">
							<div class="desc">
							 <h2 style="padding-top: 10px;"> Kagu <br> Handa</h2>
							</div>
						</a>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-6">
								<a href="product-detail%20-%20Pawali.html" class="f-product-2" style="background-image: url(images/pwl1.jpg);">
									<div class="desc">
										<h2><br>Pawali</h2>
									</div>
								</a>
							</div>
							<div class="col-md-6">
								<a href="product-detail%20-%20Ghangal.html" class="f-product-2" style="background-image: url(images/ggl1.jpg);">
									<div class="desc">
										<h2><br>Ghangal</h2>
									</div>
								</a>
							</div>
							<div class="col-md-12">
								<a href="product-detail%20-%20Panchapatra.html" class="f-product-2" style="background-image: url(images/pnp1.jpg);">
									<div class="desc">
										<h2>Pancha-<br>patra<br>Set</h2>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="colorlib-shop">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
						<h2><span>New Arrival</span></h2>
						<p>We bring to you our new line of auspiciously healthy copper products.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(images/tw4.jpg);">
								<p class="tag"><span class="new">New</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="cart.php"><i class="icon-shopping-cart"></i></a></span> 
										<span><a href="product-detail%20-%20FlowerPot.html"><i class="icon-eye"></i></a></span> 
										<!--<span><a href="#"><i class="icon-heart3"></i></a></span>
										<span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>--> 
                                        <!-- title, flowerpot and link to flowerpot -->
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="product-detail%20-%20Tawali.html"> Flower Pot</a></h3>
								<!--<p class="price"><span>$300.00</span></p>-->
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(images/bottle.jpg);">
								<p class="tag"><span class="new">New</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="cart.php"><i class="icon-shopping-cart"></i></a></span> 
										<span><a href="product-detail%20-%20WaterBottle.html"><i class="icon-eye"></i></a></span> 
										<!--<span><a href="#"><i class="icon-heart3"></i></a></span>
										<span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>-->
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="product-detail%20-%20WaterBottle.html">Copper Water Bottle</a></h3>
								<!--<p class="price"><span>$300.00</span></p>-->
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(images/fp3.jpg);">
								<p class="tag"><span class="new">New</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="cart.php"><i class="icon-shopping-cart"></i></a></span> 
										<span><a href="product-detail%20-%20Tawali.html "><i class="icon-eye"></i></a></span> 
										<!--<span><a href="#"><i class="icon-heart3"></i></a></span>
										<span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>-->
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="product-detail%20-%20FlowerPot.html">Tawali</a></h3>
								<!--<p class="price"><span>$300.00</span></p>-->
							</div>
						</div>
					</div>
                    <div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(images/jar.jpg);">
								<p class="tag"><span class="new">New</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="cart.php"><i class="icon-shopping-cart"></i></a></span> 
										<span><a href="product-detail%20-%20Jar.html"><i class="icon-eye"></i></a></span> 
										<!--<span><a href="#"><i class="icon-heart3"></i></a></span>
										<span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>-->
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="product-detail%20-%20Jar.html">Water Jar</a></h3>
								<!--<p class="price"><span>$300.00</span></p>-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        
		<div id="colorlib-intro" class="colorlib-intro" style="background-image: url(images/cover-img-12.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="intro-desc">
							<div class="text-salebox">
								<div class="text-lefts">
									<!--<div class="sale-box">
										<div class="sale-box-top">
											<h2 class="number">45</h2>
											<span class="sup-1">%</span>
											<span class="sup-2">Off</span>
										</div>
										<h2 class="text-sale">Sale</h2>
									</div>-->
								</div>
								<div class="text-rights">
									<h2 class="title">Just hurry up limited offer!</h2>
									<!--<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>-->
									<p><a href="shop.html" class="btn btn-primary" style="background-color: #000;">Shop Now</a><!-- <a href="#" class="btn btn-primary btn-outline">Read more</a>--></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-shop">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
						<h2><span>Our Top Selling Products</span></h2>
						<p>Experience sublime serenity by using our top selling line copper products.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(images/ah2.jpg);">
								<p class="tag"><span class="sale">Sale</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="cart.php"><i class="icon-shopping-cart"></i></a></span> 
										<span><a href="product-detail%20-%20AppleHanda.html"><i class="icon-eye"></i></a></span> 
										<!--<span><a href="#"><i class="icon-heart3"></i></a></span>
										<span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>-->
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="product-detail%20-%20AppleHanda.html">Apple Handa</a></h3>
								<!--<p class="price"><span>$199.00</span> <span class="sale">$300.00</span> </p>-->
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(images/km2.jpg);">
								<p class="tag"><span class="new">New</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="cart.php"><i class="icon-shopping-cart"></i></a></span> 
										<span><a href="product-detail%20-%20KulfiMatka.html"><i class="icon-eye"></i></a></span> 
										<!--<span><a href="#"><i class="icon-heart3"></i></a></span>
										<span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>-->
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="product-detail%20-%20KulfiMatka.html">Kulfi Matka</a></h3>
								<!--<p class="price"><span>$300.00</span></p>-->
							</div>
						</div>
					</div>
                    <div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(images/nk2.jpg);">
								<p class="tag"><span class="new">New</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="cart.php"><i class="icon-shopping-cart"></i></a></span> 
										<span><a href="product-detail%20-%20NavarangKalashi.html"><i class="icon-eye"></i></a></span> 
										<!--<span><a href="#"><i class="icon-heart3"></i></a></span>
										<span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>-->
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="product-detail%20-%20NavarangKalashi.html">Navarang Kalashi</a></h3>
								<!--<p class="price"><span>$300.00</span></p>-->
							</div>
						</div>
					</div>
                    <div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(images/kh2.jpg);">
								<p class="tag"><span class="new">New</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="cart.php"><i class="icon-shopping-cart"></i></a></span> 
										<span><a href="product-detail%20-%20KaguHanda.html"><i class="icon-eye"></i></a></span> 
										<!--<span><a href="#"><i class="icon-heart3"></i></a></span>
										<span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>-->
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="product-detail%20-%20KaguHanda.html">Kagu Handa</a></h3>
								<!--<p class="price"><span>$300.00</span></p>-->
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(images/pk2.jpg);">
								<p class="tag"><span class="new">New</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="cart.php"><i class="icon-shopping-cart"></i></a></span> 
										<span><a href="product-detail%20-%20PuneKalshi.html"><i class="icon-eye"></i></a></span> 
										<!--<span><a href="#"><i class="icon-heart3"></i></a></span>
										<span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>-->
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="product-detail%20-%20PuneKalshi.html">Pune Kalshi</a></h3>
								<!--<p class="price"><span>$300.00</span></p>-->
							</div>
						</div>
					</div>
                    <div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(images/mm2.jpg);">
								<p class="tag"><span class="new">New</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="cart.php"><i class="icon-shopping-cart"></i></a></span> 
										<span><a href="product-detail%20-%20MaMalta.html"><i class="icon-eye"></i></a></span> 
										<!--<span><a href="#"><i class="icon-heart3"></i></a></span>
										<span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>-->
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="product-detail%20-%20MaMalta.html">Ma Matla</a></h3>
								<!--<p class="price"><span>$300.00</span></p>-->
							</div>
						</div>
					</div>
                    <div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(images/pwl2.jpg);">
								<p class="tag"><span class="new">New</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="cart.php"><i class="icon-shopping-cart"></i></a></span> 
										<span><a href="product-detail%20-%20Pawali.html"><i class="icon-eye"></i></a></span> 
										<!--<span><a href="#"><i class="icon-heart3"></i></a></span>
										<span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>-->
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="product-detail%20-%20Pawali.html">Pawali</a></h3>
								<!--<p class="price"><span>$300.00</span></p>-->
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(images/sl2.jpg);">
								<p class="tag"><span class="new">New</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="cart.php"><i class="icon-shopping-cart"></i></a></span> 
										<span><a href="product-detail%20-%20SangliLota.html"><i class="icon-eye"></i></a></span> 
										<!--<span><a href="#"><i class="icon-heart3"></i></a></span>
										<span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>-->
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="product-detail%20-%20SangliLota.html">Sangli Lota</a></h3>
								<!--<p class="price"><span>$300.00</span></p>-->
							</div>
						</div>
					</div>		
				</div>
			</div>
		</div>
		
		<div id="colorlib-subscribe">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2" style="padding-left: 60px;"><center>
						<div class="col-md-6 text-center" style="margin-top: 10px; padding-left: 5px;">
							<h2 style="color: #fff"><!--<i class="icon-paperplane"></i>-->Join us as <br> Distributor / Retailer</h2>
						</div>
						<div class="col-md-6">
							<!--<form class="form-inline qbstp-header-subscribe">-->
								<div class="row ">
									<div class="col-md-12 col-md-offset-0 align-self-center">
										<div class="form-group">
											<!--<input type="text" class="form-control" id="email" placeholder="Enter your email">--> <p></p>
											 <button type="submit" class="btn btn-primary" style="margin-top: 3px; background-color: #000;" ><p href="contact.html" style="color: #fff; margin-bottom: 0px;">Contact Us</p></button> 
										</div>
									</div>
								</div>
							<!--</form>-->
						</div></center>
					</div>
				</div>
			</div>
		</div>

		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						<!--<h4>About Store</h4>
						<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>-->
						<p>
							<ul class="colorlib-social-icons">
                                <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
					
                    <div class="col-md-5">
						<h4>Contact Information</h4>
						<ul class="colorlib-footer-links">
							<li>234, New Raviwar Peth, Near Phulwala Chowk,<br>Pune 411002, Maharashtra, India</li>
                            <li>B 43, MIDC Wai 412803, District Satara, Maharashtra, India</li>
							<li>Shaktikumar - +91 98606 14100 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; shaktikumar@pratikcopper.com</li>                             <li> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;sales@pratikcopper.com</li>
                             
							<!--<li><a href="#">yoursite.com</a></li>-->
						</ul>
					</div>

					<div class="col-md-4">
                        <a ><img class="img-responsive" src="images/mii.png" alt="Pratik Copper - Make in India"></a>
						
					</div>

			</div>
			<div class="copy">
				<div class="row">
					<div class="col-md-12 text-center">
						<p>
							
							<span class="block"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
&copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | Pratik Copper | Developed & Maintained by <a href="https://vishwadhaa.com" target="_blank"><b>Vishwadhaa</b></a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span> 
						</p>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
        
        <style>
        
        @media screen and (max-width : 1920px){
          .mobile{
          /*visibility:hidden; PC */
              display:none;
          }
        }
    
        @media screen and (max-width : 906px){
         .desk{
          /*visibility:hidden;*/
             display:none;
          }
         .mobile{
          /*visibility:visible;*/
             display: block;
          }
           #colorlib-hero .flexslider .slider-text > .slider-text-inner .desc:after {
                position: absolute;
                top: -3em !important;
                left: -3em !important;
                right: 0;
                bottom: 0;
                width: 220px  !important;
                height: 220px  !important;
            }  
            .head-1{  font-size: 40px !important;} .head-2{  font-size: 30px !important;} .head-3{  font-size: 30px !important;}
            
            .pp1{bottom: -95px !important; left: -30px !important;} .pp2{position: absolute; bottom: -80px !important; left: -30px !important;} .pp3{position: absolute; bottom: -50px !important; left: -30px !important;}
            
           #colorlib-hero .flexslider .slider-text > .slider-text-inner .desc{
                top:14px !important;
                left:-20px !important;
            }
            .slider-text-inner{
                 position: absolute;
                top: 7em !important;
                left: 4.9em !important;
            }
            
            #colorlib-intro {
                    background-position: 75% -14.2998px;
                }
        }
        
        </style>
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>