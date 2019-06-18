<?php
session_start();

 
//Dump out the session variable, just to
//see what it looks like.
class cart{
    private $id;
    private $name;
    private $size;
    private $qty;
    private $price;
    
    public function  __construct($id,$name,$size,$qty,$price) {
    $this->id = $id;
    $this-> name = $name;
    $this-> size = $size;
    $this-> qty =  $qty;   
    $this-> price = $price;
  }
    public function op()
    {
       echo " ".$this->id;
       echo " ".$this-> name;
       echo " ".$this-> size;
       echo " ".$this-> qty;   
       echo " ".$this-> price;
        
    }
}
$cartArray[] = new cart('1','1','1','1','122');
 
//Store the array in a session variable called "cart"
$_SESSION['carter'] = $cartArray;
?>