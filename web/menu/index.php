<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>MY CUISINE |Menu Page</title>
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
</style>
</head>

<body>
	<div id="menu">
		<!-- background-color:#a51c21-->
	<div style="background-color:#a51c21;height:100px">
		<ul class="nav navbar-nav">
				<li class="auto"><a href="../home.php"><img src="images/logo.png" alt="" style="width:80px;height:70px;margin-left:15px;"/></a></li>

				<li><h1 style="margin-top: 28px;margin-left: 20px;font-size: 40px"><a href="../home.php" style="color: white">MY CUISINE</a></h1>
				</li>

		</ul> 
	<div class="navbar">

       <a href="#"><i style ="color:#9cd5c4" class="fa fa-fw fa-phone"></i> 1234 423 23</a>
       <a class="active" href="mailto:info@example.com"><i style="color:#9cd5c4"class="fa fa-fw fa-envelope"></i>&nbsp; &nbsp;info@example.com </a> 
    </div>
					
	
	</div>

	
<?php
include('menu.php');
?>
	
	
	<!--//menu-->
	<div class="section" style="margin-top: 100px;margin-bottom: 70px;">
		<div class="w3_agileits-subscribe timings text-center" style="margin-top: 500px;">
			<h4>opening times</h4>
			<div class="about-p  text-center">
				<span class="sub-title p1"></span>
				<span class="fa fa-cutlery" aria-hidden="true"></span>
				<span class="sub-title p1"></span>

			</div>
			<div class="time">
				<h5>Monday – Friday </h5>
				<p>9:00 AM – 11:00 PM</p>
				<h5>Saturday – Sunday </h5>
				<p>8:00 AM – 00:00 AM</p>
			</div>
		</div>
	</div>

	<!-- slid -->
	<div class="slid">
		<div class="slid-text">
			<h4>Fresh ingredient, tasty meals.</h4>
			<p style="font-size: 20px">Health and taste comes at a high price, but we promised to be affordable and fair…at my_cuisine, you get light-weight, healthy, homemade meals at your doorstep.</p>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!-- //slid -->


	<!--footer-->

	<div class="w3_agileits-subscribe text-center" style="margin-top: 35px">
		<div class="subscribe-head">
			<h4>get subscribed! </h4>
			<h5>Get The Latest & Best Coupon/Offer Alerts also get upto 10% off on First Food Order.</h5>
			<p class="sub-p">Never miss out on latest sales and best offers!</p>
			<div class="subscribe-form">
				<form action="#" method="post" class="subscribe_form">
					<input type="email" placeholder="Email" required="">
					<input type="submit" value="subscribe">
				</form>
				<div class="clearfix"> </div>
			</div>
			<p>We value your privacy & guarantee zero spamming.</p>
		</div>
	</div>
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