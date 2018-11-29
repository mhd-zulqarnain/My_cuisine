<?php
session_start();
error_reporting(0);
//include('../function/function.php');

if(isset($_POST['add_to_cart']))
{  

  if (isset($_SESSION["shopping_cart"]))
  {
     //if session has data get it in aarry format 
    $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
 
    if (!in_array($_GET['prd_id'], $item_array_id)) {

       $count = count($_SESSION["shopping_cart"]); 
      $item_array =array(
      'item_id'       =>$_GET['prd_id'],
      'item_name'     =>$_POST['hd_name'],
      'item_price'    =>$_POST['hd_price'],
      'item_quantity' =>$_POST['qty'],
      'id'            =>$_POST['hd_flid']
    );
       $_SESSION["shopping_cart"][$count]= $item_array;
       // array_push($_SESSION['shopping_cart'], $item_array);
    }
    else{
             echo '<script>alert("Item already added")</script>';
            // echo "<script>window.location('homekitchen4.php')</script>";
            //  echo "<script>window.location='homekitchen4.php?<?php echo 'flid='.$_GET['flid']
            // echo "<script>header('index.php')</script>";
    }
  }
    
  else{
    //when session has no data 
      
    $item_array =array(
      'item_id'       =>$_GET['prd_id'],
      'item_name'     =>$_POST['hd_name'],
      'item_price'    =>$_POST['hd_price'],
      'item_quantity' =>$_POST['qty'],
      'id'            =>$_POST['hd_flid']
    );
    //storing all details to session from item array
    $_SESSION["shopping_cart"][0] = $item_array;
    echo '<script>alert("Item has been Added to the cart")</script>';
    //echo '<script>("Item Added to the cart")</script>';
   // global $db;
   // $ip_add =getRealIpAddr();

    // $query ="insert into cart (p_id,ip_add) values ('$_SESSION['shopping_cart"][1]','$ip_add')";

   // $run= mysqli_query($db,$query);

  }

}
if(isset($_GET["action2"]))
 {
  if($_GET["action2"] == "delete")
   {

    foreach($_SESSION["shopping_cart"] as $keys => $values)
     {
      if($values["item_id"] == $_GET['idd'])
       { 

        unset($_SESSION["shopping_cart"][$keys]);

        echo "<script>alert('Item Removed')</script>";
        //echo "<script>window.location='homekitchen4.php?<?php echo 'flid='.$_GET['flid'];
        echo "<script>header('../index.php')</script>";
      }
    }
   
  }
}
/*if (isset($_GET["action"])) {

    if(!isset($_SESSION["c_email"])){

      echo "<script>alert('Please Login First or Register to Place order')</script>";
        //include("customer/customer_login.php");
            //echo "<script>window.open('c_login.php')</script>";
           // echo "<a href="#loginform"  data-toggle="modal" data-dismiss="modal">Profile Settings</a>";        
}else
{
  echo "<script>window.open('payment_option.php')</script>";
}

}*/ 

if (isset($_GET["action"])){

  
  $c_ip= getRealIpAddr();

  $query="select * from customer where customer_ip ='$c_ip'";
  $run =mysqli_query($con,$query);

  $row=mysqli_fetch_array($run);
  $cid=$row['c_id'];
  $cname=$row['c_name'];


  if(!empty($_SESSION["shopping_cart"]) AND !empty($_SESSION["c_email"]) ) 
   {
  $total = 0;
  foreach ($_SESSION["shopping_cart"] as $keys => $values){

      $item_name= $values["item_name"]; 
      $qty=$values["item_quantity"];
      $price=$values["item_price"];
      $fid=$values["id"];
      $item_price = number_format($values["item_quantity"] * $values["item_price"] ,2);

       $g_total = $total + ($values["item_quantity"] * $values["item_price"]); 
   
    $status='Pending'; 
    $invoice_no=mt_rand();
    $rstatus='1';

    $query="insert into customer_orders(c_id,c_name,fl_id,due_amount,item_name, invoice_no, total_fooditems, order_date,
    order_status,r_status) values('$cid','$cname','$fid','$g_total','$item_name','$invoice_no','$qty',NOW(),'$status','$rstatus')";
   $run=mysqli_query($con,$query);

   // $query2="insert into pending_orders(c_id,invoice_no,total_fooditems,order_date,order_status) values('$cid','$price','$invoice_no','$qty',NOW(),'$status')";
   //$run2=mysqli_query($con,$query);

   if($run){
   echo "<script>alert('order submitted')</script>";
     unset($_SESSION["shopping_cart"][$keys]);
   // echo "<script>window.open('payment_option.php')</script>";
    }

  } 

  }
else{
     echo "<script>alert('Either Your cart is Empty or You are not login')</script>";
}
/*if (!isset($_SESSION["c_email"])) {
      echo "<script>alert('Please Login First or Create Account ')</script>";
    } */


}else/*{
  echo "<script>alert('Please Login First or Create Account ')</script>";

}*/
?>




<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
<style type="text/css">
  
 /* w3 */
    /* Style the tab */

#contact-form { width: 600px; padding: 15px; background: #252525; margin: 0 auto; }

ul { margin: 0 auto; padding: 0px; }

li { list-style: none; display: inline-block; margin: 0px; padding: 0px;}

li button { width: 297px; padding: 5px; }

h2 { color: #fff; margin-top: 0px; padding-top: 0px;}

form { 
  margin: 0 auto; 
  padding: 15px;
}

form p {
  color: #fff;
  padding: 0px;
  margin-bottom: 5px;
}

form label {
  font: normal 18px Arial, Helvetica; text-align: center;
}

form textarea {
  padding: 10px;
  width: 550px;
  height: 150px;
}

form div {
  margin-bottom: 10px;
}

input, select {
  padding: 10px;
  width: 300px;
}
select { width: 324px; }

label span { color: #BA8Df0; }

input, textarea, select {
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  outline: none;
  font: normal 18px Arial, Helvetica;  
}
 
input:focus, textarea:focus {
  -webkit-box-shadow: 0 0 4px 3px #BA8DF0;
  -moz-box-shadow: 0 0 4px 3px #BA8DF0;
  box-shadow: 0 0 4px 3px #BA8DF0;
  border: 1px solid #BA8DF0;
}

.button {
    -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  display: block;
  margin: 0 auto;
  -moz-border-radius:4px;
  -webkit-border-radius:4px;
  border-radius:4px;
  background: #BA8Df0;
  color:#252525;
  border: none;
  font: bold 18px Arial, Helvetica; text-align: center;
}

.button:hover {
  box-shadow: inset 0 0px 10px 3px #7617eb;
}

.button:active {
  color: #fff;
  background: #7617eb;
}
.wrapper {
  width: 90%;
  margin: 1em auto;
  background: rgba(255, 255, 255, 0.2);
  padding: 0.5em 2em 0.5em 2em;
  border-radius: 20px;
  box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
}
.wrapper h1 {
  font-family: Calibri, sans-serif;
  font-weight: 500;
  line-height: 1em;
  text-align: center;
  margin: 0;
  font-size: 3em;
}
.wrapper h1 span {
  font-size: 0.2em;
  background: rgb(81, 206, 129);
  padding: 0.2em 0.5em;
}
.profiling-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-evenly;
}
.question {
  margin: 0 1em;
  display: flex;
  flex-direction: column;
  align-items: center;
  color: black;
}
.question select {
  border: rgb(0,0,0,0.5);
  height: 2.2em;
  width: 20em;
  font-size: 0.9em;
  box-sizing: 1px 1px 1px 2px rgba(0, 0, 0, 0.5);
}
.submit-button {
  display: flex;
  justify-content: flex-end;
  
   width: 150px;
  text-align: center;
  margin:0 auto;
}
.submit-button input {
  padding: 0.5em 4em;
  margin: 1em 0;
  font-size: 1em;
  background: rgb(0, 0, 0, 0.5);
  color: #fff;
  border: none;
  border-radius: 10px;
  box-shadow: 0 0 0 1px rgba(255, 255, 255, 0.2);
  outline: none;
  transition: all 0.2s;
}
.submit-button input:active {
  background: black;
  box-shadow: none;
  color: blue;

}

.display {
  margin: 1em;
  /* background: rgba(0, 0, 0, 0.2); */
}
.result-container {
  margin: 1em;
  display: flex;
  flex-wrap: nowrap;
  justify-content: space-around;
  min-height: 100vh;
}
.pill {
  color: #000;
  height: min-content;
  width: min-content;
  display: flex;
  float:left;
  flex-direction: column;
  background: #f0f9f9;
  padding: 1em;
  margin: 1em;
  
  border: 10px #a5cce2;
  border-radius: 10px;
  box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.2);
   white-space: nowrap;
}
.pill > * {
  margin: 0;
  text-align: center;
  list-style: none;
  display: inline;

}
.pill p {
  margin-bottom: 1em;
}
.pill p.calories {
  margin: 1em 0 0 0;
}
.pill .title {
  font-size: 1.5em;
  margin-bottom: 0.2em;
}
.pill span {
  margin: 1em auto;
  padding: 0.2em 0.5em;
  background: rgb(11, 45, 97);
  color: white;
  text-align: center;
  width: fit-content;
}
.pill .tags span {
  margin: 0.5em auto;
  border-radius: 5px;
  margin-top: 0;
}

.tags {
  display: flex;
  flex-wrap: wrap;
  margin: 0.7em 0 0 0.7em;
}
.pill btn {
  text-decoration: none;
  padding: 0.4em 1em 0.5em 1em;
  background: #26f393;
  width: fit-content;
  margin: 0 auto;
  color: white;
  border-radius: 10px;
  border: black;
  transition: transform 0.2s ease-in-out;
  transform: scaleX(0.95);
}
.pill btn:hover {
  transform: scaleX(1);
}
.pill ol {
  margin-bottom: 0.5em;
  background: rgba(255, 255, 255, 0.9);
  height: 20vh;
  overflow: scroll;
}
.pill li {
  text-align: left;
  padding-top: 0.2em;
  margin-bottom: 0.2em;
  /* display: flex;
  flex-direction: column;
  justify-content: space-evenly;
  align-content: space-evenly; */
}
@media (min-width: 0px) and (max-width: 370px) {
  .display {
    background: none;
  }
  .submit-button {
    justify-content: center;
  }
  .wrapper h1 span {
    display: none;
  }
  .pill {
    min-width: 280px;
    max-width: 100%;
  }
  .pill {
    font-size: 0.7em;
  }
  .pill ol {
    height: unset;
  }
}
@media (min-width: 800px) {
  .wrapper {
    width: 800px;
  }
}
@media (min-width: 1200px) {
  .wrapper {
    width: 1200px;
  }



input[type="button"], input[type="submit"] {
  transition: 0.5s all;
  -webkit-transition: 0.5s all;
  -moz-transition: 0.5s all;
  -o-transition: 0.5s all;
  -ms-transition: 0.5s all;
}

h1 {
  font-size: 47px;
    font-weight: 600;
    color: #FFF;
    letter-spacing: 2px;
    margin: 40px auto;
  text-align:center;
}

.containerw3layouts-agileits {
  width: 40%;
  margin: 0 auto;
  background: #f5ededde;
  padding: 1em 2em;
  margin-top: 100px;
}

.w3layoutscontactagileits h2 {
  font-size: 25px;
  text-align: center;
  padding: 10px 0;
  margin-bottom: 25px;
}

a.hiddenanchor{
    display: none;
}

#wrapper {
    width: 100%;
    position: relative;
}
/*--w3layouts--*/
input[type="text"]{
  width: 100%;
    padding: 7px;
    border: none;
    font-size: 15px;
    outline: none;
    color: #000;
    background-color:#fff;
    margin-top: 12px;
    margin-bottom: 30px;
  border-bottom:1px solid #fff;
  box-sizing:border-box;
}
textarea#message {
    height: 150px;
     padding: 7px;
    border: none;
    font-size: 15px;
    outline: none;
    color: #000;
    background-color:#fff;
    margin-top: 12px;
    margin-bottom: 18px;
    width: 100%;
  border-bottom:1px solid #fff;
  resize:none;
  box-sizing:border-box;
   
}
/*--agileits--*/
#register, #login{
  width: 100%;
}

#toregister:target ~ #wrapper #register, #tologin:target ~ #wrapper #login{
  -webkit-animation-name: fadeInLeft;
  -moz-animation-name: fadeInLeft;
  -ms-animation-name: fadeInLeft;
  -o-animation-name: fadeInLeft;
  animation-name: fadeInLeft;
  -webkit-animation-delay: .1s;
  -moz-animation-delay: .1s;
  -o-animation-delay: .1s;
  -ms-animation-delay: .1s;
  animation-delay: .1s;
}

#toregister:target ~ #wrapper #login, #tologin:target ~ #wrapper #register{
  -webkit-animation-name: fadeOutLeftBig;
  -moz-animation-name: fadeOutLeftBig;
  -ms-animation-name: fadeOutLeftBig;
  -o-animation-name: fadeOutLeftBig;
  animation-name: fadeOutLeftBig;
}

.animate{
  -webkit-animation-duration: 1s;
  -webkit-animation-timing-function: ease;
  -webkit-animation-fill-mode: both;    
  -moz-animation-duration: 1s;
  -moz-animation-timing-function: ease;
  -moz-animation-fill-mode: both;    
  -o-animation-duration: 1s;
  -o-animation-timing-function: ease;
  -o-animation-fill-mode: both;    
  -ms-animation-duration: 1s;
  -ms-animation-timing-function: ease;
  -ms-animation-fill-mode: both;    
  animation-duration: 1s;
  animation-timing-function: ease;
  animation-fill-mode: both;
}
/*--w3layouts--*/
/*--agileits--*/

h3 {
  font-size: 18px;
  font-weight: 700;
  color: #EEE;
  padding: 10px 0;
  border-bottom: 1px solid #CCC;
}

.ferry {
    padding: 0px 0px 0px;
    text-align: left;
}

h4 {
  font-size: 15px;
  text-align: left;
  color: #EEE;
}

form {
  margin-top: 0px;

}

select, .tickets input[type="number"] {
  width: 100%;
  padding: 7px;
  border: none;
  font-size: 15px;
  outline: none;
  color: #000;
  background-color:#fff;
  margin-top: 12px;
  margin-bottom: 30px;
  Border-bottom:1px solid #fff;
  box-sizing:border-box;
}

select.dropdown, input#datepicker, input#datepicker1, input#datepicker2 {
    width: 100%;
    padding: 10px 15px;
    margin-top: 12px;
    margin-bottom: 30px;
    outline: none;
    border: none;
    color: #000;
    background-color:#fff;
  Border-bottom:1px solid #fff;
  box-sizing:border-box;
}
 ::-webkit-input-placeholder {
color:#000 !important;
}
:-moz-placeholder { /* Firefox 18- */
color:#000 !important;
}
::-moz-placeholder {  /* Firefox 19+ */
color:#000 !important;
}
:-ms-input-placeholder {  
color:#000 !important;
}

.book-pag {
  text-align: left;
}

.book-pag h4 {
    font-size: 18px;
    font-weight: 700;
    color: #EEE;
    padding: 10px 0;
    text-align: center;
}

#register .book-pag-frm1, #register .book-pag-frm2 {
  width: 100%;
  float: left;
}

.date {
  background: url(../images/date-icon.png) no-repeat 95.5% 45% #fff;
  cursor: pointer;
  padding: 8px 0;
}

.book-pag-frm1 {
  padding-top: 0px;
}

label {
    font-size: 15px;
    color: #083072;
    float: left;
    width: 100%;
  letter-spacing: 1px;
    text-transform: capitalize;
      font-style: italic;
}

.tickets {
  text-align: left;
}


.tickets input[type="number"] {
  width: 100%;
}

.wthreesubmitaits {
    padding: 0px 0px 30px;
    text-align: center;
}

.wthreesubmitaits input[type="submit"] {
    padding: 15px 30px;
    font-size: 15px;
    border: none;
    outline: none;
    cursor: pointer;
    background: #a50057;
    color: #fff;
  letter-spacing: 3px;
}

.wthreesubmitaits input[type="submit"]:hover {
  background-color:#000;
}

p.change_link {
  color: #EEE;
  width: 100%;
  font-size: 15px;
  padding: 0 0 40px;
}

#wrapper p.change_link a {
  color: #FFEB3B;
  font-size: 18px;
  padding-bottom: 5px;
  margin-left: 10px;
  border-bottom: 3px solid #FFEB3B;
}

#wrapper p.change_link a:hover {
  color: #FFC107;
  border-bottom: 3px solid #FFC107;
}



.w3lsfooteragileits p a {
  color: #FFF;
}

.w3lsfooteragileits p {
  line-height: 25px;
  margin: 40px 0;
  text-align:center;
  color:#fff;
      font-size: 15px;
}

.w3lsfooteragileits p a:hover {
  color:#a50057;
}

/*-- Index-Page-Styling --*/

/** Responsive **/
@media screen and (max-width: 1080px){
.containerw3layouts-agileits {
    width: 35%;
} 
}
@media screen and (max-width: 991px){
.containerw3layouts-agileits {
    width: 40%;
} 
}
@media screen and (max-width: 768px){
.containerw3layouts-agileits {
    width: 45%;
} 
}
@media screen and (max-width: 667px){
.containerw3layouts-agileits {
    width: 55%;
} 
}
@media screen and (max-width: 600px){
h1 {
    font-size: 40px;
    margin: 30px auto;
} 
}
@media screen and (max-width: 568px){
.containerw3layouts-agileits {
    width: 60%;
} 
}

@media screen and (max-width: 480px){
h1 {
    font-size: 34px;
}
.containerw3layouts-agileits {
    width: 70%;
} 
}

@media screen and (max-width: 414px){
h1 {
    font-size: 28px;
    margin: 25px auto;
}
  
}
@media screen and (max-width: 384px){
.w3lsfooteragileits p {
    margin: 20px 0;
    font-size: 14px;
} 
}
@media screen and (max-width: 320px){
.wthreesubmitaits input[type="submit"] {
    padding: 15px;
} 
}  


.tab {
    float: left;
    /*border: 1px solid #ccc;*/
    background-color: #f1f1f1;
    width: 20%;
    height: 400px;
}

/* Style the buttons that are used to open the tab content */
.tab button {
    display: block;
    background-color: black;
    color: white;
    padding: 22px 16px;
    width: 100%;
    /*border: none;
   margin-top: 0px;*/
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color:grey;
}

/* Create an active/current "tab button" class */
.tab button.active {
    /*background-color: #ccc;*/
    background-color:grey;
}

/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;
    /*border: 2px solid #ccc;*/
    width: 80%;
    border-left: none;
    height: auto;
}  
/* w3-form */

/* The popup chat - hidden by default */
.chat-popup {

  display: none;
  position:absolute;
  bottom: 0;
  right: 25px; 
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 330px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #4CAF50;
  text-color: black;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

html
{
  height:100%;
  width:100%;
}
body{    
  background:url('images/jurassic-coast-1089035_1920.jpg') no-repeat;
  background-size: cover;
  height:100%;

}

.form-top{
  margin-top: 30px;

}
.panel{
  box-shadow: 0 1px 6px 0 rgba(0,0,0,.12), 0 1px 6px 0 rgba(0,0,0,.12);
  border-radius: 6px;
    border: 0;


}
@-moz-document url-prefix() {
    .form-control{
      height: auto;
    }
}
.panel-primary{
  background-color: #2c3e50;
  color: #fff;

}
.panel-primary>.panel-heading {
    color: #fff;
    font-size: 20px;
    background-color: #2c3e50;
    border-color: #2c3e50;
    position: relative;
}
.btn-warning{
  background-color: transparent;
  border-color: #bdc3c7;
}
.color{
  color: black;
}
h3 {
    font-size: 18px;
    font-weight: 700;
    color: #003366;
    padding: 10px 0;
    border-bottom: 1px solid #CCC;
}


</style>
<body>
<?php include('includes/comp.php');
include('includes/review.php');
include('includes/diabetes.php');
include('includes/cholestrol.php');
include('includes/sugar.php');
include('includes/weightgain.php');
include('includes/weightloss.php');
include('includes/monthlydetails.php');
include('includes/request_dietmenu.php');
?>
  
   <div >
   <!--<h2 style='background:#000; color:#FC9; padding: 15px; text-align:right;border-top: 0px solid black;margin-top: 0px;height: 60px;width: 100%'><a href="#" onclick="openForm()">cart</a></h2> -->
   
     <div class="container" style="width: 100%;padding-right: 0px;padding-left: 0px;">
      <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Menu</span>
            <span class="glyphicon glyphicon-menu-hamburger"></span>
            </button>
            
          </div>
          <div id="navbar-cart" class="navbar-collapse collapse" style="float: right;color: black">
            <ul class="nav navbar-nav">
              <li>
                <a id="cart-popover" class="btn" data-placement="bottom" title="Shopping Cart">
                  <span class="glyphicon glyphicon-shopping-cart"></span>
                  <span class="badge"></span>
                  <span class="total_price">Your Cart</span>
                </a>
                 <a href="#form"  data-toggle="modal" data-dismiss="modal" style="float: right;color: black;">
                  Complain</a>
                 <a href="#form1"  data-toggle="modal" data-dismiss="modal" style="float: right;color: black;">
                  Review</a>
              </li>
            </ul>
          </div>
          
        </div>
      </nav>
      <div id="popover_content_wrapper" style="display: none">
        <span id="cart_details"></span>
        <div align="right">
          <div align="left">
            <h3 style="color: black">Order Details</h3>

            <div class="table-responsive">
              <table class="table table-bordered">
                <tr>
                  <th width="40%"> Item Name</th>
                  <th width="10%">Quantity</th>
                  <th width="20%">Price</th>
                  <th width="15%">Total</th>
                  <th width="5%">Action</th>
                </tr>
                <?php
                if(!empty($_SESSION["shopping_cart"])) 
                {
                   $total = 0;
                   foreach ($_SESSION["shopping_cart"] as $keys => $values)
                   {
                ?>
                <tr>
                  <td><?php echo $values["item_name"]; ?></td>
                  <td><?php echo $values["item_quantity"]; ?></td>
                  <td>Rs <?php echo $values["item_price"]; ?></td>
                  <td><?php echo number_format($values["item_quantity"] * $values["item_price"] ,2); ?></td>
                  <td><a href="homekitchen4.php?<?php echo 'flid='.$_GET['flid']/*.'&prd_id='.$row['idd']*/.'&action2=delete'.'&idd='.$values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
                </tr>

                <?php

                   $total = $total + ($values["item_quantity"] * $values["item_price"]); 
                   }
                 ?>
                 <tr>
                   <td colspan="3" align="right">Total</td>
                   <td align="right">Rs: <?php echo number_format($total, 2); ?></td>
                   <td></td>
                 </tr> 
                 <?php 
                }else
                {
                  echo "<center><b>Your Cart is Empty</b></center>";
                }
                ?>
              
            
                
              </table>
              
            </div>
          </div>
         
 
         <!--  <a href="homekitchen4.php?<?php echo 'flid='.$_GET['flid'].'&action='.'checkout';?>" class="btn btn-primary" id="check_out_cart"> <a href="homekitchen4.php?<?php echo 'flid='.$_GET['flid'].'&action='.'checkout';?>" class="btn btn-primary" id="check_out_cart"> <span class="glyphicon glyphicon-shopping-cart"></span> Check out
          </a>--->
           <a  href="homekitchen4.php?<?php echo 'flid='.$_GET['flid'].'&action='.'checkout';?>" class="btn btn-primary" id="check_out_cart" class="btn btn-primary" >
          <span class="glyphicon glyphicon-shopping-cart"></span> Check out
          </a>
          <a href="#" class="btn btn-default" id="clear_cart">
          <span class="glyphicon glyphicon-trash"></span> Clear
          </a>
        </div>
      </div>
    </div>
    
    </div>

 <div>            
<div class="tab" style="margin-top: 0px;">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Daily Menu</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Monthly Menu</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Party Menu</button>
   <button class="tablinks" onclick="openCity(event, 'Pariss')">Diet Menu</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyoo')">Weekly Trial</button>
    <button class="tablinks" onclick="openCity(event, 'Tokyooo')">Special Deals</button>
</div>

<!--form 

<div class="chat-popup" id="myForm">
  <form action="#" class="form-container">
    <h1>Chat</h1>

    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" required></textarea>

    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div> -->

<div id="London" class="tabcontent" style="margin-top: 0px; color: black;">
  <!--<h3 style="margin-left: 12px">Daily Menu</h3> -->
   <div class="container" style="width:1000px;padding-top: 10px;margin-left: 5px;">
                     <div class="panel panel-default">
                       <div class="panel-heading"><h3 style="color: black"><b>Daily Menu</b></h3></div>
                        <div class="container" style="width:650px;margin-top: 10px;margin-left:15px">
                      
                           <p style="color: black">Daily regular deals</p>
                            <?php 
     //if (isset($_GET['flid'])){
      $id=$_GET['flid'];
     //}
    $val='Daily menu';
    $query ="select * from food_items where category='$val' and fl_id='$id'";
    $run=mysqli_query($con,$query);
  
 while ($row=mysqli_fetch_array($run)) {
                    

                         ?>
                      <div class="well well-lg" style="margin-left: 3px;height: 145px;width: 900px">
                      
                            <div class="panel-body">
                              <form  method="post" action="homekitchen4.php?<?php echo 'flid='.$_GET['flid'].'&prd_id='.$row['idd']/*.'&action='.'add'.'&pid='.$row['idd']*/;?>">
                                <!-- <form action="homekitchen4.php?action=add&id=<?php //echo $row['idd']?>"> -->
                              <div class="row even">
                                <div class="col-md-7 col-xs-7 border text-info"> <?php echo $row['f_title'];?></div> 
                                <div class="col-md-3 col-xs-3 food-price-wrap border"> <?php echo $row['servings'];?> </div> 
                                <div class="col-md-3 col-xs-3 food-price-wrap border" style="margin-left: 500px"> Rs: <?php echo $row['f_price'];?> </div>

                                <input type="text" name="qty" class="form-control col-md-3 col-xs-3 food-price-wrap border" value="1"/ style="width: 150px;" placeholder="Enter Quantity">

                               

                                <input type="hidden" name="hd_name" class="form-control" value="<?php echo $row['f_title']?>"/>
                                <input type="hidden" name="hd_price" class="form-control" value="<?php echo $row['f_price']?>"/>
                                <input type="hidden" name="hd_flid" class="form-control" value="<?php echo $_GET['flid'];?>"/>
                               <!-- <input type="hidden" name="hd_ser" class="form-control" value="<?php echo $row['servinngs']?>"/> -->

                                 <input type="submit" name="add_to_cart" style="margin-top: 5px;margin-left: 360px" class="btn btn-success " value="Add to Cart">


                                <!--<a href="includes/ur_cart.php?pro_id=<?php //echo $row['id'];?>" ><i class="fa fa-plus green-color bold"></i></a> 
                                  <a href="homekitchen4.php?<?php //echo 'flid='.$_GET['flid'].'&prd_id='.$row['idd'];?>" ><i class="fa fa-plus green-color bold"></i></a>-->

                              </div>
                              </form>
                           </div>
                           
                           
                           
                    </div>
                     <?php
} 
?>
 
                       
                     </div>

                  
                     
               </div>
  <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>

  <!-- -->
</div>
<div id="Paris" class="tabcontent" style="display:none;">
  
   <div class="container" style="width:1000px;padding-top: 10px;margin-left: 5px;">
                     <div class="panel panel-default">
                       <div class="panel-heading"><h3><b>Monthly Menu</b></h3></div>
                        <div class="container" style="width:650px;margin-top: 10px;margin-left:15px">
                      
                           <p>full month deals</p>
                            <?php 
     if (isset($_GET['flid'])) {
      $id=$_GET['flid'];
     }
    $val='Monthly menu';
    $query ="select * from food_items where category='$val' and fl_id='$id'";
    $run=mysqli_query($con,$query);
 while ($row=mysqli_fetch_array($run)) {
                    

                         ?>
                      <div class="well well-lg" style="margin-left: 3px;height: 200px;width: 900px">
 
                            <div class="panel-body">
                                 <form  method="post" action="homekitchen4.php?<?php echo 'flid='.$_GET['flid'].'&prd_id='.$row['idd']/*.'&action='.'add'.'&pid='.$row['idd']*/;?>">
                                <!-- <form action="homekitchen4.php?action=add&id=<?php //echo $row['idd']?>"> -->
                              <div class="row even">
                                <div class="col-md-7 col-xs-7 border text-info"> <?php echo $row['f_title'];?></div> 
                                <div class="col-md-3 col-xs-3 food-price-wrap border"> <?php echo $row['servings'];?> </div> 
                                <div class="col-md-3 col-xs-3 food-price-wrap border" style="margin-left: 500px"> Rs: <?php echo $row['f_price'];?> </div>

                                <input type="text" name="qty" class="form-control col-md-3 col-xs-3 food-price-wrap border" value="1"/ style="width: 150px;" placeholder="Enter Quantity"/>

                               

                                <input type="hidden" name="hd_name" class="form-control" value="<?php echo $row['f_title']?>"/>
                                <input type="hidden" name="hd_price" class="form-control" value="<?php echo $row['f_price']?>"/>
                               <!-- <input type="hidden" name="hd_ser" class="form-control" value="<?php echo $row['servinngs']?>"/> -->
                               <a href="#formdetails" data-toggle="modal" data-dismiss="modal" name="view" value="view"  class="view_data" style="font-size: 120%;" onclick="test(<?php
                               echo $row['idd'] ?>)">Details</a>
                                 <input type="submit" name="add_to_cart" style="margin-top: 5px;margin-left: 360px" class="btn btn-success " value="Add to Cart"/>


                                <!--<a href="includes/ur_cart.php?pro_id=<?php //echo $row['id'];?>" ><i class="fa fa-plus green-color bold"></i></a> 
                                  <a href="homekitchen4.php?<?php //echo 'flid='.$_GET['flid'].'&prd_id='.$row['idd'];?>" ><i class="fa fa-plus green-color bold"></i></a>-->

                              </div>
                              </form>
                             
                           </div>
                           
                           
                    </div>
                     <?php
} 
?>
 
                       
                     </div>

                  
                     
               </div>
  <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
   
</div>
<div id="Tokyo" class="tabcontent" style="display:none;">
  <div class="container" style="width:700px;padding-top: 10px;margin-left: 5px;">
                     <div class="panel panel-default" style="width:1200px; background-color: #eed5d5;" >

                       <div class="panel-heading" ><h3><b>Reserve us for upcoming event!</b></h3></div>
                        <div class="container" style="width:600px;margin-top: 10px;margin-left:15px;  ">
                      <div id="reservation" class="light-wrapper">
        <section class="ss-style-top"></section>
        <div class="container inner" >
            <h2 class="section-title text-center" style="color:  #660000;">Reservation</h2>
            <p class="lead main text-center">Reserve us for dawat &amp; enjoy.</p>
            <div class="row">
                <div class="col-md-6">
                    <form class="form form-table" method="post" name="">
                        <div class="form-group" 
                            <h4 style="color: black;">Fill the form for reservation (all fields required)</h4>
                        </div>

                        <div class="row">
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="first_name1">Name</label>
                            <input class="form-control hint" type="text" id="first_name1" name="name" placeholder="Name" required="">
                          </div>
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="last_name1">Address</label>
                            <input class="form-control hint" type="text" id="last_name1" name="address" placeholder="Address" required="">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="email1">email</label>
                            <input class="form-control hint" type="email" id="email1" name="email" placeholder="Email@domain.com" required="">
                          </div>
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="phone1">phone</label>
                            <input class="form-control hint" type="text" id="phone1" name="phone" placeholder="Phone" required="">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="reserv_date1">reservation date</label>
                            <input class="form-control datepicker hasDatepicker hint" type="text" id="reserv_date1" name="reservation_date" placeholder="Reservation date" required="">
                          </div>
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="numb_guests1">number of guests</label>
                            <input class="form-control hint" type="text" id="numb_guests1" name="no_of_guest" placeholder="Number of guests" required="">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="alt_reserv_date1">time from</label>
                            <input class="form-control datepicker hasDatepicker hint" type="text" id="alt_reserv_date1" name="time_from" placeholder="Time from" required="">
                          </div>
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="time1">time</label>
                            <input class="form-control timepicker ui-timepicker-input hint" type="text" id="time1" name="time_to" placeholder="Time to" required="" autocomplete="off">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-12 col-md-12">
                            <p></p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-12 col-md-12">
                            <button type="submit" name="reserve" class="btn btn-danger btn-lg">Reserve!</button>
                          </div>
                        </div>
                      </form>
                </div><!-- col-md-6 -->
                <div class="col-md-5 col-md-offset-1">
                    
                    <h3><i class="fa fa-clock-o fa-fw"></i>Hours</h3>
                    <h4 style="color:  #660000;">Lunch</h4>
                    <p>Mon to Fri: 12:00 PM - 5:00 PM</p>
                    <h4 style="color:  #660000;">Dinner</h4>
                    <p>Mon to Sat: 6:00 PM -  1:00 AM<br>Sun: 5:30 PM - 12:00 AM</p>

                    <h3><i class="fa fa-map-marker fa-fw"></i>Directions</h3>
                    <p>Av das Américas, 4.666, Shopping Barra, Barra da Tijuca, Rio de Janeiro, RJ, Brazil</p>

                    <h3><i class="fa fa-mobile fa-fw"></i>Contacts</h3>
                    <p>Email: <a href="mailto:yourname@tastybox.com">tastybox@customerservice.com</a></p>
                    <p>Phone: +234 3456 678</p>

                </div><!-- col-md-6 -->
            </div>
            <!-- /.services --> 
        </div>
        <!-- /.container -->
        <section class="ss-style-bottom"></section>
    </div><!-- #reservation -->

                           
                     </div>

                  
                     
               </div>
  <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
</div>
</div>
</div>
<?php
if(isset($_POST['reserve']))
{
$name=$_POST['name'];
$address=$_POST['address']; 
$email=$_POST['email']; 
$phone=$_POST['phone'];
$reservation_date=$_POST['reservation_date'];
$no_of_guest=$_POST['no_of_guest']; 
$time_from=$_POST['time_from']; 
$time_to=$_POST['time_to'];
$query="INSERT INTO reservation(name,address,email,phone,reservation_date,no_of_guest,time_from,time_to) VALUES('$name','$address','$email','$phone','$reservation_date','$no_of_guest','$time_from','$time_to')";
$run=mysqli_query($con,$query);
if($run)
{
echo "<script>alert('Request sent to foodlancer');</script>";
}
else 
{
echo "<script>alert('Something went wrong. Please try again');</script>";
}
}
?>

<div id="Pariss" class="tabcontent" style="display:none;">
  <div class="w3-display-container" style="position: relative;">
              <div class="w3-padding w3-display-right" style="position: absolute;
    top: 300px;
    right: 5px;
    font-size: 60px;
   ">
                 
                 <p><a href="#formm" data-toggle="modal" data-dismiss="modal" style="float: right; font-size: 120%;">Calorie chart for diabetes</a></p>
                 <p><a href="#formw" data-toggle="modal" data-dismiss="modal" style="float: right; font-size: 120%;">Calorie chart for weight loss</a></p>
                 <p><a href="#formf" data-toggle="modal" data-dismiss="modal" style="float: right; font-size: 120%;">Calories chart for gaining weight</a></p>
                  <p><a href="#formcarb" data-toggle="modal" data-dismiss="modal" style="float: right; font-size: 120%;">Calorie chart for sugar person</a></p>
                 <p><a href="#formpro" data-toggle="modal" data-dismiss="modal" style="float: right; font-size: 120%;">Calorie chart for cholestrol level</a></p>
            </div>
            </div>
   <div class="container" style="width:1000px;padding-top: 10px;margin-left: 5px;" >
                     <div class="panel panel-default" >
                       <div class="panel-heading"><h3><b>Diet Menu</b></h3></div>
                        <div class="container" style="width:650px;margin-top: 10px;margin-left:15px">
                      
                         
                            
                           <?php
                            $id=$_GET['flid'];
include("function/function.php");
include("includes/db.php");

$hostname="localhost";
$username="root";
$password="";
$databaseName="cuisine_data";
$connect=mysqli_connect($hostname,$username,$password,$databaseName);
$query="SELECT DISTINCT calories FROM `food_items` where category='diet menu'";
$query1="SELECT DISTINCT fats FROM `food_items` where category='diet menu'";
$query2="SELECT DISTINCT carb FROM `food_items` where category='diet menu'";
$query3="SELECT DISTINCT proteins FROM `food_items` where category='diet menu'"; 

//$result1=mysqli_query($connect,$query);
$result=mysqli_query($connect,$query);
$result1=mysqli_query($connect,$query1);
$result2=mysqli_query($connect,$query2);
$result3=mysqli_query($connect,$query3);
$options="";
 if($result->num_rows>0)
       {
        while($row2=mysqli_fetch_array($result))
        {
         $options=$options."<option>$row2[0]</option>";
        }
}
$options1="";
 if($result1->num_rows>0)
       {
        while($row2=mysqli_fetch_array($result1))
        {
         $options1=$options1."<option>$row2[0]</option>";
        }
}
$options2="";
 if($result2->num_rows>0)
       {
        while($row2=mysqli_fetch_array($result2))
        {
         $options2=$options2."<option>$row2[0]</option>";
        }
}
$options3="";
 if($result3->num_rows>0)
       {
        while($row2=mysqli_fetch_array($result3))
        {
         $options3=$options3."<option>$row2[0]</option>";
        }
}

//ERROR IN QUERY
?>
<form  method="POST"  style="background-color:#eed5d5;">
        
          
       <div>
              <p><label for="name">Enter number of calories! <span>*</span></label></p>
              <input type="text" id="calories" name="calories" required="">
        </div>
         <div>
              <p><label for="name">Enter number of Fats! <span>*</span></label></p>
              <input type="text" id="fats" name="fats" required="">
        </div>
         <div>
              <p><label for="name">Enter number of Carbohydrate! <span>*</span></label></p>
              <input type="text" id="carb" name="carb" required="">
        </div>
            <div>
              <p><label for="name">Enter number of Proteins! <span>*</span></label></p>
              <input type="text" id="proteins" name="proteins" required="">
             </div>
        <div class="submit-button" style="text-align:center; display: flex; justify-content: center; ">
          <input type="submit" name="save" class="button" value="Submit">  

          <input type="button"  href="#formr" data-toggle="modal" data-dismiss="modal" class="button" value="Request For Diet menu" style="margin-left :5px">  

         </div>
        </form>
    </div>

    <div class="display">
        <?php 
$id=$_GET['flid'];
     if (isset($_POST['save'])){
      $ff_calories="'".$_POST['calories']."'";
      $food_fats="'".$_POST['fats']."'";
      $food_carb="'".$_POST['carb']."'";
      $food_proteins="'".$_POST['proteins']."'";
    $query ="select * from food_items where `calories`=$ff_calories and `fats`=$food_fats and `carb`=$food_carb and `proteins`=$food_proteins and category='diet menu'";
    $run=mysqli_query($con,$query);
    
 while ($row=mysqli_fetch_array($run)) {
                    

                         ?>
                         <form  method="post" action="homekitchen4.php?<?php echo 'flid='.$_GET['flid'].'&prd_id='.$row['idd']/*.'&action='.'add'.'&pid='.$row['idd']*/;?>">
    <div class="pill" style="width:500; display: inline-grid;">        
                <p class="title" style="color: black;"><?php echo $row["f_title"]; ?></p> 
                
                <span class="label">Cal:&nbsp;<?php echo $row["calories"]; ?> kcal</span>
                <span class="label">Fats:&nbsp;<?php echo $row["fats"]; ?> g</span>
                <span class="label">Carb:&nbsp;<?php echo $row["carb"]; ?></span>
                <span class="label">Proteins:&nbsp;<?php echo $row["proteins"]; ?> kcal</span>
               <input type="text" name="qty" class="form-control col-md-3 col-xs-3 food-price-wrap border" value="1"/ style="width: 150px;" placeholder="Enter Quantity"/>

                <p class="title" style="color: black;"> Rs: <?php echo $row['f_price'];?> </p> 
                <span class="label"><?php echo $row["kitchen_name"]; ?></span>

                                <input type="hidden" name="hd_name" class="form-control" value="<?php echo $row['f_title']?>"/>
                                <input type="hidden" name="hd_price" class="form-control" value="<?php echo $row['f_price']?>"/>
                                <input type="hidden" name="hd_flid" class="form-control" value="<?php echo $_GET['flid'];?>"/>
                <input type="submit" name="add_to_cart" class="btn"  onclick="openCity(event, 'Pariss')" value="Add to cart"/>
       </div>
                                </form>

            
<?php 
}
}
?>

        <div class="result-container" style="width: 500px;">
            <ul class="ingredients">
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>

  </div>
</div>


            <div class="clearfix"> </div>
</div>



<div id="Tokyoo" class="tabcontent" style="display:none;">
   <div class="container" style="width:1000px;padding-top: 10px;margin-left: 5px;">
                     <div class="panel panel-default">
                       <div class="panel-heading"><h3><b>Weekly Trial Menu</b></h3></div>
                        <div class="container" style="width:650px;margin-top: 10px;margin-left:15px">
                      
                           <p>Weekly Menu</p>
                            <?php 
     if (isset($_GET['flid'])) {
      $id=$_GET['flid'];
     }
    $val='Weekly Trial menu';
    $query ="select * from food_items where category='$val' and fl_id='$id'";
    $run=mysqli_query($con,$query);
 while ($row=mysqli_fetch_array($run)) {
                    

                         ?>
                      <div class="well well-lg" style="margin-left: 3px;height: 100px">
 
                            <div class="panel-body">
                             
                                <form  method="post" action="homekitchen4.php?<?php echo 'flid='.$_GET['flid'].'&prd_id='.$row['idd']/*.'&action='.'add'.'&pid='.$row['idd']*/;?>">
                                <!-- <form action="homekitchen4.php?action=add&id=<?php //echo $row['idd']?>"> -->
                              <div class="row even">
                                <div class="col-md-7 col-xs-7 border"> <?php echo $row['f_title'];?></div> 
                                <div class="col-md-3 col-xs-3 food-price-wrap border"> <?php echo $row['servings'];?> </div> 
                                <div class="col-md-3 col-xs-3 food-price-wrap border" style="margin-left: 450px"> <?php echo $row['f_price'];?> </div> 
                                <a href="includes/ur_cart.php?pro_id=<?php echo $row['id'];?>" ><i class="fa fa-plus green-color bold"></i></a> 
                              </div>
                              </form>
                           </div>
                           
                           
                    </div>
                     <?php
} 
?>
 
                       
                     </div>

                  
                     
               </div>
  
            </div>
            

            <div class="clearfix"> </div>
</div>

<div id="Tokyooo" class="tabcontent">
  <h3>Special Deals</h3>
  <p>asdfghjkpoiuytre.</p>

</div>

                <div class="clearfix"> </div>
  


<script type="text/javascript">
 function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";

}
//Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>



<script type="text/javascript">
  document.getElementById('complain').addEventListener('click' , function(){
document.querySelector('.bg-modal').style.display= "flex";
  });
  document.getElementById('review').addEventListener('click' , function(){
document.querySelector('.bg-modal1').style.display= "flex";
  });
  document.querySelector('.close').addEventListener('click',function(){
    document.querySelector('.bg-modal').style.display="none";
  });
   document.querySelector('.close1').addEventListener('click',function(){
    document.querySelector('.bg-modal1').style.display="none";
  });
   window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
