<?php
error_reporting(E_ALL ^ E_DEPRECATED); 
if(isset($_POST['list_id']))
{	
$id = $_POST['list_id'];
$update = $_POST['update'];
$new_val = $_POST['new_val'];
if($update=="Bucketlist title")
{
	$update_val = 'title';
}

else if($update=="item1") 
{
	$update_val = 'item1';
}

else if($update=="item2")
{
	$update_val='item2';
}
else if ($update=="item3")
 {
	$update_val='item3';
	# code...
}
else if ($update=="item4")
{
	$update_val='item4';
}


$con = mysqli_connect("localhost","root","","bucketlist");
$query = "update lists set $update_val =' $new_val' where id = '$id' ";
$execute = $con->query($query);
//$n = $execute->num_rows;

if($execute)
{
	header("location:view.php");
}
else {
	echo "list with id $id not found";

	echo "Enter valid id Please!!";
}
 
}
?>

