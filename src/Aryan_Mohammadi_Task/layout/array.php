<?php include "header.php" ?>
<h3>1.  Write a php script to display courses as list. Use \"<li>"\
$courses=array("PHP", "HTML", "JavaScript", "CMS", "Project")
</h3>
<?php
$courses = array("PHP", "HTML", "JavaScript", "CMS", "Project");
foreach( $courses as $course){
       echo "$course<br>";
}
?>
<h3>    
2.The unset() function is used to remove element from the array. <br>
The var_dump() function is used to dump information about a variable. <br>
array_values() is an inbuilt function that returns all the values of an array and not the keys. <br>
Delete an element from the array below:<br>
$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
</h3>
<?php 
$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
unset($courses1[0]);
foreach( $courses1 as $course){
       echo "$course<br>";
}
?>
<h3>
3.Sort the following array <br>
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");<br>
a) ascending order sort by value <br>
b) ascending order sort by Key <br>
c) descending order sort by Value <br>
d) descending order sort by Key <br>
</h3>
<?php
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");

asort($courses3);
echo implode(" ",$courses3);
echo "<br>";

ksort($courses3);
echo implode(" ",$courses3);
echo "<br>";

arsort($courses3);
echo implode(" ",$courses3);
echo "<br>";

krsort($courses3);
echo implode(" ",$courses3);
?>
<h3>4.Change the following array's all values to upper case. <br>
$courses4=array("php", "html", "javascript", "cms", "project");
</h3>
<?php 
$courses4=array("php", "html", "javascript", "cms", "project");
foreach ($courses4 as $i) {
       echo strtoupper($i).",";
}
?>
<h3>
5.List all your favorite colors and their hexadecimal equivalents. (associative arrays)
</h3>
<?php
$favorite_color = array("Red"=>"#ff0000", "Green"=>"#008000", "Blue"=>"#0000ff");
foreach ($favorite_color as $key => $value) {
       echo $key . ": " . $value."<br>";
}
?>
<h3>
6.PHP script to calculate and display average temperature, five lowest and highest temperatures. <br>

Recorded temperatures : <br>
78, 60, 62, 68, 71, 68, 73,
85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 
74, 62, 62, 65, 64, 68, 73, 75, 79, 73
</h3>
<?php
$Record = array(
       78,
       60,
       62,
       68,
       71,
       68,
       73,
       85,
       66,
       64,
       76,
       63,
       75,
       76,
       73,
       68,
       62,
       73,
       72,
       65,
       74,
       62,
       62,
       65,
       64,
       68,
       73,
       75,
       79,
       73
);
$sum = 0;
foreach ($Record as $k) {
       $sum += $k; 
}
$arrlength = count($Record);

echo "average:" . ($sum / $arrlength)."<br>";
sort($Record);
echo "five lowest:"."<br>";
for($x = 0; $x < 5; $x++) {
       echo $Record[$x];
       echo "<br>";
}

echo "five hightest:"."<br>";
$arrlength = count($Record);
for ($i = ($arrlength-5); $i < $arrlength; $i++) {
       echo $Record[$i];
       echo "<br>";
}
?>

<?php include "footer.php" ?>