<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>


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

		
		<!-- okay tu header-->
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
  transform: scale(2.0); /* (390% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}


.InActive{
	
	display:none;
opacity: 0.65;
cursor: not-allowed	
}
.Resigned{
	
	display:none;
opacity: 0.65;
cursor: not-allowed	
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
        Resigned Employee List
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
            <div class="box-header with-border" style="display:none;">
               <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a>
            </div>
            <div class="box-body">
              <!--form method="post" action="delete.php"-->
						  
            <table class="display table table-bordered" id="example" cellspacing="0" width="100%">
              <thead>
                <tr>
	      <th style="width:1%;background-color:#454545; border-radsius:15px; color:white; text-align:center; font-size:10px; color:white;">:)</th>
		  
		  
              <th style="width:1%;background-color:#454545; border-radsius:15px; color:white; text-align:center; font-size:15px; color:white;">IMG</th>
           
	   	<th style="width:5%;background-color:#454545; border-radisus:15px; color:white; text-align:center; font-size:15px; color:white;">Name</th>
		
		
			   	<th style="width:5%;background-color:#454545; border-rasdius:15px; color:white; text-align:center; font-size:15px; color:white;">Employee&nbsp;ID</th>
				
					   	<th style="width:5%;background-color:#454545; border-radsius:15px; color:white; text-align:center; font-size:15px; color:white;">Department</th>
				
			 <th style="width:5%;background-color:#454545; color:white; text-align:center; font-size:15px; border-radsius:15px; color:white;">Section</th>
		         	<th style="width:5%;background-color:#454545; border-radsius:15px; color:white; text-align:center; font-size:15px; color:white;">Position</th>  
					   	<th style="width:5%;background-color:#454545; border-radisus:15px; color:white; text-align:center; font-size:15px; color:white;">ScheduLe</th>
						
						
						   	<th style="width:5%;background-color:#454545; border-rasdius:15px; color:white; text-align:center; font-size:15px; color:white;">Member&nbsp;Since</th>
							
							
							   	<th style="width:5%;background-color:#454545; border-radsius:15px; color:white; text-align:center; font-size:15px; color:white;">Status</th>
							
		  <th style="width:4%;background-color:#454545; color:white; border-radisus:15px; text-align:center; font-size:15px; color:white;">Depreciation</th>
	  <th style="width:4%;background-color:#454545; color:white; text-align:center; border-radxius:15px; font-size:15px; color:white;">Status</th>
	  <th style="width:4%;background-color:#454545; border-radixus:15px; color:white; text-align:center; font-size:15px; color:white;">Action</th>
	  <th style="width:4%;background-color:#454545; border-radixus:15px; color:white; text-align:center; font-size:15px; color:white;">&nbsp;View</th>
                 
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
		  // $department=$_SESSION['sess_department'];
          // $get_id=$_GET['id']; 
               $query = mysql_query("SELECT *, employees.id AS empid FROM employees LEFT JOIN position ON position.id=employees.position_id LEFT JOIN schedules ON schedules.id=employees.schedule_id LEFT JOIN department ON department.id=employees.department LEFT JOIN employee_status ON employee_status.id=employees.emp_status LEFT JOIN sections ON sections.id=employees.dept_section WHERE employees.resigned='0'") or die(mysql_error());
                        while ($row = mysql_fetch_array($query)) {
                      $empid=$row['id'];
					                        $id=$row['empid'];
					  $birthdate=$row['birthdate'];
					  $emp_status = $row['emp_status'];
							//$name=$row['item_image'];
						//	$date=$row['item_date'];      
            ?>
			
				<!--?php 
							$query=mysql_query("select * from filemgrmis ORDER BY item_id DESC")or die(mysql_error());
							while($row=mysql_fetch_array($query)){
							$item_id=$row['item_id']; original
							$name=$row['item_image'];
							$date=$row['item_date'];
							?-->
      <tr>
	  
	  
	  <td>
	   <!--a rel="tooltip" class="btsn btn-info" href="editassets.php?item_id=<?php echo $row['item_id']; ?>" title="Click for Edit" onclick="return confirm('Are you sure you want to Update this Existing Image ?')"><span class="glyphicon glyphicon-edit" style="font-size:17px; color:white;"></span></a--> 
 <a href="###edit_phodtos<?php echo $row ['empid'];?>" data-toggle="modal" class="pull-right photo" data-id="<?php echo $row['empid']; ?>"><span class="fa fa-edit"></span></a>
	  </td>
	   <td class="zoom" style="width:5%;">
	   	
				<center> <img class="zoom" src="<?php echo (!empty($row['photo']))? '../images/'.$row['photo']:'../images/profile.jpg'; ?>" width="70px" height="45px" /></center>
				 </td>
	  
	  
	  
	  
					 			
	  
	  
	  
	  

       
           
			  
			  		  
		
		
			  
			  	    	    <td style="text-align:center;
			  "><?php echo $row['firstname'].' '.$row['lastname']; ?></td>
			  
			  			  	    	    <td style="text-align:center;
			  "><?php echo $row['employee_id'];?></td>
			  
			  
			  		  	    	    <td style="text-align:center;
			  "><?php echo $row['department_data'];?></td>
			  <td> <?php echo $row['section'];?></td>
			  <td> <?php echo $row['description'];?></td>
			   <td> 
			   
			   <!--?php
			   include('connect.php');
			   $cat=$row['employee_id'];
			   $query74 = mysql_query("Select * from empleyado where employee_id='$cat'") or die(mysql_error());
			   $row555 = mysql_fetch_array($query74);
			    echo $row555['Name'];
			   ?-->
			   <?php echo date('h:i A', strtotime($row['time_in'])).' - '.date('h:i A', strtotime($row['time_out'])); ?>
			   
			   
			   </td>
			   <td><?php echo $row['created_on'];?></td>
       
              <!--td style="width:37%;"><?php echo $row['item_image'];?></td-->
			  
			  			  
			  <!--td>
			  		<?php



$file= '../../../ong/item_images/'.$row["item_image"].'';
$filesize = filesize($file);
$filesize = round($filesize /1024 / 1024, 1);

echo "$filesize".'MB';
?>
		</td-->	  

			  
			  
			  
			  
			  
			                <td style="text-align:center;width:5%;"><?php echo $row['status'];?></td>
          
              <!--td><?php  $price=$row['price'];
              echo 'PHP'.formatMoney($price,true);?></td-->

			 
			  
			  
			  
			  
			  
			<td style="text-align:center; width:6%;">

	  <!--a rel="tooltip" class="btn btn-success"  title="Click to Upload files"  stytle="text-align:center;" id="<?php echo $id; ?>" onclick="return confirm('Are you sure you want to Add a New Data?')" a data-toggle="modal" data-target="#uploadModalsamplexmemosuperjeje" data-toggle="modal"    class="btn btn-light"><span class="
glyphicon glyphicon-cloud-upload" style="text-align:center; color:white"></span><i class="icon-trash icon-large"></i>&nbsp;Upload</a-->


						    	
			<a href="#depreciation<?php echo $row['item_id'];?>" class="btn btn-info" title="Click to Download" data-toggle="modal"></span>View</a>	
										
														   
				
				</td>
				
					<td style="width:5%;">					
											   
						<a href="#dispossal<?php echo $row['item_id'];?>" class="btn btn-primary" title="Click to Download" data-toggle="modal"></span><?php echo $row['firstname'];?></a>
						</td>			
									
										
				<td style="width:4%;" class="<?php echo $row['posted'];?>">						
										
			<a href="#post<?php echo $row ['empid'];?>"  class="<?php echo $row ['postedk'];?> btn btn-success" data-toggle="modal" title="Click to make an Action"></span><?php echo $row ['system_status'];?></a>
</td>

<td style="width:5%;">
					 
 	<a href="#update<?php echo $row ['empid'];?>"  class="btn btn-warning <?php echo $row['system_status'];?>" title="Click to Edit" data-toggle="modal"></span>View</a>			
  
	 
	 
	 	<!--a rel="tooltip" class="btn btn-danger"href="myfilemgr/delete.php?del=<?php echo $row['item_id']?>"  onclick="return confirm('Are you sure to remove this Selected File?')"><span class="glyphicon glyphicon-trash" style="color:white" ></span>&nbsp; Delete</a-->
	 
 </td
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
	  
	  
	   



<div class="modal fade" id="edit_photos<?php echo $row['empid'];?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span class="del_employee_name"><?php echo $row['firstname'];?>&nbsp;<?php echo $row['lastname'];?></span></b></h4>

            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                <input type="hidden" class="empid" name="id" value="<?php echo $row['empid'];?>">
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
              ?>" height="70" width="105" class="zoom" style="border-radius:20px;"></img></center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System Status For&nbsp;<emp style="background-color:skyblue; border-radius:20px;"><?php echo $row ['firstname'];?>&nbsp;<?php echo $row ['lastname'];?></emp></h4>
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
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	  <!--Edit Item Modal -->
                    <div id="update<?php echo $row ['empid'];?>" class="modal fade" role="dialog">
                        <form method="post" class="form-horizontal" role="form">
                            <div class="modal-dialog modal-lg">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      
									     <h4 class="modal-title"><img src="../images/<?php $cat=$row['empid'];
              $query99 = mysql_query("select * from employees where id='$cat'");
              $row00 = mysql_fetch_array($query99);
              echo $row00['photo'];
              ?>" height="70" width="105" class="zoom"></img></center>
			  <b style="text-align:center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HR | Employee Details of
			  <?php $cat=$row['empid'];
              $query990 = mysql_query("select * from employees where id='$cat'");
              $row001 = mysql_fetch_array($query990);
              echo $row001['firstname']; echo"&nbsp;";echo $row001['lastname'];
              ?>
			  </b>
			  
			  <img src="images/GerardSS.jpg" height="70" width="105" align="right"></img>
			  
			  <!--b style="text-align:center; font-size:20px; text-align:center;s"><center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HR | Employee Details for&nbsp;<!--?php $cat=$row['empid'];
              $query990 = mysql_query("select * from employees where id='$cat'");
              $row001 = mysql_fetch_array($query990);
              echo $row001['firstname'];
              ?></h4></b></center-->
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="item_id" value="<?php echo $row ['item_id']; ?>">
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="item_name">No:</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="sended" name="id" value="<?php echo $row['empid'];?>" placeholder="Job Title" readonly></div>
												
												       <label class="control-label col-sm-2" for="item_name">Date&nbsp;Hired:</label>
                                            <div class="col-sm-4">
                                                <input type="date" class="form-control" id="sended" name="date_hired" value="<?php echo $row['date_hired'];?>" placeholder="Statuss"> </div>
												
												       <label class="control-label col-sm-2" for="item_name">FirstName:</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="sended" name="firstname" value="<?php echo $row['firstname'];?>" placeholder="Education"> </div>
												
												
													       <label class="control-label col-sm-2" for="item_name">Regular&nbsp;Date:</label>
                                            <div class="col-sm-4">
                                                <input type="date" class="form-control" id="sended" name="regular_date" value="<?php echo $row['regular_date'];?>" placeholder="Work Experience"> </div>
												
												
													       <label class="control-label col-sm-2" for="item_name">MiddleName:</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="sended" name="middlename" value="<?php echo $row ['middlename'];?>" placeholder="MiddleName"> </div>
												
												
																	       <label class="control-label col-sm-2" for="item_name">SSS #:</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="sended" name="sss_num" value="<?php echo $row ['sss_num'];?>" placeholder="SSS No."> </div>
												
												
													       <label class="control-label col-sm-2" for="item_name">LastName:</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="sended" name="lastname" value="<?php echo $row ['lastname'];?> " placeholder="Salary"> </div>
												
												
												
												
                                            <label class="control-label col-sm-2" for="item_code">TIN #:</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="item_code" name="tin_num" value="<?php echo $row ['tin_num']; ?>" placeholder="TIN No." required> </div>
                                        
										
										
										           <label class="control-label col-sm-2" for="item_code">Gender:</label>
                                            <div class="col-sm-4">
											
											
									<select id="types" class="form-control" name="gender" > 
						   <option value="<?php echo $row['gender'];?>"><?php echo $row['gender'];?></option>

        <option value="Male">Male</option>
		        <option value="Female">Female</option>

 
 		
</select>  
												
												
												
												
												</div>
												
							
			
                                            <label class="control-label col-sm-2" for="item_code">TAX ID:</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="item_code" name="tax_id" value="<?php echo $row ['tax_id']; ?>" placeholder="Vacancy" required> </div>


												

                                            <label class="control-label col-sm-2" for="item_code">Birthdate:</label>
                                            <div class="col-sm-4">
                                                <input type="date" class="form-control" id="item_code" name="birthdate" value="<?php echo $row ['birthdate']; ?>" placeholder="Vacancy" required> </div>												
												               
                                            <label class="control-label col-sm-2" for="item_code">Philhealth #:</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="item_code" name="philhealth_num" value="<?php echo $row ['philhealth_num']; ?>" placeholder="Philhealth No." required> </div>												
												
												
                                            <label class="control-label col-sm-2" for="item_code">Contact&nbsp;Info:</label>
                                            <div class="col-sm-4">
                                                <input type="" class="form-control" id="item_code" name="contact_info" value="<?php echo $row ['contact_info']; ?>" placeholder="Contact No." required> </div>												
															   
                                        
															
                                            <label class="control-label col-sm-2" for="item_code">HDMF #:</label>
                                            <div class="col-sm-4">
                                                <input type="" class="form-control" id="item_code" name="hdmf_num" value="<?php echo $row ['hdmf_num']; ?>" placeholder="HDMF No." required> </div>												
															   
                                        
										
															
                                            <label class="control-label col-sm-2" for="item_code">Current&nbsp;Address:</label>
                                            <div class="col-sm-4">
                                                 <textarea class="form-control" name="address" id="edit_address"><?php echo $row['address'];?></textarea>
											  
											  </div>												
														



     <label class="control-label col-sm-2" for="item_code">Permanent&nbsp;Address:</label>
                                            <div class="col-sm-4">
                                                 <textarea class="form-control" name="permanent_address" id="edit_address"><?php echo $row['permanent_address'];?></textarea>
											  
											  </div>	
										
										


														
                                       <label class="control-label col-sm-2" for="item_code">Employee&nbsp;Status:</label>
                                            <div class="col-sm-4">
                    
                                                                    <select  class="form-control" id="inputPassword3" name="status" />
       <option value="<?php echo $row18['status'];?>"><?php echo $row18['status'];?></option-->
        <?php
		
	include('connect.php');
// $employee_ids=$employee_id;
        $queryemployee=mysql_query("select * from employee_status") or die (mysql_error());
        while($row=mysql_fetch_array($queryemployee)){
			    echo "
                                                         
										  <option value='".$row['id']."'>".$row['status']."</option>
                            ";
        ?>

        <?php } ?>
      </select>
					



												</div>												
															   
           
															
                                       
										
										
										
										
										
										
										
										
										           <label class="control-label col-sm-2" for="item_code">Salary&nbsp;Type:</label>
                                            <div class="col-sm-4">
   <select class="form-control" name="salary_type" id="edit_salary_type">
                        <option selected id="gender_val"><?php echo $row8080['salary_type'];?></option>
                        <option value="D">D</option>
                        <option value="M">M</option>
						   <option value="ILS">ILS</option>
                      </select>


												</div>
                                        
										
										
										           <label class="control-label col-sm-2" for="item_code">Civil&nbsp;Status:</label>
                                            <div class="col-sm-4">
  <select class="form-control" name="civil_status" id="edit_civisl_status">
                        <option value="<?php echo $row7['civil_status'];?>"><?php echo $row7['civil_status'];?></option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
						<option value="Windowed">Windowed</option>
						<option value="Divorced">Divorced</option>
                      </select>
												
												
												
												</div>
                                        <br>
										
       <label class="control-label col-sm-2" for="item_code">Salary&nbsp;Structure:</label>
                                            <div class="col-sm-4">
                   <input type="text" class="form-control" id="item_code" name="salary_structure" value="<?php echo $row14['salary_structure'];?>" placeholder="Salary Structure" required> </div>
                                        
										
										           <label class="control-label col-sm-2" for="item_code">ScheduLe:</label>
                                            <div class="col-sm-4">
                                                                    <select  class="form-control" id="inputPassword3" name="schedule_id" />
       <option value="<?php echo $row9000['id'];?>"><?php echo $row9000['time_in'];?>&nbsp;<?php echo $row9000['time_out'];?></option-->
        <?php
		
	include('connect.php');
// $employee_ids=$employee_id;
        $queryemployee=mysql_query("select * from schedules") or die (mysql_error());
        while($row=mysql_fetch_array($queryemployee)){
			    echo "
                              <option value='".$row['id']."'>".$row['time_in'].' - '.$row['time_out']."</option>
                            ";
        ?>

        <?php } ?>
      </select>
					      					
												
												</div>
                                        
											           <label class="control-label col-sm-2" for="item_code">Salary&nbsp;Rate:</label>
                                            <div class="col-sm-4">
                      <input type="text" class="form-control" id="item_code" name="salary_rate" value="<?php echo $row14['salary_rate']; ?>" placeholder="Vacancy" required> </div>
                                        
										</div>
										
									                <!--div class="col-sm-4">
                                                <input type="text" class="form-control" id="item_code" name="Vacancy" value="<?php echo $_SESSION['sess_fname']; ?>&nbsp;<?php echo $_SESSION['sess_lastname'];?>" placeholder="Vacancy" required> </div-->	
	
						<b><center><emp class="btn btn-success" style="font-size:18px;border-radius:20px; padding-top:5px;width:850px;text-align:center;">
						
						
						
						
						
						</emp></center>	
						
						
						
						
						
						
						
						
						
						
						
						</b>				
						
											           <label class="control-label col-sm-2" for="item_code">Department:</label>
                                            <div class="col-sm-4">
                                            <select id="types" class="form-control" name="department" required> 
						  <!--option value="">..</option-->
						  
						   <option value="<?php echo $row707['id'];?>"><?php echo $row707['department_data'];?></option>
						   <!--option value="blankall">...</option-->
 <?php
			include('connect.php');
		
        $queryuom=mysql_query("select * from department") or die (mysql_error());
        while($row=mysql_fetch_array($queryuom)){
        ?>
        <option value="<?php echo $row['id'];?>"><?php echo $row['department_data'];?></option>
		
        <?php } ?>
 

</select>  	
												
												
												
												</div>
						
						
						
						
						
											           <label class="control-label col-sm-2" for="item_code">Section:</label>
                                            <div class="col-sm-4">
                                            <select id="types" class="form-control" name="dept_section" required> 
						  <!--option value="">..</option-->
						  
						   <option value="<?php echo $row999['id']?>"><?php echo $row999['section'];?></option>
						   <!--option value="blankall">...</option-->
 <?php
			include('connect.php');
		$dept =$row90['department'];
        $queryuom=mysql_query("select * from sections WHERE department ='$dept'") or die (mysql_error());
        while($row=mysql_fetch_array($queryuom)){
        ?>
        <option value="<?php echo $row['id'];?>"><?php echo $row['section'];?></option>
		
        <?php } ?>
 

</select>  	
												
												
												
												</div>
												
												
																							           <label class="control-label col-sm-2" for="item_code">Position:</label>
                                            <div class="col-sm-4">
                                            <select id="types" class="form-control" name="position_id" required> 
						  <!--option value="">..</option-->
						  
						   <option value="<?php echo $row7878['id'];?>"><?php echo $row7878['description'];?></option>
						   <!--option value="blankall">...</option-->
 <?php
			include('connect.php');
		
        $queryuom=mysql_query("select * from position") or die (mysql_error());
        while($row=mysql_fetch_array($queryuom)){
        ?>
        <option value="<?php echo $row['id'];?>"><?php echo $row['description'];?></option>
		
        <?php } ?>
 

</select>  	
												
												
												
												</div>
												
												
												
						  <label class="control-label col-sm-2" for="item_code">Type of Worker:</label>
                                            <div class="col-sm-4">
 <select class="form-control" name="type_of_worker" id="edit_type_of_worker">
                        <option selected id="gender_val" value="<?php echo $row12['type_of_worker'];?>"><?php echo $row12['type_of_worker'];?></option>
                        <option value="Direct Labor">Direct Labor</option>
                        <option value="Support Services">Support Services</option>
			
                      </select>	
												
												
												
												</div>
														<b><center><emp class="btn btn-success" style="font-size:18px;border-radius:20px; padding-top:5px;width:850px;text-align:center;">
						
						
						
						
						
						</emp></center>	
														<b><center>
						In case Of Emergency
						
						
						
						
						</center>							

	
				
 <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Contact&nbsp;Person:</label>
    <div class="col-sm-10">
      <input type="text" name="sv_contact_person" class="form-control" value="<?php echo $roworig['sv_contact_person'];?>" placeholder="Contact Person" id="inputPassword3" />
    </div>
  </div>




  <br>
    <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Contact&nbsp;Number:</label>
    <div class="col-sm-10">
      <input type="number" name="sv_contact_number" class="form-control" value="<?php echo $roworig['sv_contact_number'];?>" placeholder="Contact Number" id="inputPassword3">
    </div>
  </div>
  <br>
  
 

  
  

    <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Update&nbsp;By</label>
    <div class="col-sm-10">
      <input type="text"  name="years" class="form-control" value="<?php echo $_SESSION['sess_lastname'];?> <?php echo $roworig['lastname'];?>"  placeholder="Useful Life" id="inputPassword3" required/>
    </div>
  </div>

<br>








					
										
										
										
                                        <div class="form-group">
                                   <!-- Dante -->
                                        </div>
                                    </div>
									
									
						
				
									
									
                                    <div class="modal-footer">
									
									
									  <!--a span class="glyphicon glyphicon-filxm"> <input class="btn btn-success glyphicon glyphicon-filxm" style="width:120px; height:36px; background-color:green; border-radius:20px;"  src="../item_images/<?php echo $item_image; ?>" type="file"name="item_image" accept="image/*" /></span> </a-->
									
									
                                        <!--button type="submit" class="<?php echo $row['sended'];?> btn btn-primary" name="updated_posted120"><span class="glyphicon glyphicon-edit"></span> Update</button-->
                                        <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                                    </div>
                                </div>
                            </div>
							
						
                        
                    </div>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	
							</form>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
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
			echo '<script>window.location.href="viewempleyado.php"</script>';
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
            
            var table = document.getElementById("example"), sumVal = 0;
            
            for(var i = 1; i < table.rows.length; i++)
            {
                sumVal = sumVal + parseInt(table.rows[i].cells[8].innerHTML);
            }
            
            document.getElementById("val").innerHTML = "Sum Value = " + sumVal;
            console.log(sumVal);
            
        </script>
	  
	  
	  
	  
	  
	  
	  		
<script type="text/javascript" charset="utf-8">
	$(document).ready(function() {
	  $('#example').dataTable();
	});
    </script>
	  
	  
	  
	  
	  
        <script src="../js/jquery/jquery-2.2.4.min.js"></script>
        <script src="../js/bootstrap/bootstrap.min.js"></script>
        <script src="../js/pace/pace.min.js"></script>
        <script src="../js/lobipanel/lobipanel.min.js"></script>
        <script src="../js/iscroll/iscroll.js"></script>
        <script src="../js/prism/prism.js"></script>
        <script src="../js/DataTables/datatables.min.js"></script>
        <script src="../js/main.js"></script>
        <script>
            $(function($) {
                $('#example').DataTable();

                $('#example2').DataTable( {
                    "scrollY":        "300px",
                    "scrollCollapse": true,
                    "paging":         false
                } );

                $('#example3').DataTable();
            });
        </script>
		 <script>
   
    $(document).ready(function() {
        $('#logical').keypress(function (event) {
            return isNumber(event, this)
        });
    });
  
    function isNumber(evt, element) {

        var charCode = (evt.which) ? evt.which : event.keyCode

        if (
            (charCode != 45 || $(element).val().indexOf('-') != -1) &&      
            (charCode != 46 || $(element).val().indexOf('.') != -1) &&      
            (charCode < 48 || charCode > 57))
            return false;

        return true;
    }    
</script-->
		







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
