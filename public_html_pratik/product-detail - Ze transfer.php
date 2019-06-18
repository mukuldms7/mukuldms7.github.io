
	 <link rel="stylesheet" href="style0.css">
	 
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
												   
													</p>
											</div>
		
		
											 <h3> Price: &#x20B9; 1000.00 </h3>  
											<form action="add.php" method="post" name="newform"> 
													<input type="hidden" name="name" value="">
													<input type="hidden" name="price" value="100">
													<input type="hidden" name="qty" value="1">
													<input type="hidden" name="size" value="">
													<p><a href="#" class="btn btn-primary btn-addtocart" id="qty"><i class="icon-shopping-cart"></i>
													<button type="submit" style="background-color: transparent; border-color: transparent; cursor: default;">  Add to Cart </button></a></p>
											</form>    
									

		<script src="jsfile.js"></script>
		
<input type="hidden" name="img" value="">

function towny(z) { 
    if ($(window).width() < 960) {        
        fx((z%3)+1);
    }
        setTimeout(function() {
                towny(z+1);
            }, 3000);
    }
    
    towny(1);