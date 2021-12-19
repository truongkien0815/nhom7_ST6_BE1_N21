<?php 
require "models/config.php";
require "models/db.php";
require "models/product.php";
require "models/manufactures.php";
require "models/protype.php";
$product = new Product;

$manu = new Manufacture;

$protype = new Protype;
if(isset($_GET['submit']))
{
  
   $name = $_GET['type_name'];

 if($protype->add($name))
 {
     echo "Thanh coong";
     header('location:protypes.php');
 }
 else
 {
   echo "Không thành công";
 }

 }


?>