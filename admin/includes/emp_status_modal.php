<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header" style="background-color:darkslateblue;color:window;">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Add New Employee Status</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="emp_status_add.php">
          		  <div class="form-group">
                  	<label for="title" class="col-sm-3 control-label">Employee Status</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="status" name="status" autofocus required>
                  	</div>
                </div>
                <div class="form-group">
                    <label for="rate" class="col-sm-3 control-label">Date Added</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="rate" value="<?php echo date("Y/m/d");?>" name="rate" required>
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
          	<div class="modal-header" style="background-color:darkslateblue;color:window;">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Update Employee Status</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="emp_status_edit.php">
            		<input type="hidden" id="posid" name="id">
                <div class="form-group">
                    <label for="edit_title" class="col-sm-3 control-label">Status</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_status" name="status">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_rate" class="col-sm-3 control-label">Date Added</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_date" name="rate" readonly>
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
          	<div class="modal-header" style="background-color:darkslateblue;color:window;">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Deleting...</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="emp_status_delete.php">
            		<input type="hidden" id="del_posid" name="id">
            		<div class="text-center">
	                	<p>DELETE Employee Status</p>
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


     