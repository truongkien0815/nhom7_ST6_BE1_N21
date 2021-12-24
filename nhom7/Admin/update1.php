<?php
require "models/config.php";
require "models/db.php";
require "models/product.php";
require "models/protype.php";
require "models/manufactures.php";
$product = new Product;
$protype = new Protype;
$manu = new Manufacture;
//&& isset($_POST['submit']) 




 if(isset($_POST['submit']) && isset($_GET['id']))
 {   
    $name=$_POST['name'];
    $price = $_POST['price'];
    $image =$_POST['image'];
    $protype = $_POST['type'];
    $manu =$_POST['manu'];
    
   if( $product->updateProduct($name,$price,$image,$protype,$manu,$_GET['id']))
   {
    echo "thêm thành cong";
    $target_dir = "../uploads/";
$starget_file =$starget_dir .basename($_FILES["image"]["name"]);
//move_uploaded_file($_FILES["uploads"], $starget_file);
move_uploaded_file($_FILES["tmp_name"], $starget_file);
 
header('location:products.php');
    
    
     
    //$product->updateProduct($_GET['id']);
  //  header('location:products.php');
     
    
 }
}

 ?>
 <?php// if(isset($_POST['submit']) && isset($_GET['id'])
 

?>
