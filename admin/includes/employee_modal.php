<!-- Add -->
<head>
<style>
.column{
	float:left;
	width:50%;
	padding-10px;
	height:710px;
	
}
.column1{
	float:left;
	width:50%;
	padding-10px;
	height:770px;
	
}
*{
	box-sizing:border-box;
	
}
.row:after{
content:"";
display:table;
clear:both;	
	
	
}
.row1:after{
content:"";
display:table;
clear:both;	
	
	
}
</style>
</head>
<div class="modal fade" id="addnew">
    <div class="modal-dialog" style="width:75%;">
        <div class="modal-content">
          	<div class="modal-header" style="background-color:darkslateblue;color:window;">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Add New Employee</b></h4>
          	</div>
			<div class="row2">
  <div class="column1" style="background-color:window;">
    <!--h2>Column 1</h2>
    <p>Some text..</p-->
	
	
	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="employee_add.php" enctype="multipart/form-data">
	  <div class="form-group">
                  	<label for="firstname" class="col-sm-3 control-label">No.</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="firstnaddme" value="Random Only" name="firsdddtname" readonly>
                  	</div>
                </div>          		
				<div class="form-group">
                  	<label for="firstname" class="col-sm-3 control-label">Firstname</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="firstname" name="firstname" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="lastname" class="col-sm-3 control-label">Lastname</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="lastname" name="lastname" required>
                  	</div>
                </div>
				   
				          <div class="form-group">
                  	<label for="lastname" class="col-sm-3 control-label">Middlename</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="middlename" name="middlename" required>
                  	</div>
                </div>
				
                <div class="form-group">
                  	<label for="address" class="col-sm-3 control-label">Current Address</label>

                  	<div class="col-sm-9">
                      <textarea class="form-control" name="address" id="address"></textarea>
                  	</div>
                </div>
				            <div class="form-group">
                  	<label for="address" class="col-sm-3 control-label">Permanent Address</label>

                  	<div class="col-sm-9">
                      <textarea class="form-control" name="permanent_address" id="permanent_address"></textarea>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="datepicker_add" class="col-sm-3 control-label">Birthdate</label>

                  	<div class="col-sm-9"> 
                      <div class="date">
                        <input type="text" class="form-control" id="datepicker_add" name="birthdate">
                      </div>
                  	</div>
                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-3 control-label">Contact #</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="contact" name="contact">
                    </div>
                </div>
                <div class="form-group">
                    <label for="gender" class="col-sm-3 control-label">Gender</label>

                    <div class="col-sm-9"> 
                      <select class="form-control" name="gender" id="gender" required>
                        <option value="" selected>- Select -</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                    </div>
                </div>
				<div class="form-group">
                    <label for="position" class="col-sm-3 control-label">Department</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="department" id="department" required>
                        <option value="" selected>- Select -</option>
                        <?php
                          $sql = "SELECT * FROM Department";
                          $query = $conn->query($sql);
                          while($prow = $query->fetch_assoc()){
                            echo "
                              <option value='".$prow['id']."'>".$prow['department_data']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
					<div class="form-group">
                    <label for="position" class="col-sm-3 control-label">Section</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="dept_section" id="department" required>
                        <option value="" selected>- Select -</option>
                        <?php
                          $sql = "SELECT * FROM sections";
                          $query = $conn->query($sql);
                          while($prow = $query->fetch_assoc()){
                            echo "
                              <option value='".$prow['id']."'>".$prow['section']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="position" class="col-sm-3 control-label">Position</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="position" id="position" required>
                        <option value="" selected>- Select -</option>
                        <?php
                          $sql = "SELECT * FROM position";
                          $query = $conn->query($sql);
                          while($prow = $query->fetch_assoc()){
                            echo "
                              <option value='".$prow['id']."'>".$prow['description']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
				   <div class="form-group">
                    <label for="position" class="col-sm-3 control-label">Employee Status</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="emp_status" id="emp_status" required>
                        <option value="" selected>- Select -</option>
                        <?php
                          $sql = "SELECT * FROM employee_status";
                          $query = $conn->query($sql);
                          while($prow = $query->fetch_assoc()){
                            echo "
                              <option value='".$prow['id']."'>".$prow['status']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="schedule" class="col-sm-3 control-label">Schedule</label>

                    <div class="col-sm-9">
                      <select class="form-control" id="schedule" name="schedule" required>
                        <option value="" selected>- Select -</option>
                        <?php
                          $sql = "SELECT * FROM schedules";
                          $query = $conn->query($sql);
                          while($srow = $query->fetch_assoc()){
                            echo "
                              <option value='".$srow['id']."'>".$srow['time_in'].' - '.$srow['time_out']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" name="photo" id="photo">
                    </div>
                </div>
          	</div>
	
	
	
	
	
	
	
  </div>
  <div class="column1" style="background-color:window;">
    <!--h2>Column 2</h2>
    <p>Some text..</p-->
<!--?php
echo date( "Y-m-d", strtotime( "2017-11-03 +6 month" ) ); // PHP:  2009-03-03
echo'<br>';
echo date( "Y-m-d", strtotime( "2009-01-31 +2 month" ) ); // PHP:  2009-03-31
?-->
<br>
	            <div class="form-group">
                  	<label for="address" class="col-sm-3 control-label">Date Hired</label>

                  	<div class="col-sm-9">
                      <input type="date" class="form-control" name="date_hired" id="date_hired">
                  	</div>
                </div>
				<br>
					<br>
						            <div class="form-group">
                  	<label for="address" class="col-sm-3 control-label">Regularization Date</label>

                  	<div class="col-sm-9">
                      <input type="date" class="form-control" name="regular_date" id="regular_date">
                  	</div>
                </div>
				<br>
					<br>
				 <div class="form-group">
                  	<label for="address" class="col-sm-3 control-label">SSS #</label>

                  	<div class="col-sm-9">
                      <input type="text" class="form-control" name="sss_num" id="sss_num">
                  	</div>
                </div>
				<br>
					<br>
				 <div class="form-group">
                  	<label for="address" class="col-sm-3 control-label">TIN #</label>

                  	<div class="col-sm-9">
                      <input type="text" class="form-control" name="tin_num" id="tin_num">
                  	</div>
                </div>
				<br>
				<br>
				<div class="form-group">
                    <label for="datepicker_edit" class="col-sm-3 control-label">TAX ID</label>

                    <div class="col-sm-9"> 
                      <div class="date">
                        <input type="text" class="form-control" id="tax_id" name="tax_id">
                      </div>
                    </div>
                </div>
					<br>
					<br>
				       <div class="form-group">
                    <label for="edit_lastname" class="col-sm-3 control-label">Philhealth #</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="philhealth_num" name="philhealth_num">
                    </div>
                </div>
					<br>
					<br>
                <div class="form-group">
                    <label for="datepicker_edit" class="col-sm-3 control-label">HDMF #</label>

                    <div class="col-sm-9"> 
                      <div class="date">
                        <input type="text" class="form-control" id="hdmf_num" name="hdmf_num">
                      </div>
                    </div>
                </div>
				<br>
				<br>
                <div class="form-group">
                    <label for="edit_contact" class="col-sm-3 control-label">HDMF RTN #</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="hdmf_rtn_num" name="hdmf_rtn_num">
                    </div>
                </div>
				<br>
				<br>
				<div class="form-group">
                    <label for="edit_gender" class="col-sm-3 control-label">Salary Type</label>

                    <div class="col-sm-9"> 
                      <select class="form-control" name="salary_type" id="salary_type">
                        <option selected id="gender_val"></option>
                        <option value="D">D</option>
                        <option value="M">M</option>
						   <option value="ILS">ILS</option>
                      </select>
                    </div>
                </div>
				<br>
				<br>
				         <div class="form-group">
                    <label for="datepicker_edit" class="col-sm-3 control-label">Salary Structure</label>

                    <div class="col-sm-9"> 
                      <div class="date">
                        <input type="text" class="form-control" id="edit_salary_struscture" name="salary_structure">
                      </div>
                    </div>
                </div>
			
				<br>
				<br>
                
					 <div class="form-group">
                    <label for="datepicker_edit" class="col-sm-3 control-label">Salary Rate</label>

                    <div class="col-sm-9"> 
                      <div class="date">
                        <input type="text" class="form-control" id="edit_salarsy_rates" name="salary_rate">
                      </div>
                    </div>
                </div>
               <br>
			   <br>
		<div class="form-group">
                    <label for="edit_gender" class="col-sm-3 control-label">Type of Worker</label>

                    <div class="col-sm-9"> 
                      <select class="form-control" name="type_of_worker" id="edit_typed_of_worker">
                        <option selected id="gender_val"></option>
                        <option value="Direct Labor">Direct Labor</option>
                        <option value="Support Services">Support Services</option>
			
                      </select>
                    </div>
                </div>
				
				<div class="form-group">
				       <div class="col-sm-9"> 
				<fieldset form="form1" style="color:black;width:650px;">
  <legend>In case of Emergency :</legend>
		 <div class="form-group">
                    <label for="datepicker_edit" class="col-sm-3 control-label">Contact&nbsp;Person</label>

                    <div class="col-sm-9"> 
                      <div class="date">
                        <input type="text" class="form-control" id="edit_salary_raaate" name="salary_rate">
                      </div>
                    </div>
                </div>
				<br>
				
						 <div class="form-group">
                    <label for="datepicker_edit" class="col-sm-3 control-label">Contact #</label>

                    <div class="col-sm-9"> 
                      <div class="date">
                        <input type="text" class="form-control" id="edit_salassry_rate" name="salary_rate">
                      </div>
                    </div>
                </div>


</fieldset>
</div>
	</div>			
				
				
				

  </div>
  
  
  
  

   	<div class="modal-footer" style="background-color:whitesmoke;">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
            	</form>
          	</div>
  
  
  
</div>
			
			
			
			
			
			
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">

    <div class="modal-dialog" style="width:75%;">
        <div class="modal-content">
          	<div class="modal-header" style="background-color:darkslateblue;color:window;">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
					<h4><img src="images/<?php
			     include('connect.php');
            $get_id=$_GET['id'];

            $query7 = mysql_query("select * from employees where id='$get_id'") or die(mysql_error());
            $row7 = mysql_fetch_array($query7);
            echo $row7['photo'];
            ?>" width="70" height="60" style="border-radius:20px;">&nbsp;&nbsp;HR | Employee Detailss<?php echo $row['empid']; ?> </h4>
					<!--sdsd
            	<h4 class="modal-title"><b><span class="employee_id"></span></b></h4>-->
				
				
				<div class="row">
  <div class="column" style="background-color:window;color:black;">
    <!--h2>Column 1</h2>
    <p>Some text..</p-->
	
	<!--Start-->
	
	
	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="employee_edit.php">
            		<input type="hidden" class="empid" name="id">
					   <div class="form-group">
                    <label for="edit_firstname" class="col-sm-3 control-label">No.</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="editx_employee_id" name="employee_id">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_firstname" class="col-sm-3 control-label">Firstname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_firstname" name="firstname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_lastname" class="col-sm-3 control-label">Lastname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_lastname" name="lastname">
                    </div>
                </div>
				<div class="form-group">
                    <label for="edit_lastname" class="col-sm-3 control-label">Middlename</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_middlename" name="middlename">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_address" class="col-sm-3 control-label">Current Address</label>

                    <div class="col-sm-9">
                      <textarea class="form-control" name="address" id="edit_address"></textarea>
                    </div>
                </div>
				    <div class="form-group">
                    <label for="edit_address" class="col-sm-3 control-label">Permanent Address</label>

                    <div class="col-sm-9">
                      <textarea class="form-control" name="permanent_address" id="edit_permanent_address"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="datepicker_edit" class="col-sm-3 control-label">Birthdate</label>

                    <div class="col-sm-9"> 
                      <div class="date">
                        <input type="text" class="form-control" id="datepicker_edit" name="birthdate">
                      </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_contact" class="col-sm-3 control-label">Contact Info</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_contact" name="contact">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_gender" class="col-sm-3 control-label">Gender</label>

                    <div class="col-sm-9"> 
                      <select class="form-control" name="gender" id="edit_gender">
                        <option selected id="gender_val"></option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                    </div>
                </div>
               
				 <div class="form-group">
                    <label for="edit_position" class="col-sm-3 control-label">Position</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="position" id="edit_position">
                        <option selected id="position_val"></option>
                        <?php
                          $sql = "SELECT * FROM position";
                          $query = $conn->query($sql);
                          while($prow = $query->fetch_assoc()){
                            echo "
                              <option value='".$prow['id']."'>".$prow['description']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
				      <div class="form-group">
                    <label for="edit_gender" class="col-sm-3 control-label">Civil Status</label>

                    <div class="col-sm-9"> 
                      <select class="form-control" name="civil_status" id="edit_civil_status">
                        <option selected id="gender_val"></option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
						<option value="Windowed">Windowed</option>
						<option value="Divorced">Divorced</option>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_schedule" class="col-sm-3 control-label">Schedule</label>

                    <div class="col-sm-9">
                      <select class="form-control" id="edit_schedule" name="schedule">
                        <option selected id="schedule_val"></option>
                        <?php
                          $sql = "SELECT * FROM schedules";
                          $query = $conn->query($sql);
                          while($srow = $query->fetch_assoc()){
                            echo "
                              <option value='".$srow['id']."'>".$srow['time_in'].' - '.$srow['time_out']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
				
				</div>
			
	
	
	
	<!-- End-->
	
	
	
	
  </div>
  
  
  
  
  <div class="column" style="background-color:window;color:black;">
    <!--h2>Column 2</h2>
    <p>Some text..</p-->
	
	<br>
	<!-- Start-->
	<div class="form-group">
                    <label for="datepicker_edit" class="col-sm-3 control-label">Date Hired</label>

                    <div class="col-sm-9"> 
                      <div class="date">
                        <input type="date" class="form-control" id="edit_date_hired" name="date_hired">
                      </div>
                    </div>
                </div>
				<br>
			
          	<div class="form-group">
                    <label for="datepicker_edit" class="col-sm-3 control-label">Regularization Date</label>

                    <div class="col-sm-9"> 
                      <div class="date">
                        <input type="date" class="form-control" id="edit_regular_date" name="regular_date">
                      </div>
                    </div>
                </div>
				<br>
						<br>
                <div class="form-group">
                    <label for="edit_lastname" class="col-sm-3 control-label">SSS #</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_sss_num" name="sss_num">
                    </div>
                </div>
				<br>
				<div class="form-group">
                    <label for="edit_lastname" class="col-sm-3 control-label">TIN #</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_tin_num" name="tin_num">
                    </div>
                </div>
			
				<br>
             	 <div class="form-group">
                    <label for="datepicker_edit" class="col-sm-3 control-label">TAX ID</label>

                    <div class="col-sm-9"> 
                      <div class="date">
                        <input type="text" class="form-control" id="edit_tax_id" name="tax_id">
                      </div>
                    </div>
                </div>
					<br>
				       <div class="form-group">
                    <label for="edit_lastname" class="col-sm-3 control-label">Philhealth #</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_philhealth_num" name="philhealth_num">
                    </div>
                </div>
					<br>
                <div class="form-group">
                    <label for="datepicker_edit" class="col-sm-3 control-label">HDMF #</label>

                    <div class="col-sm-9"> 
                      <div class="date">
                        <input type="text" class="form-control" id="edit_hdmf_num" name="hdmf_num">
                      </div>
                    </div>
                </div>
				<br>
                <div class="form-group">
                    <label for="edit_contact" class="col-sm-3 control-label">HDMF RTN #</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_hdmf_rtn_num" name="hdmf_rtn_num">
                    </div>
                </div>
				<br>
				<br>
				<div class="form-group">
                    <label for="edit_gender" class="col-sm-3 control-label">Salary Type</label>

                    <div class="col-sm-9"> 
                      <select class="form-control" name="salary_type" id="edit_salary_type">
                        <option selected id="gender_val"></option>
                        <option value="D">D</option>
                        <option value="M">M</option>
						   <option value="ILS">ILS</option>
                      </select>
                    </div>
                </div>
				<br>
				         <div class="form-group">
                    <label for="datepicker_edit" class="col-sm-3 control-label">Salary Structure</label>

                    <div class="col-sm-9"> 
                      <div class="date">
                        <input type="text" class="form-control" id="edit_salary_structure" name="salary_structure">
                      </div>
                    </div>
                </div>
			
				
				<br>
                
					 <div class="form-group">
                    <label for="datepicker_edit" class="col-sm-3 control-label">Salary Rate</label>

                    <div class="col-sm-9"> 
                      <div class="date">
                        <input type="text" class="form-control" id="edit_salary_rate" name="salary_rate">
                      </div>
                    </div>
                </div>
               <br>
		<div class="form-group">
                    <label for="edit_gender" class="col-sm-3 control-label">Type of Worker</label>

                    <div class="col-sm-9"> 
                      <select class="form-control" name="type_of_worker" id="edit_type_of_worker">
                        <option selected id="gender_val"></option>
                        <option value="Direct Labor">Direct Labor</option>
                        <option value="Support Services">Support Services</option>
			
                      </select>
                    </div>
                </div>
				<br>
				   <div class="form-group">
                    <label for="edit_position" class="col-sm-3 control-label">Department</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="department" id="edit_department">
                        <option selected id="position_val"></option>
                        <?php
                          $sql = "SELECT * FROM department";
                          $query = $conn->query($sql);
                          while($prow = $query->fetch_assoc()){
                            echo "
                              <option value='".$prow['id']."'>".$prow['department_data']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
				<br>
                <div class="form-group">
                    <label for="edit_schedule" class="col-sm-3 control-label">Sections</label>

                    <div class="col-sm-9">
                      <select class="form-control" id="edit_dept_section" name="dept_section">
                        <option selected id="schedule_val"></option>
                        <?php
                          $sql = "SELECT * FROM sections";
                          $query = $conn->query($sql);
                          while($srow = $query->fetch_assoc()){
                            echo "
                              <option value='".$srow['id']."'>".$srow['section']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
				<br>
			<p style="background-color:red;">
			
			  <div class="form-group">
                    <label for="edit_address" class="col-sm-3 control-label">Reason for Seperation</label>

                    <div class="col-sm-9">
					
			<br>
			
                      <textarea class="form-control" name="addressss" id="edissst_address"></textarea>
                    </div>
                </div>
			
			
				</p>
				</div>
			
	
	<!-- END 00-->
	
  </div>
</div>
<!-- here 11-->
				
				
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
					<button type="submit" class="btn btn-danger btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Mark as Resigned</button>
            	<button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
            	</form>
          	</div>
				
				<!-- End -->
				
          	</div>

        </div>
    </div>

</div>

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b><span class="employee_id"></span></b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="employee_delete.php">
            		<input type="hidden" class="empid" name="id">
            		<div class="text-center">
	                	<p>DELETE EMPLOYEE</p>
	                	<h2 class="bold del_employee_name"></h2>
	            	</div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
            	</form>
          	</div>
        </div>
    </div>
</div>

<!-- Update Photo -->
<div class="modal fade" id="edit_photo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span class="del_employee_name"><?php echo $row['firstname'];?></span></b></h4>

            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="employee_edit_photo.php" enctype="multipart/form-data">
                <input type="hidden" class="empid" name="id">
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>    



<!-- Update Photo -->
<div class="modal fade" id="select_id">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color:rgb(60,144,188);color:white;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Select&nbsp;<span class="del_employee_name"></span>for ID Printing</b></h4>

            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="select_emp.php" enctype="multipart/form-data">
                <input type="hidden" class="empid" name="id">
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Status</label>

                    <div class="col-sm-9">
                      <input type="text" id="photo" name="selected" value="selected" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>    


<!-- Update Photo -->
<div class="modal fade" id="unselect_id">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color:darkred;color:white">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>UnSelect&nbsp;<span class="del_employee_name"></span>for ID Printing</b></h4>

            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="unselect.php" enctype="multipart/form-data">
                <input type="hidden" class="empid" name="id">
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Status</label>

                    <div class="col-sm-9">
                      <input type="text" id="photo" name="selected" value="unselected" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>    