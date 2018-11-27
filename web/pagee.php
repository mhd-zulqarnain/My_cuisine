<?php 
session_start();
include('./admin/includes/db.php');
error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>MY CUISINE| Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="My Cuisine, Cuisine ,Online Food Order, Food Order, Home Made Food" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--w3 cn -->
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">  
<link rel="stylesheet" href="css/swipebox.css">
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->

<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href="//fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
<!-- //web-fonts -->

<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.dropbtn {
    color: white;
    padding: 25px;
    font-size: 20px;
    border: none;
    cursor: pointer;
}

.dropdown {
    float: right;
    position: relative;
    display: inline-block;
    
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    right: 0;
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #ddd}

.show {display:block;}


.dark-overlay {
    background: rgba(0, 0, 0, 0.75) none repeat scroll 0 0;
    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
}

div {
    display: block;
}

.collapsible {
    background-color: #777;
    color: white;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    margin-bottom:10px;
    border-radius:10px;
}

.active, .collapsible:hover {
    background-color: #555;
}

.content {
    padding: 0 18px;
    display: none;
    overflow: hidden;
    background-color: #f1f1f1;
    font-family: cursive;

}
.para{
	font-size: 25px;
font-family: cursive;
font-weight: bold;
}
</style>


</head>
<body>
    <?php include('includes/header4.php');?>
   
            <div class="panel-body">
            	<h1><center><b>FAQs</b></center></h1><br>

<h4 style="margin-bottom: 5px"><center>If you have an urgent question or feedback do ask/tell us.</center></h4>

<button class="collapsible">What are order placing and cancellation timings?</button>
<div class="content">
  <p><img src="capture.png" width="1300px"></p>
</div>
<button class="collapsible">Can I pay for the tiffin offline?</button>
<div class="content">
  <p>We currently offer 2 payment methods: > Online: Credit/Debit Card/Net Banking > Offline: Delivery (payment pick-up).</p>
</div>
<button class="collapsible">How soon will my tiffin start after I have made the payment for the same?</button>
<div class="content">
  <p>The tiffin will be delivered on the selected order date after your order has been confirmed online.</p>
</div>
<button class="collapsible">What do I do if my tiffin does not get delivered to me?</button>
<div class="content">
  <p>We put in a lot of effort to ensure that your tiffin reaches you on time consistently and in an ideal condition. However, due to unforeseen events your tiffin may reach you late and in rare cases may be undelivered. In such a circumstance, please contact 9819800305 or mail us at info_mycuisine@gmail.com We assure you that every attempt will be made to rectify the situation or compensate you.</p>
</div>

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
            	
            </div>

    <!--<?php
if(isset($_GET['about_page'])) {

include('about.php');

}

if(isset($_GET['menu_page'])) {

include('menu.php');

}

if (isset($_GET['contact_page'])) {

include('contact.php');

}
?>

 
    <?php //include('includes/about.php');
   // <div class="dark-overlay"></div>
    ?>
    <?php// include('includes/services.php');?>

	 
	<?php //include('includes/menu.php');?>
	
	<?php //include('includes/reviews.php');?>
	<?php //include('includes/contact.php');?>

	<?php include('includes/footer.php');?> -->
    	

	
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

	<!-- //smooth-scrolling-of-move-up -->  
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script> 
<!-- //js -->
<!--banner-Slider-->
						<script src="js/responsiveslides.min.js"></script>
							<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider3").responsiveSlides({
									auto: true,
									pager:true,
									nav:false,
									speed:500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							 </script>
								<!-- Calendar -->
						<link rel="stylesheet" href="css/jquery-ui.css" />
						<script src="js/jquery-ui.js"></script>
						<script>
								$(function() {
									$( "#datepicker" ).datepicker();
								});
						</script>
						<!-- //Calendar -->  
<!--//banner-Slider-->
<!-- swipe box js -->
	<script src="js/jquery.adipoli.min.js" type="text/javascript"></script>
	<script type="text/javascript"> 
		$(function(){ 
			$('.row2').adipoli({
				'startEffect' : 'overlay',
				'hoverEffect' : 'sliceDown'
			}); 
		});
		
	</script>
	<script src="js/jquery.swipebox.min.js"></script> 
	<script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
	</script>
	<!-- //swipe box js -->
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>


<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
		
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>

<!-- //end-smooth-scrolling -->	
    <script src="js/bootstrap.js"></script>
    
    <!--Login-Form -->
<?php include('./includes/c_login.php');?>
<!--/Login-Form --> 

<!--Register-Form -->
<?php include('./includes/registration.php');?>

<!--/Register-Form --> 

<!--Forgot-password-Form -->
<?php include('./includes/forgotpassword.php');?>
<!--/Forgot-password-Form --> 
	
</body>
</html>