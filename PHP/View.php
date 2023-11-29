<?php 
include "config.php";
include "stulogin.php";
$Student_id = $_SESSION["Student_id"];
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
    <link rel="stylesheet" href="http://localhost/Pet/CSS/view.css">
    <title>LOGIN</title>   
</head>
<body>
   <!-- nav  -->

   <nav>
       <div class="side"></div>
       <div class="mid">SCHOOL MANAGEMENT</div>
       <div class="side"></div>
   </nav>

   <!-- main  -->

   <div id="main">
       <div id="img"> <img src="http://localhost/Pet/good-secondary-school.jpg" alt="img1"> </div>
       <div>&nbsp;</div>
       <div id="box">
           <div> <h2>STUDENT PROFILE</h2></div>
        <?php
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
		?>
            <div> Name : <?php echo $row['Name']; ?></div> 
            <div> DOB : <?php echo $row['DOB']; ?></div> 
            <div> Class : <?php echo $row['Class']; ?></div> 
            <div> Contact : <?php echo $row['Contact']; ?></div> 
            <div> Student ID : <?php echo $row['Student_ID']; ?></div> 
            <div> Password : <?php echo $row['Password']; ?></div>

            <?php	}
			}
		?> <br>
          <div><h4> <a href="http://localhost/Pet/HTML/Home.html">BACK TO HOME</a></h4></div>
       </div>
   </div>

</body>
</html>