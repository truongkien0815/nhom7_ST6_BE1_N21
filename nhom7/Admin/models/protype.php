
<?php 

class Protype extends Db
{
public function getAllProtype()
{
    $sql = self::$connection->prepare("SELECT * FROM protypes");
    $sql->execute(); //return an object
    $items = array();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items; //return an array
}


public function deleteprotype($id)
{
   
    $sql = self::$connection->prepare("delete from protypes where type_id =?");
    $sql->bind_param("i",$id);
 return $sql->execute();
}
public function updateprotype($name,$id)
{
   
    $sql = self::$connection->prepare("update protypes set type_name = ? where type_id =?");
    $sql->bind_param("si",$name,$id);
 return $sql->execute();
}

public function add($type_id,$type_name)
{
    
    $sql = self::$connection->prepare("insert into protypes(type_id,type_name) 
     values(?,?)");
     
    $sql->bind_param("is",$type_id,$type_name);
    //var_dump($sql);
    return $sql->execute();
}

    
}
?>