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

<!-- side menu -->
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
	#left_sidebar{
	/*width:200px;*/
	float:left;
	background:#000; 
/*	border: 2px solid #FFF;*/
    width: 20%

}
#right_content{
	margin-left: 25%;
	background:#FCC;
	float:right;
}
#sidebar_title{
	background: #FFF;
	color: #000;
	padding: 10px;
	font-family: "Palatino Linotype","Book Antiqua", Palatino  , serif;
	font-size:28px;
}
#cats{
    padding: 10px;
	text-align:left;
}
    #cats li{
	list-style: none;
	margin: 8px;
            }
    #cats a{
	color: #FC9;
	font-size: 20px;
	text-decoration: none;
	margin: 5px;
            }
    #cats a:hover{
    	color: #FFF;
    	text-decoration: underline;
    	font-weight: bold;
    }   
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
  background-image: url("ki_home2.jpg");

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

/*side bar */



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
  include("db.php");
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

}}?>

  </div>
  

</div>
<!-- Sidebar -->
<div style="">
	 <div id='left_sidebar'>

		       <div id="sidebar_title">Menu</div>
		       <br>
		         <ul id='cats'>
		         	<?php 
		         	 include("db.php");
		              $query="select * from menu_cat";
		              $run=mysqli_query($con,$query);
		              while ($row=mysqli_fetch_array($run)) {
		              	$m_id=$row['id'];
		              	$m_title=$row['title'];
		              	echo "<li><a href='fl_daily_menu2.php'>$m_title</a></li>";

    		     	 #echo "<li><a href='homekitchen3.php?mtit=$m_title'>$m_title</a></li>";

    		     	  #<li><a href="">Laptops</a></li>
    		     	  #  <li><a href="my_account.php?my_orders">Daily Menu</a></li> -->

    		     	}
    		     	?>

                  
		           
		           
		        </ul>
		     	    
		      </div>
	
</div>


<!-- Page Content  -->
   <div style="margin-left: 20%">

		        <h2 style='background:#000; color:#FC9; padding: 15px; text-align:right;border-top: 0px solid black;margin-top: 0px;height: 60px'>cart</h2>
		       <!--  <div style="padding: 10px">-->
		        	
		        	<!-- menus
		        		#f5f5f5; -->
		        	
		        	<?php 
   if (isset($_GET['mtit'])) {
    
                
  $title=$_GET['mtit'];
    $query ="select * from food_items ";
    $run=mysqli_query($con,$query);
 while ($row=mysqli_fetch_array($run)) {
                    

                         ?>

  <div class="container" style="width:100%;padding-top: 10px;">
                     
                   
                     <div class="panel panel-default">
                       <!--<div class="panel-heading"><h4><b>Daily Menu</b></h24></div>-->
    
                        <div class="container" style="width:1000px;margin-top: 10px;margin-left: 15px">
                        	<h4><b> <?php echo $title; ?></b></h4>
                        	 <p>daily regular deals</p>
                      <div class="well well-lg" style="margin-left: 3px;height: 100px">

                      	    <div class="panel-body">
                      	      <div class="row even">
                      	        <div class="col-md-7 col-xs-7 border"> <?php echo $row['f_title'];?></div> 
                      	        <div class="col-md-3 col-xs-3 food-price-wrap border"> <?php echo $row['servings'];?> </div> 
                      	        <div class="col-md-3 col-xs-3 food-price-wrap border" style="margin-left: 530px"> <?php echo $row['f_price'];?> </div> 
                      	        <a href="#"><i class="fa fa-plus green-color bold"></i></a> 
                              </div>
                           </div>
                           
                    </div>
 
                       
                     </div>
                  
                     
               </div>
  
		        </div>
 <?php
} }
?>
               
               
                <div class="clearfix"> </div>
		        <!--</div>  -->
		        <div class="clearfix"> </div> 
		          <!-- <div id='right_content'> -->

		          </div>

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