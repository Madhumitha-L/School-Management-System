<?php 

include "config.php";

session_start();

	if (isset($_POST['submit'])) {

		$name = $_POST['name'];
		$dob = $_POST['dob'];
		$class = $_POST['class'];
		$contact = $_POST['contact'];
		$Student_id = $_POST['id'];
		$password = $_POST['password'];
		
		$sql = "INSERT INTO `student` (`Name`,`DOB`,`Class`,`Contact`,`Student_ID`,`Password`) VALUES ('$name','$dob','$class','$contact','$Student_id','$password')";

		
		$result = $conn->query($sql);

		if ($result == TRUE) {
			 header('location:http://localhost/DBMS_MINIPROJECT/HTML/stulogin.html');
		}else{
			echo '<script>alert("Already Registered !")</script>';
		}
		
		$conn->close();
	}

?>
