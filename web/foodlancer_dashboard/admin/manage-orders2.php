<?php
session_start();
//error_reporting(0);
include('includes/db.php');
if(strlen($_SESSION['flname'])==0)
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
	
	<title>FOOdlancer Dashboard |Admin</title>

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

						<h2 class="page-title">Foodlancer Requests</h2>

						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">FoodLancer Information</div>
							<div class="panel-body">
							<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?> 
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
										        <th>Order ID</th>
												<th>Customer Name</th>
												<th>Cus ID</th>
												<th>Item Name</th>	
													<th>Due Amount</th>	
												<th>Quantity</th>
											    <th>Invoice No:</th>
											     <th>Status</th>
											      <th>Action</th>
											
										</tr>
									</thead>
									<tfoot>
										<tr>
										
										        <th>Order ID</th>
												<th>Customer Name</th>
												<th>Cus ID</th>
												<th>Item Name</th>	
												<th>Due Amount</th>
												<th>Quantity</th>
											    <th>Invoice No:</th>
											     <th>Status</th>
											      <th>Action</th>
										</tr>
										
									</tfoot>
									<tbody>
										<?php
										$name=$_SESSION['flname'];
										$query ="select * from fl_info where fl_email='$name' ";
										$run=mysqli_query($con,$query);

	                                    $row=mysqli_fetch_array($run);

		                                $fid      =$row['id'];

										

									$sql = "SELECT * from  customer_orders where fl_id='$fid'";

$queryy = $dbh -> prepare($sql);
$queryy->execute();
$results=$queryy->fetchAll(PDO::FETCH_OBJ);
//$cnt=1;
//$status='0';
if($queryy->rowCount() > 0)
{
foreach($results as $result)
{				?>	
										<tr>
											<td><?php echo htmlentities($result->order_id);?></td>
											<td><?php echo htmlentities($result->c_name);?></td>
											<td><?php echo htmlentities($result->c_id);?></td>
											<td><?php echo htmlentities($result->item_name);?></td>
											<td><?php echo htmlentities($result->due_amount);?></td>
											
											<td><?php echo htmlentities($result->total_fooditems);?></td>
											
										    <td><?php echo htmlentities($result->invoice_no);?></td> 
										</tr>
											<?php }}?>
											
											


								

								


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
<?php } ?>
