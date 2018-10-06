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
<link rel="stylesheet" type="text/css" href="css3/style2.css">

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
  background-image: url("../ki_home2.jpg");

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
  background-color:black;
  /*background-color: #a51c21;*/
}

/* Navbar links */
.topnav a {
  float: right;
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

/*scroll bar */
/* width */
::-webkit-scrollbar {
    width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
    background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
    background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: #555; 
}


</style>
</head>

<body>
	<div id="menu">
	<div class="bgg-img">
		  <div class="topnav">
		  	 <a href="login_signup.php">Login & Signup</a>
		  	  <a href="#contact">Contact</a>
      <a href="../home.php">Home</a>
     
     
    </div>
  <div class="cantainer">
  <?php 
  include("includes/db.php");
  if(isset($_GET['flid'])){ 

	$fid = $_GET['flid'];
    $query ="select * from fl_info where id ='$fid'";

    $run=mysqli_query($con,$query);
 while ($row=mysqli_fetch_array($run)) {

  ?>
   <div style="float: left;text-align: center;">
 <h1 style="color: white;font-size:50px;text-align: center;margin-top: 100px;margin-right:530px"><?php echo $row["fl_kitchen_name"]; ?></h1>
 <h1 style="color: white;font-size:25px;text-align: center;margin-top: 30px;margin-right:530px"><?php echo $row["fl_address"]; ?></h1>
</div>

<?php 

}}
?>


  </div>
  

</div>
<!-- Sidebar -->
<?php
 include("includes/sidebr2.php");?>
<!-- //sidebar --->


  <!--//menu-->
  	      
	
	<!-- slid -->

	<!-- //slid -->
	<div class="footer-cpy text-center" style="background-color: black">
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




</div>
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