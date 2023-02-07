<?php

$conn = mysqli_connect('localhost', 'root', '', 'ai_blog');

//$db = mysqli_select_db($conn, 'ai_blog');
//echo "connect succesfully";

// insert query
$q_insert = mysqli_query($conn, "Insert Into categories(cat_name) Values('Deep Learning')");
echo 'Post Category has saved successfully';
//

# start update query
$q_update = mysqli_query($conn, "Update categories Set cat_name = 'Machine Learning' where cat_id = 2 ");
# end update query

# start delete query
$_delete = mysqli_query($conn, "Delete From categories Where cat_id = 6");
# start delete query

# select query 
$q_select = mysqli_query($conn, 'Select * From categories');

while($f = mysqli_fetch_array($q_select))
echo($f['cat_name'])."<br>";
# end select query

?>