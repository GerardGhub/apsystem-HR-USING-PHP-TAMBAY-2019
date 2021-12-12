<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header" style="background-color:darkslateblue;color:window;">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Add Attendance</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="attendance_add.php">
          		  <div class="form-group">
                  	<label for="employee" class="col-sm-3 control-label">Employee ID</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="employee" value="<?php
			     include('connect.php');
            $get_id=$_GET['id'];
            $query7 = mysql_query("select * from employees where id='$get_id'") or die(mysql_error());
            $row7 = mysql_fetch_array($query7);
            echo $row7['employee_id'];
            ?>" name="employee" required readonly>
                  	</div>
                </div>
				
						  <div class="form-group">
                  	<label for="employee" class="col-sm-3 control-label">Name</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="employsede" value="<?php
			     include('connect.php');
            $get_id=$_GET['id'];
            $query7 = mysql_query("select * from employees where id='$get_id'") or die(mysql_error());
            $row7 = mysql_fetch_array($query7);
            echo $row7['firstname']; echo'&nbsp;';echo $row7['lastname'];
            ?>" name="emplssoyee" required readonly>
                  	</div>
                </div>
				
								  <div class="form-group">
                  	<label for="employee" class="col-sm-3 control-label">Department</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="department" value="<?php
			     include('connect.php');
            $get_id=$_GET['id'];
            $query7 = mysql_query("select * from employees where id='$get_id'") or die(mysql_error());
            $row7 = mysql_fetch_array($query7);
            echo $row7['department'];
            ?>" name="attendance_department" required readonly>
                  	</div>
                </div>
				
                <div class="form-group">
                    <label for="datepicker_add" class="col-sm-3 control-label glyphicon glyphicon-calendar">&nbsp;Date</label>

                    <div class="col-sm-9"> 
                      <div class="date">
                        <input type="text" class="form-control" id="datepicker_add" name="date" required>
                      </div>
                    </div>
                </div>
                <div class="form-group">
                  	<label for="time_in" class="col-sm-3 control-label">Time In</label>

                  	<div class="col-sm-9">
                  		<div class="bootstrap-timepicker">
                    		<input type="text" class="form-control timepicker" id="time_in" name="time_in">
                    	</div>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="time_out" class="col-sm-3 control-label">Time Out</label>

                  	<div class="col-sm-9">
                  		<div class="bootstrap-timepicker">
                    		<input type="text" class="form-control timepicker" id="time_out" name="time_out">
                    	</div>
                  	</div>
                </div>
				
				  <div class="form-group">
                    <label for="edit_gender" class="col-sm-3 control-label">Adjustment Info</label>

                    <div class="col-sm-9"> 
                      <select class="form-control" name="failed_to_swiped" id="edit_gender" required>
                        <option selected id="gender_val">....</option>
                        <option value="1">Failed To Swiped</option>
                        <option value="2">Swiped & System Error</option>
						     <option value="3">Acceptable Reason's</option>
                      </select>
                    </div>
                </div>
				
				
				
				
				
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
            	</form>
          	</div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title">DTR Adjustment for <b><span id="employee_name"></span></b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="attendance_edit.php">
            		<input type="hidden" id="attid" name="id">
                <div class="form-group">
                    <label for="datepicker_edit" class="col-sm-3 control-label">Date</label>

                    <div class="col-sm-9"> 
                      <div class="date">
                        <input type="text" class="form-control" id="datepicker_edit" name="edit_date">
                      </div>
                    </div>
                </div>
                <div class="form-group">
                  	<label for="edit_time_in" class="col-sm-3 control-label">Time In</label>

                  	<div class="col-sm-9">
                  		<div class="bootstrap-timepicker">
                    		<input type="text" class="form-control timepicker" id="edit_time_in" name="edit_time_in">
                    	</div>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="edit_time_out" class="col-sm-3 control-label">Time Out</label>

                  	<div class="col-sm-9">
                  		<div class="bootstrap-timepicker">
                    		<input type="text" class="form-control timepicker" id="edit_time_out" name="edit_time_out">
                    	</div>
                  	</div>
                </div>
				
				
				  <div class="form-group">
                    <label for="edit_gender" class="col-sm-3 control-label">Adjustment Info</label>

                    <div class="col-sm-9"> 
                      <select class="form-control" name="failed_to_swiped" id="edit_gender" required>
                        <option selected id="gender_val">....</option>
                        <option value="1">Failed To Swiped</option>
                        <option value="2">Swiped & System Error</option>
						     <option value="3">Acceptable Reason's</option>
                      </select>
                    </div>
                </div>
				
				
				
				
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
            	</form>
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
            	<h4 class="modal-title"><b><span id="attendance_date"></span></b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="attendance_delete.php">
            		<input type="hidden" id="del_attid" name="id">
            		<div class="text-center">
	                	<p>DELETE ATTENDANCE</p>
	                	<h2 id="del_employee_name" class="bold"></h2>
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


     