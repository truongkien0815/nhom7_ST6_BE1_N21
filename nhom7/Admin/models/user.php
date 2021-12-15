<?php

class User extends Db
{
public function checkLogIn($user,$password)
{
    $sql = self::$connection->prepare("SELECT * FROM user where user_name = ? and password =? ");
    $passwork = md5($passwork);
    $sql ->bind_param("ss",$user,$passwork);
    $sql->execute(); //return an object
    $items = array();
    $items = $sql->get_result()->num_rows;
    if($items ==1)
    {
        return true;
    }
    else
    {
        return false;
    }
   //return an array
}



}

    
?>