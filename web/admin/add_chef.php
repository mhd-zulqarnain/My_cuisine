<?php
//session start
session_start();
include('includes/db.php');
if(strlen($_SESSION["email"])==0)
	{	
header('location:index.php');
}
else{
//Code for adding chef
	$email=$_SESSION["email"];
if(isset($_POST['submit'])) {
	
	$name =$_POST['name'];
	$city =$_POST['city'];
	$contact =$_POST['contact'];
	$address =$_POST['address'];

	$img =$_FILES['img']['name'];
	$tmp_name=$_FILES['img']['tmp_name'];

	//uploading images to its folder
		move_uploaded_file($tmp_name, "chef_images/$img");

	$query="INSERT INTO chef (chef_name,chef_city,chef_contact,chef_address,chef_image) values ('$name','$city','$contact','$address','$img')";
	$run=mysqli_query($con, $query);

	if ($run) {

		echo "<script>alert('Chef inserted successfully!')</script>";
	}
    else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
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
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a><i class="fa fa-angle-right"></i>Chef <i class="fa fa-angle-right"></i>Add</li>
            </ol>
		<!--grid-->
 	<div class="grid-form">

  <div class="grid-form1">

  	        	
  <div class="panel-body">
  	
					<form method="post" action="add_chef.php" class="form-horizontal" enctype="multipart/form-data">
                        <h2>ADD CHEF</h2>
						<div class="form-group">
							<label class="col-md-2 control-label">Chef Name</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-user"></i>
									</span>
									<input type="text" name="name" class="form-control1" id="exampleInputPassword1" placeholder="Enter Chef Name" required="">
								</div>
							</div>
						</div>

	<div class="form-group">
							<label class="col-md-2 control-label">Chef City</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-pencil"></i>
									</span>
									<input type="text" class="form-control1" name="city" placeholder="Enter Chef's City Name" required="">
								</div>
							</div>
						</div>

	<div class="form-group">
							<label class="col-md-2 control-label">Chef Contact</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-phone-square"></i>
									</span>
									<input type="text" class="form-control1" name="contact" id="confirmpassword" placeholder="Enter Chefs Contact" required="">
								</div>
							</div>
						</div>
	<div class="form-group">
							<label class="col-md-2 control-label">Chef Address</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-book"></i>
									</span>
									<input type="text" class="form-control1" name="address" id="confirmpassword" placeholder="Enter Chef's Address" required="">
								</div>
							</div>
						</div>
	<div class="form-group">
							<label class="col-md-2 control-label">Chef Image</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-image"></i>
									</span>
									 <input type="file" name="img" required="">
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