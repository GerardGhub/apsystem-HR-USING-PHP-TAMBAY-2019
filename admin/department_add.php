<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$department_data = $_POST['department_data'];
		$date_added = $_POST['date_added'];

		$sql = "INSERT INTO Department(department_data, date_added) VALUES ('$department_data', '$date_added')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'New Department added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: Department.php');

?>