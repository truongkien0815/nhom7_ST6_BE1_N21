<?php
require "models/config.php";
require "models/db.php";
require "models/product.php";
require "models/protype.php";
require "models/manufactures.php";
$product = new Product;
$protype = new Protype;
$manu = new Manufacture;


 ?>
 <form action="products.php" method="get">
 <label>Name</label>
 <input type="text" name="name" id="">
 <br>
 
 <br>
 <label>Price</label>
 <input type="text" name="price" id="">
 <br>
 <label>Manufacture</label>
 <input type="text" name="manu" id="">
 <br>
 <label>Protype</label>
 <input type="text" name="protype" id="">
 <br>
 <label>image</label>
<input type="text" name="image" id="">

<input type="submit" name ="submit" value="submit">
</form>

<?php if(isset($_GET['submit']) && isset($_GET['id']))
{

    //updateProduct($id,$name,$price,$image,$protype,$manu)
    //updateProduct($id,$name,$price,$image,$protype,$manu)
    $product->updateProduct($_GET['id'],$_GET['name'],$_GET['price'],$_GET['image'],$_GET['protype'],$_GET['manu']);
    echo "thêm thành cong";
   
    header('location:products.php');
}
else
{
    echo "Không thành công";
}
?>