<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$empid = $_POST['id'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$middlename = $_POST['middlename'];
		$address = $_POST['address'];
		 $permanent_address = $_POST['permanent_address'];
		$birthdate = $_POST['birthdate'];
		$contact = $_POST['contact'];
		$gender = $_POST['gender'];
		$position = $_POST['position'];
		$schedule = $_POST['schedule'];
		$civil_status = $_POST['civil_status'];
		$date_hired = $_POST['date_hired'];
		$regular_date = $_POST['regular_date'];
		$sss_num = $_POST['sss_num'];
		$tin_num = $_POST['tin_num'];
		$tax_id = $_POST['tax_id'];
		$philhealth_num = $_POST['philhealth_num'];
		$hdmf_num = $_POST['hdmf_num'];
		$hdmf_rtn_num = $_POST['hdmf_rtn_num'];
		$salary_type = $_POST['salary_type'];
		$salary_structure = $_POST['salary_structure'];
		$salary_rate = $_POST['salary_rate'];
		$type_of_worker = $_POST['type_of_worker'];
		$department = $_POST['department'];
		$dept_section = $_POST['dept_section'];
		
		$sql = "UPDATE employees SET firstname = '$firstname', lastname = '$lastname', middlename = '$middlename',address = '$address', birthdate = '$birthdate', contact_info = '$contact', gender = '$gender', position_id = '$position', schedule_id = '$schedule', permanent_address = '$permanent_address', civil_status = '$civil_status', date_hired = '$date_hired', regular_date = '$regular_date', sss_num='$sss_num', tin_num = '$tin_num', tax_id = '$tax_id', philhealth_num = '$philhealth_num', hdmf_num = '$hdmf_num', hdmf_rtn_num = '$hdmf_rtn_num', salary_type = '$salary_type', salary_structure ='$salary_structure', salary_rate='$salary_rate', type_of_worker = '$type_of_worker', department = '$department', dept_section = '$dept_section' WHERE id = '$empid'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Employee updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Select employee to edit first';
	}

	header('location: employee.php');
?>