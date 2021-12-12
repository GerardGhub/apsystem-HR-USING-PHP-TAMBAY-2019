<?php
$date1 = date("Y-m-d", strtotime($_POST['date1']));
$date2 = date("Y-m-d", strtotime($_POST['date2']));
$date3 = $_POST['date3'];
//$mayaman = $_GET['myid'];
//$get_id=$_POST['id'];
$conn = new mysqli("localhost", "root", "", "apsystem");
if(!$conn){
	die("Fatal Error: Connection Error!");
}
	//$get_id=$_GET['id'];
$q_book = $conn->query("SELECT *, attendance.employee_id AS attid, employees.id AS empid , employees.employee_id AS pogi FROM employees LEFT JOIN attendance ON attendance.employee_id=employees.id LEFT JOIN department ON department.id=employees.department LEFT JOIN sections ON sections.id=employees.dept_section LEFT JOIN position ON position.id=employees.position_id WHERE attendance.date BETWEEN '$date1' AND '$date2' AND attendance.emp_attendance_status='absent'") or die(mysqli_error());
$v_book = $q_book->num_rows;
if($v_book > 0){
	while($f_book = $q_book->fetch_array()){
		    //  $status = ($f_book['status'])?'<span class="label label-warning pull-right">ontime</span>':'<span class="label label-danger //pull-right">late</span>';
	?>
	<tr>
					<td><?php echo date($f_book['date'])?></td>
							<td><?php echo $f_book['pogi']?></td>
							<td><?php echo $f_book['firstname']?>&nbsp;<?php echo $f_book['lastname'];?></td>
												<td><?php echo $f_book['department_data']?></td>
														<td><?php echo $f_book['section']?></td>
																		<td><?php echo $f_book['description']?></td>
				
					<td><?php echo $f_book['status']?></td>
					<td>sds</td>
	</tr>
	<?php
	}
}else{
		echo '
		<tr>
			<td colspan = "4"><center>Record Not Found</center></td>
		</tr>
		';
}
	?>