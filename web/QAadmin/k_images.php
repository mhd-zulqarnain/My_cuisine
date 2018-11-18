<?php
session_start();
error_reporting(0);
include('includes/config.php');
include('includes/fl_form2.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{



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
	
	<title>QA  |Admin</title>

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
.row > .column {
  padding: 0 4px;
  margin-left: 10px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width:30%;
}
/* Style the list */
ul.breadcrumb {
    padding: 10px 16px;
    list-style: none;
    background-color: #eee;
}

/* Display list items side by side */
ul.breadcrumb li {
    display: inline;
    font-size: 18px;
}

/* Add a slash symbol (/) before/behind each list item */
ul.breadcrumb li+li:before {
    padding: 8px;
    color: black;
    content: "/\00a0";
}

/* Add a color to all links inside the list */
ul.breadcrumb li a {
    color: #0275d8;
    text-decoration: none;
}

/* Add a color on mouse-over */
ul.breadcrumb li a:hover {
    color: #01447e;
    text-decoration: none;
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

						<h2 class="page-title">Foodlancer Kitchen Images</h2>
						<ul class="breadcrumb">
  <li><a href="dashboard.php">Home</a></li>
  <li><a href="manage-request.php">Manage Requests</a></li>
  <li>kItchen Imges</li>
 </ul>
						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">Kitchen Images</div>
							<div class="panel-body" style="margin-top: 20px">
							<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>


								<?php
								if (isset($_GET['email'])) {
									$email=$_GET['email'];
								 $sql = "SELECT * from  fl_info where fl_email ='$email'";
								 $run=mysqli_query($con,$sql);

	$row=mysqli_fetch_array($run);
       
		$img1  =$row['img1'];
		$img2  =$row['img2'];
		$img3  =$row['img3'];
								 

}
?>
 <div class="row">
		<div class="column"><img id="myImg1" src="../kitchen_images/<?php echo htmlentities($img1);?>" style="width:100% ;height: 300px"  onclick="openModal();currentSlide(1)" class="hover-shadow cursor" ></div>
		<div class="column"><img id="myImg2" src="../kitchen_images/<?php echo htmlentities($img2);?>" style="width:100%; height: 300px" onclick="openModal();currentSlide(2)" class="hover-shadow cursor"></div>
		<div class="column"><img id="myImg3" src="../kitchen_images/<?php echo htmlentities($img3);?>" style="width:100%;height: 300px" onclick="openModal();currentSlide(3)" class="hover-shadow cursor"></div>
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

<!--image modal -->



<!-- //image modal -->
</body>
</html>
<?php } ?>
