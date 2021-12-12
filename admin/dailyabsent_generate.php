<?php
	include 'includes/session.php';
  	
	function generateRow($from, $to, $conn, $deduction){
		$contents = '';
	 	$date_now = date('Y-m-d');
		  $sql = "SELECT *, SUM(amount) as total_amount FROM deductions";
                    $query = $conn->query($sql);
                    $drow = $query->fetch_assoc();
                    $deduction = $drow['total_amount'];
  
                    
                    $to = date('Y-m-d');
                    $from = date('Y-m-d', strtotime('-30 day', strtotime($to)));

                    if(isset($_GET['range'])){
                      $range = $_GET['range'];
                      $ex = explode(' - ', $range);
                      $from = date('Y-m-d', strtotime($ex[0]));
                      $to = date('Y-m-d', strtotime($ex[1]));
                    }
				  
		
		
		
		$sql = "SELECT *, attendance.employee_id AS attid, employees.id AS empid FROM employees LEFT JOIN attendance ON attendance.employee_id=employees.id LEFT JOIN department ON department.id=employees.department WHERE attendance.date ='$date_now' AND attendance.emp_attendance_status='absent'";
  	//$date_now = date('Y-m-d');

		$query = $conn->query($sql);
		$total = 0;
		while($row = $query->fetch_assoc()){
			$empid = $row['empid'];
			          $status = ($row['status'])?'<span class="label label-warning pull-right">ontime</span>':'<span class="label label-danger pull-right" style="background-color:orange;border-radius:10px;">&nbsp;late</span>';
                      
	      	$casql = "SELECT *, SUM(amount) AS cashamount FROM cashadvance WHERE employee_id='$empid' AND date_advance BETWEEN '$from' AND '$to'";
	      
	      	$caquery = $conn->query($casql);
	      	$carow = $caquery->fetch_assoc();
	      	$cashadvance = $carow['cashamount'];

			//$gross = $row['rate'] * $row['total_hr'];
			$total_deduction = $deduction + $cashadvance;
      		//$net = $gross - $total_deduction;

		//	$total += $net;
			$contents .= '
			<tr>
				<td style="font-size:9px;width:24%;">'.$row['lastname'].', '.$row['firstname'].'</td>
				
				<td style="width:25%;font-size:9px;">'.$row['department_data'].'</td>
						<td style="width:20%; font-size:9px; text-align:center;">Regular</td>
	<td style="font-size:10px;text-align:center;">WITH</td>
		<td style="font-size:8px; text-align:center;">Emergency Leave</td>

			</tr>
			';
		}

		$contents .= '
		
		';
		return $contents;
	}
		
	$range = $_POST['date_range'];
	$ex = explode(' - ', $range);
	$from = date('Y-m-d', strtotime($ex[0]));
	$to = date('Y-m-d', strtotime($ex[1]));

	$sql = "SELECT *, SUM(amount) as total_amount FROM deductions";
    $query = $conn->query($sql);
   	$drow = $query->fetch_assoc();
    $deduction = $drow['total_amount'];

	$from_title = date('M d, Y', strtotime($ex[0]));
	$to_title = date('M d, Y', strtotime($ex[1]));

	require_once('../tcpdf/tcpdf.php');  
    $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
    $pdf->SetCreator(PDF_CREATOR);  
    $pdf->SetTitle('Daily Absents-DTR:'  .$to_title);  
    $pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
    $pdf->SetDefaultMonospacedFont('helvetica');  
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
    $pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
    $pdf->setPrintHeader(false);  
    $pdf->setPrintFooter(false);  
    $pdf->SetAutoPageBreak(TRUE, 10);  
    $pdf->SetFont('helvetica', '', 11);  
    $pdf->AddPage();  
    $content = '';  
    $content .= '
      	<h2 align="center">Daily Absents</h2>
      	<h4 align="center">'.$to_title.'</h4>
      	<table border="1" cellspacing="0" cellpadding="3">  
           <tr>  
           		<th width="24%" align="center"><b>Employee Name</b></th>
                <th width="25%" align="center"><b>Department</b></th>
				               <th width="20%" align="center"><b>Status</b></th>
				                <th width="15%" align="center"><b>Leave&nbsp;Form</b></th>
								                <th width="18%" align="center"><b>TypesOfLeave</b></th>

           </tr>  
      ';  
    $content .= generateRow($from, $to, $conn, $deduction);  
    $content .= '</table>';  
    $pdf->writeHTML($content);  
    $pdf->Output('payroll.pdf', 'I');

?>