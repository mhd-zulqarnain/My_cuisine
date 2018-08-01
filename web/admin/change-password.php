<?php
session_start();
include('includes/db.php');
if(strlen($_SESSION["email"])==0)
	{	
header('location:index.php');
}
else{
//Code for change password	
	$email=$_SESSION["email"];
if(isset($_POST['submit'])) {
	
	$currentpassword =$_POST['password'];
	$newpassword =$_POST['newpassword'];
	$confirmpassword =$_POST['confirmpassword'];

	$query="select * from admin where password='$currentpassword' and email='$email'";
	$run=mysqli_query($con, $query);

	$check_pass=mysqli_num_rows($run);

       if ($check_pass==0) {
       
		echo "<script>alert('Your current password is invalid..try again')</script>";
		exit();
	}
	if ($newpassword !== $confirmpassword) {

       $message = 'New Password and Confirm Password not matched';
       // echo ("New Password didn't match ,try again");
       echo "<script>alert('$message')</script>";
        exit();
		
	}

	else{
		$query2 ="update admin set password='$newpassword' where email='$email'";
		$run2 =mysqli_query($con ,$query2);

		   echo "<script>alert('Password has been upadted successfully..')</script>";
		   echo "<script>window.open('dashboard.php','_self')</script>";
		}

	}
?>

<!DOCTYPE HTML>
<html>
<head>
<title>TMS | Admin Change Password</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery-2.1.4.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
              <!--header start here-->
<?php include('includes/header.php');?>
							
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
	<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a><i class="fa fa-angle-right"></i>Profile <i class="fa fa-angle-right"></i> Change Password</li>
            </ol>
		<!--grid-->
 	<div class="grid-form">

  <div class="grid-form1">

  	        	
  <div class="panel-body">
					<form action="change-password.php" method="post" action="" class="form-horizontal">

						<div class="form-group">
							<label class="col-md-2 control-label">Current Password</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-key"></i>
									</span>
									<input type="password" name="password" class="form-control1" id="exampleInputPassword1" placeholder="Current Password" required="">
								</div>
							</div>
						</div>

	<div class="form-group">
							<label class="col-md-2 control-label">New Password</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-key"></i>
									</span>
									<input type="password" class="form-control1" name="newpassword" id="newpassword" placeholder="New Password" required="">
								</div>
							</div>
						</div>

	<div class="form-group">
							<label class="col-md-2 control-label">Confirm Password</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-key"></i>
									</span>
									<input type="password" class="form-control1" name="confirmpassword" id="confirmpassword" placeholder="Confrim Password" required="">
								</div>
							</div>
						</div>

						<div class="col-sm-8 col-sm-offset-2">
				<button type="submit" name="submit" class="btn-primary btn">Submit</button>
				<button type="reset" class="btn-inverse btn">Reset</button>
			</div>
		</div>
			
					</form>
	</div>
</div>
</div>
</div>
 	<!--//grid-->
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->

</div>
</div>
  <!--//content-inner-->
  <!--/sidebar-menu-->
		                      <?php include('includes/sidebarmenu.php');?>
							  <div class="clearfix"></div>		
							</div>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<script src="js/bootstrap.min.js"></script>
   
</body>
</html>
<?php } ?>