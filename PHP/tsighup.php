<?php 

include "config.php";

session_start();

	if (isset($_POST['submit'])) {

		$name = $_POST['name'];
		$class = $_POST['class'];
        $subject =$_POST['sub'];
		$Teacher_id = $_POST['id'];
		$password = $_POST['pass'];
		
		$sql = "INSERT INTO `teacher` (`Name`,`Class`,`Subject`,`Teacher_ID`,`Password`) VALUES ('$name','$class','$subject','$Teacher_id','$password')";

		
		$result = $conn->query($sql);

		if ($result == TRUE) {
			header('location:http://localhost/DBMS_MINIPROJECT/HTML/teacherlogin.html');
		}else{
			echo '<script>alert("Already Registered !")</script>';
		}
		
		$conn->close();
	}

?>
