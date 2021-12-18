
    <?php
   
  
   
  
//var_dump($_SESSION['cart']);





               ?>              
               <?php 
    session_start();
    if(isset($_GET['id']))
    $id =$_GET['id'];
    {
  //unset($_SESSION['cart'][$id]) ;
  $_SESSION['cart'][$id]++;
    }
    header('location:addcart.php');
  
?>