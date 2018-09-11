<?php
//session start
//
session_start();
include('includes/db.php');
if(strlen($_SESSION["email"])==0)
	{	
header('location:index.php');
}
else{	

?>
<!DOCTYPE HTML>
<html>
<head>
<title>MyCuisine | Delete Chef</title>

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
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a><i class="fa fa-angle-right"></i>Chef <i class="fa fa-angle-right"></i>Delete Chef</li>
            </ol>
		<!--grid-->
 	<div class="grid-form">

  <div class="grid-form1">

  	     <!--delete chef  -->  	
  <div class="panel-body">

  <form action="" method="post">
	<table align="center" width="600">
		<tr>
			<td align="center" colspan="2"><h2><b>Delete Chef Here</b></h2></td>
		</tr>
		
		<tr>
			<td align="center">
				<input type="submit" name="yes" value=" I Want to Delete Chef">
				<input type="submit" name="no" value="No I Dont Want to Delete Chef">
				
			</td>
		</tr>
	</table>
</form>
<?php

if (isset($_POST['yes'])) {
	$chef_id=$_GET['chef_id'];
	
	$query="delete from chef where chef_id='$chef_id'";
	$run=mysqli_query($con,$query);

	if($run){
		echo "<script>alert('Chef Hass Been Deleted Successfully!')</script>";
		echo "<script>window.open('manage_chef.php','_self')</script>";
	}
}

	if (isset($_POST['no'])) {

		echo "<script>window.open('manage_chef.php','_self')</script>";

	}

?>

	
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