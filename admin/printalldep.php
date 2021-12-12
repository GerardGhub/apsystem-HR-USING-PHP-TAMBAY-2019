<?php include 'includes/session.php'; ?>
<?php
  include '../timezone.php';
  $range_to = date('m/d/Y');
  $range_from = date('m/d/Y', strtotime('-30 day', strtotime($range_to)));
?>
<head>

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
	              <img src="images/GerardSs.jpg" height="40"></img>  <emp style="font-size:17px; text-align:center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Department Information's</emp>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border" style="display:none;">
              <div class="pull-right">
                <form method="POST" class="form-inline" id="payForm">
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right col-sm-8" id="reservation" name="date_range" value="<?php echo (isset($_GET['range'])) ? $_GET['range'] : $range_from.' - '.$range_to; ?>">
                  </div>
                  <button type="button" class="btn btn-primary btn-sm btn-flat" id="payroll"><span class="glyphicon glyphicon-print"></span> Daily Attendance</button>
                  <!--button type="button" class="btn btn-primary btn-sm btn-flat" id="payslip"><span class="glyphicon glyphicon-print"></span> Payslip</button-->
                </form>
              </div>
            </div>
            <div class="box-body">
      
	  
	  
	  
	  
	<?php include('connect.php') ?>
	
		  <?php
		     include('connect.php');
          $department=$_GET['id'];
                    $count_query = mysql_query("select * from employees where department='$department' AND resigned='1'") or die(mysql_error());        
          $countbuje = mysql_num_rows($count_query);
          
                    ?>
	
<style type="text/css">
<!--

a:link {
  color: #000000;
  text-decoration: none;
}
a:visited {
  text-decoration: none;
  color: #000000;
}
a:hover {
  text-decoration: none;
  color: #000000;
}
a:active {
  text-decoration: none;
  color: #000000;
}
-->
</style>

<script	>
function myFunction()
{
        var printButton = document.getElementById("printpagebutton");
        printButton.style.visibility = 'hidden';
        printButton.style.visibility = 'hidden';
        window.print()
}

</script>
    
<!-- sdas -->


  
   
<center><a href="" id="printpagebutton" onclick="myFunction()">Print</a></center>

     <center style="font-family:Arial;"> <?php echo date('m/d/Y');?></center> <div align="center" style="margin-top:5px; height:1px;">
 </div>

 <p style="font-family:Arial;">No. of Department:  <?php
  // $query123 = mysql_query("select * from department") or die(mysql_error());
 // $row123 = mysql_fetch_array($query123);
  //  $item_category=$row123['item_category'];
        $count_query = mysql_query("select * from department") or die(mysql_error());
        $count = mysql_num_rows($count_query);
    echo $count;
    ?></p>
	
	 <p style="font-family:Arial;">No. of Employee:  <?php
  // $query123 = mysql_query("select * from department") or die(mysql_error());
 // $row123 = mysql_fetch_array($query123);
  //  $item_category=$row123['item_category'];
        $count_query = mysql_query("select * from employees") or die(mysql_error());
        $count = mysql_num_rows($count_query);
    echo $count;
    ?></p>
	
	
<p style="font-family:Arial; display:none;">Asset Cost: <?php          
    $result5 = mysql_query("SELECT sum(price) FROM aa2000.tb_equipment where status='Good' AND item_category='1'");
    while($row5 = mysql_fetch_array($result5))
    { 
      $tinventoryprice=$row5['sum(price)']; 
      echo formatMoney($tinventoryprice,true);
    }
  ?></p>


		
 <table class="display table table-bordered" id="example12" cellspacing="0" width="100%">
              <thead>
                <tr>
              <th style="width:5%;background-color:#454545; color:white; text-align:center;">Image</th>
                <th style="width:11%;background-color:#454545; color:white; text-align:center;">Department</th>
			<th style="width:11%;background-color:#454545; color:white; text-align:center; ">No. Employee</th>
				<th style="width:11%;background-color:#454545; color:white; text-align:center; font-family:Times New Roman, Times, serif;">No. Sections</th>
				
					<th style="width:11%;background-color:#454545; color:white; text-align:center; ">No. Resigned</th>
				<th style="width:11%;background-color:#454545; color:white; text-align:center; font-family:Times New Roman, Times, serif;">Incomple Logs</th>
				

                 
                </tr>
              </thead>
        
                 
                               <?php

              function formatMoney($number, $fractional=false) {
                if ($fractional) {
                  $number = sprintf('%.2f', $number);
                }
                while (true) {
                  $replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
                  if ($replaced != $number) {
                    $number = $replaced;
                  } else {
                    break;
                  }
                }
                return $number;
              } 
        ?>
          
           <?php
		   include('connect.php');
		   
               $query = mysql_query("select distinct department from apsystem.employees") or die(mysql_error());
                        while ($row = mysql_fetch_array($query)) {
            $department=$row['department'];
            
            ?>
      <tr>
	     <td class="zoom" style="text-align:center; width:5%;">
		<center> <img src="../images/<?php
				 include('connect.php');
				$cat=$row['department'];
				$query7 = mysql_query("select * from employees where id='$cat'") or die(mysql_error());
				$row7 = mysql_fetch_array($query7);
				echo $row7['photo'];?>" class="img img-rounded"  width="55" height="40" /></center>
				 </td>
	  
	  
	  
	  
              <td><?php
			     include('connect.php');
            $cat=$row['department'];
            $query7 = mysql_query("select * from department where id='$cat'") or die(mysql_error());
            $row7 = mysql_fetch_array($query7);
            echo $row7['department_data'];
            ?></td>
			
			
			
			
			
          <td style="text-align:center;">
		  <?php
		     include('connect.php');
          $department=$row['department'];
                    $count_query = mysql_query("select * from employees where department='$department' AND resigned='1'") or die(mysql_error());        
          $count = mysql_num_rows($count_query);
          
                    ?>
                    <?php echo $count; ?>
					
					
					</td>
					
					
					
					
				
					
					
          <td style="text-align:center;">  
		  <?php
		 		     include('connect.php');
          $department=$row['department'];
                    $count_query = mysql_query("select * from sections where id='$department'") or die(mysql_error());        
          $count = mysql_num_rows($count_query);
          
                    ?>
                    <?php echo $count; ?>
					
          </td>
		  
		  
		  
		  					
			<td style="text-align:center;">
<?php
	include('connect.php');
	$department=$row['department'];
	$count_query = mysql_query("select * from employees where department='$department' AND resigned='0'") or die(mysql_error());
	$count = mysql_num_rows($count_query);
					
				
?>
<?php echo $count; ?>
</td>	
		  
		  
		  
		  
		  
		  
		  
		  
		 <td style="text-align:center;">
<!--?php 
include('connect.php');
$item_category=$row['item_category'];
$result5 = mysql_query("SELECT sum(price) FROM tb_equipment where item_category='$item_category' AND status='Dispossal'");
while($row5 = mysql_fetch_array($result5))
{
	$tprice=$row5['sum(price)'];
	echo formatMoney($tprice,true);
}
?-->
<?php
	include('connect.php');
	$department=$row['department'];
	//$id=$_GET['id'];
	$count_query = mysql_query("SELECT *, employees.employee_id AS empid, attendance.id AS attid FROM attendance LEFT JOIN employees ON employees.id=attendance.employee_id WHERE attendance.time_out='00:00:00' AND employees.department='$department'") or die(mysql_error());
	$countsx = mysql_num_rows($count_query);
					
				
?>
<?php echo $countsx; ?>

</td>		 
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  

      </tr>
      <?php } ?>
                                </tbody>
                            </table>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
            </div>
          </div>
        </div>
      </div>
    </section>   
  </div>
    
  <?php include 'includes/footer.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?> 
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
