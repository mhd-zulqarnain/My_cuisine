
<?php
session_start();
include('../admin/includes/db.php');
error_reporting(0);
if(strlen($_SESSION["c_email"])==0)
  { 
header('location:../home.php');
}
else{
//Code for change password  
  $email=$_SESSION["c_email"];
if(isset($_POST['submit'])) {
  
  $currentpassword =$_POST['password'];
  $newpassword =$_POST['newpassword'];
  $confirmpassword =$_POST['confirmpassword'];

  $query="select * from customer where c_pass='$currentpassword' and c_email='$email'";
  $run=mysqli_query($con, $query);

  $check_pass=mysqli_num_rows($run);

       if ($check_pass==0) {
       
    echo "<script>alert('Your current password is invalid..try again')</script>";
     echo"<script>window.open('profile.php','_self')</script>";
    exit();
  }
  if ($newpassword !== $confirmpassword) {

       $message = 'New Password and Confirm Password not matched';
       // echo ("New Password didn't match ,try again");
       echo "<script>alert('$message')</script>";
       echo "<script>window.open('profile.php','_self')</script>";
        exit();
    
  }

  else{
    $query2 ="update customer set c_pass='$newpassword' where c_email='$email'";
    $run2 =mysqli_query($con ,$query2);

       echo "<script>alert('Password has been upadted successfully..')</script>";
       echo "<script>window.open('profile.php','_self')</script>";
    }

  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>MY CUISINE| Change Password</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="My Cuisine, Cuisine ,Online Food Order, Food Order, Home Made Food" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--w3 cn -->
<!-- Custom Theme files -->
<link href="../css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="../css/style.css" type="text/css" rel="stylesheet" media="all">  
<link rel="../stylesheet" href="css/swipebox.css">
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="../css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href="//fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
<!-- //web-fonts -->

<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="../admin/css/style.css" rel='stylesheet' type='text/css' />
<link rel="../admin/stylesheet" href="css/morris.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="../admin/js/jquery-2.1.4.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
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

.show {display:block}
div {
    display: block;
}
</style>


</head>
<body>
  <div class="page-container">

   <?php include('header2.php');?>       
<!--heder end here-->
  <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../home.php">Home</a><i class="fa fa-angle-right"></i>Profile <i class="fa fa-angle-right"></i> Change Password</li>
            </ol>
   <div style="background-color: white">
    <div class="panel-body">
          <form action="" method="post" action="" class="form-horizontal">

            <div class="form-group">
              <label class="col-md-2 control-label">Current Password</label>
              <div class="col-md-8">
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-key"></i>
                  </span>
                  <input type="password" name="password" class="form-control1" id="exampleInputPassword1" placeholder="Current Password" required="">
                </div>
              </div>
            </div>

  <div class="form-group">
              <label class="col-md-2 control-label">New Password</label>
              <div class="col-md-8">
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-key"></i>
                  </span>
                  <input type="password" class="form-control1" name="newpassword" id="newpassword" placeholder="New Password" required="">
                </div>
              </div>
            </div>

  <div class="form-group">
              <label class="col-md-2 control-label">Confirm Password</label>
              <div class="col-md-8">
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-key"></i>
                  </span>
                  <input type="password" class="form-control1" name="confirmpassword" id="confirmpassword" placeholder="Confrim Password" required="">
                </div>
              </div>
            </div>

            <div class="col-sm-8 col-sm-offset-2">
        <button type="submit" name="submit" class="btn-primary btn">Submit</button>
        <button type="reset" class="btn-inverse btn">Reset</button>
      </div>
       </form>
    </div>
  </div>

 


<!-- footer here -->
<?php
include('short_footer.php');
 ?>


  <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

  <!-- //smooth-scrolling-of-move-up -->  
<!-- js -->
<script src="../js/jquery-2.2.3.min.js"></script> 
<!-- //js -->
<!--banner-Slider-->
            <script src="../js/responsiveslides.min.js"></script>
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
  <script src="../js/jquery.adipoli.min.js" type="text/javascript"></script>
  <script type="text/javascript"> 
    $(function(){ 
      $('.row2').adipoli({
        'startEffect' : 'overlay',
        'hoverEffect' : 'sliceDown'
      }); 
    });
    
  </script>
  <script src="../js/jquery.swipebox.min.js"></script> 
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
  <!--- <div style="background-color: white; height:50px"></div> -->


<!-- start-smooth-scrolling -->
<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/easing.js"></script> 
<script type="text/javascript">
    jQuery(document).ready(function($) {
      $(".scroll").click(function(event){   
        event.preventDefault();
    
    $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
      });
    });
</script>
<!-- //end-smooth-scrolling --> 
    <script src="../js/bootstrap.js"></script>
    
    <!--Login-Form -->
<?php include('c_login.php');?>
<!--/Login-Form --> 

<!--Register-Form -->
<?php include('registration.php');?>

<!--/Register-Form --> 

<!--Forgot-password-Form -->
<?php include('../includes/forgotpassword.php');?>
<?php include('post_testimonial.php');?>

<!--/Forgot-password-Form -->
<?php ?> 
  
</body>
</html>
<?php } ?>