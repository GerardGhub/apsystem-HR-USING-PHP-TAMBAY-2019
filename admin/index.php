<?php
  session_start();
  if(isset($_SESSION['admin'])){
    header('location:home.php');
  }
?>
<head>
<style>
body{
	overflow:hidden;
	
}


</style>

  			<link rel="shortcut icon" href="includes/enma.jpg" type="image/x-icon"/>
</head>

<?php include 'includes/header.php'; ?>

<body background="bgimage.jpg" style="overflow:hidden;">
<!--center-->
<div class="login-box" style="border-radius:20px;">
  	<!--div class="login-logo">
  		<b>Admin Login</b>
  	</div-->
  
  	<div class="login-box-body" style="background-color:window; border-radius:10px; width:500px;height:320px;">
	<emp style="color:black;font-size:20px;">
	<img src="includes/enma.jpg" height="60" width="80"> HR MANAGEMENT AND PAYROLL SYSTEM</img>
</emp>    
	<p class="login-box-msg">Welcome sign in with your credentials</p>

    	<form action="login.php" method="POST">
      		<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="login" style="width:465px;border-radius:20px"><i class="fa fa-sign-in"></i> Login In</button>
        		</div>
      		</div>
    	</form>
  	</div>
  	<?php
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['error']."</p> 
			  	</div>
  			";
  			unset($_SESSION['error']);
  		}
  	?>
</div>

<?php include 'includes/scripts.php' ?>
</body>
</html>