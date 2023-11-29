<?php 
include "config.php";
include "stulogin.php";
$Student_id=$_SESSION["Student_id"];
$query = " SELECT* FROM `student` where `Student_ID`='$Student_id' ";
$result = mysqli_query($conn,$query);
$row = mysqli_num_rows($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/Pet/CSS/update.css">
    <title>SIGNUP</title>   
</head>
<body>
   <!-- nav  -->

   <nav>
       <div class="side"></div>
       <div class="mid">SCHOOL MANAGEMENT</div>
       <div class="side"></div>
   </nav>

   <!-- main  -->

   <div id="main" class="sign">
       <div id="img"> <img src="http://localhost/Pet/good-secondary-school.jpg" alt="img1"> </div>
       <div>&nbsp;</div>
       <div id="box">
           <div> <h2>UPDATE PROFILE</h2></div>
          <div><form action="http://localhost/Pet/PHP/updatepage.php" method="post">
            <?php
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
		?>
            <div> <label>Name</label> <input type="text" name="name" value="<?php echo $row['Name']; ?>"> </div> 
            <div> <label>DOB</label> <input type="text" name="dob" value="<?php echo $row['DOB']; ?>"> </div> 
            <div> <label>Class</label> <input type="text" name="class" value="<?php echo $row['Class']; ?>"> </div> 
            <div> <label>Contact</label> <input type="text" name="contact" value="<?php echo $row['Contact']; ?>"> </div> 
            <div> <label>Student ID</label> <input type="text" name="id" value="<?php echo $row['Student_ID']; ?>" style="cursor:no-drop;"> </div> 
            <div> <label>Password</label> <input type="text" name="pass" value="<?php echo $row['Password']; ?>"> </div> 
            <?php	}
			}
		?>
               <center> <input type="submit" value="UPDATE" name="update" ></center>
           </form></div> 
          <div></div> 
       </div>
   </div>

</body>
</html>