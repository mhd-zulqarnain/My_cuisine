<?php
session_start();
include('includes/db.php');
if(strlen($_SESSION["email"])==0)
	{	
header('location:index.php');
}
else{
?>
<!DOCTYPE HTML>
<html>
<head>
<title>My Cuisine | Admin Dashboard</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--ajax cdn -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <!-- ///-->

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<style type="text/css">
	

	:root {
  --main-color: #f8f9fa;
  --second-color: #ced4da;
  --gray-text: #9eaab8;
  --black: #3a3a3a;
  --green: #d2e64b;
  --blue: #0963ea;
  --red: #df5621;
  --gray: #ced4da;
}
*,
input,
button,
textarea {
  box-sizing: border-box;
  font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen-Sans, Ubuntu, Cantarell, Helvetica Neue, sans-serif;
}


form {
  width: 320px;
  padding: 32px;
  background-color: white;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.15);
  border-radius: 2px;
  transition: all 0.3s ease;
}
.form-title {
  font-size: 18px;
  text-transform: uppercase;
  font-weight: 500;
  text-align: center;
  color: var(--gray-text);
  margin-bottom: 16px;
}
.form-group {
  width: 100%;
  position: relative;
  margin-bottom: 16px;
}
.form-group-label {
  color: var(--gray-text);
  font-size: 18px;
  font-weight: normal;
  position: absolute;
  pointer-events: none;
  top: 12px;
  left: 16px;
  z-index: 1;
  transition: all 0.3s ease;
}
.form-group-input:focus ~ .form-group-label,
.form-group-input:valid ~ .form-group-label {
  font-size: 14px;
  top: 0px;
  color: var(--blue);
}
.form-group-input {
  font-size: 18px;
  border: none;
  outline: none;
  position: relative;
  width: 100%;
  height: 56px;
  padding-left: 16px;
  padding-top: 16px;
  border-radius: 2px;
  color: var(--black);
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.15);
  background-color: var(--main-color);
}
.form-group-line {
  position: absolute;
  bottom: 0;
  left: 50%;
  width: 0%;
  height: 2px;
  background-color: var(--blue);
  z-index: 1;
  -webkit-transform: translatex(-50%);
          transform: translatex(-50%);
  transition: all 0.3s ease;
}
.form-group-input:hover ~ .form-group-line {
  width: 0;
  -webkit-animation: input 1s infinite ease-in-out;
          animation: input 1s infinite ease-in-out;
}
.form-group-input:focus ~ .form-group-line,
.form-group-input:valid ~ .form-group-line {
  -webkit-animation: input2 0.5s 1 ease;
          animation: input2 0.5s 1 ease;
  width: 100%;
}
.form button {
  margin-top: 16px;
  width: 100%;
  height: 56px;
  border: none;
  outline: none;
  color: white;
  font-size: 18px;
  cursor: pointer;
  font-weight: 400;
  background-color: var(--blue);
  transition: all 0.3s ease;
  box-shadow: 0px 15px 21px 0px rgba(9, 99, 234, 0.25);
}
.form button:hover {
  background-color: #2776ed;
}
@-webkit-keyframes input {
  0% {
    width: 5%;
  }
  50% {
    width: 20%;
  }
  100% {
    width: 5%;
  }
}
@keyframes input {
  0% {
    width: 5%;
  }
  50% {
    width: 20%;
  }
  100% {
    width: 5%;
  }
}
@-webkit-keyframes input2 {
  0% {
    width: 0%;
  }
  100% {
    width: 100%;
  }
}
@keyframes input2 {
  0% {
    width: 0%;
  }
  100% {
    width: 100%;
  }
}

</style>
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
<!--header start here-->
<?php include('includes/header.php');?>
<!--header end here-->
		<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a> <i class="fa fa-angle-right"></i></li>
            </ol>
<!--four-grids here-->


		<!--four-grids here-->
<div class="inner-block">


	 <form method="post" action="" class="form" style="width: 500px; background-color: grey;">
	<div class="form-title" style="color: black;">Post Lunch menu</div>
	<div class="form-group">
		<input class="form-group-input" type="text" name="d_name" required>
		<label class="form-group-label">Dish Name</label>
		<div class="form-group-line"></div>
	</div>
	<div class="form-group">
		
		

		<div class="form-group-line" name="category" required></div>
     <select name="category" >
          <option value="">Select Category</option>
          <option>lunch</option>         
        </select>
	
	<div class="form-group" style="margin-top: 20px;">
		<input class="form-group-input" type="text" name="price" required>
		<label class="form-group-label">Price</label>
		<div class="form-group-line"></div>
	</div>
	<div class="form-group">
		<input class="form-group-input" type="text" name="discription" required>
		<label class="form-group-label">Discription</label>
		<div class="form-group-line"></div>
	</div>
  <div class="form-group">
    <input class="form-group-input" type="text" name="servings" required>
    <label class="form-group-label">Servings</label>
    <div class="form-group-line"></div>
  </div>
	<button type="submit" name="submit">Submit</button>
	
</form>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>

  
					
						</div>
<!--inner block end here-->
<?php

//error_reporting(0);
error_reporting(E_ALL);

include('includes/db.php');

if(isset($_POST['submit']))
 {
  
  $d_name    =$_POST['d_name'];
  $category =$_POST['category'];
  $price   =$_POST['price'];
  $discription =$_POST['discription'];
   $servings =$_POST['servings'];



  $query="INSERT INTO regular_menu (d_name,category,price,discription,servings) values ('$d_name','$category','$price','$discription','$servings')";
  $run=mysqli_query($con, $query);

  if ($run) {

    echo "<script>alert('Food Item inserted successfully!')</script>";
  }
    else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
   }

} ?>
<!--copy rights start here-->
<div>
<?php include('includes/footer.php');?>
</div>
</div>

			<!--/sidebar-menu-->
				<?php include('includes/sidebarmenu.php');?>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   
<!-- morris JavaScript -->	
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });
	   
	   
		
	});
	</script>

	

</body>
</html>
<?php } ?>