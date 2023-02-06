<?php
class Product
{

    public $name;
    public $description;
    public $price;
    
    

    function __construct($name,$description,$price)
    {
         $this->name = $name;
         $this->description = $description;
         $this->price = $price;
         
    }  
}
 $product1 = new Product('iPhone 12', 'This is a great iPhone', 799.99);
 $product2 = new Product('iPhone 12', 'This is a great iPhone', 799.99);
 echo $product1->name."\n";
 echo $product1->description."\n";
 echo $product1->price."<br />\n";
 echo $product2->name."\n";
 echo $product2->description."\n";
 echo $product2->price;
?>
