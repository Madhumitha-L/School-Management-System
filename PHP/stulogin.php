<?php
include "config.php";

session_start();

if (isset($_POST['login'])) {
    
    $Student_id = $_POST['id'];
	$password = $_POST['pass'];
    
    $_SESSION["Student_id"]=$Student_id;

    $query ="SELECT* FROM `student` where Student_ID='$Student_id' ";

    $result = mysqli_query($conn,$query);

    $row = mysqli_num_rows($result);

    if($row == 1){
	        header('location:http://localhost/DBMS_MINIPROJECT/HTML/smain.html');
	}else{
        header('location: http://localhost/DBMS_MINIPROJECT/HTML/signup.html');
    }
			
}
?>

