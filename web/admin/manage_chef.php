<?php
//session start
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
<title>MyCuisine | Manage Chef</title>
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

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
  	<form action="" method="" enctype="multipart/form-data">
  	<center><h3>All Registered Chefs</h3> </center>
<table class="table table-striped table-hover table-bordered" align="center">
	<tr>
		<th>S.NO</th>
		<th>Chef Name</th>
		<th>Chef City</th>
		<th>Chef Contact No</th>
		<th>Chef Address</th>
		<th>Chef Image</th>
		<th>Edit</th>
		<th>Delete</th>
		
	</tr>

	<?php 

	    $query = "select *from chef ";
	    $run= mysqli_query($con,$query);
	    //for ssrial
	    $i=0;

	    while ($row=mysqli_fetch_array($run)) {
	    	$chef_id=$row['chef_id'];
	    	$chef_name=$row['chef_name'];
	    	$chef_city=$row['chef_city'];
	    	$chef_contact=$row['chef_contact'];
	    	$chef_address=$row['chef_address'];
	    	$img=$row['chef_image'];

	    	$i++;
	    	
	    	echo "
	    	<tr align='center'>
	    	<td>$i</td>
	    	<td>$chef_name</td>
	    	<td>$chef_city</td>
	    	<td>$chef_contact</td>
	    	<td>$chef_address</td>
	    	<td>$img</td>
	    	<td><a href='edit_chef.php?chef_id=$chef_id'>Edit</a></td>
	    	<td><a href='delete_chef.php?chef_id=$chef_id'>Delete</a></td>
	    	</tr>

	    	";
	    
	    }
	?>

	
</table>
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