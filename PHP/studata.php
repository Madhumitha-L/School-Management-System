<?php 
include "config.php";
$sql = "SELECT * FROM `student` ";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>Student Details</title>
<link rel="stylesheet" href="https://use.typekit.net/zdk2sfw.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="http://localhost/DBMS_MINIPROJECT/CSS/studata.css">
</head>
<body>

        <!-- nav -->
    
        <nav>
            <div class="side"></div>
            <div class="mid">SCHOOL MANAGEMENT</div>
            <div class="side"></div>
        </nav>

		<!-- table  -->

<div class="container">
		<h2 class="f1" align="center">Student Details</h2>
<table class="table">
	<thead>
		<tr>
		<th>Student Name</th>
		<th>DOB</th>
		<th>Class</th>
		<th>Contact</th>
        <th>Student ID</th>
	</tr>
	</thead>
	<tbody>	
		<?php
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td><?php echo $row['Name']; ?></td>
					<td><?php echo $row['DOB']; ?></td>
					<td><?php echo $row['Class']; ?></td>
					<td><?php echo $row['Contact']; ?></td>
					<td><?php echo $row['Student_ID']; ?></td>
					<td><a class="btn btn-danger" href="http://localhost/Pet/PHP/delete.php">Delete</a></td>
					</tr>	
					
		<?php		}
			}
		?>
	        		
	</tbody>
</table>
</div>

</body>
</html>
