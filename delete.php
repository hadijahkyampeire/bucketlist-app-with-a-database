<?php 
if(isset($_POST['list_id']))
{	
$id = $_POST['list_id'];
$con = mysqli_connect("localhost","root","","bucketlist");
$query = "delete from lists where id = '$id' ";
$execute = $con->query($query);
//$n = $execute->num_rows;

if($execute)
{
	header("location: view.php");
}
else {
	echo "Bucketlist with listid $id not found";
}
}
else{
 echo "Enter the right Please!!";
 
}
?>