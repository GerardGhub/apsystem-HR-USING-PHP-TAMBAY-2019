



<head>
<style>
input:hover{
	background-color:lightblue;
}
</style>
</head>







<div class="left-sidebar bg-black-300 box-shadow ">
                        <div class="sidebar-content">
						
						
						
						
						
						

							<div class="user-info closed">
							


						
								
							
	
					<p style="text-align:center;"><img class="img-circle" src="../item_images/<?php echo $_SESSION['sess_user_image'];?>" height="100" width="180" /></p>
                                                     <h6 class="title"><?php echo $_SESSION['sess_fname'];?>&nbsp;<?php echo $_SESSION['sess_lastname'];?></h6> 
                                <small class="info">O&G Leather Mftg Corp</small>
		
		
		
		
                            </div>
							
							
							
							
							
                            <!-- /.user-info -->

                            <div class="sidebar-nav">
                                <ul class="side-nav color-gray">
                                    <li class="nav-header">
                                        <span class="">Main Category</span>
                                    </li>
                                    <li style="font-sizer:20px;">
                                      <li>  <a href="managefinance.php" style="font-size:17px; background-color:brown; border-radius:20px;"><i class="fa fa-dashboard"></i> <span>&nbsp;&nbsp;Main Dashboard</span> </a></li>
									  
		
                                 
								
						
									

</div>


</div>


</div>

                                                 
                                                 

















<?php
date_default_timezone_set("Asia/Singapore");
//echo date_default_timezone_get();  // echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
?>


<?php
$conn=new PDO('mysql:host=localhost; dbname=aa2000', 'root', '') or die(mysql_error());
if(isset($_POST['submitlaarnie'])!=""){
  $name=$_FILES['photo']['name'];
  $size=$_FILES['photo']['size'];
  $type=$_FILES['photo']['type'];
  $temp=$_FILES['photo']['tmp_name'];
  $date = date('Y-m-d H:i:s');
  $upload_by=$_POST['upload_by'];
  $department=$_POST['department'];
  $caption1=$_POST['caption'];
  $link=$_POST['link'];
  $department =$_SESSION['department'];
  
  move_uploaded_file($temp,"../item_images/".$name);

$query=$conn->query("INSERT INTO filemgrhr (item_image,item_date,upload_by,department) VALUES ('$name','$date','$upload_by','$department')");
if($query){
	
 echo "<script>window.open('allsharedfiles.php','_self')</script>";

}
else{
die(mysql_error());
}
}
?>



<!--link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen"-->






		
		
		
		
		
		