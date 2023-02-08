<?php include "header.php" ?>
<h3>1.Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not:
It's August, so it's still holiday.
Not August, this is Month-name so I don't have any holidays
</h3>
<?php
$month = date('F');
if ($month == "August") {
       echo "It's August, so it's still holiday.";
} else {
       echo "Not August, this is $month so I don't have any holidays";
}
?>
<h3>
2.Assign colour red to a variable name $color and check to print one the following responses (if else statement)
</h3>
<?php
$color = "red";
if ($color == "red") {
       echo "The color is red.";
} else {
       echo "The color is not red.";
}
?>
<h3>
3.Write a program to grade students based on their total score for a subject. <br>
Use variable to hold the total score.<br>
The grading scheme is: <br>
Excellent: >80; <br>
Great >70 & less than 80;<br>
Good >60 & less than 70; <br>
Pass >50 & less than 60<br>
Fail <50 
</h3>
<form method="post">
<input type="number" name="grade" placeholder="your grade:"> 
<input type="submit" value="Submit">
</form>
<?php
$grade = $_POST['grade'];
if ($grade >= 80 && $grade <= 100) {
       echo "The grading scheme is Excellent";
}elseif($grade < 80 && $grade >=70) {
       echo "The grading scheme is great";
}
elseif($grade < 70 && $grade >=60) {
       echo "The grading scheme is good";
}
elseif($grade < 60 && $grade >=50) {
       echo "The grading scheme is pass";
}
elseif($grade <50){
       echo "you are Failed";
} else {
       echo "your grade is not OK , its has a problem please try again";
}
?>
<h3>
Write a program to get inputs (age and name) from the user and based on their age, <br>
decide if he/she is eligible for voting. 
(18 or more than 18 years is eligible for voting,)
</h3>
<form method="post">
<input type="text" name="name" placeholder="your name : ">
<input type="number" name="age" placeholder="your age:">
<input type="submit" value="Submit">
</form>
<?php
$name = $_POST['name'];
$age = $_POST['age'];
if ($age >= 18) {
       echo "hello $name" . "<br>";
       echo "you can vote ";
} else {
       echo "hello $name" . "<br>";
       echo "you can't vote ";
}
?>
<h3>
In task 5, you used $_SERVER['HTTP_USER_AGENT']; to get the browser name. 
Use Switch statement with strops function to print the name of the browser as below: 
If someone is using Chrome it should print, you are using Google Chrome….
</h3>
<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];

switch (true) {
       case (stristr($user_agent, 'Edge')):
              echo "You are using Microsoft Edge.";
              break;
       case (stristr($user_agent, 'Chrome')):
              echo "You are using Google Chrome.";
              break;
       case (stristr($user_agent, 'Firefox')):
              echo "You are using Mozilla Firefox.";
              break;
       case (stristr($user_agent, 'Safari')):
              echo "You are using Apple Safari.";
              break;
       case (stristr($user_agent, 'Opera')):
              echo "You are using Opera.";
              break;
       default:
              echo "Could not detect browser name.";
}
?>
<?php include "footer.php" ?>