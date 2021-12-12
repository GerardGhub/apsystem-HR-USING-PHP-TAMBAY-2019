<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header" style="background-color:darkslateblue; color:white;">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Add New Absent Information & Leave Form</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="absentinfo_add.php">
          		  <div class="form-group">
                  	<label for="title" class="col-sm-3 control-label">Leave Form</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="title" name="LeaveForm" value="With">
                  	</div>
                </div>
				            <div class="form-group">
                    <label for="position" class="col-sm-3 control-label">Employee</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="employee_subject" id="department" required>
                        <option value="" selected>- Select -</option>
                        <?php
                          $sql = "SELECT * FROM employees";
                          $query = $conn->query($sql);
                          while($prow = $query->fetch_assoc()){
                            echo "
                              <option value='".$prow['id']."'>".$prow['firstname']."&nbsp;".$prow['lastname']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
				
				
				
				   <div class="form-group">
                    <label for="position" class="col-sm-3 control-label">Type of Leave</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="TypeofLeave" id="department" required>
                        <option value="" selected>- Select -</option>
                        <?php
                          $sql = "SELECT * FROM tol";
                          $query = $conn->query($sql);
                          while($prow = $query->fetch_assoc()){
                            echo "
                              <option value='".$prow['id']."'>".$prow['type_of_leave']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
				
				
				
				
				
				
				     <div class="form-group">
                    <label for="rate" class="col-sm-3 control-label">Application Date</label>

                    <div class="col-sm-9">
                      <input type="date" class="form-control" id="rate" name="incident_date" required>
                    </div>
                </div>
				
				
				
				
				
				
				
				
				
                <div class="form-group">
                    <label for="rate" class="col-sm-3 control-label">Date Added</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" value="<?php echo date("Y/m/d")?>" id="rate" name="date_added" readonly>
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
          	<div class="modal-header" style="background-color:darkslateblue;color:white;">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Update Section</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="section_edit.php">
            		<input type="hidden" id="posid" name="id">
					
					
					      <div class="form-group">
                    <label for="position" class="col-sm-3 control-label">Department</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="department" id="edit_department" required>
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
                    <label for="edit_title" class="col-sm-3 control-label">Section</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_section" name="section" autofocus>
                    </div>
                </div>
                <!--div class="form-group" style="display:none;">
                    <label for="edit_rate" class="col-sm-3 control-label">Rate per Hr</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_rate" name="rate">
                    </div>
                </div-->
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
          	<div class="modal-header" style="background-color:darkslateblue; color:white;">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Deleting...</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="section_delete.php">
            		<input type="hidden" id="del_posid" name="id">
            		<div class="text-center">
	                	<p>DELETE Section</p>
	                	<h2 id="del_position" class="bold"></h2>
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


     