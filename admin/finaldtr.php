<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<?php include('includes/config.php'); ?>
<head>
  			<link rel="shortcut icon" href="includes/enma.jpg" type="image/x-icon"/>
<style>
.zoom {
 //padding: 50px;
  //background-color: green;
  transition: transform .200s; /* Animation */

 // height: 100px;
  margin: 0 auto;
}
.zoom:hover {
  transform: scale(3.5); /* (390% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}

</style>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color:window;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Employee List DTR Adjustment
      </h1>
      <ol class="breadcrumb">
        <!--li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Employees</li>
        <li class="active">Employee List</li-->
      </ol>
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
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!--div class="box-header with-border">
               <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a>
            </div-->
            <div class="box-body">
              <table class="display table table-bordered" id="example1" cellspacing="0" width="100%">
              <thead>
                <tr>
              <th style="width:5%;background-color:#454545; color:white; text-align:center;">Image</th>
 	<!--th style="width:5%;background-color:#454545; border-radisus:15px; color:white; text-align:center; font-size:15px; color:white;">Employee_ID</th-->
		
		
	
				
					   	<th style="width:5%;background-color:#454545; border-radsius:15px; color:white; text-align:center; font-size:15px; color:white;">Name</th>
				
			 <th style="width:5%;background-color:#454545; color:white; text-align:center; font-size:15px; border-radsius:15px; color:white;">Department</th>
			 	   	<th style="width:5%;background-color:#454545; border-radisus:15px; color:white; text-align:center; font-size:15px; color:white;">Section</th>
		         	<th style="width:5%;background-color:#454545; border-radsius:15px; color:white; text-align:center; font-size:15px; color:white;">Position</th>  
				
						
						
						   	<th style="width:5%;background-color:#454545; border-rasdius:15px; color:white; text-align:center; font-size:15px; color:white;">Failed</th>
							
							
							   	<th style="width:5%;background-color:#454545; border-radsius:15px; color:white; text-align:center; font-size:15px; color:white;">Swiped_Error</th>
										
							
		  <th style="width:4%;background-color:#454545; color:white; border-radisus:15px; text-align:center; font-size:15px; color:white;">INC_Logs</th>
		  	  <th style="width:4%;background-color:#454545; color:white; border-radisus:15px; text-align:center; font-size:15px; color:white;">Total_Adjusted</th>
		  							
									   	<th style="width:5%;background-color:#454545; border-radsius:15px; color:white; text-align:center; font-size:15px; color:white;">Logs</th>	
									
		  <th style="width:4%;background-color:#454545; color:white; border-radisus:15px; text-align:center; font-size:15px; color:white;">Print</th>
				  	<th style="width:11%;background-color:#454545; color:white; text-align:center; f">Action</th>

                 
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
		     $get_id=$_GET['id']; 
               $query = mysql_query("select * from employees where department='$get_id'") or die(mysql_error());
                        while ($row = mysql_fetch_array($query)) {
            $department=$row['department'];
            
            ?>
      <tr>
	     <td class="zoom" style="text-align:center; width:5%;">
		<center> <img src="../images/<?php
				 include('connect.php');
				$cat=$row['photo'];
				$query7 = mysql_query("select * from employees where photo='$cat'") or die(mysql_error());
				$row7 = mysql_fetch_array($query7);
				echo $row7['photo'];?>" class="img img-rounded"  width="55" height="40" /></center>
				 </td>
	  
	  <!--td>
	  <?php echo $row['employee_id'];?>
	  </td-->
	  
	  	  <td>
	  <?php echo $row['firstname'];?>&nbsp;<?php echo $row['lastname'];?>
	  </td>
              <td><?php
			     include('connect.php');
            $cat=$row['department'];
            $query7 = mysql_query("select * from department where id='$cat'") or die(mysql_error());
            $row7 = mysql_fetch_array($query7);
            echo $row7['department_data'];
            ?>
			</td>
			
			
			
			
			
          <td style="text-align:center;">
	
					<?php
			     include('connect.php');
            $cat=$row['dept_section'];
            $query7 = mysql_query("select * from sections where id='$cat'") or die(mysql_error());
            $row7 = mysql_fetch_array($query7);
            echo $row7['section'];
            ?>
					
					</td>
					
					
					
				        <td style="text-align:center;">
					<?php
			     include('connect.php');
            $cat=$row['position_id'];
            $query7 = mysql_query("select * from position where id='$cat'") or die(mysql_error());
            $row7 = mysql_fetch_array($query7);
            echo $row7['description'];
            ?>
					
					</td>	
				
					
	
		  
		  
		  
		  					
			<td style="text-align:center;width:5%;background-color:darkslateblue;color:white;">
			             <a  rel="tooltip"  title="View" id="v<?php echo $id; ?>"  href="attendancefailed.php?id=<?php echo $row['id'];?>" class="btn btn-success">
			
<?php
	include('connect.php');
	$department=$row['department'];
		$id=$row['id'];
	$count_query = mysql_query("select * from attendance WHERE employee_id='$id' AND failed_to_swiped='1'") or die(mysql_error());
	$count = mysql_num_rows($count_query);
					
				
?>
<?php echo $count; ?>
<i class="icon-list icon-large"></i></a>
</td>	
		  

		  	  
		  
		  
		  
		  
		  
		 <td style="text-align:center;width:7%;background-color:darkslateblue;color:white;">
		    <a  rel="tooltip"  title="View" id="v<?php echo $id; ?>"  href="attendance_swiped_error.php?id=<?php echo $row['id'];?>" class="btn btn-success">
<?php
	include('connect.php');
	$department=$row['department'];
		$id=$row['id'];
	$count_query = mysql_query("select * from attendance WHERE employee_id='$id' AND failed_to_swiped='2'") or die(mysql_error());
	$count = mysql_num_rows($count_query);
					
				
?>
<?php echo $count; ?>
<i class="icon-list icon-large"></i></a>
</td>		 
		  
		  		 <td style="text-align:center;width:6%;background-color:darkslateblue;color:white;">
				 		    <a  rel="tooltip"  title="View" id="v<?php echo $id; ?>"  href="attendance_incompletelogs.php?id=<?php echo $row['id'];?>" class="btn btn-success">

<?php
	include('connect.php');
	$department=$row['department'];
	$id=$row['id'];
	$count_query = mysql_query("SELECT *, employees.employee_id AS empid, attendance.id AS attid FROM attendance LEFT JOIN employees ON employees.id=attendance.employee_id WHERE attendance.time_out='00:00:00' AND employees.id='$id'") or die(mysql_error());
	$countsx = mysql_num_rows($count_query);
					
				
?>
<?php echo $countsx; ?>
<i class="icon-list icon-large"></i></a>
</td>		 
		  
		  		 <td style="text-align:center;width:8%;background-color:darkslateblue;color:white;">
				 	    <a  rel="tooltip"  title="View" id="v<?php echo $id; ?>"  href="attendance_total_adjusted.php?id=<?php echo $row['id'];?>" class="btn btn-success">

<?php
	include('connect.php');
	$department=$row['department'];
	$id=$row['id'];
	$count_query = mysql_query("SELECT * from attendance WHERE employee_id='$id' AND adjusted='1'") or die(mysql_error());
	$countsx = mysql_num_rows($count_query);
					
				
?>
<?php echo $countsx; ?>
	
<i class="icon-list icon-large"></i></a>
</td>		 
		  		  
	  
		  
		  
		  
				  		 <td style="text-align:center; width:5%;">
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
	$id=$row['id'];
	$count_query = mysql_query("SELECT * from attendance WHERE employee_id='$id'") or die(mysql_error());
	$countsx = mysql_num_rows($count_query);
					
				
?>
<?php echo $countsx; ?>
	

</td>	  
		  
		  
		  <td style="width:5%;">
		  
		    <a  rel="tooltip"  class="btn btn-primary" title="Print the Sticker" id="v<?php echo $id;?>"  href="printalldepadj.php?id=<?php echo $row['department'];?>" class="btn btn-light"><span class="glyphicon glyphicon-print" style="font-size:17px; width:40px;text-align:center; color:white"></span></i></a>
			
			
			</td>
		  
		  
		  
	
		  
		  
		  
		  
        <td style="text-align:center;width:10%;">
                <a  rel="tooltip"  title="View" id="v<?php echo $id; ?>"  href="attendancepreadjust.php?id=<?php echo $row['id'];?>" class="btn btn-success">View for Adjustment<i class="icon-list icon-large"></i></a>
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
  <?php include 'includes/employee_modal.php'; ?>
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
</body>
</html>
