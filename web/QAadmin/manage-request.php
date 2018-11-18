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
if(isset($_GET['del']))
{
$id=$_GET['del'];
$sql = "delete from fl_info, fl_login  WHERE id=:id";
$query = $dbh->prepare($sql);
$query -> bindParam(':id',$id, PDO::PARAM_STR);
$query -> execute();
$msg="Page data updated  successfully";

}

if(isset($_GET['eemail']))
	{
$eemail=$_GET['eemail'];
$status="0";
$sql = "UPDATE fl_login SET status=:status WHERE  email=:eemail";
$query = $dbh->prepare($sql);
$query -> bindParam(':status',$status, PDO::PARAM_STR);
$query-> bindParam(':eemail',$eemail, PDO::PARAM_STR);
$query -> execute();

$msg="FooodLancer Successfully Disapproved";

$sql = "UPDATE fl_info SET status=:status WHERE  fl_email=:eemail";
$query = $dbh->prepare($sql);
$query -> bindParam(':status',$status, PDO::PARAM_STR);
$query-> bindParam(':eemail',$eemail, PDO::PARAM_STR);
$query -> execute();

}


if(isset($_GET['aeemail']))
	{
$aeemail=$_GET['aeemail'];
$status=1;

$sql = "UPDATE fl_login SET status=:status WHERE  email=:aeemail";
$query = $dbh->prepare($sql);
$query -> bindParam(':status',$status, PDO::PARAM_STR);
$query-> bindParam(':aeemail',$aeemail, PDO::PARAM_STR);
$query -> execute();

$msg="FoodLancer Successfully Approved";

$sql = "UPDATE fl_info SET status=:status WHERE  fl_email=:aeemail";
$query = $dbh->prepare($sql);
$query -> bindParam(':status',$status, PDO::PARAM_STR);
$query-> bindParam(':aeemail',$aeemail, PDO::PARAM_STR);
$query -> execute();
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
  width:25%;
}
/* The Modal (background) */
.modall {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  margin-top: 80px;
  left: 250px;
  top: 0;
  width: 80%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modall-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}

/* The Close Button */
.closee {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.closee:hover,
.closee:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

.caption-containerrr {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
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
										<th>#</th>
												<!--<th>Name</th> -->
												<th>Email</th>
												<th>kitechen Name</th>
												<th>Contct No</th>
												<th>Address</th>
											
												<th>Service</th>
												<th>Kitchen Images</th>
											
											<th>Action</th>
											<!--<th>Action</th>-->
											<th>Status</th>
											<th>Email</th>
											
										</tr>
									</thead>
									<tfoot>
										<tr>
										<th>#</th>
											<!--<th>Name</th>-->
												<th>Email</th>
												<th>kitchen Name</th>
												<th>Contct No</th>
												<th>Address</th>
											
												<th>Service</th>
												<th>Kitchen Images</th>
											
											<th>Action</th>
											<!--<th>Action</th>-->
											<th>Status</th>
											<th>Email</th>
										</tr>
										</tr>
									</tfoot>
									<tbody>

								

								<?php $sql = "SELECT * from  fl_info";

$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
$status='0';
if($query->rowCount() > 0)
{
foreach($results as $result)
{				?>	
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<!--<td><?php echo htmlentities($result->fl_name);?></td>-->
											<td><?php echo htmlentities($result->fl_email);?></td>
											<td><?php echo htmlentities($result->fl_kitchen_name);?></td>
											<td><?php echo htmlentities($result->fl_contact);?></td>
											<td><?php echo htmlentities($result->fl_address);?></td>
											<td><?php echo htmlentities($result->fl_service);?></td>

<td><a href="k_images.php?email=<?php echo $result->fl_email;?>">View Images</a></td>
										
										<!--<td><?php //echo htmlentities($status);?></td> -->
											
											
											
<td><a href="edit-request.php?id=<?php echo $result->id;?>"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
	<?php
		//if($result->status=='1'){
		//	echo '<a href="edit-request.php?"><i class="fa fa-edit"></i></a>';
		//}

	?>
<a href="manage-request.php?del=<?php echo $result->fl_email;?>" onclick="return confirm('Do you want to delete');"><i class="fa fa-close"></i></a></td>

<td><?php if($result->status=="" || $result->status==0)
{
	?><a href="manage-request.php?aeemail=<?php echo htmlentities($result->fl_email);?>" onclick="return confirm('Do you really want to Approved')"> Disapproved</a>
<?php } else {?>

<a href="manage-request.php?eemail=<?php echo htmlentities($result->fl_email);?>" onclick="return confirm('Do you really want to Disapproved')"> Approved</a>
</td>
<?php } ?></td>

<td><a href="mailtest/index.php?email=<?php echo $result->fl_email;?>" onclick="return confirm('Do you want to send an approval email');">Send mail</a></td>

										</tr>
										<?php $cnt=$cnt+1; }} ?>



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

<!--image modal -->
<script>
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
<!-- //image modal -->
</body>
</html>
<?php } ?>
