      <script src="../js/modernizr/modernizr.min.js"></script>
		  <!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script-->
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



        <link rel="stylesheet" type="text/css" href="../js/DataTables/datatables.min.css"/>

        <script src="../js/modernizr/modernizr.min.js"></script>
<!-- multidropdown ko-->

<!--link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"-->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<head>
	<link rel="shortcut icon" href="includes/enma.jpg" type="image/x-icon"/>
<style>

body{
	
	overflow:hidden;
	
}

</style>

</head>
<header class="main-header">
    <!-- Logo -->
    <a href="home.php" class="logo" style="background-color:darkslateblue;">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>HRD</span>
      <!-- logo for regular state and mobile devices -->
      <!--span class="logo-lg"><b style="color:black;">HRD Payrol System</b></span-->
	  			    <emp style="color:white;font-size:17px;">Payroll System Mftg.Corp</emp>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="background-color:darkslateblue;">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button" style="color:white;">
        <span class="sr-only">Toggle navigation</span>
      </a>
	        <!--a href="#" class="ion-ios-rewind" data-toggle="push-menu" role="button" style="color:blue; width:150px;">
    
	        <span class="sr-only">Toggle navigation</span>
      </a-->

 <ul class="nav navbar-nav" style="display:none;">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:black;">
              <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $user['firstname'].' '.$user['lastname']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $user['firstname'].' '.$user['lastname']; ?>
                  <small>Member since <?php echo date('M. Y', strtotime($user['created_on'])); ?></small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#profile" data-toggle="modal" class="btn btn-default btn-flat" id="admin_profile">Update</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
				
              </li>
            </ul>
          </li>
        </ul>
		
		
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="logout.php" style="color:black;background-color:window; display:none;">
              <!--img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>" class="user-image" alt="User Image"-->
              <span class="hidden-xs" style="font-size:17px;">Logout</span>
            </a>
			
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $user['firstname'].' '.$user['lastname']; ?>
                  <small>Member since <?php echo date('M. Y', strtotime($user['created_on'])); ?></small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#profile" data-toggle="modal" class="btn btn-default btn-flat" id="admin_profile">Update</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
		
		
	
		
 <ul class="nav navbar-nav" style="border-radius:20px;">
          <!-- User Account: style can be found in dropdown.less -->
		  
			             				<li><a data-toggle="modal" title="UserProfile" data-target="#UpdateInformation" data-toggle="modal"class="color-primary text-center "><i class="fa fa-user" style="color:grey;"></i> </a></li>
						


          	<li><a data-toggle="modal"  title="Reported Message" data-target="##Updatemessage" data-toggle="modal"class="color-primary text-center "><i class="fa fa-warning" style="color:grey;"><emp style="background-color:r3ed;color:whi3te;">&nbsp;0</emp></i> </a></li>	







						
			  
              	<li><a data-toggle="modal"  title="Message" data-target="#Updatemessage" data-toggle="modal"class="color-primary text-center "><i class="fa fa-envelope" style="color:grey;"></i> </a></li>	


  	<li style="color:black;"><a data-toggle="modal"  title="Notifications" data-target="#Updateofmis" data-toggle="modal"class="color-primary text-center "><i class="fa fa-bell" style="color:grey;">&nbsp;</i> </a></li>
		  
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:black;font-size:17px;background-color:pink;border-radius:20px;">
			
			
			
            
            Chat(306)  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-edit">&nbsp;<span class="fa fa-users" style="width:57px;">&nbsp;<span class="glyphicon glyphicon-cog"><!--span class="hidden-xs"><?php echo $user['firstname'].' '.$user['lastname']; ?></span-->
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $user['firstname'].' '.$user['lastname']; ?>
                  <small>Member since <?php echo date('M. Y', strtotime($user['created_on'])); ?></small>
                </p>
              </li>
			  <!-- COMMENT MUNA THISS -->
			  <br>
			  
			  
			  
			  
			       <!--table id="example1" class="table table-bordered">
                <thead>
    
                  <th style="background-color:darkslateblue;color:white;">Name</th>
	
                  <th style="background-color:darkslateblue;color:white;">Action</th>
       
     
                </thead>
                <tbody>

                  <?php
                    $sql = "SELECT *, employees.id AS empid FROM employees LEFT JOIN position ON position.id=employees.position_id LEFT JOIN schedules ON schedules.id=employees.schedule_id LEFT JOIN department ON department.id=employees.department WHERE employees.resigned='1'";
                    $query = $conn->query($sql);
                    while($rower = $query->fetch_assoc()){
                      ?>
                        <tr>
  
                          <td><?php echo $rower['firstname'].' '.$rower['lastname']; ?></td>
	
                          <td style="width:5%;">
                            <button class="btn btn-success btn-sm edit btn-flat" href="employee.php?id=<?php echo $rower['empid'];?>" data-id="<?php echo $rower['empid']; ?>"><i class="fa fa-envelope"></i> Chat</button>
                         
                          </td>
                        </tr>
                      <?php
                    }
                  ?>
                </tbody>
              </table-->
			  
			  
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#profile" data-toggle="modal" class="btn btn-default btn-flat" id="admin_profile">Update</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
	  
    </nav>
	
  </header>
  
  <?php include 'includes/profile_modal.php'; ?>