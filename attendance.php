<?php
	if(isset($_POST['employee'])){
		$output = array('error'=>false);

		include 'conn.php';
		include 'timezone.php';

		$employee = $_POST['employee'];
		$status = $_POST['status'];

		$sql = "SELECT * FROM employees WHERE employee_id = '$employee'";
		$query = $conn->query($sql);

		if($query->num_rows > 0){
			$row = $query->fetch_assoc();
			$id = $row['id'];
			$dept = $row['department'];
			$image = $row['photo'];
			$date_now = date('Y-m-d');
			$sample = $row['number'];
			//START
			
			
			//ENDING


			if($sample == '1'){
			$sql = "SELECT * FROM attendance WHERE employee_id='5' AND date='$date_now' AND date IS NOT NULL";
				$query = $conn->query($sql);
				if($query->num_rows > 0){
					$output['error'] = true;
					$output['message'] = 'You have timed in for bekimon';
			
				
				}
				else{
					
							$sql = "INSERT INTO attendance (emp_attendance_status, date,employee_id)
					SELECT 'absent', '$date_now', id
					FROM employees WHERE resigned='1'";
							$conn->query($sql);
							
												$sql = "UPDATE employees SET number = '1'";
							$conn->query($sql);
							
					
				}
				
				
						//		$sql = "SELECT * FROM attendance WHERE employee_id = '$id' AND time_in IS NULL";
				
				$sql = "SELECT * FROM attendance WHERE employee_id = '$id' AND time_in IS NULL";
								//$sql = "SELECT * FROM attendance WHERE employee_id = '$id' AND date='$date_now' AND emp_attendance_status='absent'";
				$query = $conn->query($sql);
				if($query->num_rows > 0){
					$output['error'] = true;
					$output['message'] = 'You have timed in for todaysa';
		
											
				

				}
				else{
					//updates
					$sched = $row['schedule_id'];
					$lognow = date('H:i:s');
					$sql = "SELECT * FROM schedules WHERE id = '$sched'";
					$squery = $conn->query($sql);
					$srow = $squery->fetch_assoc();
					$logstatus = ($lognow > $srow['time_in']) ? 0 : 1;
					//
					
					
					
					$sql = "UPDATE employees SET number = '2' WHERE id = '$id'";
							$conn->query($sql);
							
							/*
							
												$sql = "INSERT INTO attendance (emp_attendance_status, date,employee_id)
					SELECT 'absent', '$date_now', id
					FROM employees WHERE resigned='1'";
							$conn->query($sql);
							*/

				/*			
					$sql = "INSERT INTO attendance (emp_attendance_status, date,employee_id)
					SELECT 'absent', '$date_now', id
					FROM employees WHERE resigned='1'";
							$conn->query($sql);
					
				*/

	$sql = "UPDATE attendance SET time_in = NOW(), status='$logstatus', emp_attendance_status='present' WHERE employee_id = '$id' AND date='$date_now;'";
							$conn->query($sql);

							
				
							
					
					//$sql = "INSERT INTO attendance (employee_id, date, time_in, status, emp_attendance_status) VALUES ('$id', '$date_now', NOW(), //'$logstatus', 'present')";
					if($conn->query($sql)){
						//$output['message'] = 'Time in SuccessFully!: '.$row['firstname'].' '.$row['lastname'];
					$output['message'] = 'Time In SuccessFully!!<br>'.$row['firstname'].'&nbsp;'.$row['lastname'].'<p><emp style="font-size:20px;">'.$row['position'].'</emp>';
					
					
					
								//	$output['message22'] = $image;
								//	echo "<script>window.location.href = 'https://stackoverflow.com';</script>";
									//	header("Location: managepolicy.php");
					
					}
					else{
						$output['error'] = true;
						$output['message'] = $conn->error;
					}
				}
			}
			else{
					$sql = "SELECT *, attendance.id AS uid FROM attendance LEFT JOIN employees ON employees.id=attendance.employee_id WHERE attendance.employee_id = '$id' AND date = '$date_now'";
				$query = $conn->query($sql);
				if($query->num_rows < 1){
					$output['error'] = true;
					$output['message'] = 'Cannot Timeout. No time in or there is a logs need to adjust.';
									$sql = "UPDATE employees SET number = '1' WHERE id = '$id'";
							$conn->query($sql);
				}
				else{
					$row = $query->fetch_assoc();
					if($row['time_out'] != '00:00:00'){
						$output['error'] = true;
						$output['message'] = 'You have timed out for today';
					}
					else{
						$sql = "UPDATE employees SET number = '1' WHERE id = '$id'";
							$conn->query($sql);
						
						
						$sql = "UPDATE attendance SET time_out = NOW() WHERE id = '".$row['uid']."'";
						if($conn->query($sql)){
							$output['message'] = 'Time out: '.$row['firstname'].'&nbsp;'.$row['lastname'];
			$output['message'] = 'Time out SuccessFully!!:<br> '.$row['firstname'].'&nbsp;'.$row['lastname'].'<p><emp style="font-size:20px;">'.$row['position'].'</emp>';
							$sql = "SELECT * FROM attendance WHERE id = '".$row['uid']."'";
							$query = $conn->query($sql);
							$urow = $query->fetch_assoc();

							$time_in = $urow['time_in'];
							$time_out = $urow['time_out'];

							$sql = "SELECT * FROM employees LEFT JOIN schedules ON schedules.id=employees.schedule_id WHERE employees.id = '$id'";
							$query = $conn->query($sql);
							$srow = $query->fetch_assoc();

							if($srow['time_in'] > $urow['time_in']){
								$time_in = $srow['time_in'];
							}

							if($srow['time_out'] < $urow['time_in']){
								$time_out = $srow['time_out'];
							}

							$time_in = new DateTime($time_in);
							$time_out = new DateTime($time_out);
							$interval = $time_in->diff($time_out);
							$hrs = $interval->format('%h');
							$mins = $interval->format('%i');
							$mins = $mins/60;
							$int = $hrs + $mins;
							if($int > 4){
								$int = $int - 1;
							}

							$sql = "UPDATE attendance SET num_hr = '$int' WHERE id = '".$row['uid']."'";
							$conn->query($sql);
						}
						else{
							$output['error'] = true;
							$output['message'] = $conn->error;
						}
					}
					
				}
			}
		}
		else{
			$output['error'] = true;
			$output['message'] = 'Employee ID not found';
		}
		
	}
	
	echo json_encode($output);

?>