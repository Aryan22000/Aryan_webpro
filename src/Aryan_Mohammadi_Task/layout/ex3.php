<?php include "header.php" ?>

<h3>EX3 . In-class Task variable & operators</h3>
<h2>1.Create a simple html form to get Firstname and Lastname from the user and use echo echo statement to print using <h3> tag: Hello …., You are welcome to my site.</h2>

<form action="action.php" method="post">
       <div class = "row">
              <div class = "col">
       <input type="text" name="fname" placeholder="First name"> <br>
       <input type="text" name="lname" placeholder="Last name"> <br>
       </div>
       <div class = "col">
       <input type="date" name="birth_date" placeholder="Birth day"> <br>
       <input type="color" name="color"> <br>
       </div>
       <input type="submit" value="Submit">
       </div>
</form>
<h2>Prepare a simple html table and apply bootstrap style to the table. You may use the same table that you did in 3.5.</h2>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Info</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">E-mail</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Aryan</td>
      <td>Mohammadi</td>
      <td>ahpreal@gmail.com</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Shayan</td>
      <td>Djm</td>
      <td>Shayan.Djm@gmail.com</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Ahamd</td>
      <td>Omid</td>
      <td>Ahamd.Omid@gmail.com</td>
    </tr>
  </tbody>
</table>

<h2>Write a PHP script with two string variables. Assign any text to these variables. Join them together.  Print the length of the string. (Hint: string function)</h2>
<?php
$First_name = "Aryan";
$Last_name = "Mohammadi";
echo $First_name . " " . $Last_name . "<br>";
echo $First_name.":".strlen($First_name)."       ". $Last_name.":".strlen($Last_name). "<br>";
?>
<h2>Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers and echo statement to output your answer.</h2>
<?php
$num1 = 298;
$num2 = 234;
$num3 = 46;
$sum = $num1+$num2+$num3;
echo $num1."+".$num2."+".$num3."=". $sum;
?>
<h2>Write a PHP script to detect the browser being used to view your pages. (Use predefined variables: $_SERVER).</h2>
<?php
echo $_SERVER['HTTP_USER_AGENT'];
?>
<?php include "footer.php" ?>