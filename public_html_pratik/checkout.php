<?php
include ('dbConfig.php');

if (isset($_POST['count']))
{
    $x=$_POST['count'];
    for($i=0;$i<$x;$i++)
    {
        $qty=$_POST['quantity'][$i]; $iid=$_POST['idno'][$i];
        $validate = "UPDATE cart SET quantity = '$qty' WHERE id = '$iid'";
        $result2 = mysqli_query($con,$validate);
    }
}

?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Pratik - Checkout</title>
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
	<body onload="myFunction()">
		
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
								<!--	<ul class="dropdown">
										<li><a href="product-detail%20-%20AppleHanda.html">Product Detail</a></li>
										<li><a href="cart.php">Shipping Cart</a></li>
										<li><a href="checkout.html">Checkout</a></li>
										<li><a href="order-complete.html">Order Complete</a></li>
										<li><a href="add-to-wishlist.html">Wishlist</a></li>
									</ul>-->
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
				   					<h1>Checkout</h1>
				   					<h2 class="bread"><span><a href="home.php">Home</a></span> <span><a href="cart.php">Shopping Cart</a></span> <span>Checkout</span></h2>
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
							<div class="process text-center active">
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
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<form method="post" class="colorlib-form" action="mail.php" name="formname">
							<h2>Billing Details</h2>
		              	<div class="row">
			               <div class="form-group">
									<div class="col-md-6">
										<label for="fname">First Name</label>
										<input type="text" name="fname" class="form-control" placeholder="Your firstname" required>
									</div>
									<div class="col-md-6">
										<label for="lname">Last Name</label>
										<input type="text" name="lname" class="form-control" placeholder="Your lastname" required>
									</div>
								</div>
			               <div class="col-md-12">
									<div class="form-group">
										<label for="fname">Address</label>
			                    	<input type="text" name="address1" class="form-control" placeholder="Enter Your Address" required>
			                  </div>
			                  <div class="form-group">
			                    	<input type="text" name="address2" class="form-control" placeholder="Second Address" >
			                  </div>
			               </div>
			               <div class="col-md-12">
									<div class="form-group">
										<label for="companyname">Town/City</label>
			                    	<input type="text" name="towncity" class="form-control" placeholder="Town or City" required>
			                  </div>
			               </div>
			               <div class="form-group">
									<div class="col-md-6">
										<label for="stateprovince">State</label>
										<input type="text" name="State" class="form-control" placeholder="State " required>
									</div>
									<div class="col-md-6">
										<label for="lname">Postal Code</label>
										<input type="text" name="postalcode" id="pin" class="form-control" placeholder=" Postal">
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-6">
										<label for="email">E-mail Address</label>
										<input type="text" name="email" class="form-control" placeholder="State Province" required>
									</div>
									<div class="col-md-6">
										<label for="Phone">Phone Number</label>
										<input type="text" name="phone" class="form-control" placeholder=" Phone Number" required>
									</div>
								</div>
		              </div>
                            <div id="message1" >
                              <h2> <center>   We have distributers in your state, Your order can be delivered in 10 days, We will contact you.</center></h2>
                            </div> 
                             <div id="message2">
                             <h2>  <center>  No distributer is available in your state, We will contact you for delivery options. </center></h2>
                            </div> 
                            <p><center> <input type="submit" value="Place an order" class="btn btn-primary"></center></p>
		            </form>
                        
					</div>
					<div class="col-md-2">
						<!--<div class="cart-detail">
							<h2>Cart Total</h2>
							<ul>
								<li>
									<span>Subtotal</span> <span>$100.00</span>
									<ul>
										<li><span>1 x Product Name</span> <span>$99.00</span></li>
										<li><span>1 x Product Name</span> <span>$78.00</span></li>
									</ul>
								</li>
								<li><span>Shipping</span> <span>$0.00</span></li>
								<li><span>Order Total</span> <span>$180.00</span></li>
							</ul>
						</div>
                            <div class="cart-detail">
							<h2>Payment Method</h2>
							<div class="form-group">
								<div class="col-md-12">
									<div class="radio">
									   <label><input type="radio" name="optradio">Direct Bank Tranfer</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-12">
									<div class="radio">
									   <label><input type="radio" name="optradio">Check Payment</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-12">
									<div class="radio">
									   <label><input type="radio" name="optradio">Paypal</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-12">
									<div class="checkbox">
									   <label><input type="checkbox" value="">I have read and accept the terms and conditions</label>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p><a href="order-complete.html" class="btn btn-primary">Place an order</a></p>
							</div>-->
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-shop">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
						<h2><span>Recommended Products</span></h2>
						<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(images/item-5.jpg);">
								<p class="tag"><span class="new">New</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="#"><i class="icon-shopping-cart"></i></a></span> 
										<span><a href="product-detail.html"><i class="icon-eye"></i></a></span> 
										<span><a href="#"><i class="icon-heart3"></i></a></span>
										<span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="shop.html">Floral Dress</a></h3>
								<p class="price"><span>$300.00</span></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(images/item-6.jpg);">
								<p class="tag"><span class="new">New</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="#"><i class="icon-shopping-cart"></i></a></span> 
										<span><a href="product-detail.html"><i class="icon-eye"></i></a></span> 
										<span><a href="#"><i class="icon-heart3"></i></a></span>
										<span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="shop.html">Floral Dress</a></h3>
								<p class="price"><span>$300.00</span></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(images/item-7.jpg);">
								<p class="tag"><span class="new">New</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="#"><i class="icon-shopping-cart"></i></a></span> 
										<span><a href="product-detail.html"><i class="icon-eye"></i></a></span> 
										<span><a href="#"><i class="icon-heart3"></i></a></span>
										<span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="shop.html">Floral Dress</a></h3>
								<p class="price"><span>$300.00</span></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(images/item-8.jpg);">
								<p class="tag"><span class="new">New</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="#"><i class="icon-shopping-cart"></i></a></span> 
										<span><a href="product-detail.html"><i class="icon-eye"></i></a></span> 
										<span><a href="#"><i class="icon-heart3"></i></a></span>
										<span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="shop.html">Floral Dress</a></h3>
								<p class="price"><span>$300.00</span></p>
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
					<!--<div class="col-md-2 colorlib-widget">
						<h4>Customer Care</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#">Contact</a></li>
								<li><a href="#">Returns/Exchange</a></li>
								<li><a href="#">Gift Voucher</a></li>
								<li><a href="#">Wishlist</a></li>
								<li><a href="#">Special</a></li>
								<li><a href="#">Customer Services</a></li>
								<li><a href="#">Site maps</a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-2 colorlib-widget">
						<h4>Information</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#">About us</a></li>
								<li><a href="#">Delivery Information</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Support</a></li>
								<li><a href="#">Order Tracking</a></li>
							</ul>
						</p>
					</div>-->
                
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
    <style>
        #message1, #message2{display: none; }
    </style>
	<script>
        
        function postit(){
        var input = document.getElementById("pin");
            var pinned = document.getElementById("message1");
             var unpinned = document.getElementById("message2");
        
           if( input.value.length == "6")
           {
               if(input.value > "200000" && input.value < "699999")
                   {
                       if(input.value[0] == "2" && input.value[1] == "9")
                            upn();
                       else if(input.value[0] == "3" && input.value[1] == "5")
                            upn();
                       else if(input.value[0] == "4" && input.value[1] == "9")
                            upn();
                       else pn();
                   }
               else upn();
           } else nopn();
        }
        var myVar;
        
        function pn() {
            var pinned = document.getElementById("message1");
             var unpinned = document.getElementById("message2");
            pinned.style.display="block";
            unpinned.style.display="none";
        }
        function upn() { 
            var pinned = document.getElementById("message1");
             var unpinned = document.getElementById("message2");
            pinned.style.display="none";
            unpinned.style.display="block";
        }
         function nopn() { 
            var pinned = document.getElementById("message1");
             var unpinned = document.getElementById("message2");
            pinned.style.display="none";
            unpinned.style.display="none";
        }
        
        function myFunction() {
            myVar = setInterval(postit, 1000);
        }
        
    </script>

	</body>
</html>

