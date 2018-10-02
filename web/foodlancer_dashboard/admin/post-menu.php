<?php
//session_start();
//error_reporting(0);
//include('includes/config.php');
//if(strlen($_SESSION['alogin'])==0)
//	{	
//header('location:index.php');
//}
//else{ 

//if(isset($_POST['submit']))
//  {


//}


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
									<div class="panel-heading">Basic Info</div>
<!--<div class="errorWrap"><strong>ERROR</strong>: </div>
		<div class="succWrap"><strong>SUCCESS</strong>:<?php //echo htmlentities($msg ?> </div> -->
				<div class="panel-body">

					<form method="post" action="add_chef.php" class="form-horizontal" enctype="multipart/form-data">
						<div class="form-group">
							<label class="col-md-2 control-label">Your Id</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-user"></i>
									</span>
									<input type="text" name="id" class="form-control1" id="exampleInputPassword1" placeholder="Enter Chef Name" required="">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Your Kitchen Id</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-user"></i>
									</span>
									<input type="text" name="id" class="form-control1" id="exampleInputPassword1" placeholder="Enter Chef Name" required="">
								</div>
							</div>
						</div>

	<div class="form-group">
							<label class="col-md-2 control-label">Dish Name</label>
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
							<label class="col-md-2 control-label">Menu Category</label>
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
							<label class="col-md-2 control-label">Price</label>
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
							<label class="col-md-2 control-label">Service</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-book"></i>
									</span>
									<input type="text" class="form-control1" name="address" id="confirmpassword" placeholder="Enter Chef's Address" required="">
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
<?php //} ?>