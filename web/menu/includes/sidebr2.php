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
      'item_quantity' =>$_POST['qty']
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
      'item_quantity' =>$_POST['qty']
    );
    echo "<script>alert('Item Added to the cart')</script>";
    //storing all details to session from item array
    $_SESSION["shopping_cart"][0] = $item_array;
    echo "<script>alert('Item Added to the cart')</script>";
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
  color: white;
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
.bg-modal {
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,0.7);
  position: absolute;
  top: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  display: none;
}
.close{
  position: absolute;
  top:0;
  right: 14px;
  font-size: 38px;
  transform: rotate(45deg);
  cursor: pointer;

}
.bg-modal1 {
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,0.7);
  position: absolute;
  top: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  display: none;
}
.close1{
  position: absolute;
  top:0;
  margin-top: -20px;
  right: 16px;
  font-size: 38px;
  transform: rotate(45deg);
  cursor: pointer;

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




</style>

<body>

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
                 <a id="complain" class="btn" data-placement="bottom"  style="float: right;color: black;margin-right: 1230px">
                  Complain</a>

                 <a id="review" class="btn" data-placement="bottom" style="float: right;color: black;">
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
            <h3>Order Details</h3>

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
                       <div class="panel-heading"><h3><b>Daily Menu</b></h3></div>
                        <div class="container" style="width:650px;margin-top: 10px;margin-left:15px">
                      
                           <p>Daily regular deals</p>
                            <?php 
     //if (isset($_GET['flid'])){
      $id=$_GET['flid'];
     //}
    $val='Daily menu';
    $query ="select * from food_items where category='$val' and fl_id='$id'";
    $run=mysqli_query($con,$query);
  
 while ($row=mysqli_fetch_array($run)) {
                    

                         ?>
                      <div class="well well-lg" style="margin-left: 3px;height: 130px;width: 900px">
                      
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

<div id="Paris" class="tabcontent">
  
   <div class="container" style="width:700px;padding-top: 10px;margin-left: 5px;">
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
                      <div class="well well-lg" style="margin-left: 3px;height: 100px">
 
                            <div class="panel-body">
                              <div class="row even">
                                <div class="col-md-7 col-xs-7 border"> <?php echo $row['f_title'];?></div> 
                                <div class="col-md-3 col-xs-3 food-price-wrap border"> <?php echo $row['servings'];?> </div> 
                                <div class="col-md-3 col-xs-3 food-price-wrap border" style="margin-left: 450px"> <?php echo $row['f_price'];?> </div> 
                                <a href="includes/ur_cart.php?pro_id=<?php echo $row['idd'];?>" ><i class="fa fa-plus green-color bold"></i></a> 
                              </div>
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
<div id="Tokyo" class="tabcontent">
  <div class="container" style="width:700px;padding-top: 10px;margin-left: 5px;">
                     <div class="panel panel-default">
                       <div class="panel-heading"><h3><b>Party Menu</b></h3></div>
                        <div class="container" style="width:650px;margin-top: 10px;margin-left:15px">
                      
                           <p>event catering service</p>
                            <?php 
     if (isset($_GET['flid'])) {
      $id=$_GET['flid'];
     }
    $val='Party menu';
    $query ="select * from food_items where category='$val' and fl_id='$id'";
    $run=mysqli_query($con,$query);
 while ($row=mysqli_fetch_array($run)) {
                    

                         ?>
                      <div class="well well-lg" style="margin-left: 3px;height: 100px">
 
                            <div class="panel-body">
                              <div class="row even">
                                <div class="col-md-7 col-xs-7 border"> <?php echo $row['f_title'];?></div> 
                                <div class="col-md-3 col-xs-3 food-price-wrap border"> <?php echo $row['servings'];?> </div> 
                                <div class="col-md-3 col-xs-3 food-price-wrap border" style="margin-left: 450px"> <?php echo $row['f_price'];?> </div> 
                                <a href="includes/ur_cart.php?pro_id=<?php echo $row['idd'];?>" ><i class="fa fa-plus green-color bold"></i></a> 
                              </div>
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





<div id="Pariss" class="tabcontent">
   <div class="container" style="width:700px;padding-top: 10px;margin-left: 5px;">
                     <div class="panel panel-default">
                       <div class="panel-heading"><h3><b>Diet Menu</b></h3></div>
                        <div class="container" style="width:650px;margin-top: 10px;margin-left:15px">
                      
                           <p>gain heath with our diet menu</p>
                            <?php 
     if (isset($_GET['flid'])) {
      $id=$_GET['flid'];
     }
    $val='Diet menu';
    $query ="select * from food_items where category='$val' and fl_id='$id'";
    $run=mysqli_query($con,$query);
 while ($row=mysqli_fetch_array($run)) {
                    

                         ?>
                      <div class="well well-lg" style="margin-left: 3px;height: 100px">
 
                            <div class="panel-body">
                              <div class="row even">
                                <div class="col-md-7 col-xs-7 border"> <?php echo $row['f_title'];?></div> 
                                <div class="col-md-3 col-xs-3 food-price-wrap border"> <?php echo $row['servings'];?> </div> 
                                <div class="col-md-3 col-xs-3 food-price-wrap border" style="margin-left: 450px"> <?php echo $row['f_price'];?> </div> 
                                <a href="includes/ur_cart.php?pro_id=<?php echo $row['idd'];?>" ><i class="fa fa-plus green-color bold"></i></a> 
                              </div>
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

<div id="Tokyoo" class="tabcontent">
   <div class="container" style="width:700px;padding-top: 10px;margin-left: 5px;">
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
                              <div class="row even">
                                <div class="col-md-7 col-xs-7 border"> <?php echo $row['f_title'];?></div> 
                                <div class="col-md-3 col-xs-3 food-price-wrap border"> <?php echo $row['servings'];?> </div> 
                                <div class="col-md-3 col-xs-3 food-price-wrap border" style="margin-left: 450px"> <?php echo $row['f_price'];?> </div> 
                                <a href="includes/ur_cart.php?pro_id=<?php echo $row['id'];?>" ><i class="fa fa-plus green-color bold"></i></a> 
                              </div>
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
<div id="Tokyooo" class="tabcontent">
  <h3>Special Deals</h3>
  <p>asdfghjkpoiuytre.</p>
</div>

                <div class="clearfix"> </div>
  
</div>

<script>
function openForm() {
    document.getElementById("myForm").style.display = "block";
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}
</script>
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

<div class="bg-modal1">
  
<div class="containerw3layouts-agileits">
      <div class="w3layoutscontactagileits">
        
          <div id="wrapper">
              <form action="includes/connectreviews.php" method="post">
                <div id="login" class="animate w3layouts agileits form">
                  <div class="close1">+</div>
                <div class="ferry ferry-from">
                    <label>Your Name :</label>
                    <input type="text" name="name" placeholder="Enter your name" required=" ">
                  </div>
                  <div class="ferry ferry-from">
                    <label>Your Email :</label>
                    <input type="text" name="email" placeholder="Enter your email" required=" ">
                  </div>
                  <div class="ferry ferry-from">
                    <label>Kitchen Name :</label>
                    <input type="text" name="k_name" placeholder="Enter your email" required=" ">
                  </div>
                  <div class="ferry ferry-from">
                    <label>Rate us :</label>
                    <select name="rating">
                      <option value="Dover">Poor</option>
                      <option value="Dover">Average</option>
                      <option value="Dover">Very good</option>
                      <option value="Dover">Excellent</option>
                    </select>
                  </div>
                  <div class="ferry ferry-from">
                    <label>Any Comments or Suggestions?</label>
                    <textarea id="message" name="suggestion" placeholder="Your suggestions!" title="Please enter your suggestions here"></textarea>
                  </div>
                  <div class="wthreesubmitaits">
                    <input type="submit" name="submit" value="Post Review">
                  </div>
                </div>
                </form>
            </div>
      </div>
    </div>



</div>





<div class="bg-modal">
   <!-- Form Started -->
            <div class="container form-top">
               <form action="includes/connectcomplain.php" method="post">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                        <div class="panel panel-danger">
                            <div class="panel-body">
                                <form id="reused_form">
                                  <div class="close">+</div>
                                    <div class="form-group">
                                        <label><i class="fa fa-user" aria-hidden="true"></i> Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter Name">
                                    </div>
                                    <div class="form-group">
                                        <label><i class="fa fa-envelope" aria-hidden="true"></i> Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Enter Email">
                                    </div>
                                    <div class="form-group">
                                        <label><i class="fa fa-user" aria-hidden="true"></i> Kitchen Name</label>
                                        <input type="text" name="k_name" class="form-control" placeholder="Enter Kitchen Name">
                                    </div>
                                    <div class="form-group">
                                        <label><i class="fa fa-comment" name="message" aria-hidden="true"></i> Message</label>
                                        <textarea rows="3" name="message" class="form-control" placeholder="Type Your Message"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-raised btn-block btn-danger" type="submit" value="Submit" name="submit">Submit Complain &rarr;</button>
                                    </div>
                                </form>
                                <div id="error_message" style="width:100%; height:100%; display:none; ">
                                    <h4>
                                        Error
                                    </h4>
                                    Sorry there was an error sending your form. 
                                </div>
                                <div id="success_message" style="width:100%; height:100%; display:none; ">
<h2>Success! Your Message was Sent Successfully.</h2>
</div>
                            </form>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
            <!-- Form Ended -->
        
  <!-- <img src="http://getaadhar.in/wp-content/uploads/2015/12/complaints-vector-illustration-complaint-box-39426847.jpg" width="100" height="100"  alt="" >
  <form action="">
    <input type="text" placeholder="Name">
    <input type="text" placeholder="E-mail">
    <textarea name="message" placeholder="Your Message"></textarea>
    <a href="" class="button">Submit</a>
  </form> -->


</div>
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
