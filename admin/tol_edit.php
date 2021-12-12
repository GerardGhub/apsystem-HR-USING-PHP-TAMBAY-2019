<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$time_in = $_POST['time_in'];
		$time_in = date('H:i:s', strtotime($time_in));
		$time_out = $_POST['time_out'];
		$time_out = date('H:i:s', strtotime($time_out));
		$type_of_leave = $_POST['type_of_leave'];

		$sql = "UPDATE tol SET type_of_leave = '$type_of_leave' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Type OF Leave updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location:tol.php');

?>