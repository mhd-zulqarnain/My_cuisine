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
<title>MyCuisine | Edit Chef</title>


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

  	     <!--edit chef detils -->  	
  <div class="panel-body">
  	<?php
    
    if(isset($_GET['chef_id'])){

	$chef_id=$_GET['chef_id'];

	$query2 ="select * from chef where chef_id='$chef_id'";
	$run2=mysqli_query($con,$query2);

	$row=mysqli_fetch_array($run2);
       
		$name     =$row['chef_name'];
		$city     =$row['chef_city'];
		$contact  =$row['chef_contact'];
		$address  =$row['chef_address'];
		$img  =$row['chef_image'];
}

?>
	<center>
<form action="" method="post" enctype="multipart/form-data">
	<center><h2>Update Chef Details</h2> </center>
	<table class="table table-striped table-hover table-bordered" align="center">
	
		<tr>
			<td>Chef Id: &nbsp;</td>
			<td><input type="text" name="c_id"  disabled value="<?php echo $chef_id;?>"></td>
		</tr>

		<tr>
			<td>Chef Name:&nbsp;</td>
			<td><input type="text" name="c_name" value="<?php echo $name;?>"></td>
		</tr>

		<tr>
			<td>Chef City:&nbsp;</td>
			<td><input type="text" name="c_city" value="<?php echo $city;?>"></td>
		</tr>

		<tr>
			<td>Chef Phone No:&nbsp;</td>
			<td><input type="text" name="c_contact" value="<?php echo $contact;?>"></td>
		</tr>

		<tr>
			<td>Chef Address:&nbsp;</td>
			<td><input type="text" name="c_address" value="<?php echo $address;?>"></td>
		</tr>

		<tr>
			<td>Chef Image:&nbsp;</td>
			<td><input type="file" name="c_image" size="80"><img src="chef_images/<?php echo $img;?>" width="70" height="70"</td>
		</tr>

		<tr>
			<td align="center" colspan="5"><input type="submit" name="update" value="Update"></td>
		</tr>
	</table>

</form>
</center>
</div>
<!--- after getting the records in table now update the record-->
<?php
if (isset($_POST['update'])) {

	$c_name=$_POST['c_name'];
	$c_city=$_POST['c_city'];
	$c_contact=$_POST['c_contact'];
	$c_address=$_POST['c_address'];
	$img=$_FILES['c_image']['name'];
	$img_tmp=$_FILES['c_image']['tmp_name'];
	move_uploaded_file($img_tmp,"chef_images/$img");


	$update="update chef set chef_name='$c_name', chef_city='$c_city',chef_contact='$c_contact', chef_address='$c_address', chef_image='$img' where chef_id='$chef_id'";
    $run_=mysqli_query($con,$update);

    if($run_){
    	echo "<script>alert('Chef Details has been updated successfully!')</script>";

    }


}

?>

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