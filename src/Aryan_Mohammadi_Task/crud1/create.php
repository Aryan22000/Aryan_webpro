<?php
$title = "A simple CRUD application";
include '../layout/header.php';
?>
<form method="post" action="">
       <input type="text" name="fname" placeholder="your First name" required> <br><br>
       <input type="text" name="lname" placeholder="your group" placeholder="your Last name" required><br><br>
       <input type="text" name= "city" placeholder="your city" required><br><br>
       <select name="groupid">
              <option value="BBCAP22">BBCAP22</option>
              <option value="BBCAP22">BBCAP21</option>
              <option value="others">others</option>
       </select><br><br>
       <!-- <input type="number" name = "id" placeholder="your student id"> -->
       <input type="submit" value="Submit" name="submit">
</form>
<?php 
       if(isset($_POST['submit'])){
              $fname = $_POST['fname'];
              $lname = $_POST['lname'];
              $city = $_POST['city'];
              $groupid = $_POST['groupid'];
              include 'db.php';
              $sql = "insert into studentinfo (fname,lname,city,groupid) values('$fname','$lname','$city','$groupid')";
              if($conn -> query($sql)===true){
                     echo "your information is added to the database";
              }
              else{
                     echo "your information isn't added from the database: ".$conn -> error;
              }
       }
?>
<?php
include '../layout/footer.php';
?>