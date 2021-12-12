<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$department = $_POST['department'];
		$section = $_POST['section'];
		$datemodified = $_POST['datemodified'];

		$sql = "UPDATE sections SET section = '$section', department = '$department' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Section updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location:Sections.php');

?>