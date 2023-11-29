<?php 
include "config.php";
include "stulogin.php";
$Student_id = $_SESSION["Student_id"];
$sql = "DELETE FROM `student` WHERE `Student_ID`='$Student_id'";
$result = $conn->query($sql);

	if ($result == TRUE) {
		echo "Record deleted successfully.";
	}else{
		echo "Error:" . $sql . "<br>" . $conn->error;
	}

?>