<?php 
$var = '0';
if(isset($_GET['var']))
$var=$_GET['var'];

class product{
    private $id;
    private $name;
    private $img1; private $img2; private $img3;
    private $sizenum;
    private $size;
    private $sorw;
    private $titles;
    private $weights;
    
    public function  __construct($id,$name,$img1,$img2,$img3,$sizenum,$size,$sorw,$titles,$weights) {
    $this->id = $id;
    $this-> name = $name;
    $this-> size = $size;
    $this-> sizenum = $sizenum;  
    $this-> img1 = $img1;
    $this-> img2 = $img2;
    $this-> img3 = $img3;
    $this-> sorw = $sorw;
    $this-> titles = $titles;
    $this-> weights = $weights;
  }
    public function aname()
    {        echo $this->name;     }
     public function asizenum()
    {        echo $this->sizenum;     }
     public function rsizenum()
    {        return $this->sizenum;     }
     public function aimg1()
    {        echo $this->img1;     }
     public function aimg2()
    {        echo $this->img2;     }
     public function aimg3()
    {        echo $this->img3;     }
     public function aid()
    {        echo $this->id;     }
    public function asorw()
    {        echo $this->sorw;     }
     public function asize($index)
    {        echo $this->size[$index];     } 
     public function atitles($index)
    {        echo $this->titles[$index];     }
     public function aweights($index)
    {        echo $this->weights[$index];     }
}

$aaa=array("xs","s","m","l","xl"); $alength=count($aaa);
$prod1 = new product(1,"Ghangal","images/blah3.jpg","images/item-17.JPG","images/item-16.jpg",$alength,$aaa);
$products = array($prod1);
$n=$var;
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Store Template</title>
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
    <style>
     .size-wrap p.size-desc .size:hover {
            color: #B37463; }

        .btnn {
        border: none;
        outline: none;
        padding: 10px 16px;
        background-color: #f1f1f1;
        cursor: pointer;
        font-size: 18px;
             text-transform: uppercase;
    }

    /* Style the active class, and buttons on mouse-over */
    button.active, .btnn:hover {
        background-color: #B37463;
        color: white;
    }
    .product-detail-wrap .thumb-nail .thumb-img {
    
            width: 31.9%;
        }
    </style>
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>

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
									<ul class="dropdown">
										<li><a href="product-detail.html">Product Detail</a></li>
										<li><a href="cart.php">Shipping Cart</a></li>
										<li><a href="checkout.html">Checkout</a></li>
										<li><a href="order-complete.html">Order Complete</a></li>
										<li><a href="add-to-wishlist.html">Wishlist</a></li>
									</ul>
								</li>
								<li><a href="blog.html">Blog</a></li>
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
			   	<li style="background-image: url(images/cover-img-1.jpg);" >
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Product Detail</h1>
				   					<h2 class="bread"><span><a href="home.php">Home</a></span> <span><a href="shop.html">Product</a></span> <span>Product Detail</span></h2>
				   				</div>
				   			</div>
				   		</div> 
			   		</div>
			   	</li>
			  	</ul> 
		  	</div>
		</aside>
        
		<div class="colorlib-shop" style="padding-top: 50px;" id="gap"> 
			<div class="container">
				<div class="row row-pb-lg">
					<div class="col-md-10 col-md-offset-1">
						<div class="product-detail-wrap">
							<div class="row">
								<div class="col-md-5">
									<div class="product-entry">
										<div class="product-img" id = "changeimg" style="background-image: url(images/blah3.jpg);">
                                            
											<p class="tag"><span class="sale">Sale</span></p>
										</div>
										<div class="thumb-nail">
                                            <a href="#gap" class="thumb-img" style="background-image: url(<?php $products[$n]->aimg1(); ?>);" onclick="fx(1)"></a>
                                            <a href="#gap" class="thumb-img" style="background-image: url(<?php $products[$n]->aimg2(); ?>);" onclick="fx(2)"></a>
                                            <a href="#gap" class="thumb-img" style="background-image: url(<?php $products[$n]->aimg3(); ?>);" onclick="fx(3)"></a>
										</div>
									</div>
								</div>
								<div class="col-md-7">
									<div class="desc">
										<h3> <?php $products[$n]->aname(); ?> </h3>

										<p> <?php $products[$n]->adesc(); ?> </p>
                                        
                                        <div id="size-wrap">
                                            <p class="size-desc">
                                            Size: 
                                            <!--
                                            <a href="javascript:void(0);" class="size" ><button class="btnn active"><div id = "txt1" >xs</div></button></a>
                                            <a href="javascript:void(0);" class="size" ><button class="btnn"><div id = "txt2">s</div></button></a>
                                            <a href="javascript:void(0);" class="size" ><button class="btnn"><div id = "txt3">m</div></button></a>
                                            <a href="javascript:void(0);" class="size" ><button class="btnn"><div id = "txt4">l</div></button></a>
                                            <a href="javascript:void(0);" class="size" ><button class="btnn"><div id = "txt5">xl</div></button></a>
                                             -->
                                                <?php
                                                for($i=0;$i<$products[$n]->rsizenum();$i++)
                                                {
                                                    if ($i==0) $x= "active"; else $x="";
                                                    echo "<a href=\"javascript:void(0);\" class=\"size\"><button class=\"btnn ",$x, " \"><div id =\"txt",$i+1," \"> ",$products[$n]->asize($i)," </div></button></a> ";
                                                }
                                                ?>
                                                </p>
                                        </div>
                                        
										<div class="row row-pb-sm">
											<div class="col-md-4">
                                                <div class="input-group">
                                                    <span class="input-group-btn">
                                                    <button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
                                                      <i class="icon-minus2"></i>
                                                    </button>
                                                    </span>
                                                    <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
                                                    <span class="input-group-btn">
                                                    <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                                                        <i class="icon-plus2"></i>
                                                    </button>
                                                    </span>
                                                </div>
                        			         </div> 
										</div> s
                                         <h3> Price: &#x20B9; 1000.00 </h3>  
                                        <form action="add.php" method="post" name="newform"> 
                                                <input type="hidden" name="price" value="100">
                                                <input type="hidden" name="qty" value="1">
                                                <input type="hidden" name="size" value="<?php $products[$n]->asize(0); ?>">
                                                <p><a href="#" class="btn btn-primary btn-addtocart" id="qty"><i class="icon-shopping-cart"></i>
                                                <button type="submit" style="background-color: transparent; border-color: transparent; cursor: default;">  Add to Cart </button></a></p>
                                        </form>    
									</div>
								</div>
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
					<div class="col-md-8 col-md-offset-2">
						<div class="col-md-6 text-center">
							<h2><i class="icon-paperplane"></i>Sign Up for a Newsletter</h2>
						</div>
						<div class="col-md-6">
							<form class="form-inline qbstp-header-subscribe">
								<div class="row">
									<div class="col-md-12 col-md-offset-0">
										<div class="form-group">
											<input type="text" class="form-control" id="email" placeholder="Enter your email">
											<button type="submit" class="btn btn-primary">Subscribe</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						<h4>About Store</h4>
						<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-2 colorlib-widget">
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
					</div>

					<div class="col-md-2">
						<h4>News</h4>
						<ul class="colorlib-footer-links">
							<li><a href="blog.html">Blog</a></li>
							<li><a href="#">Press</a></li>
							<li><a href="#">Exhibitions</a></li>
						</ul>
					</div>

					<div class="col-md-3">
						<h4>Contact Information</h4>
						<ul class="colorlib-footer-links">
							<li>291 South 21th Street, <br> Suite 721 New York NY 10016</li>
							<li><a href="tel://1234567920">+ 1235 2355 98</a></li>
							<li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
							<li><a href="#">yoursite.com</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="copy">
				<div class="row">
					<div class="col-md-12 text-center">
						<p>
							
							<span class="block"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart2" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span> 
							<span class="block">Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a> , <a href="http://pexels.com/" target="_blank">Pexels.com</a></span>
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

	<script>
		$(document).ready(function(){

		var quantity=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		       // quantitiy=quantity;
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);
                  document.newform.qty.value = quantity+1;
		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());

		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
                        document.newform.qty.value = quantity-1;
		            }
                    else document.newform.qty.value = quantity;
                 
		    });
              
		});

function fx(y) {
    var x = document.getElementById("changeimg");
    document.newform.qty.value = quantity;
    if(y==1)
        {
            x.style.backgroundImage ="url(<?php $products[$n]->aimg1(); ?>)";
        }
    else if(y==2){
        x.style.backgroundImage ="url(<?php $products[$n]->aimg2(); ?>)";
    }
    else if(y==3){
        x.style.backgroundImage ="url(<?php $products[$n]->aimg3(); ?>)";
    }
}
    // Add active class to the current button (highlight it)
    var header = document.getElementById("size-wrap"); console.log("in the function man.. ");
    var btns = header.getElementsByClassName("btnn"); console.log(btns.length);
   
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = header.getElementsByClassName("active"); 
            if (current.length > 0) { 
                current[0].className = current[0].className.replace(" active", "");
            }
            this.className += " active"; var btns1 = header.getElementsByClassName("btnn active");  console.log("active = "); console.log(btns1[0].textContent); 
            document.newform.size.value = btns1[0].textContent;
      });
    }
</script>
	</body>
</html>

