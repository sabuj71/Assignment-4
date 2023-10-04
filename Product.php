<?php 

class Product {
    //  Add properties
    private $id;
    private $name;
    private $price;
    
    public function __construct($id, $name, $price) {
        //  Initialize properties
        $this->id=$id;
        $this->name=$name;
        $this->price=$price;
    }
    // Add getFormattedPrice method
    public function getFormattedPrice(){
        return 'TK-' .number_format($this->price ,2);
    }
    public function showDetails(){
        echo "Product Details: \n";
        echo "ID:{$this->id} \n";
        echo "Name:{$this->name} \n";
        echo "Price:{$this->getFormattedPrice()} ";
    }

}
// Test the Product class
$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();
?>