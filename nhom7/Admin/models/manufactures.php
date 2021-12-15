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
public function addmanufacture($manu_id,$manu_name)
{
    $sql = self::$connection->prepare("insert into manufactures(manu_id,manu_name) values(?,?)");
    $sql->bind_param("is",$manu_id,$manu_name);
    return $sql->execute();
}
public function deletemanu($id)
{
    $sql =  self::$connection->prepare("delete from manufactures where manu_id = ?");
    $sql->bind_param("i",$id);
    return $sql->execute();
}
public function updatemanu($id,$name)
{
    $sql =  self::$connection->prepare("update manufactures set manu_name = ?  where manu_id = ?");
    $sql->bind_param("si",$name,$id);
    return $sql->execute();
}
}
?>