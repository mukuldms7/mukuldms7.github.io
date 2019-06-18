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
                  document.newform.qty.value = quantity+1; console.log("qty = "); console.log(document.newform.qty.value); 
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
                        document.newform.qty.value = quantity-1; console.log("qty = "); console.log(document.newform.qty.value); 
		            }
                    else document.newform.qty.value = quantity; console.log("qty = "); console.log(document.newform.qty.value); 
		    });
              
		});
	
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