<?php
class Manufacture extends Db
{
public function getAllmanufacture()
{
    $sql = self::$connection->prepare("SELECT * FROM manufactures");
    // Thực thi câu truy vấn 
    $sql->execute(); //return an object
    $items = array();
    // dùng fetch_all để chuyển đối tượng thành mảng assoc
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items; //return an array
}
}
?>