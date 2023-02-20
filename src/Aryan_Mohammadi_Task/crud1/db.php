<?php 
$server_name = "db";
$username = "aryan";
$password = "1234";
$dbname = "aryan";
//creating connection
$con = new mysqli($server_name,$username,$password,$dbname);
//check the connection
if($con->connect_error){
       die("Error connecting to database ".$con->connect_error);
}
else{
       echo "<h2>Connection is possible</h2>";
}

?>
