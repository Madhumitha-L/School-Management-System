<?php
include "config.php";

session_start();

if (isset($_POST['login'])) {
    
    $Teacher_id = $_POST['id'];
	$password = $_POST['pass'];
    
    $_SESSION["Teacher_id"]=$Teacher_id;

    $query ="SELECT* FROM `teacher` where Teacher_ID='$Teacher_id' ";

    $result = mysqli_query($conn,$query);

    $row = mysqli_num_rows($result);

    if($row == 1){
	        header('location:http://localhost/DBMS_MINIPROJECT/HTML/tmain.html');
	}else{
        header('location: http://localhost/DBMS_MINIPROJECT/Html/StudentLogin.html');
    }
			
}
?>

