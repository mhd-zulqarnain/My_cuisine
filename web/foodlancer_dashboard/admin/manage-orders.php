<?php
session_start();
error_reporting(0);
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

						<h2 class="page-title">Order Details</h2>

						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">Order Details</div>
							<div class="panel-body">
							<!--<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>  -->
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
											    <th>Order Date</th>
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
											     <th>Order Date</th>
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

	    $query2 = "select *from customer_orders where fl_id='$fid'";
	    $run= mysqli_query($con,$query2);
	    //for ssrial
	    //$i=0;

	    while ($row=mysqli_fetch_array($run)) 
	    	{
	 
	    	$order_id=$row['order_id'];
	    	$c_name=$row['c_name'];
	    	$c_id=$row['c_id'];
	    	$item_name=$row['item_name'];
	        $amount=$row['due_amount'];
	        $qty=$row['total_fooditems'];
	        $invoice=$row['invoice_no'];
	        $date=$row['order_date'];
	        $status=$row['order_status'];
	    	

	    	//$i++;

	    	//<td><a href='confirm.php?order_id=$order_id' target='_blank'>Confirm</a></td>
	    	//if ($status=='Pending') {

	    	 //	$status ='Unpaid';
	    //	 }
	    	// else{
	    	 //	$status ='Paid';
	    //	 }

            echo "
	    	<tr align='center'>
	    	<td>$order_id</td>
	    	<td>$c_name</td>
	    	<td>$c_id</td>
	    	<td>$item_name</td>
	    	<td>$amount</td>
	    	<td>$qty</td>
	    	<td>$invoice</td>
	    	<td>$date</td>
	    	<td>$status</td>
	    	<td><a href='manage-orders.php?order_id=$order_id' target='_blank'>Confirm</a></td>
	    	</tr>

	    	";
	    }

	   ?>										
								
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
