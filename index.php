
 <?php
 /*

Class Product
{
    public $productID;
    public $name;
    public $price;
    public $quantity;
}
function set_ID($productID){
    $this->productID= $productID;
}
function get_ID() {
    return $this->productID;

}
function set_name($name){
    $this->name= $name;
}
function get_name() {
    return $this->name;

}
function set_price($price){
    $this->price= $price;
}
function get_price() {
    return $this->price;

}
function set_quantity($quantity){
    $this->quantity= $quantity;
}
function get_quantity() {
    return $this->quantity;

}

$copy= new Product();
$copy->set_name('Copy');
echo "Product name:". $copy->get_name();
*/
class Product {
    public $productId;
    public $name;
    public $price;
    public $quantity;

    public function __construct($productId, $name, $price, $quantity) {
        $this->productId = $productId;
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function displayProductDetails() {
        echo "Product ID: " . $this->productId . "<br>";
        echo "Name: " . $this->name . "<br>";
        echo "Price: $" . $this->price . "<br>";
        echo "Quantity: " . $this->quantity . "<br>";
    }

    public function calculateTotalPrice() {
        return $this->price * $this->quantity;
    }

    public function updateQuantity($newQuantity) {
        $this->quantity = $newQuantity;
    }
}


// Create a new product instance
$product = new Product(1, "Copy", 100, 5);

// Display the product details
$product->displayProductDetails();

// Calculate the total price
$totalPrice = $product->calculateTotalPrice();
echo "Total Price:" . $totalPrice . "<br>";

// Update the quantity
$product->updateQuantity(10);

// Display the updated product details
$product->displayProductDetails();
$totalPrice = $product->calculateTotalPrice();
echo "Total Price:" . $totalPrice . "<br>";
echo "<br>";
echo "<br>";
?> 



<?php

Class BankAccount{
    public $accountnumber;
    public $accountname;
    public $balance;
    

    public function __construct($accountnumber,$accountname,$balance){
        $this->accountnumber = $accountnumber;
        $this->accountname = $accountname;
        $this->balance = $balance;
        

    }

    function Deposite(){
        echo "Previous Balance: Rs" . $this->balance . "<br>";
        echo "Deposite amount: Rs" . $this->NewDeposite. "<br>";
        $D = $this->balance + $this->NewDeposite;
        return $D;
    }
}
?>

