<?php
session_start();
//error_reporting(0);
include('includes/db.php');
if(strlen($_SESSION['flname'])==0)
	{	
header('location:index.php');
}
else{ 

if(isset($_POST['submit']))
 {
  $fl_id    =$_POST['fl_id'];
	$fl_kname =$_POST['fl_k_name'];
	$d_name   =$_POST['pkg_name'];
	$menu_cat =$_POST['menu_cat'];
	$meals    = $_POST['meals'];
	$price    = $_POST['price'];


	$query="INSERT INTO food_items (fl_id,kitchen_name,f_title,category,servings,f_price) values ('$fl_id','$fl_kname','$d_name','$menu_cat','$meals','$price')";
	$run=mysqli_query($con, $query);

	if ($run) {

		echo "<script>alert('Food Item inserted successfully!')</script>";
	}
    else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
   }		
	

}

//getting fl_information
$fl_name=$_SESSION['flname'];
 	$query ="select * from fl_info where fl_email='$fl_name'";
	$run=mysqli_query($con,$query);

	$row=mysqli_fetch_array($run);

		$fid      =$row['id'];
		$kname    =$row['fl_kitchen_name'];

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
	
	<title>My Cuisine | Admin Post Menu</title>

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
					
						<h2 class="page-title">Post A Menu</h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Weekly Trial Menu</div>
<!--<div class="errorWrap"><strong>ERROR</strong>: </div>
		<div class="succWrap"><strong>SUCCESS</strong>:<?php //echo htmlentities($msg ?> </div> -->
				<div class="panel-body">

					<form method="post" action="" class="form-horizontal">
						<div class="form-group">
							<label class="col-md-2 control-label">Your Id</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-book"></i>
									</span>
							        <select name="fl_id">
					<option value="<?php echo $fid;?>"><?php echo $fid;?></option>
					
				</select>
    
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Your Kitchen Name</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-book"></i>
									</span>
							        <select name="fl_k_name">
					<option value="<?php echo $kname;?>"><?php echo $kname;?></option>
					
				</select>
    
								</div>
							</div>
						</div>
			<div class="form-group">
							<label class="col-md-2 control-label">Package Name</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-book"></i>
									</span>
							        <select name="pkg_name" >
					<option value="">Select Category</option>
					<option>Weekly Trial</option>
					<option>Student Weekly Trial </option>					
				</select>
    
								</div>
			</div>
	</div>	
	
	<div class="form-group">
							<label class="col-md-2 control-label">Menu Category</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-book"></i>
									</span>
							        <select name="menu_cat" >
					<option value="">Select Category</option>
					<option>Weekly Trial Menu</option>	
								
				</select>
    
								</div>
							</div>
	</div>

	<div class="form-group">
							<label class="col-md-2 control-label">Meals</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-book"></i>
									</span>
									<input type="text" class="form-control1" name="meals" placeholder="Enter No of Meals" required="">
								</div>
							</div>
						</div>

	
	<div class="form-group">
							<label class="col-md-2 control-label">Price</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-book"></i>
									</span>
									<input type="text" class="form-control1" name="price" placeholder="Enter Price" required="">
								</div>
							</div>
						</div>
						<!--<div class="form-group">
							<label class="col-md-2 control-label">Services Pick Up or Delivery?</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-book"></i>
									</span>
							
    <select  name="service_pro">
      <option >Delivry & Pickup</option>
      <option >Delivery Only</option>
      <option >Pickup Only</option>
      <option >Delivery / Pickup /Dinein</option>
      <option >Delivery & Dinein</option>
      <option >Pickup & Dinein</option>
      <option >Dinein Only</option>
    </select>
								</div>
							</div>
						</div> -->
	

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