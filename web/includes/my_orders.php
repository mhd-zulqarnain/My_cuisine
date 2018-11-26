<?php 
session_start();
include('../admin/includes/db.php');


/*if (isset($_GET['edit_account'])) {
  
  $c_email= $_SESSION['c_email'];

  $query ="select * from customer where c_email='$c_email'";
  $run=mysqli_query($con,$query);

  $row=mysqli_fetch_array($run);

    $id      =$row['c_id'];
    $name    =$row['c_name'];
    $email   =$row['c_email'];
    $pass    =$row['c_pass'];
    $city    =$row['c_city'];
    $contact =$row['c_contact'];
    $address =$row['c_address'];
    $image   =$row['c_image'];
} */

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>MY CUISINE| My Orders</title>
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

</style>


</head>
<body>
  <div class="page-container">

   <?php include('header3.php');?>
   
     <div class="clearfix"> </div>  
       
<!--heder end here-->
  <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../home.php">Home</a><i class="fa fa-angle-right"></i>Profile <i class="fa fa-angle-right"></i>My Orders</li>
            </ol>
   <div style="background-color: white">
    <div class="panel-body">
          
              <form action="" method=""   class="form-horizontal" enctype="multipart/form-data">
    <center><h3>Your Orders</h3> </center>
<table class="table table-striped table-hover table-bordered" align="center" style='width:1000px;height:auto;margin-bottom:230px'>
  <tr>
    <th>S.NO</th>
    <th>Item Name</th>
    <th>Quantity</th>
    <th>Invoice No:</th>
    <th>Total Amount</th>
    <th>Order Date</th>
    <th>Status</th>
    
  </tr>

 <?php
      if(isset($_SESSION['c_email'])) {
$email=$_SESSION['c_email'];
$sql ="SELECT c_id FROM customer WHERE c_email='$email'";
$run=mysqli_query($con,$sql);
$row=mysqli_fetch_array($run);       
$c_id=$row['c_id'];

      $query2 = "select *from customer_orders where c_id='$c_id' ";
      $run2= mysqli_query($con,$query2);
      //for ssrial
      $i=0;

      while ($row=mysqli_fetch_array($run2)) {
        $item_name=$row['item_name'];
        $qty=$row['total_fooditems'];
        $invoice_no=$row['invoice_no'];
        $total=$row['due_amount'];
        $order_date=$row['order_date'];
        $status=$row['order_status'];

        $i++;
        
        echo "
        <tr align='center'>
        <td>$i</td>
        <td>$item_name</td>
        <td>$qty</td>
        <td>$invoice_no</td>
        <td>$total</td>
        <td>$order_date</td>
        <td>$status</td>
        </tr>

        ";
      
      }
    }
  ?>
  
</table>
</form>

           

  

    </div>
  </div>
  <?php
include('short_footer.php');
 ?>

  <?php
if (isset($_POST['c_update'])) {

  $update_id = $id;

  $c_name=$_POST['c_name'];
  $c_email=$_POST['c_email'];
  $c_pass=$_POST['c_pass'];
  $c_city=$_POST['c_city'];
  $c_contact=$_POST['c_contact'];
  $c_address=$_POST['c_address'];

  $c_image=$_FILES['image']['name'];
  $c_image_tmp=$_FILES['image']['tmp_name'];
 move_uploaded_file($c_image_tmp,"../customer_images/$c_image");



  $query ="update customer set c_name='$c_name', c_email='$c_email', c_pass='$c_pass', c_city='$c_city',c_contact='$c_contact', c_address='$c_address', c_image='$c_image' where c_id='$update_id'";
  $run=mysqli_query($con,$query);

    if($run){
      echo "<script>alert('Your Account has been updated successfully!')</script>";
      echo "<script>window.open('profile.php','_self')</script>";

    }


}

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


