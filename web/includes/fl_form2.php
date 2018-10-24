<?php 
session_start();
include('../admin/includes/db.php');

if(isset($_POST['fl_register'])) {
  
  $name =$_POST['name'];
  $email =$_POST['email'];
  $kname =$_POST['kname'];
  $contact =$_POST['contct_no'];
  $city =$_POST['city'];
  $address =$_POST['address'];
  $servce=$_POST['service'];

  //login details
  $l_email=$_POST['log_email'];
  $l_pass=$_POST['log_pass'];

//status value
  $val='0';
  //read status
  $rstatus="1";



  $query="INSERT INTO fl_info(fl_name,fl_email,fl_kitchen_name,fl_contact,fl_address,fl_city,fl_service) values ('$name','$email','$kname','$contact','$city','$address','$servce')";
  $run=mysqli_query($con, $query);

  if ($run) {

    echo "<script>alert('You have successfully registered your self for foodlancer!')</script>";
  }
    else {
   # echo "Error: " . $query . "<br>" . mysqli_error($con);
    echo "<script type='text/javascript'> document.location = 'fl_form2.php'; </script>";
   }

   $query2="INSERT INTO fl_login(email,pass,status,r_status) values ('$l_email','$l_pass','$val','$rstatus')";
$run=mysqli_query($con, $query2);
      
  }



?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>MY CUISINE| Registration Form</title>
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

.show {display:block;}

.content_wrapper{
  width:1000px;
  height:auto;
  background:#000;
}
#left_sidebar{
  width:200px;
  float:left;
  background:#000; 
  border: 2px solid #FFF;
}
#sidebar_title{
  background: #FFF;
  color: #000;
  padding: 10px;
  font-family: "Palatino Linotype","Book Antiqua", Palatino  , serif;
  font-size:22px;


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
    #cats img{
    border:2px solid #FFF;
    }    
    #headline {
      background: #000;
      color: white;
      height:35px;
      width: 780px;
      padding: 10px;
    } 
       #headline_content{
        float:right;
       }
  /* from css */
  body {
  font-family: Arial;
}

input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=email] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div.containerr {
    border-radius: 10px;
    background-color: #f2f2f2;
    padding: 20px;
}

</style>


</head>
<body>
  <div class="page-container">

   <?php include('header2.php');?>
   
     <div class="clearfix"> </div>  
       
<!--heder end here-->
  <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../home.php">Home</a><i class="fa fa-angle-right"></i>Food Lancer Registration</li>
            </ol>
   <div style="background-color:white">
    <div class="panel-body">
      
     <h3><b>Registration Form</b></h3><br>

<div class="containerr">
  <form action="" method="post">
    <label >Yor Name</label>
    <input type="text" name="name" placeholder="Your name.." required>

    <label >Your Email</label>
    <input type="email"  name="email" placeholder="Your Email.." required>

    <label >Yor Kitchen Name</label>
    <input type="text" name="kname" placeholder="Your kitchen name.." required>


    <label>Your Contact No.</label>
    <input type="text"  name="contct_no" placeholder="Your Contact number.." required>

    <label for="lname">Your Address</label>
    <input type="text"  name="address" placeholder="Your Address.." required>

    <label for="lname">Your City</label>
    <input type="text"  name="city" placeholder="Your City.." required>


    <label required >Services Pick Up or Delivery?</label>
    <select  name="service">
      <option >Delivry & Pickup</option>
      <option >Delivery Only</option>
      <option >Pickup Only</option>
      <option >Delivery / Pickup /Dinein</option>
      <option >Delivery & Dinein</option>
      <option >Pickup & Dinein</option>
      <option >Dinein Only</option>
    </select>
<br>
    <h3><b>Login Information</b></h3>
<br>
     <label >Email</label>
    <input type="email"  name="log_email" placeholder="Your Email Address.." required>

    <label > Password</label>
    <input type="text" name="log_pass" placeholder="Your Password.." required>
    <span style="font-size: 18px; color: grey"><b>Note:</b> Rember login informtion for later use.You will need this.</span>
  
    <input type="submit" value="Submit" name="fl_register">
  </form>
</div>

        
    </div>

  </div>
  <?php
include('short_footer.php');
 ?>

  <?php



?>    

<!-- footer here -->

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


