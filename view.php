<?php 
error_reporting(E_ALL ^ E_DEPRECATED);
$conn=mysql_connect("localhost","root","");
if(!$conn){
    die("Could not connect".mysql_error());
}

else
{
mysql_select_db("bucketlist", $conn);
   
$sql = mysql_query("select * from lists") or die("Error.".mysql_error());


    #r stands for results
        
        while($r=mysql_fetch_array($sql)){
        
            echo "<table border=3>
    
         

           <tr><td>id</td><td>Title</td><td>Item1</td><td>Item2</td><td>Item3</td><td>Item4</td></tr>";
         echo "<tr>";
         echo "<td>".$r["id"]."</td>";
         echo "<td>".$r["title"]."</td>";
         echo "<td>".$r["item1"]."</td>";
         echo "<td>".$r["item2"]."</td>";
         echo "<td>".$r["item3"]."</td>";
         echo "<td>".$r["item4"]."</td>";
        echo "</tr>" ;   
        echo "</table>";
        }
    }
?>
<html>
<head>
    <title>manupulation page</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>   
<h3>You can update and delete the bucketlist from here</h3>
<form method="post" action="update.php">
<h3>Enter the list ID</h3>
<input type="text" name="list_id" >
<h3 align="justify" style="font:italic">Select what you want to update.</h3>
<div align="justify">
    <select name="update">
      <option>Bucketlist title</option>
      <option>item1</option>
      <option>item2</option>
      <option>item3</option>
      <option>item4</option>
    </select>
    <br/>
 
  <h3 align="justify" style="font:italic">Enter your New Value:</h3>
    <input type="text" name="new_val"/>
      
<input type="submit" id="update"  value="UPDATE"/>
</div> 
</form><br>
<form method="post" action="delete.php">
<h3 align="justify" style="font:italic">Delete an entire record from here</h3>
<h3>Enter the list ID</h3>
<input type="text" name="list_id" >
<input type="submit" name="delete"  id="delete" value="DELETE"/>

</form>

</body>
</html>