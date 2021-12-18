<?php

require "models/config.php";
require "models/db.php";

require "models/user.php";

$users = new User;

if(isset($_POST['submit']))
{


$user_name = $_POST['name1'];
$pass = $_POST['pass'];




if( $users->dangky($user_name,$pass))
{
   
   
    echo "thành công";
    header('location:index.php');
    
   
}
else
{
    echo "Không thành công";
}

}
   





?>



