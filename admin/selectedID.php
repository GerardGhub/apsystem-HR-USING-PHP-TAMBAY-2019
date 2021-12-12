<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
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
.selected{
background-color:rgb(60,144,188);	
color:white;
	{
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
        Employee Printing ID Manual Selection
		
      </h1>
	  
	  
	  
	  
      <ol class="breadcrumb" style="font-size:17px; background-color:skyblue;">
        <!--li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Employees</li>
        <li class="active">Employee List</li-->
		No. of Selected :&nbsp;
		<?php
	include('connect.php');
	//$department=$row['department'];
	//$id=$_GET['id'];
	$count_query = mysql_query("SELECT * from employees WHERE selected='selected'") or die(mysql_error());
	$countsx = mysql_num_rows($count_query);
					
				
?>
<?php echo $countsx; ?>
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
			   
			   
			                  <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-pluss"></i>No. of Selected ID</a>
							             
            </div-->
			
			
			
			
	
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
      
                  <th>Image</th>
                  <th>Name</th>
				              <th>Employee ID</th>
							    <th>Department</th>
                  <th>Position</th>
                  <th>Schedule</th>
                  <th>Member Since</th>
                  <th>UnSelect</th>
				              <th>Select</th>
				  <th>Printing</th>
                </thead>
                <tbody>

                  <?php
                    $sql = "SELECT *, employees.id AS empid FROM employees LEFT JOIN position ON position.id=employees.position_id LEFT JOIN schedules ON schedules.id=employees.schedule_id LEFT JOIN department ON department.id=employees.department WHERE employees.resigned='1'";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      ?>
                        <tr>
                          
                          <td style="width:10px;"><img class="zoom" src="<?php echo (!empty($row['photo']))? '../images/'.$row['photo']:'../images/profile.jpg'; ?>" width="70px" height="45px"></td>
                          <td class="<?php echo $row['selected'];?>"><?php echo $row['firstname'].' '.$row['lastname']; ?></td>
						  <td><?php echo $row['employee_id']; ?></td>
						  						  <td><?php echo $row['department_data']; ?></td>
                          <td><?php echo $row['description']; ?></td>
                          <td><?php echo date('h:i A', strtotime($row['time_in'])).' - '.date('h:i A', strtotime($row['time_out'])); ?></td>
                          <td><?php echo date('M d, Y', strtotime($row['created_on'])) ?></td>
                          <td style="width:5%;">
                            <!--button class="btn btn-success btn-sm edit btn-flat" href="employee.php?id=<?php echo $row['empid'];?>" data-id="<?php echo $row['empid']; ?>"><i class="fa fa-edit"></i> Edit</button-->
							
                            <!--button class="btn btn-danger btn-sm delete btn-flat" data-id="<?php echo $row['empid']; ?>"><i class="fa fa-trash"></i> Delete</button-->
							

														

							
	
		 
		 		 <a href="#unselect_id" data-toggle="modal" style="font-style:arial;" class="pull-right photo btn btn-danger" data-id="<?php echo $row['empid']; ?>"><span class="fa fa-edist">UnSelect</span></a>
						
								 
								 		  
     
								 
                          </td>
						  <td style="width:5%;">
						  								 <a href="#select_id" data-toggle="modal" class="pull-right photo btn btn-primary" data-id="<?php echo $row['empid']; ?>"><span class="fa fa-edit">Select</span></a>
														 </td>
						  		  
		  
		  <td style="width:10px;">
		  
		    <a  rel="tooltip"  class="btn btn-primary" title="Print the Sticker" id="v<?php echo $id;?>" target="_blank" href="printIDselect.php" class="btn btn-light"><span class="glyphicon glyphicon-print" style="font-size:17px; width:180px;text-align:center; color:white"></span></i></a>
			</td>
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
	       // $('.photo').html(response.photo);
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
