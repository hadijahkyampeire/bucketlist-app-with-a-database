<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysql_connect($servername, $username, $password);
if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
}
else
{
mysql_select_db ("bucketlist", $conn);

$title = $_POST["title"];
$item1 = $_POST["item1"];
$item2 = $_POST["item2"];
$item3 = $_POST["item3"];
$item4 = $_POST["item4"];

$query = "insert into lists (title,item1, item2,item3,item4)
values ('".$title."', '".$item1."', '".$item2."','".$item3."', '".$item4."')";

if(!mysql_query($query, $conn))
{

die('Error: '.mysql_error());
}
else
{
echo 'LIST SAVED';
header('Location:addlist.html');
mysql_close($conn);
    

}

}


?>