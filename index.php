<?php session_start(); ?>
<?php include 'session.php'; ?>
<?php include 'header.php'; ?>
<head>
  <meta http-equiv="refresh" content="23">
  			<link rel="shortcut icon" href="images/enma.jpg" type="image/x-icon"/>
<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 1500px; /* Should be removed. Only for demonstration */
}


/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

body{
	overflow:hidden;
}
img {
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  width: 150px;
  
  align:center;
    display: block;
  margin-left: auto;
  margin-right: auto;
}
b {


  width: 210px;
  font-size:40px;

    display: block;
  margin-left: auto;
  margin-right: auto;
}
img:hover {
  box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}

.zoom {
 //padding: 50px;
  //background-color: green;
  transition: transform .2s; /* Animation */

  height: 100px;
  margin: 0 auto;
}
.zoom:hover {
  transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
</style>

</head>
<body class="hold-transition login-page">




<h2 style="text-align:center;font-size:50px;background-color:rgb(60,141,188);color:white;">HR DEPARTMENT TIMEKEEPING USING BARCODE</h2>

<div class="row">
  <div class="column" style="background-color:window;">
    <!--h2>Column 1</h2>
    <p>Some text..</p-->
	
	<?php
    $sql = "SELECT *, employees.employee_id AS empid, attendance.id AS attid FROM attendance LEFT JOIN employees ON employees.id=attendance.employee_id WHERE attendance.emp_attendance_status='present' ORDER BY attendance.date DESC, attendance.datemodified DESC LIMIT 1";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
	
                      $status = ($row['status'])?'<span class="label label-warning pull-right">ontime</span>':'<span class="label label-danger pull-right">late</span>';
                      echo "
                        <tr>
                      
						  <td> <img src=images/".$row['photo']." style='width:350px; height:250px;' height='210' class='zooms'></td>
						  <br>
						  <center style='font-size:50px;'><td>".$row['firstname']."&nbsp;".$row['lastname']."</td></center>
                    <center style='font-size:30px;'><td>".$row['position']."</td></center>
                        </tr>
                      ";
                    }

	
	?>
			<div class="alert alert-success alert-dismissible mt20 text-center" style="display:none;">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true" style="width:30px;">&times;</button>
      <span class="result"><i class="icon fa fa-check"></i> <span class="message"></span></span>
    </div>
	
	<span class="message"></span>
		<div class="alert alert-danger alert-dismissible mt20 text-center" style="display:none;border-radius:10px;">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <span class="result"><i class="icon fa fa-warning"></i> <span class="message"></span></span>
    </div>
  		
		
	
	
	
	
	<!--b style="text-align:center;"><span class="message"></span></b-->
	<p>
	<b class="message22"></b>
		<!--b style="font-size:30px; text-align:center;"><span class="message3"></span></b-->
	<!-- Start -->

	
<div class="login-box">
 
  
  	<div class="login-box-body">
    	<!--h4 class="login-box-msg">Enter Employee ID</h4-->

    	<form id="attendance">
          <!--div class="form-group"-->
            <select class="form-control" name="status" style="display:none;">
              <option value="in">Time In</option>
              <option value="out">Time Out</option>
            </select>
          <!--/div-->
      		<div class="form-group has-feedback">
        		<input type="text" class="form-control input-lg" id="employee" name="employee" style="width:325px;border-radius:20px;" autofocus autorequired>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
      		<div class="row">
    			<div class="col-xs-4" style="display:none;">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="signin"><i class="fa fa-sign-in"></i> Sign In</button>
        		</div>
      		</div>
    	</form>
  	</div>
		<!--div class="alert alert-success alert-dismissible mt20 text-center" style="display:none;">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <span class="result"><i class="icon fa fa-check"></i> <span class="message"></span></span>
    </div-->
	
	<!-- DANGER -->
		<!--div class="alert alert-danger alert-dismissible mt20 text-center" style="display:none;border-radius:10px;">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <span class="result"><i class="icon fa fa-warning"></i> <span class="message"></span></span>
    </div-->
  		
		
		
		
		
		
		

		



<!-- TWOO -->	
		
		
		
		
		
		
		
		
		
		
</div>
		<!-- ONE -->

<div class="box-body" style="font-size:20px;">
              <table id="example1" class="table table-striped hover">
               <tr>
			   <thead>
				
                  <th class="hidden" style="  text-align:center;"></th>
   <th style="text-align:center;">Image</th>                 
				 <th style="text-align:center;">Date</th>
				  <th style="text-align:center;">Name</th>
                  <th style="text-align">Department</th>
                 
                  <th style="text-align:center;">Time In</th>
                  <th style="text-align:center;">Time Out</th>
               
			
                </thead>
                </tr>
				<tbody>
    <?php
	
                    $sql = "SELECT *, employees.employee_id AS empid, attendance.id AS attid FROM attendance LEFT JOIN employees ON employees.id=attendance.employee_id LEFT JOIN Department ON Department.id=employees.department WHERE attendance.emp_attendance_status ='present' ORDER BY attendance.date DESC, attendance.datemodified DESC LIMIT 1";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
	
                      $status = ($row['status'])?'<span class="label label-warning pull-right">ontime</span>':'<span class="label label-danger pull-right">Late</span>';
                      echo "
                        <tr>
                          <td class='hidden'></td>
						  <td> <img src=images/".$row['photo']." style='width:140px;' height='70' class='zoom'></td>
                          <td>".date('M d, Y', strtotime($row['date']))."</td>
                         
                          <td>".$row['firstname'].' '.$row['lastname']."</td>
						   <td>".$row['department_data']."</td>
                          <td>".date('h:i A', strtotime($row['time_in'])).$status."</td>
                          <td>".date('h:i A', strtotime($row['time_out']))."</td>
						 
                          <!--td>
                            <button class='btn btn-success btn-sm btn-flat edit' data-id='".$row['attid']."'><i class='fa fa-edit'></i> Edit</button>
                            <button class='btn btn-danger btn-sm btn-flat delete' data-id='".$row['attid']."'><i class='fa fa-trash'></i> Delete</button>
                          </td-->
                        </tr>
                      ";
                    }
                  ?>
                </tbody>
              </table>
			  

			  
			  
			 
            </div>
  
	
	
	
	
	
	<!-- Ending -->
	
	
	
  </div>
  <div class="column" style="background-color:whitesmoke;">
    <h1>PREVIOS REGULAR EMPLOYEE LOGS</h1>
    <!--p>Some text..</p-->
	 	<div class="login-logo" style="font-size:70px;">
  		
		
		
		<!-- Start -->
		
		
		<div class="box-body" style="font-size:20px;">
              <table id="example1" class="table table-striped hover">
               <tr>
			   <thead style="background-color:window;">
				
                  <th class="hidden" style="  text-align:center;"></th>
   <th style="text-align:center;">Image</th>                 
				 <th style="text-align:center;">Date</th>
				  <th style="text-align:center;">Name</th>
                  <th style="text-align">Department</th>
                 
                  <th style="text-align:center;">Time In</th>
                  <th style="text-align:center;">Time Out</th>
        
                </thead>
                </tr>
				<tbody>
                  <?php
          $sql = "SELECT *, employees.employee_id AS empid, attendance.id AS attid FROM attendance LEFT JOIN employees ON employees.id=attendance.employee_id LEFT JOIN Department ON Department.id=employees.department WHERE attendance.emp_attendance_status='present' ORDER BY attendance.date DESC, attendance.datemodified DESC LIMIT 4";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      $status = ($row['status'])?'<span class="label label-warning pull-right">ontime</span>':'<span class="label label-danger pull-right">late</span>';
                      echo "
                        <tr>
                          <td class='hidden'></td>
						  <td> <img src=images/".$row['photo']." style='width:140px;' height='70' class='zoom'></td>
                          <td>".date('M d, Y', strtotime($row['date']))."</td>
                         
                          <td>".$row['firstname'].' '.$row['lastname']."</td>
						   <td>".$row['department_data']."</td>
                          <td>".date('h:i A', strtotime($row['time_in'])).$status."</td>
                          <td>".date('h:i A', strtotime($row['time_out']))."</td>
                          <!--td>
                            <button class='btn btn-success btn-sm btn-flat edit' data-id='".$row['attid']."'><i class='fa fa-edit'></i> Edit</button>
                            <button class='btn btn-danger btn-sm btn-flat delete' data-id='".$row['attid']."'><i class='fa fa-trash'></i> Delete</button>
                          </td-->
                        </tr>
                      ";
                    }
                  ?>
                </tbody>
              </table>
			  
			  
			  	<p id="date" style="font-size:80px;"></p>
		
		
		

		

      <p id="time" class="bold" style="font-size:70px;"></p>
			  
			  
			  
			 
            </div>
          </div>
        </div>
      </div>
    </section>  
	
  </div>
		
		
		<!-- Ending -->
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	
  	</div>
  </div>
</div>









	
<?php include 'scripts.php' ?>

<button id="myButton" class="float-left submit-button" >Home</button>

<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "indexmain.php";
    };
</script>


<!--script>
function refreshPage(){
    window.location.reload();
} 
</script-->
<script type="text/javascript">
$(function() {
  var interval = setInterval(function() {
    var momentNow = moment();
    $('#date').html(momentNow.format('dddd').substring(0,3).toUpperCase() + ' - ' + momentNow.format('MMMM DD, YYYY'));  
    $('#time').html(momentNow.format('hh:mm:ss A'));
  }, 100);

  $('#attendance').submit(function(e){
    e.preventDefault();
    var attendance = $(this).serialize();
    $.ajax({
      type: 'POST',
      url: 'attendance.php',
      data: attendance,
      dataType: 'json',
      success: function(response){
        if(response.error){
          $('.alert').hide();
          $('.alert-danger').show();
          $('.message').html(response.message);
        }
        else{
          $('.alert').hide();
          $('.alert-success').show();
          $('.message').html(response.message);
		  $('.message22').html(response.message22);
          $('#employee').val('');
        }
      }
    });
  });
    
});
</script>
<!--script type="text/javascript">
$(function() {
  var interval = setInterval(function() {
    var momentNow = moment();
    $('#date').html(momentNow.format('dddd').substring(0,3).toUpperCase() + ' - ' + momentNow.format('MMMM DD, YYYY'));  
    $('#time').html(momentNow.format('hh:mm:ss A'));
  }, 100);

  $('#attendance').submit(function(e){
    e.preventDefault();
    var attendance = $(this).serialize();
    $.ajax({
      type: 'POST',
      url: 'attendance.php',
      data: attendance,
      dataType: 'json',
      success: function(response){
        if(response.error){
          $('.alert').hide();
          $('.alert-danger').show();
          $('.message').html(response.message);
        }
        else{
          $('.alert').hide();
          $('.alert-success').show();
          $('.message').html(response.message);
          $('#employee').val('');
        }
      }
    });
  });
    
});
</script>


<script type="text/javascript">
$(function() {
  var interval = setInterval(function() {
    var momentNow = moment();
    $('#date').html(momentNow.format('dddd').substring(0,3).toUpperCase() + ' - ' + momentNow.format('MMMM DD, YYYY'));  
    $('#time').html(momentNow.format('hh:mm:ss A'));
  }, 100);

  $('#attendance').submit(function(e){
    e.preventDefault();
    var attendance = $(this).serialize();
    $.ajax({
      type: 'POST',
      url: 'attendance.php',
      data: attendance,
      dataType: 'json',
      success: function(response){
        if(response.error){
          $('.alert').hide();
          $('.alert-danger').show();
          $('.message3').html(response.message3);
        }
        else{
          $('.alert').hide();
          $('.alert-success').show();
          $('.message3').html(response.message3);
          $('#employee').val('');
        }
      }
    });
  });
    
});
</script-->
</body>
</html>