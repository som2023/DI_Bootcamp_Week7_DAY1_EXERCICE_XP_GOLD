<?php
class Product
{
    public $name;
    public $description;
    public $price;
    function __construct($name)
    {
        $this->name = $name;
         
    }  
}
$product1 = new Product("Iphone 14");
$product2 = new Product("Iphone 14 Pro");
echo $product1->name."<br>";
echo $product2->name;
?>
