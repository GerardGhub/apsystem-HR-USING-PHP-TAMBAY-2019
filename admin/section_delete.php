<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM sections WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Section deleted successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Select data in a row to delete first';
	}

	header('location: Sections.php');
	
?>