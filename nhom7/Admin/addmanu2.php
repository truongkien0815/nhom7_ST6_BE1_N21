<?php 
require "models/config.php";
require "models/db.php";
require "models/product.php";
require "models/manufactures.php";
require "models/protype.php";
$product = new Product;

$manu = new Manufacture;

$protype = new Protype;
if(isset($_POST['submit']))
{
  
   $name = $_POST['manu_name'];

 if($manu->addmanufacture($name))
 
     echo "Thanh cong";
     header('location:manufacture.php');
 }
 else
 {
     echo "Không thành công";
 }
 

 
 ?>