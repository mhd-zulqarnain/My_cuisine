
<?php
//session start
session_start();
include('includes/db.php');
if(strlen($_SESSION["email"])==0)
	{	
header('location:index.php');
}
else{
if(isset($_REQUEST['a_id']))
   {
$aid=$_GET['a_id'];
$status="1";
$sql = "UPDATE feedback_table SET status='$status' WHERE  c_id='$aid'";
$run= mysqli_query($con,$sql);

if($run){
 echo"<script>alert('Testimonial Successfully Active');</script>";
}
}

if(isset($_REQUEST['i_id']))
	{
$iid=$_GET['i_id'];
$status="0";

$sql = "UPDATE feedback_table SET status='$status' WHERE  c_id='$iid'";
$run= mysqli_query($con,$sql);

if($run){
echo "<script>alert('Testimonial Successfully Inactive');</script>";
}
}


?>
<!DOCTYPE HTML>
<html>
<head>
<title>MyCuisine | Manage Testimonial</title>
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
  <style type="text/css">
   	.disabled {
    if you also want it to fade a bit:  
       opacity: 0.5
   
    pointer-events: none;
    cursor: default;
}  

  </style>
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
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a><i class="fa fa-angle-right"></i>Manage Testimonial</li>
            </ol>
		<!--grid-->
 	<div class="grid-form">

  <div class="grid-form1">

  	        	
  <div class="panel-body">
  	<form action="" method="">
  	<center><h3>All Testimonials</h3> </center>
<table class="table table-striped table-hover table-bordered" align="center">
	<thead>
	<tr>
		<th>S.NO</th>
		<th>User Id</th>
		<th>Name</th>
		<th>Email</th>
		<th>Testimonial</th>
		<th>Date</th>
		<th>Action</th>
	</tr>
	</thead>
	<tfoot>
		<tr>
		<th>S.NO</th>
		<th>User Id</th>
		<th>Name</th>
		<th>Email</th>
		<th>Testimonial</th>
		<th>Date</th>
		<th>Action</th>
	</tr>
	</tfoot>
<tbody>
	<?php 

	    $query = "select *from feedback_table";
	    $run= mysqli_query($con,$query);
	    //for ssrial
	    $i=0;

	    while ($row=mysqli_fetch_array($run)) 
	    	{
	 
	    	$user_id=$row['c_id'];
	    	$c_name=$row['username'];
	    	$c_email=$row['Useremail'];
	    	$msg =$row['message'];
	    	$date=$row['posting_date'];
	    	$status=$row['status'];

	    	$i++;
            echo "
	    	<tr align='center'>
	    	<td>$i</td>
	    	<td>$user_id</td>
	    	<td>$c_name</td>
	    	<td>$c_email</td>
	    	<td>$msg</td>
	    	<td>$date</td>
	    	<td>
	    	<a href='manage_testimonial.php?a_id=$user_id'>Inactive</a><br>
	    	<a href='manage_testimonial.php?i_id=$user_id'>Active</a>
	    	</td>
	    	</tr>

	    	";
	    }

	   ?>

</tbody>
</table>
</form>
	</div>
	<div styel='height:30px;'></div>

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