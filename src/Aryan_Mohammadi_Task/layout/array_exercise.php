<?php include "header.php" ?>

<form action="" method="get" >
<input type="number" placeholder="Enter your first number" name="num1" required> <br>
<input type="number" placeholder="Enter your second number" name="num2" required><br>
<select name="operator"> <br>
<option value="add">add</option> 
<option value="subtract">subtract</option>
<option value="multiply">multiply</option>
<option value="divide">divide</option>
</select>
<input type="submit" name="cal" value="calculator" ><br>
</form>
<?php

// $num1 = $_GET['num1'];
// $num2 = $_GET['num2'];
// $operator = $_GET['operator']
if (isset($_GET["cal"])) {
       $num1 = $_GET["num1"];
       $num2 = $_GET["num2"];
       $operator = $_GET["operator"];
       switch ("$operator") {
              case "add":
                     $results = $num1 + $num2;
                     break;
              case "subtract":
                     $results = $num1 - $num2;
                     break;
              case "multiply":
                     $results = $num1 * $num2;
                     break;
              case "divide":
                     $results = $num1 / $num2;
                     break;
              default:
                     $results = "Error";
       }
}
if (isset($results)) {
       echo "<h3>Results : $results </h3>";
}
?>
<?php include "footer.php" ?>