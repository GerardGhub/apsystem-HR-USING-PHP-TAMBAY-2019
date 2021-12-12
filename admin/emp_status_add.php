<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$status = $_POST['status'];
		$date_added = $_POST['date_added'];

		$sql = "INSERT INTO Employee_Status (status, date_added) VALUES ('$status', '$date_added')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Status added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: emp_status.php');

?>