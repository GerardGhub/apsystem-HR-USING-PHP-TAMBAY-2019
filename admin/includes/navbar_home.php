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
<style>

body{
	
	overflow:hidden;
	
}



.isonline{
	
	
	background-color:darkslateblue;
	font-color:white;
	border-radius:10px;
}


.isoffline{
	
	
	background-color:darkslateblue;
	font-color:white;
	border-radius:10px;
}

</style>

</head>
<header class="main-header">
    <!-- Logo -->
    <a href="home.php" class="logo" style="background-color:darkslateblue;">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>HRD</b></span>
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
			
			
			
            
            Chat(<?php
	include('connect.php');
	//$department=$row['department'];
	$count_query = mysql_query("select * from employees where social='isonline'") or die(mysql_error());
	$count = mysql_num_rows($count_query);
					
				
?>
<?php echo $count; ?>)  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-edit">&nbsp;<span class="fa fa-users" style="width:57px;">&nbsp;<span class="glyphicon glyphicon-cog"><!--span class="hidden-xs"><?php echo $user['firstname'].' '.$user['lastname']; ?></span-->
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
			  
			  
			          <table class="display table table-bordered" id="example" cellspacing="0" width="100%">
              <thead>
                <tr>

           
	   	<th style="width:5%;background-color:#454545; border-radisus:15px; color:white; text-align:center; font-size:15px; color:white;">Name</th>
		
		
			  

	  <th style="width:4%;background-color:#454545; border-radixus:15px; color:white; text-align:center; font-size:15px; color:white;">Status</th>
	 
                 
                </tr>
              </thead>
           <tbody>
                <?php
   include('connect.php');
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
		   include('db.php');

               $query = mysql_query("SELECT *, employees.id AS empid FROM employees LEFT JOIN position ON position.id=employees.position_id LEFT JOIN schedules ON schedules.id=employees.schedule_id LEFT JOIN department ON department.id=employees.department LEFT JOIN employee_status ON employee_status.id=employees.emp_status LEFT JOIN sections ON sections.id=employees.dept_section WHERE employees.resigned='1'") or die(mysql_error());
                        while ($row = mysql_fetch_array($query)) {
                      $empid=$row['id'];
					                        $id=$row['empid'];
					  $birthdate=$row['birthdate'];
					  $emp_status = $row['emp_status'];
				    
            ?>
			
			
      <tr>
	  
	  

	  
	  
	  
					 			
	  
	  
	  
	  

       
           
			  
			  		  
		
		
			  
			  	    	    <td style="text-align:center;
			  "><?php echo $row['firstname'].' '.$row['lastname']; ?></td>
			  
			  			  	    	  
       

			  
			  
			  
			  
	
									
										
				<td style="width:4%;" class="<?php echo $row['social'];?>">						
										
			<!--a href="#post<?php echo $row ['empid'];?>"  class="<?php echo $row ['postedk'];?> btn btn-success" data-toggle="modal" title="Click to make an Action"></span><?php echo $row ['system_status'];?></a-->
			   <!--a href="#profilechat" data-toggle="modal" class="btn btn-default btn-flat" id="admin_profile">Update</a-->
			             <a href="#kikyo" data-toggle="modal" style="color:white;" class="pull-right photo" data-id="<?php echo $row['empid']; ?>"><span class="fa fa-edit">&nbsp;Chat</span></a>
</td>


      <!--/form-->
	  
	  
	  	  	  	
	 <?php
            $cat=$row['empid'];
            $query7 = mysql_query("select * from employees where id='$cat'") or die(mysql_error());
            $row7 = mysql_fetch_array($query7);
        
            ?>
			  	  	  	
	 <?php
            $cat=$row['empid'];
            $query7 = mysql_query("select * from employees where id='$cat'") or die(mysql_error());
            $row14 = mysql_fetch_array($query7);
        
            ?>
			
				  	  	  	
	 <?php
            $cat=$row['empid'];
            $query75 = mysql_query("select * from employees where id='$cat'") or die(mysql_error());
            $roworig = mysql_fetch_array($query75);
        
            ?>
			
			
	  	 <?php
            $cat=$row['empid'];
            $query7000 = mysql_query("select * from schedules where id='$cat'") or die(mysql_error());
            $row9000 = mysql_fetch_array($query7000);
        
            ?>
			
						
	  	 <?php
            $cat=$row['empid'];
            $query7000 = mysql_query("select * from employees where id='$cat'") or die(mysql_error());
            $row12 = mysql_fetch_array($query7000);
        
            ?>
			  	 <?php
            $cat=$row['position_id'];
            $query7000 = mysql_query("select * from position where id='$cat'") or die(mysql_error());
            $row7878 = mysql_fetch_array($query7000);
        
            ?>
			
			  	 <?php
            $cat=$row['dept_section'];
            $query7000 = mysql_query("select * from sections where id='$cat'") or die(mysql_error());
            $row999 = mysql_fetch_array($query7000);
        
            ?>
			  	 <?php
            $cat=$row['dept_section'];
			    $cat2=$row['department'];
            $query7000 = mysql_query("select * from sections where department='$cat2'") or die(mysql_error());
            $row90 = mysql_fetch_array($query7000);
        
            ?>
			
			
			
	  
	    	 <?php
            $cat=$row['empid'];
            $query4000 = mysql_query("select * from employees where id='$cat'") or die(mysql_error());
            $row8080 = mysql_fetch_array($query4000);
        
            ?>
	  	    	 <?php
            $cat=$row['emp_status'];
            $query18 = mysql_query("select * from employee_status where id='$cat'") or die(mysql_error());
            $row18 = mysql_fetch_array($query18);
        
            ?>
	  
	   	 <?php
            $cat=$row['department'];
            $query18 = mysql_query("select * from department where id='$cat'") or die(mysql_error());
            $row707 = mysql_fetch_array($query18);
        
            ?>
	  
	  
	   










	   
	  <!--Edit Item Modal -->
                    <div id="post<?php echo $row['empid'];?>" class="modal fade" role="dialog">
                        <form method="post" class="form-horizontal" role="form">
                            <div class="modal-dialog modal-lg">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title"><img src="../images/<?php
										 $cat=$row['empid'];
              $query99 = mysql_query("select * from employees where id='$cat'");
              $row00 = mysql_fetch_array($query99);
                      echo $row00['photo'];
              ?>" height="70" width="105" class="zoom" style="border-radius:20px;"></img></center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System Status Forced&nbsp;<emp style="background-color:skyblue; border-radius:20px;"><?php echo $row ['firstname'];?>&nbsp;<?php echo $row ['lastname'];?></emp></h4>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="id" value="<?php echo $row ['empid']; ?>">
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="item_name">Posted:</label>
                                            <div class="col-sm-4">
                                                <!--input type="text" class="form-control" id="sended" name="posted" value="posted" placeholder="Sended" readonly--> 
												<select name="system_status" class="form-control" required>
												  <option value="<?php echo $roworig['system_status'];?>"><?php echo $roworig['system_status'];?></option>
  <option value="Active">Active</option>
  <option value="InActive">In Active</option>
    <option value="Resigned">Resigned</option>
</select>
												
												
												
												
												
												
												</div>
                                            <label class="control-label col-sm-2" for="item_code">Section:</label>
                                            <div class="col-sm-4">
                                                <input type="text" readonly class="form-control" id="item_code" name="item_code" value="<?php echo $row ['section']; ?>" placeholder="Item Code" required> </div>
												
												   <label class="control-label col-sm-2" for="item_code">Department:</label>
                                            <div class="col-sm-4">
                                                <input type="text" readonly class="form-control" id="item_code" name="item_code" value="<?php echo $row ['department_data']; ?>" placeholder="Item Code" required> </div>
												
												
														   <label class="control-label col-sm-2" for="item_code">Employee&nbsp;Status:</label>
                                            <div class="col-sm-4">
                                                <input type="text" readonly class="form-control" id="item_code" name="item_csode" value="<?php echo $row['status'];?>" placeholder="Itesm Code" required> </div>
												
																						   <label class="control-label col-sm-2" for="item_code">Date&nbsp;Hired:</label>
                                            <div class="col-sm-4">
                                                <input type="text" readonly class="form-control" id="item_code" name="item_code" value="<?php echo $row ['date_hired']; ?>" placeholder="Item Code" required> </div>
												
												
														   <label class="control-label col-sm-2" for="item_code">Date&nbsp;Resigned:</label>
                                            <div class="col-sm-4">
                                                <input type="date" readonly class="form-control" id="item_code" name="item_csode" value="<?php echo $row['resigned_date'];?>" placeholder="Itesm Code" required> </div>
												
												
												
												
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="item_description">Permanent&nbsp;Address:</label>
                                        <div class="col-sm-4">
                                                <textarea class="form-control" rows="8" id="Skills" name="Skills" placeholder="Skills" style="width:100%;" required> <?php echo $row['permanent_address'];?> </textarea> </div>
									
									
									
                                            <label class="control-label col-sm-2" for="item_category">Other&nbsp;Remarks:</label>
                                            <div class="col-sm-4">
                                                <textarea class="form-control" rows="8" id="Skills" name="resigned_remarks" placeholder="Skills" style="width:100%;" required>  <?php echo $row['resigned_remarks'];?></textarea> </div>
                                        </div>
                                    </div>
									
									
										<br>
								
							<br>
								
							<br>	<br>
								
							<br>
								
							<br>
												<br>
								
							<br>
								
							<br>	<br>
								
							<br>
								
							<br>	
									
									
									
                                    <div class="modal-footer">
									
					    <button type="submit" class="btn btn-indfo" name="update_itemghg" style="text-align:center;width:650px;"><span class="glyphicon glyphicon-key"></span> <?php echo $row['system_status'];?></button>
						
                                        <button type="submit" class="<?php echo $row['sended'];?> btn btn-primary" name="update_item"><span class="glyphicon glyphicon-edit"></span> Post</button>
										
										
										
										
                                        <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                                    </div>
                                </div>
                            </div>
							
						
                        </form>
                    </div>
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  </tr>
	  

	
	  
	  
	    	  <?php
		  //$bobo =$row['empid'];
if (isset($_POST['updated_posted120'])){	
$getme=$_GET['id'];
			//$empisd = $row['id'];
				$id = $_POST['id'];	
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$middlename = $_POST['middlename'];
		$address = $_POST['address'];
		 $permanent_address = $_POST['permanent_address'];
		$birthdate = $_POST['birthdate'];
		$contact_info = $_POST['contact_info'];
		$gender = $_POST['gender'];
		$position_id = $_POST['position_id'];
		$schedule_id = $_POST['schedule_id'];
		$civil_status = $_POST['civil_status'];
		$date_hired = $_POST['date_hired'];
		$regular_date = $_POST['regular_date'];
		$sss_num = $_POST['sss_num'];
		$tin_num = $_POST['tin_num'];
		$tax_id = $_POST['tax_id'];
		$philhealth_num = $_POST['philhealth_num'];
		$hdmf_num = $_POST['hdmf_num'];
		//$hdmf_rtn_num = $_POST['hdmf_rtn_num'];
		$salary_type = $_POST['salary_type'];
		$salary_structure = $_POST['salary_structure'];
		$salary_rate = $_POST['salary_rate'];
		$type_of_worker = $_POST['type_of_worker'];
		$department = $_POST['department'];
		$dept_section = $_POST['dept_section'];
				$sv_contact_number =$_POST['sv_contact_number'];
				$sv_contact_person =$_POST['sv_contact_person'];
//		$imgFile = $_FILES['item_image']['name']; //declaration of image File
	//	$tmp_dir = $_FILES['item_image']['tmp_name'];  // dir of image
	//	$imgSize = $_FILES['item_image']['size'];    // Image Size
		
	

			

			
			
			
		
		$sql = "UPDATE employees SET firstname = '$firstname', lastname = '$lastname', middlename = '$middlename',address = '$address', birthdate = '$birthdate', contact_info = '$contact_info', gender = '$gender', position_id = '$position_id', schedule_id = '$schedule_id', permanent_address = '$permanent_address', civil_status = '$civil_status', date_hired = '$date_hired', regular_date = '$regular_date', sss_num='$sss_num', tin_num = '$tin_num', tax_id = '$tax_id', philhealth_num = '$philhealth_num', hdmf_num = '$hdmf_num', salary_type = '$salary_type', salary_structure ='$salary_structure', salary_rate='$salary_rate', type_of_worker = '$type_of_worker', department = '$department', dept_section = '$dept_section', sv_contact_number ='$sv_contact_number', sv_contact_person = '$sv_contact_person' WHERE id = '$id'";
		//echo '<script>window.location.href="viewempleyado.php"</script>';
		if ($conn->query($sql) === TRUE){
			echo '<script>window.location.href="employeekorea.php?id=$dada"</script>';
						$_SESSION['success'] = 'Employee updated successfully';
		}
	
		
	
}
	?>  
	  
	  
	  
	  
      <?php } ?>
	  
	  
	  
	  	
	  
	  <?php
	  if(isset($_POST['update_status'])){
		$item_id = $_POST['item_id'];
			$item_name = $_POST['item_name'];
			$status = $_POST['status'];
			
			
			$sql = "UPDATE tb_equipment SET status='$status' WHERE item_id='$item_id'";
			echo '<script>window.location.href="viewassets.php"</script>';
		  if ($conn->query($sql) === TRUE) {
			  echo '<script>window.location.href="joblist.php"</script>';
		  } else{
			  // echo "Error updating record: ". $conn->error;
			  
		  }
	  
	  }
	  ?>
	  
	  
	  			<?php

   //Update Items
                        if(isset($_POST['update_item'])){
                            $id = $_POST['id'];
                            $system_status = $_POST['system_status'];
                        $resigned_remarks = $_POST['resigned_remarks'];
						
						
							$sended = $_POST['sended'];
                            $sql = "UPDATE employees SET 
                                system_status='$system_status', resigned_remarks='$resigned_remarks' WHERE id='$id' ";
								     echo '<script>window.location.href="viewempleyado.php"</script>';
                            if ($conn->query($sql) === TRUE) {
                                echo '<script>window.location.href="joblist.php"</script>';
								  echo '<script>window.location.href="joblist.php"</script>';
                            } else {
                              //  echo "Error updating record: " . $conn->error;
                            }
                        }

?>			
			
			
			
			<?php
	//include 'includes/session.php';

	if(isset($_POST['upload'])){
		$id = $_POST['id'];
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}
		
		$sql = "UPDATE employees SET photo = '$filename' WHERE id = '$id'";
		  echo '<script>window.location.href="viewempleyado.php"</script>';
		if($conn->query($sql)){
			$_SESSION['success'] = 'Employee photo updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		//$_SESSION['error'] = 'Select employee to update photo first';
	}

	//header('location: viewempleyado.php');
?>

	  

	  
                                </tbody>
                            </table>
			  
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
  