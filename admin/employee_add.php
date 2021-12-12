<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$middlename =$_POST['middlename'];
		$address = $_POST['address'];
		$birthdate = $_POST['birthdate'];
		$contact = $_POST['contact'];
		$gender = $_POST['gender'];
		$position = $_POST['position'];
		$schedule = $_POST['schedule'];
		$emp_status = $_POST['emp_status'];
		$department = $_POST['department'];
		$dept_section = $_POST['dept_section'];
		$filename = $_FILES['photo']['name'];
		$number = $_POST['number'];
		$date_hired = $_POST['date_ hired'];
		$regular_date = $_POST['regular_date'];
		$sss_num = $_POST['sss_num'];
		$tin_num = $_POST['tin_num'];
		$tax_id = $_POST['tax_id'];
		$philhealth_num = $_POST['philhealth_num'];
		$hdmf_num = $_POST['hdmf_num'];
		$hdmf_rtn_num = $_POST['hdmf_rtn_num'];
		$salary_type = $_POST['salary_type'];
		$salary_rate = $_POST['salary_rate'];
		$salary_structure = $_POST['salary_structure'];
		$type_of_worker = $_POST['type_of_worker'];
		$resigned = $_POST['resigned'];
		
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}
		//creating employeeid
		$letters = '';
		$numbers = '';
		foreach (range('A', 'Z') as $char) {
		    $letters .= $char;
		}
		for($i = 0; $i < 10; $i++){
			$numbers .= $i;
		}
		$employee_id = substr(str_shuffle($letters), 0, 3).substr(str_shuffle($numbers), 0, 9);
		//
		$sql = "INSERT INTO employees (employee_id, firstname, lastname, address, birthdate, contact_info, gender, position_id, schedule_id, photo,department, emp_status, dept_section, created_on, number, middlename,date_hired,regular_date, sss_num, tin_num, tax_id, philhealth_num, hdmf_num, hdmf_rtn_num, salary_type, salary_structure, type_of_worker, salary_rate, resigned) VALUES ('$employee_id', '$firstname', '$lastname', '$address', '$birthdate', '$contact', '$gender', '$position', '$schedule', '$filename', '$department', '$emp_status', '$dept_section', NOW(), '1', '$middlename', '$date_hired','$regular_date','$sss_num','$tin_num','$tax_id', '$philhealth_num','$hdmf_num','$hdmf_rtn_num','$salary_type','$salary_structure','$type_of_worker','$salary_rate','1')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Employee added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: viewempleyado.php');
?>