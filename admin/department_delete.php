<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM Department WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Department deleted successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Select data in a row to delete first';
	}

	header('location: Department.php');
	
?>