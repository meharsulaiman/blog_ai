<?php
$host = "localhost";
$username = "root";
$password = "";

$connect = mysqli_connect($host , $username,$password,"ai_blog");
if(!$connect)
{
    echo("Faild to Connect with DataBase");
}
echo "Connect with DB";



//  INSERT QUERY
//$sql_insert = mysqli_query($connect, "insert into categories(cat_name) values('Neural networks')");
// $sql_update = mysqli_query($connect,"delete from categories where ")


?>