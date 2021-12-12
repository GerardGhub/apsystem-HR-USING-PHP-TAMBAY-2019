<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){

		$type_of_leave = $_POST['type_of_leave'];
		$date_added = $_POST['date_added'];

		$sql = "INSERT INTO tol (type_of_leaven, date_added) VALUES ('$type_of_leave','$date_added')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'New Type of Leave added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: tol.php');

?>