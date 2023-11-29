<?php 
include "config.php";
include "tlogin.php";
$Teacher_id = $_SESSION["Teacher_id"];
$query = " SELECT* FROM `teacher` where `Teacher_ID`='$Teacher_id' ";
$result = mysqli_query($conn,$query);
$row = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/DBMS_MINIPROJECT/CSS/view.css">
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
            <div> Class : <?php echo $row['Class']; ?></div> 
            <div> Subject : <?php echo $row['Subject']; ?></div> 
            <div> Teacher ID : <?php echo $row['Teacher_ID']; ?></div> 
            <div> Password : <?php echo $row['Password']; ?></div>

            <?php	}
			}
		?> <br>
          <div><h4> <a href="http://localhost/Pet/HTML/Home.html">BACK TO HOME</a></h4></div>
       </div>
   </div>

</body>
</html>