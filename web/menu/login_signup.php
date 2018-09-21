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

/*login-signup form*/
 * {box-sizing: border-box}

/* style the container */
.cntainer {
  position: relative;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px 0 30px 0;
} 

/* style inputs and link buttons */
input,
.btn {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; /* remove underline from anchors */
}

input:hover,
.btn:hover {
  opacity: 1;
}

/* add appropriate colors to fb, twitter and google buttons */
.fb {
  background-color: #3B5998;
  color: white;
}

.twitter {
  background-color: #55ACEE;
  color: white;
}

.google {
  background-color: #dd4b39;
  color: white;
}

/* style the submit button */
.sub {
  /*background-color: #4CAF50;*/
  background-color: #a51c21;
  color: white;
  cursor: pointer;
}

.sub:hover {
  background-color: #45a049;
}

/* Two-column layout */
.col {
  float: left;
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* vertical line */
.vl {
  position: absolute;
  left: 50%;
  transform: translate(-50%);
  border: 2px solid #ddd;
  height: 175px;
}

/* text inside the vertical line */
.inner {
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  background-color: #f1f1f1;
  border: 1px solid #ccc;
  border-radius: 50%;
  padding: 8px 10px;
}
.vl-innertext {
    position: absolute;
    top: 50%;
    transform: translate(-50%, -50%);
    background-color: #f1f1f1;
    border: 1px solid #ccc;
    border-radius: 50%;
    padding: 8px 10px;
}

/* hide some text on medium and large screens */
.hide-md-lg {
  display: none;
}


/* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 650px) {
  .col {
    width: 100%;
    margin-top: 0;
  }
  /* hide the vertical line */
  .vl {
    display: none;
  }
  /* show the hidden text on small screens */
  .hide-md-lg {
    display: block;
    text-align: center;
  }
}
legend {
    /* display: block; */
    /* width: 100%; */
    /* padding: 0; */
    /* margin-bottom: 20px; */
    /* font-size: 21px; */
    /* line-height: inherit; */
    color: black;
    border: 0;
    border-bottom: 1px solid black;

</style>
</head>

<body>
	<div id="menu">
	<div class="bgg-img">
  <div class="cantainer">
    <div class="topnav">
   
      <a href="kitchen.php">Home</a>
      <a href="#contact">Contact</a>
      <a href="login_signup.php">Login & Signup</a>
    </div>
  </div>
</div>
<!---w3 form -->
<div class="cntainer">
  <form action="#" style="border:2 px solid black; ">
    <div class="row">
      <h2 style="text-align:center">Login  or Signup</h2>
      <div class="vl">
        <span class="vl-innertext">or</span>
      </div>

      <div class="col">
     <fieldset>
    <legend class="legnd">Sign up</legend>
        <input type="text" name="username" placeholder="Username" required>
         <input type="email" name="username" placeholder="Email Address" required>
        <input type="password" name="password" placeholder="Password" required>
         <input type="text" name="username" placeholder="Your City" required>
          <input type="text" name="username" placeholder="Mobile Number" required>
          <input type="text" name="username" placeholder="Address" required>
           <input type="file" name="username" placeholder="Username" required>
        <input type="submit" class="sub" value="Singup">
    </fieldset>
      </div> 

      <div class="col">
        <div class="hide-md-lg">
          <p>Or sign in manually:</p>
        </div>
   <fieldset>
    <legend style="color: black">Log into your account</legend>

        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" class="sub" value="Login">
    </fieldset>
      </div>

    </div>
  </form>
</div>
<!---/// -->
			
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