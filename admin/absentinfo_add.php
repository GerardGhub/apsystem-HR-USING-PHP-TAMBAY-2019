<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		
		$LeaveForm = $_POST['LeaveForm'];
		$TypeofLeave = $_POST['TypeofLeave'];
		$date_added = $_POST['date_added'];
		$incident_date = $_POST['incident_date'];
		$employee_subject = $_POST['employee_subject'];

		$sql = "INSERT INTO empleaveform(LeaveForm, TypeofLeave, date_added, incident_date, employee_subject) 
		VALUES ('$LeaveForm','$TypeofLeave', '$date_added','$incident_date','$employee_subject')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'New Absent Information & Leave Form added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: absentinfo.php');

?>