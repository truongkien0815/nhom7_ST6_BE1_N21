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
    
   if($manu->updatemanu($_GET['id'],$_POST['type_name']))
    {
        echo "chỉnh sửa thành công :";
        header('location:manufacture.php');
    }
    else
    {
        echo "chỉnh sửa không thành công";
   }
}

?>