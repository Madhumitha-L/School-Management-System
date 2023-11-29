<?php 
include "config.php";
include "stulogin.php";

	if (isset($_POST['update'])) {
		
        $name = $_POST['name'];
		$dob = $_POST['dob'];
		$class = $_POST['class'];
		$contact = $_POST['contact'];
		$Student_id = $_POST['id'];
		$password = $_POST['pass'];

		$sql = "UPDATE `student` SET `Name`='$name',`DOB`='$dob',`Class`='$class',`Contact`='$contact',`Student_ID`='$Student_id',`Password`='$password' WHERE `Student_ID`='$Student_id' ";
		
		$result = $conn->query($sql);
		
		if ($result == TRUE) {
			echo "Updated Successfully !!";
		}else{
			echo "Error:" . $sql . "<br>" . $conn->error;
		}
	}

?>

