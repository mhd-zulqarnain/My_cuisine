<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
if(isset($_GET['del']))
{
$id=$_GET['del'];
$sql = "delete from  tblsubscribers  WHERE id=:id";
$query = $dbh->prepare($sql);
$query -> bindParam(':id',$id, PDO::PARAM_STR);
$query -> execute();
$msg="Subscriber info deleted";

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
	
	<title>Car Rental Portal |Admin Manage Subscribers   </title>

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
<link rel="stylesheet" href="css/stylecalorie.css">
</head>

<body>
	<?php include('includes/header.php');?>

	<div class="ts-main-content">
		<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Check out calories in your daily meal!</h2>




						<!-- Zero Configuration Table -->
						 <div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Average Calorie your meal contain</h1><hr>
		</div>
		
		<div class="col-md-12">
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingOne" style="color: #ceb3da">
						<h4 class="panel-title" style="color: black">
						<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						Calories chart for vegetables dishes
						</a>
						</h4>
					</div>
					<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
						<div class="panel-body">
							<p>No doubt about it, vegetables should be a regular part of everyone’s diet. One glance at this calorie chart, and it’s easy to see why. A large portion of vegetables won’t contain very many calories, and yet it will include a wonderful dose of vitamins, minerals, and other nutrients. Vegetables contain a mix of carbohydrates along with smaller amounts of healthy fats and protein.</p>
							<table class="table table-striped"> 
								<thead> 
									<tr> 
										<th>#</th> 
										<th>Vegetable</th> 
										<th>Serving</th> 
										<th>Calories</th> 
										<th>Kilojoule</th> 
									</tr> 
								</thead> 
								<tbody> 
									<tr> 
										<th scope="row">#VEG1201</th> 
										<td>Artichoke</td> 
										<td>1 artichoke (128g)</td> 
										<td>60 cal</td> 
										<td>252 kJ</td> 
									</tr> 
									<tr> 
										<th scope="row">#VEG1202</th> 
										<td>Broccoli</td> 
										<td>1 bunch (608g)</td> 
										<td>207 cal</td> 
										<td>869 kJ</td> 
									</tr> 
									<tr> 
										<th scope="row">#VEG1203</th> 
										<td>Potato</td> 
										<td>1 potato (213g)</td> 
										<td>164 cal</td> 
										<td>688 kJ</td> 
									</tr> 
									<tr> 
										<th scope="row">#VEG1204</th> 
										<td>Gourd</td> 
										<td>1 gourd (771g)</td> 
										<td>108 cal</td> 
										<td>455 kJ</td> 
									</tr> 
									<tr> 
										<th scope="row">#VEG1205</th> 
										<td>Cucumber</td> 
										<td>1 Cucumber (410g)</td> 
										<td>66 cal</td> 
										<td>275 kJ</td> 
									</tr> 
									<tr> 
										<th scope="row">#VEG1206</th> 
										<td>Mushrooms</td> 
										<td>1 mushroom (5.4g)</td> 
										<td>1 cal</td> 
										<td>5 kJ</td> 
									</tr> 
								</tbody> 
							</table>
						</div>
					</div>
				</div>
				
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingTwo">
						<h4 class="panel-title" style="color: black">
						<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						Fruits calories chart
						</a>
						</h4>
					</div>
					<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
						<div class="panel-body">
							<p>All fruits are mostly made of carbohydrates, although calories in fruit can also come from fats and small amounts of protein. The carbs, however, are not all the same and are usually a mix of complex carbohydrates (i.e., made of three or more bonded sugars) and simple carbohydrates (i.e., simple sugars).</p>
							<table class="table table-striped"> 
								<thead> 
									<tr> 
										<th>#</th> 
										<th>Fruit</th> 
										<th>Serving</th> 
										<th>Calories</th> 
										<th>Kilojoule</th> 
									</tr> 
								</thead> 
								<tbody> 
									<tr> 
										<th scope="row">#FRU1201</th> 
										<td>Pineapple</td> 
										<td>1 pineapple (905g)</td> 
										<td>453 cal</td> 
										<td>1901 kJ</td> 
									</tr> 
									<tr> 
										<th scope="row">#FRU1202</th> 
										<td>Raisins</td> 
										<td>1 cup (145g)</td> 
										<td>434 cal</td> 
										<td>1821 kJ</td> 
									</tr> 
									<tr> 
										<th scope="row">#FRU1203</th> 
										<td>Pomegranate</td> 
										<td>1 pomegranate (283g)</td> 
										<td>234 cal</td> 
										<td>984 kJ</td> 
									</tr> 
									<tr> 
										<th scope="row">#FRU1204</th> 
										<td>Mango</td> 
										<td>1 mango (336g)</td> 
										<td>201 cal</td> 
										<td>849 kJ</td> 
									</tr> 
									<tr> 
										<th scope="row">#FRU1205</th> 
										<td>Grapes</td> 
										<td>1 cup (151g)</td> 
										<td>107 cal</td> 
										<td>439 kJ</td> 
									</tr> 
									<tr> 
										<th scope="row">#FRU1206</th> 
										<td>Apricot</td> 
										<td>1 apricot (35g)</td> 
										<td>17 cal</td> 
										<td>71 kJ</td> 
									</tr> 
								</tbody> 
							</table>
						</div>
					</div>
				</div>
				
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingThree">
						<h4 class="panel-title" style="color: black">
						<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						Nuts and seeds calories chart
						</a>
						</h4>
					</div>
					<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
						<div class="panel-body">
							<p>Nuts and seeds contain a high amount of calories considering they are such small foods and are consumed in small portions. Most ingredients in this category are primarily composed of fats, along with varying degrees of protein and carbohydrates. Tree nuts like almonds and edible seeds like from the chia plant are among the best whole food sources of omega-3 fats. </p>
							<table class="table table-striped"> 
								<thead> 
									<tr> 
										<th>#</th> 
										<th>Nuts/Seeds</th> 
										<th>Serving</th> 
										<th>Calories</th> 
										<th>Kilojoule</th> 
									</tr> 
								</thead> 
								<tbody> 
									<tr> 
										<th scope="row">#NAS1201</th> 
										<td>Coconut</td> 
										<td>1 coconut (397g)</td> 
										<td>1405 cal</td> 
										<td>5903 kJ</td> 
									</tr> 
									<tr> 
										<th scope="row">#NAS1202</th> 
										<td>Pine Nuts</td> 
										<td>1 cup (146g)</td> 
										<td>828 cal</td> 
										<td>3476 kJ</td> 
									</tr> 
									<tr> 
										<th scope="row">#NAS1203</th> 
										<td>Almonds</td> 
										<td>1 cup (95g)</td> 
										<td>546 cal</td> 
										<td>2294 kJ</td> 
									</tr> 
									<tr> 
										<th scope="row">#NAS1204</th> 
										<td>Cashew</td> 
										<td>1 oz. (28.35g)</td> 
										<td>155 cal</td> 
										<td>652 kJ</td> 
									</tr> 
									<tr> 
										<th scope="row">#NAS1205</th> 
										<td>Poppy Seeds</td> 
										<td>1 spoon (30g)</td> 
										<td>42 cal</td> 
										<td>179 kJ</td> 
									</tr> 
									<tr> 
										<th scope="row">#NAS1206</th> 
										<td>Radish Seeds</td> 
										<td>1 cup (38g)</td> 
										<td>16 cal</td> 
										<td>69 kJ</td> 
									</tr> 
								</tbody> 
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="col-md-12">
			<p style="font-style: italic; color: #2196f3; font-size: 18px; text-align: center; margin-top: 50px; margin-bottom: 20px;">Follow me on Twitter: <a href="https://twitter.com/mrdogra007/" target="_blank">@mrdogra007</a></p>
		</div>
	</div>
</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js'></script>

  

    <script  src="js/indexcalorie.js"></script>





					</div>
				</div>

			</div>
		</div>
	</div>
<script  src="js/indexcalorie.js"></script>
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
