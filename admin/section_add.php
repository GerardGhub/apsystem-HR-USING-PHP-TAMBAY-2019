<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$section = $_POST['section'];
		$department = $_POST['department'];
		$date_added = $_POST['date_added'];

		$sql = "INSERT INTO sections(section,department, date_added) VALUES ('$section','$department', '$date_added')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'New Section added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: Sections.php');

?>