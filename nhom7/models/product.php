
<?php
class Product extends Db
{
public function getAllProducts()
{
    $sql = self::$connection->prepare("SELECT * FROM products");
    // Thực thi câu truy vấn 
    $sql->execute(); //return an object
    $items = array();
    // dùng fetch_all để chuyển đối tượng thành mảng assoc
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items; //return an array
}
// lấy sản phẩm theo id
public function getProductById($id)
{
$sql = self::$connection->prepare("SELECT * FROM products WHERE id = ?");
// kiểm tra id này có phải số nguyên hay khôbng nếu là số nguyên thì truyền vào id 
$sql->bind_param("i",$id);
$items = array();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items; //return an array
}
// mới
public function getProductsByType($type_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE type_id = ?");
        $sql->bind_param("i", $type_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
public function getProductschose()
{
    $sql = self::$connection->prepare("SELECT * FROM products WHERE id=1");
    // Thực thi câu truy vấn 
    $sql->execute(); //return an object
    $items = array();
    // dùng fetch_all để chuyển đối tượng thành mảng assoc
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items; //return an array
}
public function search($keyword)
    {
        $sql = self::$connection->prepare("SELECT * FROM products 
        WHERE `name` LIKE ?");
        $keyword = "%$keyword%";
        $sql->bind_param("s", $keyword);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function get3ProductsByType($type_id, $page, $perPage)
    {
        // Tính số thứ tự trang bắt đầu
        $firstLink = ($page - 1) * $perPage;
        $sql = self::$connection->prepare("SELECT * FROM products
        WHERE type_id = ? LIMIT ?, ?");
        $sql->bind_param("iii", $type_id, $firstLink, $perPage);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array

    }
    function paginate($url, $total, $perPage,$page)
{
$totalLinks = ceil($total / $perPage);
 	$link ="";
    	for($j=1; $j <= $totalLinks ; $j++)
        if($page == $j)
        {
$link = $link . "<li class ='active'> $j</li>";
        }
        else
     	{
      		$link = $link ."<li><a href='$url&page=$j'> $j </a></li>";
     	}
     	return $link;
}

}

?>