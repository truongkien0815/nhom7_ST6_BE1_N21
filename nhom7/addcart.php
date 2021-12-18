<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>cart</title>
	<link rel="stylesheet" type="text/css" href="public/css/styles.css">
	
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
       
         
   
          
    <h1>Your cart  <?php echo $_SESSION['user']; ?></h1>
    <table border="1" cellspacing="0" cellpadding="5">
	<tr>
    <th>id</th>
		<th>Name</th>
		<th>Quantity</th>
        <th>Image</th>
		<th>Price</th>
        
        <th>Description</th>
       <th> Thêm đơn hàng</th>
		<th>Action</th>
		<th>Giảm đơn hàng</th>

       
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
                              

                             <td><img width ="70px" src="./img/<?php echo $value['image'];?>" alt=""></td> 
                                <td width ="120px"><?php echo number_format($value['price']); ?> VND</td>
                                <td><?php echo $value['description']; ?></td>
                                     <?php } ?>
                                 <?php } ?>  
                             
                                 <td ><a  href='adddonhang.php?id=<?php echo $key;?>'> +</a></td>
                              
                                 <td><a href='del2.php?id=<?php echo $key; ?>'>Huỷ đơn hàng </a></td>
                                 <td><a href='del.php?id=<?php echo $key; ?>'>-</a></td>
                                 <?php // id = $key hoặc vali['id'] cx dc ?>
                             </tr>
                             <?php 
         }
                             ?>
                     
             </table>           
             <a href="index.php">quay lại mua tiếp</a>
         
	
	
          
          
	
</body>
</html>