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
#declaring variables
$fname = $_POST["firstname_field"];
$lname = $_POST["lastname_field"];
$email = $_POST["email_field"];
$password= $_POST["password_field"];

$query = "insert into user (firstname,lastname, email,password)
values ('".$fname."', '".$lname."', '".$email."','".$password."')";

if(!mysql_query($query, $conn))
{

die('Error: '.mysql_error());
}
else
{
echo 'FORM SUBMITTED';
header('Location:localhost/bucketlist/login.html');
mysql_close($conn);
    

}


?>