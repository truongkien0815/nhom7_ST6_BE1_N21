<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>cart</title>
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
	
</head>
<body>
<?php
require "config.php";
require "models/db.php";
require "models/product.php";
$product = new Product;
require "models/protype.php";
$getAllProducts = $product->getAllProducts();
$protype = new Protype;

//var_dump($getAllProducts);
?>
       
         
 
          
    <h1>Your cart</h1>
    <table border="1" cellspacing="0" cellpadding="5">
	<tr>
		<th>id</th>
		<th>Name</th>
		<th>Quantity</th>
        <th>Image</th>
		<th>Price</th>
        
        <th>Description</th>
       
		<th>Action</th>
       
	</tr>
<?php 
 
?>
    
    <?php
    if(isset($_GET['id']))
    {
   $id = $_GET['id'];
        {
?>                 
    <?php
        if (isset($_SESSION['cart'][$id])){
            $_SESSION['cart'][$id]++;
        }else
        {
            $_SESSION['cart'][$id] = 1;
        }
        //var_dump($_SESSION['cart']);
    }   
    }
         foreach ($_SESSION['cart'] as $key=>$qty) { ?>                     
                             <?php 
                             foreach($getAllProducts as $value)
                             {
                       ?>
                               <?php 
                               if($key== $value['id']) {
                               // if ( $vali['id']==$_GET['id'])  ?>
                                <tr>
                                <td><?php echo $key;?></td>
                                <td><?php  echo $value['name']; ?></td>
                                <td><?php echo $qty ?></td>
                             

                             <td><img width ="80px" src="./img/<?php echo $value['image'];?>" alt=""></td> 
                                <td><?php echo $value['price']; ?></td>
                                <td><?php echo $value['description']; ?></td>
                                     <?php } ?>
                                 <?php } ?>  
                                 <td><a href='del.php?id=<?php echo $key; ?>'>Delete đơn hàng </a></td>
                                 <?php // id = $key hoặc vali['id'] cx dc ?>
                             </tr>
                             <?php 
         }
                             ?>
                     
             </table>           
             <a href="index.php">quay lại mua tiếp</a>
         
	
	
          
          
	
</body>
</html>