<?php
require "models/config.php";
require "models/db.php";
require "models/product.php";
require "models/manufactures.php";
require "models/protype.php";
$product = new Product;
$protype = new Protype;
$manu = new Manufacture;
if(isset($_POST['submit']))
{
    $name =$_POST['name'];
    $manu_id =$_POST['manu'];
    $type_id =$_POST['type'];
    $price =$_POST['price'];
    $desc =$_POST['desc'];
    $image =$_POST['image'];
    //$image =$_FILES['image']['name'];
    
    //xử lý thêm sản phẩm
    //$product->addProduct($name,$manu_id,$type_id,$price,$image,$desc);
    // xử lý upload
    if($product->addProduct($name,$manu_id,$type_id,$price,$image,$desc))
    {
       
        echo "thêm thành cong";
        $target_dir = "../uploads/";
    $starget_file =$starget_dir .basename($_FILES["image"]["name"]);
    //move_uploaded_file($_FILES["uploads"], $starget_file);
    move_uploaded_file($_FILES["tmp_name"], $starget_file);
    header('location:products.php');
       
    }
    else
    {
        echo "thêm không thành công";
    }
    
    
    


}


?>