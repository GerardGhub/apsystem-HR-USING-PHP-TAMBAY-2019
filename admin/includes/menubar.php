<head>
<style>
body{
	
	overflow:hidden;
}
tr:hover{
	background-color:skyblue;
	color:r;
	
}

.dropbtn {
  background-color:rgb(60,141,188);
  color: white;
  padding: 12px;
  font-size: 15px;
  border: none;

  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  right: 0;
  background-color: grey;
  min-width: 210px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: red;}
.dropdown:hover .dropdown-content {display: block;}
.dropdown:hover .dropbtn {background-color:#414548;}
</style>

</head>
<aside class="main-sidebar" style="background-color:rgb(60,141,188);">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="color:window;">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>" class="img-circle zoom" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $user['firstname'].' '.$user['lastname']; ?></p>
          <a><i class="fa fa-circle text-success" style="color:yellow;"></i> Active</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <!--li class="header">REPORTS</li-->
        <li class=""><a href="home.php" style="background-color:darkslateblue;color:white;"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <!--li class="header">MANAGE</li-->
        
        <li><a href="attendance.php"><i class="fa fa-calendar" style="color:window;"></i> <span style="color:window;">Attendance</span></a></li>
<div class="dropdown" style="float-left">       
	   <!--li class="treeview">
          <a href="#">
            <i class="fa fa-users" style="color:window;"></i>
            <span style="color:window;">Employees</span>

            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
		  
          <ul class="treeview-menu">
            <li><a href="myemployees.php"><i class="fa fa-circle-o"></i> Employee List</a></li>
			            <li><a href="chatlist.php"><i class="fa fa-circle-o"></i> Chat List</a></li>
			            <li><a href="viewempleyado.php"><i class="fa fa-circle-o"></i>Employee Update</a></li>
			            <li><a href="employee_resigned.php"><i class="fa fa-circle-o"></i>Resigned Employee List</a></li>
            <li><a href="overtime.php"><i class="fa fa-circle-o"></i> Overtime</a></li>
            <li><a href="cashadvance.php"><i class="fa fa-circle-o"></i> Cash Advance</a></li>
            <li><a href="schedule.php"><i class="fa fa-circle-o"></i> Schedules</a></li>
          </ul>
        </li-->
		
	
  <button class="dropbtn">          <a href="#">
            <i class="fa fa-users" style="color:window;"></i>
            <span style="color:window; width:220px;">&nbsp;&nbsp;&nbsp;&nbsp;Employees</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a></button>
  <div class="dropdown-content" style="left:170px;color:white; border-radius:20px;">
                <li><a href="myemployees.php" style="color:white;"><i class="fa fa-circle-o"></i> Employee List</a></li>
      <li><a href="viewempleyado.php" style="color:white;"><i class="fa fa-circle-o"></i> Employee Update</a></li>
			            <li><a href="employee_resigned.php" style="color:white;"><i class="fa fa-circle-o"></i> Resigned Employee List</a></li>
						            <li><a href="overtime.php" style="color:white;"><i class="fa fa-circle-o"></i> Overtime</a></li>
            <li><a href="cashadvance.php" style="color:white;"><i class="fa fa-circle-o"></i> Cash Advance</a></li>
            <li><a href="schedule.php" style="color:white;"><i class="fa fa-circle-o"></i> Schedules</a></li>
  </div>

		 
		</div>
		
		
		
		<br>
		
		<div class="dropdown" style="float-left">       
	 
		
	
  <button class="dropbtn">          <a href="#">
            <i class="fa fa-area-chart" style="color:window;"></i>
            <span style="color:window; width:220px;">&nbsp;&nbsp;&nbsp; DTR Adjustments</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a></button>
  <div class="dropdown-content" style="left:170px;color:white; border-radius:20px;">
       <li><a href="viewdepdtr.php" style="color:white;"><i class="fa fa-circle-o"></i> DTR Employee List</a></li>
  </div>

		 
		</div>
		
		
<br>

<div class="dropdown" style="float-left">       
	
		
	
  <button class="dropbtn">          <a href="#">
            <i class="fa fa-file-pdf-o" style="color:window;"></i>
            <span style="color:window; width:220px;">&nbsp;&nbsp;&nbsp;&nbsp;References</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a></button>
  <div class="dropdown-content" style="left:170px;color:white; border-radius:20px;">
            <li><a href="Department.php" style="color:white;"><i class="fa fa-heart-o"></i> Department</a></li>
            <li><a href="Sections.php" style="color:white;"><i class="fa fa-heart-o"></i> Sections</a></li>
            <li><a href="position.php" style="color:white;"><i class="fa fa-heart-o"></i> Positions</a></li>
			<li><a href="emp_status.php" style="color:white;"><i class="fa fa-heart-o"></i> Employee Status</a></li>
            <li><a href="cashadvances.php" style="color:white;"><i class="fa fa-heart-o"></i> Holidays</a></li>
            <li><a href="schedules.php" style="color:white;"><i class="fa fa-heart-o"></i> Type of Sickness</a></li>
			            <li><a href="tol.php" style="color:white;"><i class="fa fa-heart-o"></i> Types of Leave</a></li>
						            <li><a href="schedulex.php" style="color:white;"><i class="fa fa-heart-o"></i> Offense</a></li>
									   <li><a href="schedulexx.php" style="color:white;"><i class="fa fa-heart-o"></i> Available Menu</a></li>
  </div>

		 
		</div>
		
		
		

		
<br>
		
		
	<div class="dropdown" style="float-left">       
	
		
	
  <button class="dropbtn">          <a href="#">
            <i class="fa fa-id-card-o" style="color:window;"></i>
            <span style="color:window; width:220px;">&nbsp;&nbsp;&nbsp;&nbsp;ID Generated</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a></button>
  <div class="dropdown-content" style="left:170px;color:white; border-radius:20px;">
        <li><a href="selectedID.php" style="color:white;"><i class="fa fa-circle-o"></i> Selected</a></li>
            <li><a href="viewempleyado.php" style="color:white;"><i class="fa fa-circle-o"></i> By Department</a></li>
  </div>

		 
		</div>	
		
<br>

	<div class="dropdown" style="float-left">       
	
		
	
  <button class="dropbtn">          <a href="#">
            <i class="fa fa-clock-o" style="color:window;"></i>
            <span style="color:window; width:220px;">&nbsp;&nbsp;&nbsp;&nbsp;Daily Time Record</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a></button>
  <div class="dropdown-content" style="left:170px;color:white; border-radius:20px;">
      <li><a href="daily.php" style="color:white;"><i class="fa fa-circle-o"></i> Daily DTR</a></li>
            <li><a href="inclogs.php" style="color:white;"><i class="fa fa-circle-o"></i> Incomplete Logs</a></li>
            <li><a href="peremployeesdtr.php" style="color:white;"><i class="fa fa-circle-o"></i> Per Employee</a></li>
            <li><a href="dailyabsent.php" style="color:white;"><i class="fa fa-circle-o"></i> Absent</a></li>
            <li><a href="absentinfo.php" style="color:white;"><i class="fa fa-circle-o"></i> Absent Information</a></li>
			            <li><a href="schedule.php" style="color:white;"><i class="fa fa-circle-o"></i> Late and Undertime</a></li>
  </div>

		 
		</div>	
		
		<br>
		
		
			<div class="dropdown" style="float-left">       
	
		
	
  <button class="dropbtn">          <a href="#">
            <i class="fa fa-id-card-o" style="color:window;"></i>
            <span style="color:window; width:220px;">&nbsp;&nbsp;&nbsp;&nbsp;Visitors</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a></button>
  <div class="dropdown-content" style="left:170px;color:white; border-radius:20px;">
        <li><a href="selectedID.php" style="color:white;"><i class="fa fa-circle-o"></i> Selected</a></li>
            <li><a href="viewempleyado.php" style="color:white;"><i class="fa fa-circle-o"></i> By Department</a></li>
  </div>

		 
		</div>	

<br>

		
			<div class="dropdown" style="float-left">       
	
		
	
  <button class="dropbtn">          <a href="#">
            <i class="fa fa-envelope" style="color:window;"></i>
            <span style="color:window; width:220px;">&nbsp;&nbsp;&nbsp;&nbsp;Contributions</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a></button>
  <div class="dropdown-content" style="left:170px;color:white; border-radius:20px;">
        <li><a href="deduction.php" style="color:white;"><i class="fa fa-circle-o"></i> Deductions</a></li>
            <li><a href="viewempleyado.php" style="color:white;"><i class="fa fa-circle-o"></i> By Department</a></li>
  </div>

		 
		</div>	
	
		
		<!-- END -->
		
		
		
		
		
	
		        <li><a href="birthdays.php" style="color:window;"><i class="fa fa-gift"></i> Birthday</a></li>
				        <li><a href="deduction.php" style="color:window;"><i class="fa fa-gift"></i> Disciplinary Actions</a></li>
										        <li><a href="deduction.php" style="color:window;"><i class="fa fa-gift"style="color:window;"></i> Absences DA</a></li>
        <!--li><a href="position.php"><i class="fa fa-suitcase"></i> Positions</a></li-->
        <li class="header" style="background-color:darkslateblue; color:window;font-size:15px;">Others</li>
        <li><a href="payroll.php"><i class="fa fa-money" style="color:window;"></i> <span style="color:window;">Payroll Pack</span></a></li>
        <li><a href="schedule_employee.php"><i class="fa fa-clock-o" style="color:window;"></i> <span style="color:window;">Dynamic Schedule</span></a></li>
				        <li><a href="schedule_employee.php"><i class="fa fa-envelope" style="color:window;"></i> <span style="color:window;">Messenger & File Sharing</span></a></li>
		        <li><a href="schedule_employee.php"><i class="fa fa-clock-o" style="color:window;"></i> <span style="color:window;">Attendance Report</span></a></li>
				
					        <li><a href="schedule_employee.php"><i class="fa fa-comments-o" style="color:window;"></i> <span style="color:window;">System Activity Logs</span></a></li>
				
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>