<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>MY CUISINE |kitchen Page</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //for-mobile-apps -->
	<link href="css3/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css3/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
	<!--about-bottom -->
	<link type="text/css" rel="stylesheet" href="css3/cm-overlay.css" />
	<!--about-bottom -->
	<link href="//fonts.googleapis.com/css?family=Yesteryear" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
	<link href="css3/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Font Awesome Icon Library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		.navbar a {
  float: right;
  padding: 30px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}
img:hover{
	cursor: pointer;
	
}
li img:hover{
 cursor: pointer;
}
.auto{ cursor: auto; }

/* w3 school*/
/* The navigation bar */
.bgg-img {
  /* The image used */
  background-image: url("../kitchen.jpg");

  min-height: 380px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

  /* Needed to position the navbar */
  position: relative;
}

/* Position the navbar container inside the image */
.cantainer {
  float: right;
  margin: 20px;
  width: auto;
}

/* The navbar */
.topnav {
  overflow: hidden;
  /*background-color: #333;*/
  background-color: #a51c21;
}

/* Navbar links */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}
/*rating*/
.checked {
    color: orange;
}
</style>
</head>

<body>
	<div id="menu">
	<div class="bgg-img">
  <div class="cantainer">
    <div class="topnav">
   
      <a href="../home.php">Home</a>
      <a href="#contact">Contact</a>
      <a href="login_signup.php">Login & Signup</a>
    </div>
  </div>
</div>

	<div class="menu-agileits_w3layouts section">
		<div class="container" style="width: 1150px;">
			<div class="load_more">
				<h3 class="w3layouts-title" style="font-size: 50px;color: #a51c21;text-transform: capitalize;margin-left:20px;padding: 0;font-family: 'Rancho', cursive;">
					<img src="images/menu1.png" class="img-responsive" alt="" />Featured Kitchens</h3>
				<ul id="myList">
					<li>
						<div class="l_g">
							<div class="l_g_r">

								<div class="col-md-6 menu-grids">
										<?php 
 include('includes/db.php');
 $query ="select * from fl_info";
 $run=mysqli_query($con,$query);
 while ($row=mysqli_fetch_array($run)) {
 	/*$fl_iid=$row["id"];*/

?>		
   							
									<div class="w3l-menu-text" style="width: 600px;margin-left: 150px">
										<div class="menu-text-left">
											<img src="images/m1.jpg" alt="" class="img-responsive" />
										</div>
										<div class="menu-text-right">
											<div class="menu-title">
												<h4><?php echo $row["fl_kitchen_name"]?> </h4>

											</div>
											<div class="clearfix"> </div>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
											<div class="menu-price">
												<h4 class="price-clr"><a
                                                                href="homekitchen4.php?flid=<?php echo $row["id"]/*."&prd_id=-1"*/; ?>"
                                                                style="color:green">open</a></h4>
					
											</div>
											<div class="clearfix"></div>
											<p> <?php echo $row["fl_address"]?></p>

										</div>
										<div class="clearfix"> </div>
									</div>
									<?php
}
	?>
							
								</div> 
								<!--<div class="col-md-6 menu-grids"> 
									
									
									<div class="w3l-menu-text">
										<div class="menu-text-left">
											<img src="images/m7.jpg" alt="" class="img-responsive" />
										</div>
										<div class="menu-text-right">
											<div class="menu-title">
												<h4>Mauris tortor.. </h4>

											</div>
											<div class="menu-price">
												<h4 class="price-clr">$ 50</h4>
											</div>
											<div class="clearfix"></div>
											<p> Nam libero tempore cum soluta nobis.</p>
										</div>
										<div class="clearfix"> </div>
									</div>
	
									
								</div> -->

								<div class="clearfix"> </div>
							</div>
						</div>

					</li>
					<li>

					<!--	<div class="l_g">
							<div class="l_g_r">

								 <div class="col-md-6 menu-grids">
									<div class="w3l-menu-text">
										<div class="menu-text-left">
											<img src="images/m5.jpg" alt="" class="img-responsive" />
										</div>
										<div class="menu-text-right">
											<div class="menu-title">
												<h4>Mauris tortor </h4>

											</div>
											<div class="menu-price">
												<h4 class="price-clr">$ 50</h4>
											</div>
											<div class="clearfix"></div>
											<p> Nam libero tempore cum soluta nobis.</p>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>

								<div class="col-md-6 menu-grids">
									<div class="w3l-menu-text">
										<div class="menu-text-left">
											<img src="images/m2.jpg" alt="" class="img-responsive" />
										</div>
										<div class="menu-text-right">
											<div class="menu-title">
												<h4>Congue oluptate </h4>

											</div>
											<div class="menu-price">
												<h4 class="price-clr">$ 50</h4>
											</div>
											<div class="clearfix"></div>
											<p> Nam libero tempore cum soluta nobis.</p>
										</div>
										<div class="clearfix"> </div>
									</div> 
								</div> 
								<div class="clearfix"> </div>
							</div>
						</div> -->
					</li>
				</ul>

			<div class="nav-menu text-center">
					<div id="loadMore">Load more</div>
					<div id="showLess">Show less</div>
				</div> 
			</div>
		</div>

	</div>
	<!--//menu-->
	
	<!-- slid -->

	<!-- //slid -->


	<!--footer-->

	
	<div class="footer-cpy text-center">
		<div class="social_banner">
			<ul class="social_list">
				<li>
					<a href="#" class="facebook">
						<span class="fa fa-facebook" aria-hidden="true"></span>
					</a>
				</li>
				<li>
					<a href="#" class="twitter">
						<span class="fa fa-twitter" aria-hidden="true"></span>
					</a>
				</li>
				<li>
					<a href="#" class="dribble">
						<span class="fa fa-dribbble" aria-hidden="true"></span>
					</a>
				</li>
				<li>
					<a href="#" class="vimeo">
						<span class="fa fa-vimeo" aria-hidden="true"></span>
					</a>
				</li>
			</ul>
		</div>
		<div class="footer-copy">
			<p>© 2018 My Cuisine. All rights reserved | Design by
				<a href="http://w3layouts.com">...</a>
			</p>
		</div>
	</div>
	<!--//footer-->



	<!-- Tooltip -->
	<div class="tooltip-content">
		<div class="modal fade features-modal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h3 class="modal-title">
							<img src="images/logo.png" class="img-responsive img1" alt="" />Spicy Bite</h3>
					</div>
					<div class="modal-body">
						<img src="images/modal.jpg" class="img-responsive" alt="image">
						<h4>Tasty experience in every bite!</h4>
						<p>Fusce et congue nibh, ut ullamcorper magna. Donec ac massa tincidunt, fringilla sapien vel, tempus massa. Vestibulum
							felis leo, tincidunt sit amet tristique accumsan. In vitae dapibus metus. Donec nec massa non nulla mattis aliquam
							egestas et mi.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>/
	<!-- //Tooltip -->

	<!-- js -->
	<script src="js3/jquery-2.2.3.min.js"></script>
	<!--/js-->
	<!-- //gallery -->
	<script src="js3/jquery.tools.min.js"></script>
	<script src="js3/jquery.mobile.custom.min.js"></script>
	<script src="js3/jquery.cm-overlay.js"></script>

	<script>
		$(document).ready(function () {
			$('.cm-overlay').cmOverlay();
		});
	</script>
	<!-- //gallery -->
	<!--start-date-piker-->
	<link rel="stylesheet" href="css3/jquery-ui.css" />
	<script src="js3/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1").datepicker();
		});
	</script>
	<!-- /End-date-piker -->
	<script type="text/javascript" src="js3/move-top.js"></script>
	<script type="text/javascript" src="js3/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!--//end-smooth-scrolling-->
	<!-- smooth-scrolling-of-move-up  -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>


	<script src="js3/SmoothScroll.min.js"></script>

	<script>
		$(document).ready(function () {
			size_li = $("#myList li").size();
			x = 1;
			$('#myList li:lt(' + x + ')').show();
			$('#loadMore').click(function () {
				x = (x + 1 <= size_li) ? x + 1 : size_li;
				$('#myList li:lt(' + x + ')').show();
			});
			$('#showLess').click(function () {
				x = (x - 1 < 0) ? 1 : x - 1;
				$('#myList li').not(':lt(' + x + ')').hide();
			});
		});
	</script>
	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js3/bootstrap.js"></script>


</body>

</html>