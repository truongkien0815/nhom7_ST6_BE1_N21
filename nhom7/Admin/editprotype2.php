<?php 
require "models/config.php";
require "models/db.php";
require "models/product.php";
require "models/protype.php";
require "models/manufactures.php";
$product = new Product;
$protype = new Protype;
$manu = new Manufacture;
if(isset($_POST['submit']) && isset($_GET['id']))
{
    
   if($protype->updateprotype($_POST['type_name'],$_GET['id']))
    {
        echo "thành công:";
        header('location:protypes.php');
    }
    else
    {
        echo "Không thành công";
   }
}

?>