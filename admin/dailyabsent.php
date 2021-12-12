<?php include 'includes/session.php'; ?>
<?php
  include '../timezone.php';
  $range_to = date('m/d/Y');
  $range_from = date('m/d/Y', strtotime('-30 day', strtotime($range_to)));
?>
<head>
		<link rel = "stylesheet" type = "text/css" href = "css/jquery-ui.css"/>
</head>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper" style="background-color:whitesmoke;">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color:window;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <!--h1>
        Payroll
      </h1-->
      <!--ol class="breadcrumb">
        <!--li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Payroll</li-->
      <!--/ol-->
    </section>
    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
	  		<div id="printableArea">
	    <img src="images/GerardSs.jpg" height="40"></img> <emp style="font-size:17px;">&nbsp;Employee Absences Report</emp>
		
		
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <div class="pull-right">
			  
			  
			  		<div class = "form-inline">
				<label>Date:</label>
				<input type = "text" class = "form-control" placeholder = "Start"  id = "date1"/>
				<label>To</label>
				<input type = "text" class = "form-control" placeholder = "End"  id = "date2"/>
								<input type = "text" class = "form-control" value="<?php echo $get_id=$_GET['id']; ?>" placeholder = "End"  id = "date3" readonly style="display:none;"/>
				<button type = "button" class = "btn btn-primary" id = "btn_search"><span class = "glyphicon glyphicon-search"></span></button> 
				<button type = "button" id = "reset" class = "btn btn-success"><span class = "glyphicon glyphicon-refresh"><span></button>

								<button type = "button" onclick="printDiv('printableArea')"class = "btn btn-info"><span class = "glyphicon glyphicon-print"><span></button>
			</div>
                <!--form method="POST" class="form-inline" id="payForm">
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right col-sm-8" id="reservation" name="date_range" value="<?php echo (isset($_GET['range'])) ? $_GET['range'] : $range_from.' - '.$range_to; ?>">
                  </div>
                  <button type="button" class="btn btn-primary btn-sm btn-flat" id="payroll"><span class="glyphicon glyphicon-print"></span> Daily Attendance</button>
        
                </form-->
              </div>
            </div>
            <div class="box-body">
            
	

			<table class = "table table-bordered" id="example1">
					<thead>
						<tr>
							<th style = "width:10%;">Date</th>
							<!--th style = "width:10%;">Employee&nbsp;ID</th-->
									<th style = "width:25%;">Name</th>
							<th style = "width:15%;">Department</th>
														<th style = "width:20%;">Section</th>
							<th style = "width:10%;">Position</th>
							<th style = "width:20%;">Leave&nbsp;Form</th>
		<th style = "width:20%;">TypeOFLeave</th>
						</tr>
					</thead>
					<tbody id = "load_data">
						<?php
							$conn = new mysqli("localhost", "root", "", "apsystem");
							if(!$conn){
								die("Fatal Error: Connection Error!");
							}
						//	$get_id=$_GET['id'];
						$date_now =date('Y/m/d');
							$q_book = $conn->query("SELECT *, attendance.employee_id AS attid, employees.id AS empid , employees.employee_id AS pogi FROM employees LEFT JOIN attendance ON attendance.employee_id=employees.id LEFT JOIN department ON department.id=employees.department LEFT JOIN sections ON sections.id=employees.dept_section LEFT JOIN position On position.id=employees.position_id WHERE date='$date_now' AND attendance.emp_attendance_status='absent'") or die(mysqli_error());
							while($f_book = $q_book->fetch_array()){
								     //  $status = ($f_book['status'])?'<span class="label label-warning pull-right">ontime</span>':'<span class="label //label-danger pull-right">late</span>';
						?>
						<tr>
							<td><?php echo date($f_book['date'])?></td>
							<!--td><?php echo $f_book['pogi']?></td-->
							<td><?php echo $f_book['firstname']?>&nbsp;<?php echo $f_book['lastname'];?></td>
												<td><?php echo $f_book['department_data']?></td>
														<td><?php echo $f_book['section']?></td>
																		<td><?php echo $f_book['description']?></td>
				
					<td><?php
			     include('connect.php');
				 		//	$date_now =date('Y/m/d');
						$date_nower =date('Y-m-d');
						
            $cat=$f_book['empid'];
            $query7 = mysql_query("select * from empleaveform where incident_date='$date_nower' AND employee_subject='$cat'") or die(mysql_error());
            $row7 = mysql_fetch_array($query7);
            echo $row7['LeaveForm'];
            ?></td>
			
			
					<td><?php
			     include('connect.php');
				 $datenow =date('Y-m-d');
            $cat=$f_book['empid'];
            $query7 = mysql_query("select * from tol LEFT JOIN empleaveform ON empleaveform.TypeofLeave=tol.id where empleaveform.employee_subject='$cat' AND empleaveform.incident_date='$datenow'") or die(mysql_error());
            $row7 = mysql_fetch_array($query7);
            echo $row7['type_of_leave'];
            ?></td>
						</tr>
						<?php
							}
						?>
					</tbody>
				</table>
			
			
			
			
			
			
			</div>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
            </div>
          </div>
        </div>
      </div>
    </section>   
  </div>
    
  <?php include 'includes/footer.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
<!--script src = "js/jquery-3.1.1.js"></script-->
<script src = "js/jquery-ui.js"></script>
<script src = "ajaxabsences.js"></script>
<script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}


$(function(){
  $('.edit').click(function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $('.delete').click(function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $("#reservation").on('change', function(){
    var range = encodeURI($(this).val());
    window.location = 'gerardlover.php?range='+range;
  });

  $('#payroll').click(function(e){
    e.preventDefault();
    $('#payForm').attr('action', 'dailyattendance_generate.php');
    $('#payForm').submit();
  });

  $('#payslip').click(function(e){
    e.preventDefault();
    $('#payForm').attr('action', 'payslip_generate.php');
    $('#payForm').submit();
  });

});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'position_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('#posid').val(response.id);
      $('#edit_title').val(response.description);
      $('#edit_rate').val(response.rate);
      $('#del_posid').val(response.id);
      $('#del_position').html(response.description);
    }
  });
}


</script>
</body>
</html>
