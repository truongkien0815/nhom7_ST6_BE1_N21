<?php
class Db
{
    //thuộc tính
public static $connection;
//phương thức tự động chạy 
public function __construct()
{
    //kiểm tra xem biến connection đã dc kết nối hay chưa, đã có giá trị hay chưa
if (!self::$connection) {
    // tạo đối tượng kết nối
self::$connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME,PORT);
self::$connection->set_charset(DB_CHARSET);
}
return self::$connection;
}
}

?>