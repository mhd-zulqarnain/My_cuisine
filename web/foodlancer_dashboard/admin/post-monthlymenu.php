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
	$d_name   =$_POST['plan_name'];
	$menu_cat =$_POST['menu_cat'];
	$meals    = $_POST['meals'];
	$price    = $_POST['price'];
	$monday_week1    = $_POST['monday_week1'];
	$monday_week2    = $_POST['monday_week2'];
	$monday_week3    = $_POST['monday_week3'];
	$monday_week4    = $_POST['monday_week4'];
	$tuesday_week1    = $_POST['tuesday_week1'];
	$tuesday_week2    = $_POST['tuesday_week2'];
	$tuesday_week3    = $_POST['tuesday_week3'];
	$tuesday_week4    = $_POST['tuesday_week4'];
	$wednesday_week1    = $_POST['wednesday_week1'];
	$wednesday_week2    = $_POST['wednesday_week2'];
	$wednesday_week3    = $_POST['wednesday_week3'];
	$wednesday_week4    = $_POST['wednesday_week4'];
	$thursday_week1    = $_POST['thursday_week1'];
	$thursday_week2    = $_POST['thursday_week2'];
	$thursday_week3    = $_POST['thursday_week3'];
	$thursday_week4    = $_POST['thursday_week4'];
	$friday_week1    = $_POST['friday_week1'];
	$friday_week2    = $_POST['friday_week2'];
	$friday_week3    = $_POST['friday_week3'];
	$friday_week4    = $_POST['friday_week4'];
	$saturday_week1    = $_POST['saturday_week1'];
	$saturday_week2    = $_POST['saturday_week2'];
	$saturday_week3    = $_POST['saturday_week3'];
	$saturday_week4    = $_POST['saturday_week4'];
	$query="INSERT INTO food_items (fl_id,kitchen_name,f_title,category,servings,f_price,monday_week1,monday_week2,monday_week3,monday_week4,tuesday_week1,tuesday_week2,tuesday_week3,tuesday_week4,wednesday_week1,wednesday_week2,wednesday_week3,wednesday_week4,thursday_week1,thursday_week2,thursday_week3,thursday_week4,friday_week1,friday_week2,friday_week3,friday_week4,saturday_week1,saturday_week2,saturday_week3,saturday_week4) values ('$fl_id','$fl_kname','$d_name','$menu_cat','$meals','$price','$monday_week1','$monday_week2','$monday_week3','$monday_week4','$tuesday_week1','$tuesday_week2','$tuesday_week3','$tuesday_week4','$wednesday_week1','$wednesday_week2','$wednesday_week3','$wednesday_week4','$thursday_week1','$thursday_week2','$thursday_week3','$thursday_week4','$friday_week1','$friday_week2','$friday_week3','$friday_week4','$saturday_week1','$saturday_week2','$saturday_week3','$saturday_week4')";
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
									<div class="panel-heading">Monthly Menu</div>
<!--<div class="errorWrap"><strong>ERROR</strong>: </div>
		<div class="succWrap"><strong>SUCCESS</strong>:<?php //echo htmlentities($msg ?> </div> -->
				<div class="panel-body">

					<form method="post" action="" class="form-horizontal">
						
						 <input type="hidden" name="fl_id" class="form-control" value="<?php echo $fid ;?>"/>
						  <input type="hidden" name="fl_k_name" class="form-control" value="<?php echo $kname ;?>"/>
							

						<div class="form-group">
							<label class="col-md-2 control-label">Plan Name</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-book"></i>
									</span>
							        <select name="plan_name" >
					<option value="">Select Plan</option>
					<option>Economy Plan</option>
					<option>Mazedar Plan</option>
					<option>Student Plan</option>	
				   <option>Hostel Menu</option>					
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
					<option>Monthly Menu</option>					
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
			
 <div class="main" style="">

<div class="panel-white">
  <table class="table-upload">
    <thead>
      <tr>
        <th class="th2"></th>
        <th class="th2">Days</th>
        <th class="th2">Week 1</th>
       <th class="th2">Week 2</th>
       <th class="th2">Week 3</th>
       <th class="th2">Week 4</th>
      </tr>
    </thead>
    <tbody>
      <tr class="tr2">
        <td></td>
        <td class="files-col "><span class="files-twoline"><a href="#">Monday</a></span></td>
        <td><input type="text" class="sm-input" name="monday_week1"></td>
        <td><input type="text" class="sm-input" name="monday_week2"></td>
        <td><input type="text" class="sm-input" name="monday_week3"></td>
        <td><input type="text" class="sm-input" name="monday_week4"></td>
      </tr>
       <tr class="tr2">
        <td></td>
        <td class="files-col "><span class="files-twoline"><a href="#">Tuesday</a></span></td>
        <td><input type="text" class="sm-input" name="tuesday_week1"></td>
        <td><input type="text" class="sm-input" name="tuesday_week2"></td>
        <td><input type="text" class="sm-input" name="tuesday_week3"></td>
        <td><input type="text" class="sm-input" name="tuesday_week4"></td>
      </tr>
       <tr class="tr2">
        <td></td>
        <td class="files-col "><span class="files-twoline"><a href="#">Wednesday</a></span></td>
        <td><input type="text" class="sm-input" name="wednesday_week1"></td>
        <td><input type="text" class="sm-input" name="wednesday_week2"></td>
        <td><input type="text" class="sm-input" name="wednesday_week3"></td>
        <td><input type="text" class="sm-input" name="wednesday_week4"></td>
      </tr>
       <tr class="tr2">
        <td></td>
        <td class="files-col "><span class="files-twoline"><a href="#">Thursday</a></span></td>
        <td><input type="text" class="sm-input" name="thursday_week1"></td>
        <td><input type="text" class="sm-input" name="thursday_week2"></td>
        <td><input type="text" class="sm-input" name="thursday_week3"></td>
        <td><input type="text" class="sm-input" name="thursday_week4"></td>
      </tr>
       <tr class="tr2">
        <td></td>
        <td class="files-col "><span class="files-twoline"><a href="#">Friday</a></span></td>
        <td><input type="text" class="sm-input" name="friday_week1"></td>
        <td><input type="text" class="sm-input" name="friday_week2"></td>
        <td><input type="text" class="sm-input" name="friday_week3"></td>
        <td><input type="text" class="sm-input" name="friday_week4"></td>
      </tr>
       <tr class="tr2">
        <td></td>
        <td class="files-col "><span class="files-twoline"><a href="#">Saturday</a></span></td>
        <td><input type="text" class="sm-input" name="saturday_week1"></td>
        <td><input type="text" class="sm-input" name="saturday_week2"></td>
        <td><input type="text" class="sm-input" name="saturday_week3"></td>
        <td><input type="text" class="sm-input" name="saturday_week4"></td>
      </tr>
    </tbody>
  </table>
</div>
</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

  

    <script  src="js3/indexdetails.js"></script>





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