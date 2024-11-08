<?php
include ('dbConfig.php');

if (isset($_GET['del']))
{
    $x=$_GET['del'];
    $validate = "DELETE FROM cart where id = '$x' ";
    $result2 = mysqli_query($con,$validate);
}

$validate = "SELECT * FROM cart   ";
$result2 = mysqli_query($con,$validate);
$count=0;

                    
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Pratik - Cart</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
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
								<li><a href="home.php">Home</a></li>
								<li class="has-dropdown active">
									<a href="shop.html">Shop</a>
								</li>
								<!--<li><a href="blog.html">Blog</a></li>-->
								<li><a href="about.html">About</a></li>
								<li><a href="contact.html">Contact</a></li>
								<li><a href="cart.php"><i class="icon-shopping-cart"></i> Cart </a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero" class="breadcrumbs">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/cover-img-1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Shopping Cart</h1>
				   					<h2 class="bread"><span><a href="home.php">Home</a></span> <span><a href="shop.html">Product</a></span> <span>Shopping Cart</span></h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div class="colorlib-shop">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-10 col-md-offset-1">
						<div class="process-wrap">
							<div class="process text-center active">
								<p><span>01</span></p>
								<h3>Shopping Cart</h3>
							</div>
							<div class="process text-center">
								<p><span>02</span></p>
								<h3>Checkout</h3>
							</div>
							<div class="process text-center">
								<p><span>03</span></p>
								<h3>Order Complete</h3>
							</div>
						</div>
					</div>
				</div>
                
                 <form action="checkout.php" method="post">
				<div class="row row-pb-md">
					<div class="col-md-10 col-md-offset-1">
						<div class="product-name">
							<div class="one-forth ">
								<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Product Details</span>
							</div>
						
							<div class="one-eight text-center">
								<span>Quantity</span>
							</div>
                            <div class="one-eight text-center">
                                <span> Size </span>
                            </div>
				
							<div class="one-eight text-center">
								<span>Remove</span>
							</div>
						</div>
                       
                        <?php foreach ($result2 as $row)
                    { $count++;  ?>
						<div class="product-cart">
							<div class="one-forth">
								<div class="product-img" style="background-image: url(<?php echo $row['image'];?>);">
								</div>
								<div class="display-tc">
									<h3> <?php echo $row['name'];?> </h3>
								</div>
							</div>
							
							<div class="one-eight text-center">
								<div class="display-tc">
									<input type="text" id="quantity" name="quantity[]" class="form-control input-number text-center" value="<?php echo $row['quantity']; ?> " min="1" max="100">
                                    <input type="hidden" id="idno" name="idno[]" value="<?php echo $row['id'];?>">
								</div>
							</div>
                            <div class="one-eight text-center">
                                <div class="display-tc">
									<h3><?php echo $row['size'];?></h3>
								</div>
                            </div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<a href="cart.php?del=<?php echo $row['id'];?>" class="closed"></a>
								</div>
							</div>
						</div>
					 <?php }?>
                    </div>
				</div>
                <input type="hidden" id="count" name="count" value="<?php echo $count;?>">
                <center> 
               <a href="#">  <input type="submit" name="sub" value="Confirm cart" class="btn btn-primary"> </a>
                    </center>
                </form>
				<!--<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="total-wrap">
							<div class="row">
								<div class="col-md-8">
									<form action="#">
										<div class="row form-group">
											<div class="col-md-9">
												<input type="text" name="quantity" class="form-control input-number" placeholder="Your Coupon Number...">
											</div>
											<div class="col-md-3">
												<input type="submit" value="Apply Coupon" class="btn btn-primary">
											</div>
										</div>
									</form>
								</div>
								<div class="col-md-3 col-md-push-1 text-center">
									<div class="total">
										<div class="sub">
											<p><span>Subtotal:</span> <span>$200.00</span></p>
											<p><span>Delivery:</span> <span>$0.00</span></p>
											<p><span>Discount:</span> <span>$45.00</span></p>
										</div>
										<div class="grand-total">
											<p><span><strong>Total:</strong></span> <span>$450.00</span></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>-->
			</div>
		</div>

		<div class="colorlib-shop">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
						<h2><span>New Arrival</span></h2>
						<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
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
										<span><a href="product-detail%20-%20Tawali.html"><i class="icon-eye"></i></a></span> 
										<!--<span><a href="#"><i class="icon-heart3"></i></a></span>
										<span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>-->
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="product-detail%20-%20Tawali.html">Tawali</a></h3>
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
										<span><a href="product-detail%20-%20FlowerPot.html"><i class="icon-eye"></i></a></span> 
										<!--<span><a href="#"><i class="icon-heart3"></i></a></span>
										<span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>-->
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="product-detail%20-%20FlowerPot.html">Flower Pot</a></h3>
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


        <p><br><br></p>
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
                        <a ><img class="img-responsive" src="images/mii.png" alt=""></a>
						
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
	</script>

	</body>
</html>

