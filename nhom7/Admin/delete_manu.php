<?php 
require "models/config.php";
require "models/db.php";
require "models/product.php";
require "models/protype.php";
require "models/manufactures.php";
$product = new Product;
$protype = new Protype;
$manu = new Manufacture;
$getpro = $product->getProduct();
if(isset($_GET['id']))
{
   $manu->deletemanu($_GET['id']);
                echo "thành công:";
               
              header('location:manufacture.php');
            
        
       
    }
    else
    {
       echo" không thành công";
    }

    
    ?>
