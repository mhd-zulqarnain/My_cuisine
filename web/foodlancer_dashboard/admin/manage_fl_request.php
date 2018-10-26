<?php
include("includes/db.php");
//session_start();
//error_reporting(0);
//if(strlen($_SESSION['flname'])==0)
//	{	
//header('location:index.php');
//}
//else{
/*if(isset($_REQUEST['eid']))
	{
$eid=intval($_GET['eid']);
$status="2";
$sql = "UPDATE tblbooking SET Status=:status WHERE  id=:eid";
$query = $dbh->prepare($sql);
$query -> bindParam(':status',$status, PDO::PARAM_STR);
$query-> bindParam(':eid',$eid, PDO::PARAM_STR);
$query -> execute();

$msg="Booking Successfully Cancelled";
} */


if(isset($_GET['a_email']))
	{
$email=$_GET['a_email'];
$status=1;

$sql = "UPDATE fl_login SET status='$status' WHERE  email='$email'";
$run=mysqli_query($con,$sql);
//$msg="Foodlancer  Successfully Approved";
echo "<script>alert('Foodlancer  Successfully Approved')</script>";
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
	
	<title>My CUISINE | FOOD LANCER REQUEST   </title>

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

						<h2 class="page-title">FOOD LANCER REQUEST</h2>

						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">FOOD LANCER REQUEST</div>
							<div class="panel-body">
						<!--<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php //echo htmlentities($error); ?> </div><?php }  
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php //echo htmlentities($msg); ?> </div><?php }?> -->
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
										<th>S.NO</th>
											<th>Name</th>
											<th>Email</th>
											<th>Kitchen Name</th>
											<th>Contact No</th>
											<th>Address</th>
											<th>Service</th>
											
											<th>Action</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
										<th>S.NO</th>
										    <th>Name</th>
											<th>Email</th>
											<th>Kitchen Name</th>
											<th>Contact No</th>
											<th>Address</th>
											<th>Service</th>
										  
											<th>Action</th>
											
										</tr>
									</tfoot>
									<tbody>

										<?php 

	    $query = "select *from fl_info";
	    $run= mysqli_query($con,$query);
	    //for ssrial
	    $i=0;

	    while ($row=mysqli_fetch_array($run)) 
	    	{
	 
	    	$id=$row['id'];
	    	$name=$row['fl_name'];
	    	$email=$row['fl_email'];
	    	$kname=$row['fl_kitchen_name'];
	    	$contact=$row['fl_contact'];
	    	$address=$row['fl_address'];
	    	$service=$row['fl_service'];

	    	$i++;
            echo "
	    	<tr align='center'>
	    	<td>$i</td>
	    	<td>$name</td>
	    	<td>$email</td>
	    	<td>$kname</td>
	    	<td>$contact</td>
	    	<td>$address</td>
	    	<td>$service</td>
	    	<td><a href='manage_fl_request.php?a_email=$email'>Approved</a></td>
	    	</tr>

	    	";
	    }

	   ?>

									<!-- <?php /*$sql = "SELECT tblusers.FullName,tblbrands.BrandName,tblvehicles.VehiclesTitle,tblbooking.FromDate,tblbooking.ToDate,tblbooking.message,tblbooking.VehicleId as vid,tblbooking.Status,tblbooking.PostingDate,tblbooking.id  from tblbooking join tblvehicles on tblvehicles.id=tblbooking.VehicleId join tblusers on tblusers.EmailId=tblbooking.userEmail join tblbrands on tblvehicles.VehiclesBrand=tblbrands.id  ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{				*/?>	 -->
									<!--	<tr>
											<td><? //php echo htmlentities($cnt);?></td>
											<td><?php //echo htmlentities($result->FullName);?></td>
											<td><a href="edit-vehicle.php?id=<?php //echo htmlentities($result->vid);?>"><?php //echo htmlentities($result->BrandName);?> , <?php //echo htmlentities($result->VehiclesTitle);?></td>
											<td><?php //echo htmlentities($result->FromDate);?></td>
											<td><?php //echo htmlentities($result->ToDate);?></td>
											<td><?php //echo htmlentities($result->message);?></td>
											<td><?php /*
if($result->Status==0)
{
echo htmlentities('Not Confirmed yet');
} else if ($result->Status==1) {
echo htmlentities('Confirmed');
}
 else{
 	echo htmlentities('Cancelled');
 }
										*/?></td>
											<td><?php// echo htmlentities($result->PostingDate);?></td>
										<td><a href="manage-bookings.php?aeid=<?php //echo htmlentities($result->id);?>" onclick="return confirm('Do you really want to Confirm this booking')"> Confirm</a> /


<a href="manage-bookings.php?eid=<?php //echo htmlentities($result->id);?>" onclick="return confirm('Do you really want to Cancel this Booking')"> Cancel</a>
</td>

										</tr> -->
										<?php// $cnt=$cnt+1; }} ?>
										
									</tbody>
								</table>

						

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
