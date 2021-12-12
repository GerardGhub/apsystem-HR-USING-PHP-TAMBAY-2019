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
$q_book = $conn->query("SELECT *, employees.employee_id AS empid, attendance.id AS attid FROM attendance LEFT JOIN employees ON employees.id=attendance.employee_id LEFT JOIN department ON employees.id=department.id LEFT JOIN position ON employees.position_id=position.id  LEFT JOIN sections ON employees.dept_section=sections.id WHERE date BETWEEN '$date1' AND '$date2' AND employees.id='$date3'") or die(mysqli_error());
$v_book = $q_book->num_rows;
if($v_book > 0){
	while($f_book = $q_book->fetch_array()){
		      $status = ($f_book['status'])?'<span class="label label-warning pull-right">ontime</span>':'<span class="label label-danger pull-right">late</span>';
	?>
	<tr>
						<td><?php echo date('M d, Y', strtotime($f_book['date']))?></td>
							<td><?php echo $f_book['empid']?></td>
							<td><?php echo $f_book['firstname']?>&nbsp;<?php echo $f_book['lastname'];?></td>
												<td><?php echo $f_book['department_data']?></td>
														<td><?php echo $f_book['section']?></td>
																		<td><?php echo $f_book['description']?></td>
				
							<td><?php echo date('h:i A', strtotime($f_book['time_in'])).$status ?></td>
											<td> <?php echo date('h:i A', strtotime($f_book['time_out']))?></td>
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