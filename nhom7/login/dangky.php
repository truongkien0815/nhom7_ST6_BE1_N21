<?php

require "models/config.php";
require "models/db.php";

require "models/user.php";

$users = new User;

if(isset($_POST['submit']))
{

$user_id = $_POST['id'];
$user_name = $_POST['name1'];
$pass = $_POST['pass'];
$role = $_POST['role'];



if( $users->dangky($user_id,$user_name,$pass,$role))
{
   
   
    echo "thành công";
    
   
}
else
{
    echo "Không thành công";
}

}
   





?>



