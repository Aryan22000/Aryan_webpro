<?php include "header.php" ?>
<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$Birth_date = $_POST['birth_date'];
$color = $_POST['color'];
echo "<h3> welcome $fname $lname 
       your favorite color  is $color <br>
       and your birthday in $Birth_date
</h3>"

?>
<?php include "footer.php" ?>