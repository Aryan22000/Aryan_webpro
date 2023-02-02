<?php include "header.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>my first php page</title>
</head>
<body>
    <h1>3.1 a simple PHP script to print your information (Name and your groupid).</h1> 

<?php
echo "Aryan Mohammadi <br>";
echo "BBCAP22";
?>
<h1>3.2 write PHP code to display the following message.</h1>
<?php
echo "Hello world ! My name is \"Aryan\" ";
?>
<h1>3.3 Write the PHP code in to display the current date. </h1>
<?php
echo date("d.m.Y") . "<br>";
?>
<div></div>
<h1>3.4 variable in PHP</h1>
<?php
$title1 = "PHP is interesting";
echo "<h1>" . $title1 . "</h1>";
?>
<h3> 3.5.table & variable </h3>
<?php
$g1 = 5;
$g2 = 4;
$g3 = 5;
echo "
<table>
<tr>
<th> S.N </th><th> Name </th><th> Grade </th>
</tr>
<tr>
<td> 1 </td><td> Pekka </td><td> $g1 </td>
</tr>
<tr>
<td> 2 </td><td> Johanna </td><td> $g2 </td>
</tr>
<tr>
<td> 3 </td><td> John </td><td> $g3 </td>
</tr>
</table>
";
?>
<h3> 4 screenshot of the development environment </h3>
<img src="./my_docker.png" alt="My screenshot of docker" style="width: 900px; height: 400px;">
</body>
</html>

<?php include "footer.php" ?>