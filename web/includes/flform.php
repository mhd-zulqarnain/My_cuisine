<?php
session_start();
//error_reporting(0);
include('../admin/includes/db.php');

if(isset($_POST['fl_register'])) {
  
  $name =$_POST['fl_name'];
  $email =$_POST['fl_email'];
  $kname =$_POST['fl_kitchen_name'];
  $contact =$_POST['fl_contact'];
  $city =$_POST['fl_city'];
  $address =$_POST['fl_address'];
  $servce=$_POST['fl_service'];

  $img1 =$_FILES['img1']['name'];
$tmp_name1=$_FILES['img1']['tmp_name'];

 $img2 =$_FILES['img2']['name'];
$tmp_name2=$_FILES['img2']['tmp_name'];

 $img3 =$_FILES['img3']['name'];
$tmp_name3=$_FILES['img3']['tmp_name'];

  //uploading images to its folder
    move_uploaded_file($tmp_name1, "kitchen_images/$img1");
     move_uploaded_file($tmp_name2, "kitchen_images/$img2");
      move_uploaded_file($tmp_name3, "kitchen_images/$img3");

  //login details
  $l_email=$_POST['email'];
  $l_pass=$_POST['pass'];
  $l_pass2=$_POST['pass2'];

//status value
  $val='0';
  //read status
  $rstatus="1";
  $s='0';
if($l_pass !== $l_pass2) {
 echo "<script>alert('Two passwords donot matched');</script>";
}exit();

  $query="INSERT INTO fl_info(fl_name,fl_email,fl_kitchen_name,fl_contact,fl_address,fl_city,fl_service,img1,img2,img3,status) values ('$name','$email','$kname','$contact','$city','$address','$servce','$img1','$img2','$img3','$s')";
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
<html>
<head>
 <style type="text/css">
   /*
1.10. Modal
--------------------------------*/
.modal-dialog {
  width: 600px;
  padding-left: 0 !important;
  height: 1000px;
   /*overflow-y: auto;
   overflow-x:hidden;
overflow:auto; */padding-right:0 !important ;}

.modal-content {
  padding: 0 32px 22px;
}
.modal-header {
  padding:10px 0;
  margin-bottom:20px;
}
.modal-body {
  padding:10px 0;
}
.modal .modal-header .close {
  background: #000000 none repeat scroll 0 0;
  border-radius: 50%;
  color: #ffffff;
  font-size: 17px;
  height: 29px;
  line-height: 30px;
  margin-top: 5px;
  opacity: 1;
  text-align: center;
  text-shadow: none;
  width: 31px;
}
.modal-footer {
   height: 50px;
}
body { padding-right: 0 !important }
/*-----------------
  1.5. Form
---------------------------*/

.form-group {
  margin-bottom: 15px;
  position: relative;
}
.form-label {
  color: #111111;
  font-size: 14px;
  font-weight: 400;
  margin: 0 auto 8px;
}
input[placeholder], [placeholder], *[placeholder] {
    color: black;
}
::-webkit-input-placeholder{
  color: black;
}
input::-webkit-input-placeholder, textarea::-webkit-input-placeholder {
  color: #636363;
}
.form-control ::placeholder {
    color: red;
    opacity: 1; /* Firefox */
}
.form-control {
 /* background: #d1d2cc none repeat scroll 0 0;*/
 background: #b8b9b3 none repeat scroll 0 0; 
  border: 0 none;
  border-radius: 3px;
  box-shadow: none;
  color: #98918c;
  font-size: 15px;
  height: 46px;
  line-height: 30px;
  padding: 0 15px;
}

.form-control:hover, .form-control:focus {
  box-shadow:none;
  outline:none  
}
.select {
  position:relative;
}
.select select {
  appearance: none;
   -moz-appearance: none;
   -o-appearance: none;
   -webkit-appearance: none;
   -ms-appearance: none;
  
}
.select::after {
  color: #878787;
  content: "";
  cursor: pointer;
  font-family: fontawesome;
  font-size: 15px;
  padding: 12px 0;
  pointer-events: none;
  position: absolute;
  right: 15px;
  top: 0;
}
.form-control option {
  padding: 10px;
}
.control-label {
  color:#555;
  font-size:15px;
  font-weight:700;  
}


.black_input .form-control {
  background:#222;
  border-radius:3px;
  color:black;
  border:#222 solid 1px;
  font-size:17px;
}

.form-control.white_bg {
  background:#fff;
  border:#e6e5e5 solid 1px; 
}
input[type=button].btn-block, input[type=reset].btn-block, input[type=submit].btn-block {
    width: 100%;
}
button, html input[type=button], input[type=reset], input[type=submit] {
    -webkit-appearance: button;
    cursor: pointer;
}
.btn, .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover, .recent-tab .nav.nav-tabs li.active a, .fun-facts-m, .featured-icon, .owl-pagination .owl-page.active, #testimonial-slider .owl-pagination .owl-page.active, .social-follow.footer-social a:hover, .back-top a, .team_more_info ul li a:hover, .tag_list ul li a:hover, .pagination ul li.current, .pagination ul li:hover, .btn.outline:hover, .btn.outline:focus, .share_article ul li:hover, .nav-tabs > li a:hover, .nav-tabs > li a:focus, .label-icon, .navbar-default .navbar-toggle .icon-bar, .navbar-default .navbar-toggle:focus, .navbar-default .navbar-toggle:hover, .label_icon, .navbar-nav > li > .dropdown-menu, .add_compare .checkbox, .search_other, .vs, .td_divider, .search_other_inventory, #other_info, .main_bg, .slider .slider-handle, .slider .slider-selection, .primary-bg {
    background: #2dcc70 none repeat scroll 0 0;
    fill: #2dcc70;
}
.btn {
    border: medium none;
    border-radius: 3px;
    color: #ffffff;
    font-size: 16px;
    font-weight: 800;
    line-height: 30px;
    margin: auto;
    padding: 7px 36px;
}
a{
  color: #2dcc70;
}


/* Style password validation */


/* The message box is shown when the user clicks on the password field */
#message {
    display:none;
    background: #f1f1f1;
    color: #000;
    position: relative;
    padding: 20px;
    margin-top: 10px;
}

#message p {
    padding: 10px 35px;
    font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
    color: green;
}

.valid:before {
    position: relative;
    left: -35px;
    content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
    color: red;
}

.invalid:before {
    position: relative;
    left: -35px;
    content: "✖";
}
 </style>
</head>
<body>


<!-- Button trigger modal
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="fl_form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="max-width:2000px">
      <div class="modal-header">
        <h5 style="font-weight: bold;font-size: 22px" class="modal-title" id="exampleModalLongTitle">Registration Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

              <form method="post" action="" enctype="multipart/form-data">
               <div class="form-group">
                <!-- pattern="[A-Za-z ]{1,12}" -->
                 <input type="text" pattern="[A-Za-z ]{4,}" title="Name must only include letters" class="form-control" name="fl_name" id="name" placeholder=" Enter Your Name" required="required"  style="color:black;">
                </div>

                <div class="form-group">
                  <input type="email" class="form-control" name="fl_email" placeholder="Enter Email Address" required="required">
                   <span id="user-availability-status" style="font-size:12px;"></span> 
                </div>

                <div class="form-group">
                  <!--pattern="[A-Za-z ]{1,20}"  -->
                  <input type="text" pattern="[A-Za-z ]{8,}"  title="Kitchen Name must only include letters (Format:  Ambreens kitchen" class="form-control" name="fl_kitchen_name" id="password" placeholder="Enter Your kitchen Name" required="required">
                </div>

                 <div class="form-group">
                  <input type="text" pattern="[0-9]{11}" title='Phone Number (Format:  03343768931' class="form-control" name="fl_contact" id="city" placeholder="Your Contact No."  required="required" style="color:black;">
                </div>
                <!--  
                  pattern="[0-9]{1,3}"
                  pattern="[0-9 ]{3}"
                pattern="[0-9]{11}"
                  <div class="form-group">
                  <input type="text" pattern='^\+?\d{0,11}' title='Phone Number (Format:  03343768931' onKeyPress="return ( this.value.length =< 11  );"class="form-control" name="fl_contact" id="city" placeholder="Your Contact No."  required="required" style="color:black;">
                </div>
                -->

                 <div class="form-group">
                  <input type="text" class="form-control" name="fl_address" id="contact"placeholder="Enter Your Address" required="required" style="color:black;">
                </div>

                 <div class="form-group">
                  <input type="text" class="form-control" pattern="[A-Za-z ]{5,}" title="City Name must only include letters" name="fl_city"  placeholder="Enter Your City" required="required" style="color:black;">
                </div>
                <label required >Services Pick Up or Delivery?</label>
                
    <select class="form-control" name="fl_service">
      <option value="Delivry & Pickup">Delivry & Pickup</option>
      <option value="delivery only">Delivery Only</option>
      <option value="pickup only">Pickup Only</option>
    </select><br>
                

              <label required >Upload your 3 kitchen Images</label><br>
                  <div class="form-group">
                  <input type="file" class="form-control" name="img1" id="img"placeholder="User Image" required="required">
                </div>

                  <div class="form-group">
                  <input type="file" class="form-control" name="img2" id="img"placeholder="User Image" required="required">
                </div>

                <div class="form-group">
                  <input type="file" class="form-control" name="img3" id="img"placeholder="User Image" required="required">
                </div>

<br>
    <h3><b>Login Information</b></h3>
<br>
 <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email"  placeholder="Enter Email Address" required="required">
                   <span style="font-size: 18px; color: grey"> Provide Email address as above.</span>
                </div>

                  <div class="form-group">
                  <input id ="pass" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters"class="form-control" name="pass"  placeholder="Enter password" required="required" style="color:black;">
                   <span style="font-size: 18px; color: grey"><b>Note:</b> Rember login informtion for later use.You will need this.</span>
                </div>
                <div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>6 characters</b></p>
</div>
                   <div class="form-group">
                  <input type="password"  name="pass2" class="form-control"  placeholder="Confirm Password"  required="required" style="color:black;">
                </div>

                <div class="form-group">
                  <input type="submit" value="Submit" name="fl_register" class="btn btn-block">
                </div>
              </form>
      </div>
      <div class="modal-footer text-center">
       <center><p>Do you already registered? <a href="#signupform" data-toggle="modal" data-dismiss="modal"></a></p>
        <p><a href="#status" data-toggle="modal" data-dismiss="modal">Check Status Here</a></p> 
         </center> 
      </div>
      
    </div>
  </div>
</div>

<script>
var myInput = document.getElementById("pass");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
    document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
    document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 6) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>

</body>
</html>
