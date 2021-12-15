<?php
session_start();
require "models/config.php";
require "models/db.php";
require "models/product.php";
require "models/user.php";
require "models/protype.php";


$users = new User;
if(isset($_POST['submit']))
{
$user = $_POST['username'];
$pass = $_POST['password'];
$passcheck =md5($pass);
if($user =="admin" && $users->checkLogIn($user,$passcheck))
//if($users->checkLogIn($user,$pass))
{
   
    $_SESSION['user']= $user;
    echo "thành công:";
    header('location:../Admin/index.php');
   
}
elseif($user !="admin" && $users->checkLogIn($user,$passcheck))
{
  echo "thành công khách hang";
  header('location:../index.php');
}
else
{
  echo "không thanh công:";
 
 // header('location:index.php');
}

}

?>