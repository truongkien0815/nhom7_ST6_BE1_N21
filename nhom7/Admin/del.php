<?php 
require "models/config.php";
require "models/db.php";
require "models/product.php";
require "models/protype.php";
require "models/manufactures.php";
$product = new Product;
$protype = new Protype;
$manu = new Manufacture;
if(isset($_GET['id']))
{
    $product->delProduct($_GET['id']);
    header('location:products.php');
}


?>