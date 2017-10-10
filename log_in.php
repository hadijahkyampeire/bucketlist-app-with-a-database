<?php
$conn=mysql_connect("localhost","root","");
if(!$conn){
    die("Could not connect".mysql_error());
}

else
{
mysql_select_db("bucketlist", $conn);
$email = $_POST["email_field"];
$password = $_POST["password_field"];
$sign =$_POST["signin"];


if(isset($sign)){

   if(!$email || !$password){
      
        include('login.html');
        exit;
         }
    else{
      $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
        $res_query = mysql_query($query);
        
        if(!$res_query){
        
          die('Error:  '.mysql_error());
        
        }
        else if(mysql_num_rows($res_query) < 1) {
           
            echo "<strong>Please enter correct email and password</strong>";
            
           
        }
    else{
    
        header('Location:addlist.html');
        mysql_close($conn);
    
       }
    }
 }
}
    

?>