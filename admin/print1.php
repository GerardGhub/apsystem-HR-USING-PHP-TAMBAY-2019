<?php
session_start();
error_reporting(0);
include('../includes/config.php');

?>
<?php

	require_once 'config.php';
	
	if(isset($_GET['delete_id']))
	{
		
		$stmt_select = $DB_con->prepare('SELECT category_id FROM gscategory WHERE category_id =:category_id');
		$stmt_select->execute(array(':category_id'=>$_GET['delete_id']));
		$imgRow=$stmt_select->fetch(PDO::FETCH_ASSOC);
		unlink("../item_images/".$imgRow['item_image']);
		
	
		$stmt_delete = $DB_con->prepare('DELETE FROM gscategory WHERE category_id =:category_id');
		$stmt_delete->bindParam(':category_id',$_GET['delete_id']);
		$stmt_delete->execute();
		
		header("Location: managecatgs.php");
	}

?>


<!--!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>O&G Policy Management System</title>
				<link rel="shortcut icon" href="../GerardSS.jpg" type="image/x-icon"/>
					<link rel="shortcut icon" href="../GerardSS.jpg" type="image/x-icon"/>
        <link rel="stylesheet" href="../css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="../css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="../css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="../css/lobipanel/lobipanel.min.css" media="screen" >

        <link rel="stylesheet" type="text/css" href="../js/DataTables/datatables.min.css"/>
        <link rel="stylesheet" href="../css/main.css" media="screen" >
        <script src="../js/modernizr/modernizr.min.js"></script-->
		
		
		
		
		
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>O&G Policy Management System</title>
					<link rel="shortcut icon" href="../GerardSS.jpg" type="image/x-icon"/>
        <link rel="stylesheet" href="#./css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="../css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="../css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="../css/lobipanel/lobipanel.min.css" media="screen" >

        <link rel="stylesheet" type="text/css" href="../js/DataTables/datatables.min.css"/>
        <link rel="stylesheet" href="../css/main.css" media="screen" >
        <script src="../js/modernizr/modernizr.min.js"></script>
		
		<!--link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"-->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!-- close in to body the follwing code behind the body -->


    <body class="top-navbar-fixed">


            <!-- ========== TOP NAVBAR ========== -->
   <?php include('../includes/topbar.php');?> 
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">
<!--?php include('../includes/newleftbar.php');?     Alis muna this fuction comment ko muna para clear   -->  

                    <div class="main-page">
              
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <!--h4 class="title"><b><i>To-Do List</b></i></h4-->
									      <!--h4 class="title" style="font-size:25px; color:skyblue;"><b>Fixed Asset Report</b></h4-->
										  	        <!--h4 class="fa fa-file-text" style="font-size:22px;">FIxed Asset's Reports</h4-->
													
	<h4 class="btn btn-primary" style="font-size:17px; display:none;"> <img src="/images/enma.jpg" height="20">Office Equipsment Asset Sticker
								</h4></img>
      
                        </div>
         <p id="date"></p>

             
                            <div class="container-fluid">
                            
                  
									
</div>
<div class="alert alert-primary" role="alert">
 

    <div class="#">
							 
												 
		 <div id="page-wrapper">
            
			   
                                        </div>
			<!-- operation of the first table start  here-->





<!--// let it gooooo!!!  -->

          <!--iframe src="print_assetstickerlist.php" height="770px" width="100%"></iframe-->


<?php include('connect.php') ?>








<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Office Equipment Sticker</title>
					<link rel="shortcut icon" href="../GerardSS.jpg" type="image/x-icon"/>
        <link rel="stylesheet" href="#./css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="../css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="../css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="../css/lobipanel/lobipanel.min.css" media="screen" >

        <link rel="stylesheet" type="text/css" href="../js/DataTables/datatables.min.css"/>
        <link rel="stylesheet" href="../css/main.css" media="screen" >
        <script src="../js/modernizr/modernizr.min.js"></script>
		
		<!--link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"-->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
<!--

a:link {
  color: #000000;
  text-decoration: none;
}
a:visited {
  text-decoration: none;
  color: #000000;
}
a:hover {
  text-decoration: none;
  color: #000000;
}
a:active {
  text-decoration: none;
  color: #000000;
}
-->
.apam{
background-color:darkslateblue;
	
}

* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
  padding: 10px;
  height: 430px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

</style>

<script	>
function myFunction()
{
        var printButton = document.getElementById("printpagebutton");
        printButton.style.visibility = 'hidden';
        printButton.style.visibility = 'hidden';
        window.print()
}

</script>
    
<!-- sdas -->


  
   
<center class="apam"><a href="" id="printpagebutton" onclick="myFunction()" style="color:white;">Click to Print following ID</a></center>

                  <!--img src="../images/GerardSs.jpg" height="100"></img> <center> Fixed Sticker Asset Report </center> <div align="center" style="margin-top:5px; height:1px;"-->
 </div>

 <!--p>Asset Quantity:  <!--?php
 //  $query123 = mysql_query("select distinct item_category from tb_equipment") or die(mysql_error());
  //$row123 = mysql_fetch_array($query123);
  //  $item_category=$row123['item_category'];
        $count_query = mysql_query("select * from tb_equipment") or die(mysql_error());
  //      $count = mysql_num_rows($count_query);
//    echo $count;
 <!--   ?></p-->
<!--p>Asset Cost: <?php          
    $result5 = mysql_query("SELECT sum(price) FROM tb_equipment");
    while($row5 = mysql_fetch_array($result5))
    { 
      $tinventoryprice=$row5['sum(price)']; 
      echo formatMoney($tinventoryprice,true);
    }
  ?></p-->

<table border="1" class="table table-hover" align="center" cellpadding="0" cellspacing="0" style="width:100%">
   <?php

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
          <thead>
            <tr bgcolor="#cccccc" style="margin-bottom:10px;display:none;">

              <th><div align="center">Item Type</div></th>
              <th><div align="center">Item Code</div></th>
               <th><div align="center">Description</div></th>
               <th><div align="center">Brand</div></th>
			   
                <!--th><div align="center">Price</div></th>
                <th><div align="center">Status</div></th>
                <th><div align="center">Supplier</div></th-->
            </tr>
          </thead>
          <tbody>
		  
		         <!--?php
		   include('connect.php');
		   
           $get_id=$_GET['id']; 
               $query = mysql_query("select * from tb_equipment where item_category='$get_id'") or die(mysql_error());
                        while ($row = mysql_fetch_array($query)) {
                        $item_id = $row['item_id'];  










	<center> <img src="..\item_images\<?php echo $row['item_image'];?>" class="img img-rounded"  width="50" height="50" /></center>						
            ?-->
			
			
			


			
			
			
			
			
			
			
			
			
			
			
		  
		  
		  <!-- phase 1 -->
		  <tr>
      <?php

	$get_id = $_GET['id'];
          $query = mysql_query("SELECT *, employees.id AS empid FROM employees LEFT JOIN position ON position.id=employees.position_id LEFT JOIN schedules ON schedules.id=employees.schedule_id LEFT JOIN department ON department.id=employees.department LEFT JOIN employee_status ON employee_status.id=employees.emp_status WHERE employees.resigned='1' AND employees.id='$get_id' LIMIT 1");                //carreer oportunity  we are infinite so gave me some sunshine!@!@!@!@!@!@!
            while($column = mysql_fetch_array($query))
              {
                $item=$column['item_category'];
			$today = date("m j, Y");
             $query1=mysql_query("select * from item_category where category_id='$item'");
             $column1=mysql_fetch_array($query1);
                  echo '

				  
				  
				  <td style="width:50%;font-size:100%; ">
				  <div class="row">
  <div class="column" style="background-color:window;">
    <h4>				  
				  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/GerardSs.jpg" width="100" height="65" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>'.$column['employee_id'].'</u></h4>
    <!--p>Some text..</p-->
				  				  <br>
				  <center><img src="../images/'.$column['photo'].'" width="105" height="85" /></center>
				  <br>
				   <br>
				 <b> <center style="font-size:17px;">'.$column['firstname'].'&nbsp;'.$column['lastname'].'</center></b>
				  <u>________________________________________________________________</u>
				  				  <center style="font-size:16px;">'.$column['description'].'</center>
				  <p>
				  		  <center>O&G Leather Mftg. Corp</center>
						  <p>
				  	  <center>Unit 4-1 Philexcel Pampanga Park,</center>
				 				  	  <center>Unit 4-1 Philexcel Pampanga Park,</center>
									  				  	  <center>096506958254</center>
  
</div>
 <div class="column" style="background-color:#bbb;">

	  <table class="table table-bordered" >

            <tr style="">
              <td style="width:50%;">
                <center style="font-size:10px;">Date Employed</center>
            <b>  <center>'.$column['created_on'].'  </center></b>
			  </td>
			         <td style="width:50%;">
                    <center style="font-size:10px;">Employment Status</center>
            <b>  <center>'.$column['status'].'  </center></b>
              </td>
			  </tr>
			  <tr>
			       <td>
                              <center style="font-size:10px;">Valid Until</center>
            <b>  <center>'.$column['status'].'  </center></b>
              </td>
			        <td>
                              <center style="font-size:10px;">Birthdate</center>
            <b>  <center>'.$column['birthdate'].'  </center></b>
              </td>
            </tr>
			
			  <tr>
			       <td>
                              <center style="font-size:10px;">TIN</center>
            <b>  <center>'.$column['tin_num'].'  </center></b>
              </td>
			        <td>
                              <center style="font-size:10px;">SSS No.</center>
            <b>  <center>'.$column['sss_num'].'  </center></b>
              </td>
            </tr>
			
				  <tr>
		
			        <td colspan="2">
                              <center style="font-size:10px;">Address</center>
            <b>  <center>'.$column['address'].'  </center></b>
              </td>
            </tr>
			
							  <tr>
		
			        <td colspan="2">
                              <center style="font-size:10px;">in case of Emergency</center>
          <emp style="font-size:10px;">  Contact Person:</emp>&nbsp;<b>'.$column['firstname'].' &nbsp;'.$column['lastname'].'</b><br>
			              <emp style="font-size:10px;">Contact Number:</emp>&nbsp;<b>096506958254</b>
              </td>
            </tr>
			<tr>
			<td colspan="2" style="text-align:center;">
			<img src = "BCG/html/image.php?filetype=PNG&dpi=72&scale=1&rotation=0&font_family=Arial.ttf&font_size=9&height=10&text='.$column['employee_id'].'&thickness=31&start=NULL&code=BCGcode128" />
			</td>
			</tr>
			
			
			<tr>
			<td colspan="2" style="font-size:10px;text-align:center;">
			<b>This is to certify that the person whose picture and<br> signature appear hereon is an employee of gerard
			</b>
			</td>
			</tr>
			
			
						<tr>
						
			<td colspan="2" style="font-size:13px;text-align:center;">
			<br>
		
			<b>HR Manager
			</b>
			</td>
			</tr>
          </table>
	
	
	
	
  </div>
</div>

</td>



 

';
			        


						
                  }
    
      ?>

	</tr>
			  	  <!--td style="font-size:5px;">
	  <img src = 'BCG/html/image.php?filetype=PNG&dpi=72&scale=1&rotation=0&font_family=Arial.ttf&font_size=10&height=10&text='.$column['item_code'].'&thickness=50&start=NULL&code=BCGcode128' />
             </td-->
	
<!--  this is the first second phase 2 -->
		  <tr>
      <?php
	  $get_id = $_GET['id'];
	  $start=4;
	  $limit=2;
          $query = mysql_query("SELECT *, employees.id AS empid FROM employees LEFT JOIN position ON position.id=employees.position_id LEFT JOIN schedules ON schedules.id=employees.schedule_id LEFT JOIN department ON department.id=employees.department LEFT JOIN employee_status ON employee_status.id=employees.emp_status WHERE employees.resigned='1' AND employees.id='$get_id' LIMIT 2,2");                
            while($row = mysql_fetch_array($query))
              {
                $item=$row['item_category'];
				$today = date("m j, Y");
             $query11=mysql_query("select * from item_category where category_id='$item'");
             $row1=mysql_fetch_array($query11);
           echo '
				  
				  
				  <td style="width:50%;font-size:100%; ">
				  <div class="row">
  <div class="column" style="background-color:window;">
    <h4>				  
				  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/GerardSs.jpg" width="100" height="65" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>'.$row['employee_id'].'</u></h4>
    <!--p>Some text..</p-->
				  				  <br>
				  <center><img src="../images/'.$row['photo'].'" width="105" height="85" /></center>
				  <br>
				   <br>
				 <b> <center style="font-size:17px;">'.$row['firstname'].'&nbsp;'.$row['lastname'].'</center></b>
				  <u>________________________________________________________________</u>
				  				  <center style="font-size:16px;">'.$column['description'].'</center>
				  <p>
				  		  <center style="font-size:17px;">O&G Leather Mftg. Corp</center>
						  <p>
				  	  <center style="font-size:16px;">Unit 4-1 Philexcel Pampanga Park,</center>
				 				  	  <center style="font-size:16px;">Unit 4-1 Philexcel Pampanga Park,</center>
									  				  	  <center style="font-size:16px;">096506958254</center>
  
</div>
 <div class="column" style="background-color:#bbb;">

	  <table class="table table-bordered" >

            <tr style="">
              <td style="width:50%;">
                <center style="font-size:10px;">Date Employed</center>
            <b>  <center>'.$row['created_on'].'  </center></b>
			  </td>
			         <td style="width:50%;">
                    <center style="font-size:10px;">Employment Status</center>
            <b>  <center>'.$row['status'].'  </center></b>
              </td>
			  </tr>
			  <tr>
			       <td>
                              <center style="font-size:10px;">Valid Until</center>
            <b>  <center>'.$row['status'].'  </center></b>
              </td>
			        <td>
                              <center style="font-size:10px;">Birthdate</center>
            <b>  <center>'.$row['birthdate'].'  </center></b>
              </td>
            </tr>
			
			  <tr>
			       <td>
                              <center style="font-size:10px;">TIN</center>
            <b>  <center>'.$row['tin_num'].'  </center></b>
              </td>
			        <td>
                              <center style="font-size:10px;">SSS No.</center>
            <b>  <center>'.$row['sss_num'].'  </center></b>
              </td>
            </tr>
			
				  <tr>
		
			        <td colspan="2">
                              <center style="font-size:10px;">Address</center>
            <b>  <center>'.$row['address'].'  </center></b>
              </td>
            </tr>
			
							  <tr>
		
			        <td colspan="2">
                              <center style="font-size:10px;">in case of Emergency</center>
          <emp style="font-size:10px;">  Contact Person:</emp>&nbsp;<b>'.$row['firstname'].' &nbsp;'.$row['lastname'].'</b><br>
			              <emp style="font-size:10px;">Contact Number:</emp>&nbsp;<b>096506958254</b>
              </td>
            </tr>
			<tr>
			<td colspan="2" style="text-align:center;">
			<img src = "BCG/html/image.php?filetype=PNG&dpi=72&scale=1&rotation=0&font_family=Arial.ttf&font_size=9&height=10&text='.$row['employee_id'].'&thickness=31&start=NULL&code=BCGcode128" />
			</td>
			</tr>
			
			
			<tr>
			<td colspan="2" style="font-size:10px;text-align:center;">
			<b>This is to certify that the person whose picture and<br> signature appear hereon is an employee of gerard
			</b>
			</td>
			</tr>
			
			
						<tr>
						
			<td colspan="2" style="font-size:13px;text-align:center;">
		
		
			<b>HR Manager
			</b>
			</td>
			</tr>
          </table>
	
	
	
	
  </div>
</div>

</td>



 

';
			        


						
                  }
    
      ?>
	</tr>
	
		
	
	
	
	<!-- phase 3 -->
			  <tr>
      <?php
	  $get_id = $_GET['id'];
	  $start=8;
	  $limit=4;
          $query = mysql_query("select * from tb_equipment where item_category='$get_id' LIMIT $start,$limit");                
            while($column = mysql_fetch_array($query))
              {
                $item=$row['item_category'];
				$today =date("m j, Y");
             $query11=mysql_query("select * from item_category where category_id='$item'");
             $row1=mysql_fetch_array($query11);
                 echo '<td style="width:23%;font-size:100%; "><img src="GerardSs.jpg" width="50" height="61" /><span style="  position: absolute;">&nbsp;&nbsp;<emp style="font-size:12px;">'.$column['item_name'].'</emp>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '.$column['item_names'].'
<br>&nbsp;&nbsp;<emp style="font-size:12px;">'.$column['date_post'].'&nbsp;To&nbsp; '.$today.'</emp> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src = "BCG/html/image.php?filetype=PNG&dpi=72&scale=1&rotation=0&font_family=Arial.ttf&font_size=9&height=10&text='.$column['code2'].'&thickness=31&start=NULL&code=BCGcode128" /><br> <span style="bottom: 1px;">&nbsp;'.$column['item_names'].'</td>';
				                  
                  }
    
      ?>
	</tr>
	<!-- phase 4 barcode -->
	
			  <tr>
      <?php
	  $get_id = $_GET['id'];
	  $start=12;
	  $limit=4;
          $query = mysql_query("SELECT *, employees.id AS empid FROM employees LEFT JOIN position ON position.id=employees.position_id LEFT JOIN schedules ON schedules.id=employees.schedule_id LEFT JOIN department ON department.id=employees.department LEFT JOIN employee_status ON employee_status.id=employees.emp_status WHERE employees.resigned='1' AND employees.id='$get_id' LIMIT 4,2");                
            while($row = mysql_fetch_array($query))
              {
                $item=$row['item_category'];
				$today = date("m j, Y");
             $query11=mysql_query("select * from item_category where category_id='$item'");
             $row1=mysql_fetch_array($query11);
           echo '
				  
				  
				  <td style="width:50%;font-size:100%; ">
				  <div class="row">
  <div class="column" style="background-color:window;">
    <h4>				  
				  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/GerardSs.jpg" width="100" height="65" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>'.$row['employee_id'].'</u></h4>
    <!--p>Some text..</p-->
				  				  <br>
				  <center><img src="../images/'.$row['photo'].'" width="105" height="85" /></center>
				  <br>
				   <br>
				 <b> <center style="font-size:17px;">'.$row['firstname'].'&nbsp;'.$row['lastname'].'</center></b>
				  <u>________________________________________________________________</u>
				  				  <center style="font-size:16px;">'.$column['description'].'</center>
				  <p>
				  		  <center style="font-size:17px;">O&G Leather Mftg. Corp</center>
						  <p>
				  	  <center style="font-size:16px;">Unit 4-1 Philexcel Pampanga Park,</center>
				 				  	  <center style="font-size:16px;">Unit 4-1 Philexcel Pampanga Park,</center>
									  				  	  <center style="font-size:16px;">096506958254</center>
  
</div>
 <div class="column" style="background-color:#bbb;">

	  <table class="table table-bordered" >

            <tr style="">
              <td style="width:50%;">
                <center style="font-size:10px;">Date Employed</center>
            <b>  <center>'.$row['created_on'].'  </center></b>
			  </td>
			         <td style="width:50%;">
                    <center style="font-size:10px;">Employment Status</center>
            <b>  <center>'.$row['status'].'  </center></b>
              </td>
			  </tr>
			  <tr>
			       <td>
                              <center style="font-size:10px;">Valid Until</center>
            <b>  <center>'.$row['status'].'  </center></b>
              </td>
			        <td>
                              <center style="font-size:10px;">Birthdate</center>
            <b>  <center>'.$row['birthdate'].'  </center></b>
              </td>
            </tr>
			
			  <tr>
			       <td>
                              <center style="font-size:10px;">TIN</center>
            <b>  <center>'.$row['tin_num'].'  </center></b>
              </td>
			        <td>
                              <center style="font-size:10px;">SSS No.</center>
            <b>  <center>'.$row['sss_num'].'  </center></b>
              </td>
            </tr>
			
				  <tr>
		
			        <td colspan="2">
                              <center style="font-size:10px;">Address</center>
            <b>  <center>'.$row['address'].'  </center></b>
              </td>
            </tr>
			
							  <tr>
		
			        <td colspan="2">
                              <center style="font-size:10px;">in case of Emergency</center>
          <emp style="font-size:10px;">  Contact Person:</emp>&nbsp;<b>'.$row['firstname'].' &nbsp;'.$row['lastname'].'</b><br>
			              <emp style="font-size:10px;">Contact Number:</emp>&nbsp;<b>096506958254</b>
              </td>
            </tr>
			<tr>
			<td colspan="2" style="text-align:center;">
			<img src = "BCG/html/image.php?filetype=PNG&dpi=72&scale=1&rotation=0&font_family=Arial.ttf&font_size=9&height=10&text='.$row['employee_id'].'&thickness=31&start=NULL&code=BCGcode128" />
			</td>
			</tr>
			
			
			<tr>
			<td colspan="2" style="font-size:10px;text-align:center;">
			<b>This is to certify that the person whose picture and<br> signature appear hereon is an employee of gerard
			</b>
			</td>
			</tr>
			
			
						<tr>
						
			<td colspan="2" style="font-size:13px;text-align:center;">
			
			<b>HR Manager
			</b>
			</td>
			</tr>
          </table>
	
	
	
	
  </div>
</div>

</td>



 

';
			        


						
                  }
    
      ?>
	</tr>
	<!-- phase 5 of the barcode -->
			  <tr>
      <?php
	  $get_id = $_GET['id'];
	  $start=16;
	  $limit=4;
          $query = mysql_query("SELECT *, employees.id AS empid FROM employees LEFT JOIN position ON position.id=employees.position_id LEFT JOIN schedules ON schedules.id=employees.schedule_id LEFT JOIN department ON department.id=employees.department LEFT JOIN employee_status ON employee_status.id=employees.emp_status WHERE employees.resigned='1' AND employees.id='$get_id' LIMIT 6,2");                
            while($row = mysql_fetch_array($query))
              {
                $item=$row['item_category'];
				$today = date("m j, Y");
             $query11=mysql_query("select * from item_category where category_id='$item'");
             $row1=mysql_fetch_array($query11);
           echo '
				  
				  
				  <td style="width:50%;font-size:100%; ">
				  <div class="row">
  <div class="column" style="background-color:window;">
    <h4>				  
				  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/GerardSs.jpg" width="100" height="65" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>'.$row['employee_id'].'</u></h4>
    <!--p>Some text..</p-->
				  				  <br>
				  <center><img src="../images/'.$row['photo'].'" width="105" height="85" /></center>
				  <br>
				   <br>
				 <b> <center style="font-size:17px;">'.$row['firstname'].'&nbsp;'.$row['lastname'].'</center></b>
				  <u>________________________________________________________________</u>
				  				  <center style="font-size:16px;">'.$column['description'].'</center>
				  <p>
				  		  <center style="font-size:17px;">O&G Leather Mftg. Corp</center>
						  <p>
				  	  <center style="font-size:16px;">Unit 4-1 Philexcel Pampanga Park,</center>
				 				  	  <center style="font-size:16px;">Unit 4-1 Philexcel Pampanga Park,</center>
									  				  	  <center style="font-size:16px;">096506958254</center>
  
</div>
 <div class="column" style="background-color:#bbb;">

	  <table class="table table-bordered" >

            <tr style="">
              <td style="width:50%;">
                <center style="font-size:10px;">Date Employed</center>
            <b>  <center>'.$row['created_on'].'  </center></b>
			  </td>
			         <td style="width:50%;">
                    <center style="font-size:10px;">Employment Status</center>
            <b>  <center>'.$row['status'].'  </center></b>
              </td>
			  </tr>
			  <tr>
			       <td>
                              <center style="font-size:10px;">Valid Until</center>
            <b>  <center>'.$row['status'].'  </center></b>
              </td>
			        <td>
                              <center style="font-size:10px;">Birthdate</center>
            <b>  <center>'.$row['birthdate'].'  </center></b>
              </td>
            </tr>
			
			  <tr>
			       <td>
                              <center style="font-size:10px;">TIN</center>
            <b>  <center>'.$row['tin_num'].'  </center></b>
              </td>
			        <td>
                              <center style="font-size:10px;">SSS No.</center>
            <b>  <center>'.$row['sss_num'].'  </center></b>
              </td>
            </tr>
			
				  <tr>
		
			        <td colspan="2">
                              <center style="font-size:10px;">Address</center>
            <b>  <center>'.$row['address'].'  </center></b>
              </td>
            </tr>
			
							  <tr>
		
			        <td colspan="2">
                              <center style="font-size:10px;">in case of Emergency</center>
          <emp style="font-size:10px;">  Contact Person:</emp>&nbsp;<b>'.$row['firstname'].' &nbsp;'.$row['lastname'].'</b><br>
			              <emp style="font-size:10px;">Contact Number:</emp>&nbsp;<b>096506958254</b>
              </td>
            </tr>
			<tr>
			<td colspan="2" style="text-align:center;">
			<img src = "BCG/html/image.php?filetype=PNG&dpi=72&scale=1&rotation=0&font_family=Arial.ttf&font_size=9&height=10&text='.$row['employee_id'].'&thickness=31&start=NULL&code=BCGcode128" />
			</td>
			</tr>
			
			
			<tr>
			<td colspan="2" style="font-size:10px;text-align:center;">
			<b>This is to certify that the person whose picture and<br> signature appear hereon is an employee of gerard
			</b>
			</td>
			</tr>
			
			
						<tr>
						
			<td colspan="2" style="font-size:13px;text-align:center;">
			<br>
		
			<b>HR Manager
			</b>
			</td>
			</tr>
          </table>
	
	
	
	
  </div>
</div>

</td>



 

';
			        


						
                  }
    
      ?>
	</tr>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
					 
              <!--td style="width:23%;font-size:100%;">sdsd</td-->
						      
					   
					

			
				
 
               
                 
  
         <!--  echo '<td><div align="center">'.formatMoney($row['price']).'</td>';
                   echo '<td><div align="center">'.$row['status'].'</td>';
                    echo '<td><div align="center">'.$row['supplier_id'].'</td>';-->
          
          </tbody>
</table>
			  <script>
	  n =  new Date();
y = n.getFullYear();
m = n.getMonth() + 1;
d = n.getDate();
document.getElementById("date").innerHTML = m + "/" + d + "/" + y;
	  
	  
	  </script>
	  
	  			  <script>
	  n =  new Date();
y = n.getFullYear();
m = n.getMonth() + 1;
d = n.getDate();
document.getElementById("data").innerHTML = m + "/" + d + "/" + y;
	  
	  
	  </script>
                 









<!-- Dont let me down my Friend !!!--> 

          
        </div><!--/span-->


        <!--end of sidebar-->


      </div><!--/row-->


  

      <hr>

      <!--?php include('footer.php');?-->

    </div><!--/.container-->

		
		<!--- end -->
			</div>
	</div>
					  
                </div>
            </div>
         
        </div>
	
    </div>
    <!-- /#wrapper -->										 												 											
      </div>
	  
	  
	  <!-- break line starting here.. -->
	  
	  
	  
	  
	  
	  
	  
	  		
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
	  n =  new Date();
y = n.getFullYear();
m = n.getMonth() + 1;
d = n.getDate();
document.getElementById("date").innerHTML = m + "/" + d + "/" + y;
	  
	  
	  </script>
		
		
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
		
    </body>
</html>


