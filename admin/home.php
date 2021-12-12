<?php include 'includes/session.php'; ?>
<?php 
  include '../timezone.php'; 
  $today = date('Y-m-d');
  $year = date('Y');
  if(isset($_GET['year'])){
    $year = $_GET['year'];
  }
?>
<head>
	<link rel="shortcut icon" href="includes/enma.jpg" type="image/x-icon"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#hide").click(function(){
    $("p").hide();
  });
  $("#show").click(function(){
    $("b").show();
  });
});
</script>
<style>
body{
	overflow:hidden;
	
	background-color:red;
}
</style>
</head>

<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  	<?php include 'includes/navbar_home.php'; ?>
  	<?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color:window;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <!--ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol-->
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
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua"  style="border-radius:20px;">
            <div class="inner">
              <?php
                $sql = "SELECT * FROM employees WHERE resigned='1'";
                $query = $conn->query($sql);

                echo "<h3>".$query->num_rows."</h3>";
              ?>
<a href="myemployees.php" class="small-box-footer">
              <p style="color:white; font-size:17px;">Total Employees</p>
			  			          </a>
            </div>
            <div class="icon">
              <i class="ion-ios-people"></i>
			          <!--a href="employee.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a-->
            </div>
            <!--a href="employee.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a-->
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green"  style="border-radius:20px;">
            <div class="inner">
              <?php
                $sql = "SELECT * FROM attendance";
                $query = $conn->query($sql);
                $total = $query->num_rows;

                $sql = "SELECT * FROM attendance WHERE status = 1";
                $query = $conn->query($sql);
                $early = $query->num_rows;
                
                $percentage = ($early/$total)*100;

                echo "<h3>".number_format($percentage, 2)."<sup style='font-size: 20px'>%</sup></h3>";
              ?>
             <a href="attendance.php" class="small-box-footer">
              <p style="font-size:17px;color:white;">On Time Percentage</p>
			  </a>
            </div>
            <div class="icon">
              <i class="ion-ios-speedometer"></i>
            </div>
            <!--a href="attendance.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a-->
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow"  style="border-radius:20px;">
            <div class="inner">
              <?php
                $sql = "SELECT * FROM attendance WHERE date = '$today' AND status = 1";
                $query = $conn->query($sql);

                echo "<h3>".$query->num_rows."</h3>"
              ?>
              <a href="attendance.php" class="small-box-footer">
              <p style="color:white;font-size:17px;">On Time Today</p>
			  </a>
            </div>
            <div class="icon">
              <i class="ion-ios-timer"></i>
            </div>
            <!--a href="attendance.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a-->
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red"  style="border-radius:20px;">
            <div class="inner">
              <?php
                $sql = "SELECT * FROM attendance WHERE date = '$today' AND status = '0' AND emp_attendance_status='present'";
                $query = $conn->query($sql);

                echo "<h3>".$query->num_rows."</h3>"
              ?>
     <a href="attendancelate.php" class="small-box-footer">
              <p style="font-size:17px;color:white;">No. of Late Today</p>
			  </a>
            </div>
            <div class="icon">
              <i class="ion-battery-charging"></i>
            </div>
            <!--a href="attendance.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a-->
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
	   <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua"  style="border-radius:20px;">
            <div class="inner">
              <?php
                $sql = "SELECT * FROM employees WHERE resigned='0'";
                $query = $conn->query($sql);

                echo "<h3>".$query->num_rows."</h3>";
              ?>
<a href="employee_resigned.php" class="small-box-footer">
              <p style="color:white; font-size:17px;">Total Resigned Employees</p>
			  			          </a>
            </div>
            <div class="icon">
              <i class="ion-ios-people"></i>
			          <!--a href="employee.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a-->
            </div>
            <!--a href="employee.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a-->
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green"  style="border-radius:20px;">
            <div class="inner">
              <?php
                $sql = "SELECT * FROM attendance";
                $query = $conn->query($sql);
                $total = $query->num_rows;

                $sql = "SELECT * FROM attendance WHERE status = 1";
                $query = $conn->query($sql);
                $early = $query->num_rows;
                
                $percentage = ($early/$total)*100;

                echo "<h3>".number_format($percentage, 2)."<sup style='font-size: 20px'>%</sup></h3>";
              ?>
             <a href="attendance.php" class="small-box-footer">
              <p style="font-size:17px;color:white;">Late & Undertime Percentage</p>
			  </a>
            </div>
            <div class="icon">
              <i class="ion-ios-speedometer"></i>
            </div>
            <!--a href="attendance.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a-->
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow"  style="border-radius:20px;">
            <div class="inner">

			
              <?php
                $sql = "SELECT *, employees.employee_id AS empid, attendance.id AS attid FROM attendance LEFT JOIN employees ON employees.id=attendance.employee_id WHERE attendance.time_out='00:00:00'";
                $query = $conn->query($sql);

                echo "<h3>".$query->num_rows."</h3>"
              ?>
              <a href="attendance.php" class="small-box-footer">
              <p style="color:white;font-size:17px;">Incomplete Logs Today</p>
			  </a>
            </div>
            <div class="icon">
              <i class="ion-ios-timer"></i>
            </div>
            <!--a href="attendance.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a-->
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red"  style="border-radius:20px;">
            <div class="inner">
              <?php
                $sql = "SELECT * FROM attendance WHERE date = '$today' AND status = '0' AND emp_attendance_status='absent'";
                $query = $conn->query($sql);

                echo "<h3>".$query->num_rows."</h3>"
              ?>
     <a href="attendance.php" class="small-box-footer">
              <p style="font-size:17px;color:white;">No. of Absent Today</p>
			  </a>
            </div>
            <div class="icon">
              <i class="ion-battery-charging"></i>
            </div>
            <!--a href="attendance.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a-->
          </div>
        </div>
        <!-- ./col -->
      </div>
	  <!--button id="hide" class="btn btn-primary">Hide</button>
<button id="show" class="btn btn-danger">Show</button>
	  <b style="display:none;"-->
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	 
	  
	  
	  
      <div class="row" style="display:nsone; background-color:skyblue;;">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title btn btn-primary" style="border-radius:10px;"><a href="home.php" style="color:white;">Attendance Statistic Report</h3></a>       <h3 class="box-title btn btn-primary" style="border-radius:10px;">Employee Status Notifications</h3>       <h3 class="box-title btn btn-primary" style="border-radius:10px;">MIS Department DTR Adjustmeny Report</h3>        <h3 class="box-title btn btn-primary" style="border-radius:10px;">Employee DA Late & Absences Monitoring </h3>       <h3 class="box-title btn btn-primary" style="border-radius:10px;">Department File Manager</h3> <h3 class="box-title btn btn-primary" style="border-radius:10px;">Sample Ord</h3>
              <div class="box-tools pull-right">
                <form class="form-inline">
                  <div class="form-group">
                    <label>Filter Year: </label>
                    <select class="form-control input-sm" id="select_year">
                      <?php
                        for($i=2019; $i<=2065; $i++){
                          $selected = ($i==$year)?'selected':'';
                          echo "
                            <option value='".$i."' ".$selected.">".$i."</option>
                          ";
                        }
                      ?>
                    </select>
                  </div>
                </form>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <br>
                <div id="legend" class="text-center"></div>
                <canvas id="barChart" style="height:350px"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>

      </section>
      <!-- right col -->
    </div>
  	<?php include 'includes/footer.php'; ?>

</div>
<!-- ./wrapper -->

<!-- Chart Data -->
<?php
  $and = 'AND YEAR(date) = '.$year;
  $months = array();
  $ontime = array();
  $late = array();
  $inc = array();
$resigned = array();
$absent = array();
$resigneds = array();

  for( $m = 1; $m <= 12; $m++ ) {
    $sql = "SELECT * FROM attendance WHERE MONTH(date) = '$m' AND status = 1 $and";
    $oquery = $conn->query($sql);
    array_push($ontime, $oquery->num_rows);
	
	

    $sql = "SELECT * FROM attendance WHERE MONTH(date) = '$m' AND emp_attendance_status ='present' AND status = 0 $and";
    $lquery = $conn->query($sql);
    array_push($late, $lquery->num_rows);
	
	
	
	    $sql = "SELECT * FROM attendance WHERE MONTH(date) = '$m' AND emp_attendance_status ='absent' AND status = 0 $and";
    $lavaquery = $conn->query($sql);
    array_push($absent, $lavaquery->num_rows);
	
	$sql = "SELECT * FROM employees WHERE MONTH(resigned_date) = '$m' AND resigned='0'";
	$myquery = $conn->query($sql);
	array_push($resigneds, $myquery->num_rows);
	
	
    $sql = "SELECT *, employees.employee_id AS empid, attendance.id AS attid FROM attendance LEFT JOIN employees ON employees.id=attendance.employee_id WHERE MONTH(date) = '$m' AND attendance.time_out='00:00:00' $and";
    $iquery = $conn->query($sql);
    array_push($inc, $iquery->num_rows);
	
		
    $sql = "SELECT *, employees.employee_id AS empid, attendance.id AS attid FROM attendance LEFT JOIN employees ON employees.id=attendance.employee_id WHERE MONTH(date) = '$m' AND employees.resigned='0' $and";
    $rsquery = $conn->query($sql);
    array_push($resigned, $rsquery->num_rows);


    $num = str_pad( $m, 2, 0, STR_PAD_LEFT );
    $month =  date('M', mktime(0, 0, 0, $m, 1));
    array_push($months, $month);
  }

  $months = json_encode($months);
  $late = json_encode($late);
  $ontime = json_encode($ontime);
    $inc = json_encode($inc);
$absent = json_encode($absent);
$resigneds = json_encode($resigneds);
?>
<!-- End Chart Data -->
<?php include 'includes/scripts.php'; ?>




  <script>
            $(function(){

                // Counter for dashboard stats
                $('.counter').counterUp({
                    delay: 10,
                    time: 1000
                });

                // Welcome notification
                toastr.options = {
                  "closeButton": true,
                  "debug": false,
                  "newestOnTop": false,
                  "progressBar": true,
                  "positionClass": "toast-top-right",
                  "preventDuplicates": false,
                  "onclick": null,
                  "showDuration": "300",
                  "hideDuration": "1000",
                  "timeOut": "5000",
                  "extendedTimeOut": "1000",
                  "showEasing": "swing",
                  "hideEasing": "linear",
                  "showMethod": "fadeIn",
                  "hideMethod": "fadeOut"
                }
                toastr["success"]( "Welcome <?php echo $_SESSION['sess_fname'];?> to Fixed Asset's Management System!");

				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
            });
        </script>



 <script>
            
            var table = document.getElementById("example"), sumVal = 0;
            
            for(var i = 1; i < table.rows.length; i++)
            {
                sumVal = sumVal + parseInt(table.rows[i].cells[8].innerHTML);
            }
            
            document.getElementById("val").innerHTML = "Sum Value = " + sumVal;
            console.log(sumVal);
            
        </script>
	  
	  
	  
	  
	  
	  
	  		
<script type="text/javascript" charset="utf-8">
	$(document).ready(function() {
	  $('#example').dataTable();
	});
    </script>
	  
	  
	  
	  
	  
        <script src="../js/jquery/jquery-2.2.4.min.js"></script>
        <script src="../js/bootstrap/bootstrap.min.js"></script>
        <script src="../js/pace/pace.min.js"></script>
        <script src="../js/lobipanel/lobipanel.min.js"></script>
        <script src="../js/iscroll/iscroll.js"></script>
        <script src="../js/prism/prism.js"></script>
        <script src="../js/DataTables/datatables.min.js"></script>
        <script src="../js/main.js"></script>
        <script>
            $(function($) {
                $('#example').DataTable();

                $('#example2').DataTable( {
                    "scrollY":        "300px",
                    "scrollCollapse": true,
                    "paging":         false
                } );

                $('#example3').DataTable();
            });
        </script>

		



<!-- STARTT-->

<script>
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

  $('.photo').click(function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });

});


function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'employee_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.empid').val(response.empid);
      $('.employee_id').html(response.employee_id);
	  //      $('.photo').html(response.photo);
	        $('#editx_employee_id').val(response.employee_id);
      $('.del_employee_name').html(response.firstname+' '+response.lastname);
	  $('#del_employee_photo').html(response.photo);
      $('#employee_name').html(response.firstname+' '+response.lastname);
      $('#edit_firstname').val(response.firstname);
	  $('#edit_middlename').val(response.middlename);
	  $('#edit_date_hired').val(response.date_hired);
	  $('#edit_regular_date').val(response.regular_date);
      $('#edit_lastname').val(response.lastname);
	  $('#edit_sss_num').val(response.sss_num);
	  $('#edit_tin_num').val(response.tin_num);
	  $('#edit_tax_id').val(response.tax_id);
	  $('#edit_philhealth_num').val(response.philhealth_num);
	  $('#edit_hdmf_num').val(response.hdmf_num);
	  $('#edit_hdmf_rtn_num').val(response.hdmf_rtn_num);
	  $('#edit_salary_type').val(response.salary_type);
	  $('#edit_salary_structure').val(response.salary_structure);
	  $('#edit_salary_rate').val(response.salary_rate);
	  $('#edit_type_of_worker').val(response.type_of_worker);
	  $('#edit_permanent_address').val(response.permanent_address);
	  $('#edit_civil_status').val(response.civil_status);
      $('#edit_address').val(response.address);
      $('#datepicker_edit').val(response.birthdate);
      $('#edit_contact').val(response.contact_info);
	  $('#edit_dept_section').val(response.dept_section);
	  $('#edit_department').val(response.department);
	  	  $('#date_hired').val(response.date_hired);
	  $('#regular_date').val(response.regular_date);
      $('#gender_val').val(response.gender).html(response.gender);
      $('#position_val').val(response.position_id).html(response.description);
      $('#schedule_val').val(response.schedule_id).html(response.time_in+' - '+response.time_out);
    }
  });
}
</script>

<!-- ENDING -->


<script>
$(function(){
  var barChartCanvas = $('#barChart').get(0).getContext('2d')
  var barChart = new Chart(barChartCanvas)
  var barChartData = {
    labels  : <?php echo $months; ?>,
    datasets: [
      {
        label               : 'No. of Late',
        fillColor           : 'rgba(210, 214, 222, 1)',
        strokeColor         : 'rgba(210, 214, 222, 1)',
        pointColor          : 'rgba(210, 214, 222, 1)',
        pointStrokeColor    : '#c1c7d1',
        pointHighlightFill  : '#fff',
        pointHighlightStroke: 'rgba(220,220,220,1)',
        data                : <?php echo $late; ?>
      },
      {
        label               : 'No. of Ontime',
        fillColor           : 'rgba(60,141,188,0.9)',
        strokeColor         : 'rgba(60,141,188,0.8)',
        pointColor          : '#3b8bba',
        pointStrokeColor    : 'rgba(60,141,188,1)',
        pointHighlightFill  : '#fff',
        pointHighlightStroke: 'rgba(60,141,188,1)',
        data                : <?php echo $ontime; ?>
      },
	  {
	   label               : 'No. of Absent',
        fillColor           : 'rgba(60,141,188,0.9)',
        strokeColor         : 'rgba(60,141,188,0.8)',
        pointColor          : '#3b8bba',
        pointStrokeColor    : 'rgba(60,141,188,1)',
        pointHighlightFill  : '#fff',
        pointHighlightStroke: 'rgba(60,141,188,1)',
        data                : <?php echo $absent; ?>
      },
	   {
	   label               : 'No. of Incomplete Logs',
        fillColor           : 'rgba(51,102,255,0.2)',
        strokeColor         : 'rgba(51,102,255,0.2)',
        pointColor          : '#3b8bba',
        pointStrokeColor    : 'rgba(51,102,255,0.2)',
        pointHighlightFill  : '#fff',
        pointHighlightStroke: 'rgba(51,102,255,0.2)',
        data                : <?php echo $inc; ?>
      },
	   {
	   label               : 'No. of Late & Undertime',
        fillColor           : 'rgba(60,141,188,0.9)',
        strokeColor         : 'rgba(60,141,188,0.8)',
        pointColor          : '#3b8bba',
        pointStrokeColor    : 'rgba(60,141,188,1)',
        pointHighlightFill  : '#fff',
        pointHighlightStroke: 'rgba(60,141,188,1)',
		
        data                : <?php echo $ontime; ?>
      },
	  	   {
	   label               : 'No. of Employee Resigned',
        fillColor           : '#270f31',
        strokeColor         : '#270f31',
        pointColor          : '#270f31',
        pointStrokeColor    : '#270f31',
        pointHighlightFill  : '#fff',
        pointHighlightStroke: 'rgba(60,141,188,1)',
		
        data                : <?php echo $resigneds; ?>
      }
    ]
  }
  barChartData.datasets[1].fillColor   = '#00a65a'
  barChartData.datasets[1].strokeColor = '#00a65a'
  barChartData.datasets[1].pointColor  = '#00a65a'
  var barChartOptions                  = {
    //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
    scaleBeginAtZero        : true,
    //Boolean - Whether grid lines are shown across the chart
    scaleShowGridLines      : true,
    //String - Colour of the grid lines
    scaleGridLineColor      : 'rgba(0,0,0,.05)',
    //Number - Width of the grid lines
    scaleGridLineWidth      : 1,
    //Boolean - Whether to show horizontal lines (except X axis)
    scaleShowHorizontalLines: true,
    //Boolean - Whether to show vertical lines (except Y axis)
    scaleShowVerticalLines  : true,
    //Boolean - If there is a stroke on each bar
    barShowStroke           : true,
    //Number - Pixel width of the bar stroke
    barStrokeWidth          : 2,
    //Number - Spacing between each of the X value sets
    barValueSpacing         : 5,
    //Number - Spacing between data sets within X values
    barDatasetSpacing       : 1,
    //String - A legend template
    legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
    //Boolean - whether to make the chart responsive
    responsive              : true,
    maintainAspectRatio     : true
  }

  barChartOptions.datasetFill = false
  var myChart = barChart.Bar(barChartData, barChartOptions)
  document.getElementById('legend').innerHTML = myChart.generateLegend();
});
</script>
<script>
$(function(){
  $('#select_year').change(function(){
    window.location.href = 'home.php?year='+$(this).val();
  });
});
</script>


</body>
</html>
