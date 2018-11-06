<?php
session_start();
error_reporting(0);
include('includes/db.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{

if(isset($_POST['submit']))
{
$id=$_GET['id'];

$name=$_POST['fl_name'];
$email=$_POST['fl_email'];
$stp1=$_POST['form_fill'];
$stp2=$_POST['k_snaps'];
$stp3=$_POST['f_test'];
$stp_final=$_POST['qfy'];


//$sql="insert into  fl_process set id='$id', name='$name', email='$email', form_fill='$stp1', kitchen_snaps='$stp2', food_test='$stp3', qualified='$stp_final'";
$sql="insert into  fl_process (id,name,email,form_fill,kitchen_snaps,food_test,qualified) values('$id','$name','$email','$stp1','$stp2','$stp3','$stp_final')";
$run =mysqli_query($con,$sql);
$msg="Record updated successfully";
} 
?>

<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>My Cuisine | QA Admin </title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">
  <style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>


</head>

<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
	<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Update Information</h2>

						<div class="row">
							<div class="col-md-10">
								<div class="panel panel-default">
									<div class="panel-heading">Foodlancer Processing Information</div>
									<div class="panel-body">
		<form method="post" class="form-horizontal" >
										
											
  	        	 <?php 
				if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?> 

<?php	
$id=$_GET['id'];
$query="select * from fl_info where id='$id'";
$run=mysqli_query($con,$query);
$row=mysqli_fetch_array($run);
       
		$flname     =$row['fl_name'];
		$flemail    =$row['fl_email'];

?>


<?php 
if(isset($_GET['id'])){
$id=$_GET['id'];
$ret="select * from fl_process where id='$id'";
$run =mysqli_query($con,$ret);

$row=mysqli_fetch_array($run);
       
		$name     =$row['name'];
		$email    =$row['email'];
		$f_fill   =$row['form_fill'];
		$k_snaps  =$row['kitchen_snaps'];
		$f_test   =$row['food_test'];
		$qualify  =$row['qualified'];


	}	
?>

											<!-- <div class="form-group">
												<label class="col-sm-4 control-label">Name</label>
												<div class="col-sm-8">
													<input type="text" class="form-control" value="<?php echo htmlentities($result->fl_Name);?>" name="fl_name" id="name" required>
												</div>
											</div> -->
<div class="form-group">
	 <input type="hidden" name="fl_name" class="form-control" value="<?php echo $flname ;?>"/>
	  <input type="hidden" name="fl_email" class="form-control" value="<?php echo $flemail ;?>"/>

<div class="col-sm-3">
<?php if($f_fill==1)
{?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="form_fill" checked value="1">
<label for="inlineCheckbox1"> Form Filling </label>
</div>
<?php } else { ?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="form_fill" value="1">
<label for="inlineCheckbox1"> Form Filling </label>
</div>
<?php } ?>
</div>

<div class="col-sm-3">
<?php if($k_snaps==1)
{?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="k_snaps" checked value="1">
<label for="inlineCheckbox1">Kitchen snaps  </label>
</div>
<?php } else { ?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="k_snaps" value="1">
<label for="inlineCheckbox1">Kitchen snaps  </label>
</div>
<?php } ?>
</div>

<div class="col-sm-3">
<?php if($f_test==1)
{?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="f_test" checked value="1">
<label for="inlineCheckbox1">Food Test  </label>
</div>
<?php } else { ?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="f_test" value="1">
<label for="inlineCheckbox1">Food Test  </label>
</div>
<?php } ?>
</div>

<div class="col-sm-3">
<?php if($qualify==1)
{?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="qfy" checked value="1">
<label for="inlineCheckbox1">Approved  </label>
</div>
<?php } else { ?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="qfy" value="1">
<label for="inlineCheckbox1">Approved ?</label>
</div>
<?php } ?>
</div>






</div>


											<div class="hr-dashed"></div>
											
										
								
											
											<div class="form-group">
												<div class="col-sm-8 col-sm-offset-4">
								
													<button class="btn btn-primary" name="submit" type="submit">Submit</button>
												</div>
											</div>

										</form>

									</div>
								</div>
							</div>
							
						</div>
						
					

					</div>
				</div>
				
			
			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

</body>

</html>
<?php } ?>