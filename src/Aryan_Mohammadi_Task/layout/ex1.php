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
<h1>3.5 $g1=5, $g2=4, $g3=5. These are the grades for 3 students in the course. ...</h1>

</body>
</html>

<?php include "footer.php" ?>