<?php error_reporting(0);?>
<!DOCTYPE html>
<html lang="">

<head>
	<title></title>

	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //for-mobile-apps -->
	<link href="css2/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css2/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
	<!--about-bottom -->
	<link type="text/css" rel="stylesheet" href="css2/cm-overlay.css" />
	<!--about-bottom -->
	<link href="//fonts.googleapis.com/css?family=Yesteryear" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<!-- gallery --> 
	<div  id="review">
		<div class="container">
			<!--.testimonials-->
	<div class="section carousel-reviews broun-block" id="testimonials">
		<div class="container">
			<h3 class="tittle">Reviews</h3> 
				<center><b>We get to hear this..</b></center>
			<div class="row">
				<div id="carousel-reviews" class="carousel " data-ride=""> 

					<div class="carousel-inner">
						<div class="item active">
								<?php 
 include('../admin/includes/db.php');
 $query ="select * from feedback_table order by rand() LIMIT 0,3";
 $run=mysqli_query($con,$query);
 while ($row=mysqli_fetch_array($run)) {

?>
							<div class="col-md-4 col-sm-6 view-testi">
								<div class="block-text rel zmin" style="height:auto">
									<h6><?php echo $row["username"]; ?></h6>
									<div class="mark">My rating:
										<span class="rating-input">
											<span data-value="0" class="fa fa-star"></span>
											<span data-value="1" class="fa fa-star"></span>
											<span data-value="2" class="fa fa-star"></span>
											<span data-value="3" class="fa fa-star"></span>
											<span data-value="4" class="fa fa-star-empty"></span>
											<span data-value="5" class="fa fa-star-empty"></span>
										</span>
									</div> 
										<p><?php echo $row["message"];?></p>

								</div>
								<div class="person-text rel">
									<img src="customer_images/<?php echo $row["image"]; ?>" alt="customer_image" width=50" height="50"/>
									<h5><?php echo $row["username"]; ?></h5>
									<i>from <?php echo $row["usercity"];?> </i>
								</div>
							</div>
							<?php }?>
							<div class="clearfix"></div>
						</div>
						<div class="item">
						
							<div class="clearfix"></div>
						</div>
						<div class="item">						
							<div class="clearfix"></div>
						</div>
					</div>
				<!--	<a class="left carousel-control" href="#" role="button" data-slide="prev">
						<span class="fa fa-angle-left" style="margin-top: 70px;margin-left: 5px;color: grey"></span>
					</a>
					<a class="right carousel-control" href="#" role="button" data-slide="next">
						<span class="fa fa-angle-right" style="margin-top: 70px;margin-left: 5px;color: grey"></span>
					</a> -->
				</div>
			</div>
		</div>
	</div>
	
	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!--/js-->
	<!-- //gallery -->
	<script src="js2/jquery.tools.min.js"></script>
	<script src="js2/jquery.mobile.custom.min.js"></script>
	<script src="js2/jquery.cm-overlay.js"></script>

	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/bootstrap.js"></script> 
	
			
				</div>
	</div>
		  
<!-- //gallery -->