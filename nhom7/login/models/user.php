<?php

class User extends Db
{
public function checkLogIn($user,$password)
{
   
    $sql = self::$connection->prepare("SELECT * FROM user where user_name = ? and password1 =? ");
    //$passwork = md5($passwork);
    $sql ->bind_param("ss",$user,$password);
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
public function hienthi()
{
    
}
public function dangky($namep,$passs,$soDT,$gmail)
{
    $pass=md5($passs);
    $sql = self::$connection->prepare("insert into user(user_name,password1,soDT,gmail) values(?,?,?,?)");
  
        $sql->bind_param("ssis", $namep,$pass,$soDT,$gmail);
       
    return $sql->execute();

}




}

    
?>