<?php 
$server_name = "db";
$username = "aryan";
$password = "1234";
$dbname = "aryan";
//creating connection
$conn = new mysqli($server_name,$username,$password,$dbname);
//check the connection
if($conn->connect_error){
       die("Error connecting to database ".$conn->connect_error);
}

?>