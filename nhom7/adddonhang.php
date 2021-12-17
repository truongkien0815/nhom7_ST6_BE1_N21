<?php 



session_start();


?>
          
    <?php
   
   if (isset($_GET['id'])){
    $_SESSION['cart'][$id]++;
}else
{
    $_SESSION['cart'][$id] = 1;
}
//var_dump($_SESSION['cart']);

header('location:addcart.php');

               ?>              