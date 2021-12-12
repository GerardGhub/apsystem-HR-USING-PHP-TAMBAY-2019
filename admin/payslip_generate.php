<?php
	include 'includes/session.php';
	
	$range = $_POST['date_range'];
	$ex = explode(' - ', $range);
	$from = date('Y-m-d', strtotime($ex[0]));
	$to = date('Y-m-d', strtotime($ex[1]));

	$sql = "SELECT *, SUM(amount) as total_amount FROM deductions";
    $query = $conn->query($sql);
   	$drow = $query->fetch_assoc();
    $deduction = $drow['total_amount'];



	$sql = "SELECT * FROM deductions WHERE id='1'";
    $query = $conn->query($sql);
   	$dqrow = $query->fetch_assoc();
    $sss = $dqrow['amount'];

	$sql = "SELECT * FROM deductions WHERE id='3'";
    $query = $conn->query($sql);
   	$dqxrow = $query->fetch_assoc();
    $philhealth = $dqxrow['amount'];


	$sql = "SELECT * FROM deductions WHERE id='2'";
    $query = $conn->query($sql);
   	$dqxarow = $query->fetch_assoc();
    $pagibig = $dqxarow['amount'];
	
	
	$sql = "SELECT * FROM deductions WHERE id='4'";
    $query = $conn->query($sql);
   	$dqxawrow = $query->fetch_assoc();
    $mobile = $dqxawrow['amount'];
	

	$from_title = date('M d, Y', strtotime($ex[0]));
	$to_title = date('M d, Y', strtotime($ex[1]));

	require_once('../tcpdf/tcpdf.php');  
    $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
    $pdf->SetCreator(PDF_CREATOR);  
    $pdf->SetTitle('Payslip: '.$from_title.' - '.$to_title);  
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
    $contents = '';

	$sql = "SELECT *, SUM(num_hr) AS total_hr, attendance.employee_id AS empid, employees.employee_id AS employee FROM attendance LEFT JOIN employees ON employees.id=attendance.employee_id LEFT JOIN position ON position.id=employees.position_id LEFT JOIN department ON department.id=employees.department WHERE employees.resigned='1' AND date BETWEEN '$from' AND '$to' GROUP BY attendance.employee_id ORDER BY employees.lastname ASC, employees.firstname ASC";

	$query = $conn->query($sql);
	while($row = $query->fetch_assoc()){
		$empid = $row['empid'];
                      
      	$casql = "SELECT *, SUM(amount) AS cashamount FROM cashadvance WHERE employee_id='$empid' AND date_advance BETWEEN '$from' AND '$to'";
      
      	$caquery = $conn->query($casql);
      	$carow = $caquery->fetch_assoc();
      	$cashadvance = $carow['cashamount'];

		$gross = $row['rate'] * $row['total_hr'];
		$total_deduction = $deduction + $cashadvance;
  		$net = $gross - $total_deduction;

		$contents .= '
			<h2 align="center">Gerard Singian MFTG Corporation</h2>
			<h4 align="center">'.$from_title." - ".$to_title.'</h4>
			
			<table cellspacing="3" cellpadding="1">  
    	       	<tr>  
            		<td width="25%" align="right">Employee Name: </td>
                 	<td width="25%"><b>'.$row['firstname']." ".$row['lastname'].'</b></td>
				 	<td width="25%" align="right">Rate per Hour: </td>
                 	<td width="25%" align="right">'.number_format($row['rate'], 2).'</td>
					
					
    	    	</tr>
			
    	    	<tr>
    	    		<td width="25%" align="right">Employee ID: </td>
				 	<td width="25%">'.$row['employee'].'</td>   
				 	<td width="25%" align="right">Total Hours: </td>
				 	<td width="25%" align="right">'.number_format($row['total_hr'], 2).'</td>
					
    	    	</tr>
					<tr>
				   		<td width="25%" align="right">Department: </td>
                 	<td width="25%"><b>'.$row['department_data'].'</b></td>
					<td width="25%" align="right"></td>
                 	<td width="25%"></td>
				</tr>
			

				<tr>
				<td width="25%" align="right">Position: </td>
                 	<td width="25%"><b>'.$row['description'].'</b></td>
						   		<td width="25%" align="right"> </td>
                 	<td width="25%"></td>
					
					
					</tr>
					<br>
<tr>
			   		<td width="25%" align="right">SSS: </td>
                 	<td width="25%"><b>'.$sss.'</b></td>
						<td width="25%" align="right"><b>Gross Pay:</b></td>
                 		 	<td width="25%" align="right"><b>'.number_format(($row['rate']*$row['total_hr']), 2).'</b></td> 
</tr>

				
				
    	    	<tr> 
    	   <td width="25%" align="right">PhilHealth: </td>
                 	<td width="25%"><b>'.$philhealth.'</b></td>
			 	<td width="25%" align="right">Deduction: </td>
				 	<td width="25%" align="right">'.number_format($deduction, 2).'</td> 
    	    	</tr>
    	    	<tr> 
    	    		   <td width="25%" align="right">Pagibig: </td>
                 	<td width="25%"><b>'.$pagibig.'</b></td>
	 	<td width="25%" align="right">Cash Advance: </td>
				 	<td width="25%" align="right">'.number_format($cashadvance, 2).'</td> 
    	    	</tr>
    	    	<tr> 
    	    		    		   <td width="25%" align="right">Mobile Legends: </td>
                 	<td width="25%"><b>'.$mobile.'</b></td>
				 	<td width="25%" align="right"><b>Total Deduction:</b></td>
				 	<td width="25%" align="right"><b>'.number_format($total_deduction, 2).'</b></td> 
    	    	</tr>
    	    	<tr> 
    	    		<td></td> 
    	    		<td></td>
			 	<td width="25%" align="right"><b>Net Pay:</b></td>
				 	<td width="25%" align="right"><b>'.number_format($net, 2).'</b></td> 
    	    	</tr>
    	   
    	    </table>
    	    <br><hr>
		';
	}
    $pdf->writeHTML($contents);  
    $pdf->Output('payslip.pdf', 'I');

?>