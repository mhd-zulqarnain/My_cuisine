<?php
//session_start();
include("../admin/includes/db.php");
?>

<!Doctype html >
<html>
<head>
<style type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
/*
1.10. Modal
--------------------------------*/
@import url(https://fonts.googleapis.com/css?family=Patua+One|Open+Sans);
* {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
/*custom font*/
@import url(https://fonts.googleapis.com/css?family=Montserrat);

/*basic reset*/
* {margin: 0; padding: 0;}

#msform {
  width: 400px;
  margin: 50px auto;
  text-align: center;
  position: relative;
}
#msform fieldset {
  background: white;
  border: 0 none;
  border-radius: 3px;
  box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
  padding: 20px 30px;
  box-sizing: border-box;
  width: 80%;
  margin: 0 10%;
  
  /*stacking fieldsets above each other*/
  position: relative;
}
/*Hide all except first fieldset*/
#msform fieldset:not(:first-of-type) {
  display: none;
}
/*inputs*/
#msform input, #msform textarea {
  padding: 15px;
  border: 1px solid #ccc;
  border-radius: 3px;
  margin-bottom: 10px;
  width: 100%;
  box-sizing: border-box;
  font-family: montserrat;
  color: #2C3E50;
  font-size: 13px;
}
/*buttons*/
#msform .action-button {
  width: 100px;
  background: #27AE60;
  font-weight: bold;
  color: white;
  border: 0 none;
  border-radius: 1px;
  cursor: pointer;
  padding: 10px 5px;
  margin: 10px 5px;
}
#msform .action-button:hover, #msform .action-button:focus {
  box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
}
/*headings*/
.fs-title {
  font-size: 15px;
  text-transform: uppercase;
  color: #2C3E50;
  margin-bottom: 10px;
}
.fs-subtitle {
  font-weight: normal;
  font-size: 13px;
  color: #666;
  margin-bottom: 20px;
}
/*progressbar*/
#progressbar {
  margin-bottom: 30px;
  overflow: hidden;
  /*CSS counters to number the steps*/
  counter-reset: step;
}
#progressbar li {
  list-style-type: none;
  color: white;
  text-transform: uppercase;
  font-size: 9px;
  width: 33.33%;
  float: left;
  position: relative;
}
#progressbar li:before {
  content: counter(step);
  counter-increment: step;
  width: 20px;
  line-height: 20px;
  display: block;
  font-size: 10px;
  color: #333;
  background: white;
  border-radius: 3px;
  margin: 0 auto 5px auto;
}
/*progressbar connectors*/
#progressbar li:after {
  content: '';
  width: 100%;
  height: 2px;
  background: white;
  position: absolute;
  left: -50%;
  top: 9px;
  z-index: -1; /*put it behind the numbers*/
}
#progressbar li:first-child:after {
  /*connector not needed before the first step*/
  content: none; 
}
/*marking active/completed steps green*/
/*The number of the step and the connector before it = green*/
#progressbar li.active:before,  #progressbar li.active:after{
  background: #27AE60;
  color: white;
}






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
  background: #d1d2cc none repeat scroll 0 0;
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
    transition: all 0.3s linear 0s;
    -moz-transition: all 0.3s linear 0s;
    -o-transition: all 0.3s linear 0s;
    -webkit-transition: all 0.3s linear 0s;
    -ms-transition: all 0.3s linear 0s;
}
a{
  color: #2dcc70;
}
</style>
</head>
<body>
<div class="modal fade" id="formr">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width:700px; background-color: lightslategrey;">
      
      
       
 <!-- multistep form -->
<form id="msform">
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Account Setup</li>
    <li>Social Profiles</li>
    <li>Personal Details</li>
  </ul>
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Create your account</h2>
    <h3 class="fs-subtitle">This is step 1</h3>
    <input type="text" name="email" placeholder="Email" />
    <input type="password" name="pass" placeholder="Password" />
    <input type="password" name="cpass" placeholder="Confirm Password" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Social Profiles</h2>
    <h3 class="fs-subtitle">Your presence on the social network</h3>
    <input type="text" name="twitter" placeholder="Twitter" />
    <input type="text" name="facebook" placeholder="Facebook" />
    <input type="text" name="gplus" placeholder="Google Plus" />
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Personal Details</h2>
    <h3 class="fs-subtitle">We will never sell it</h3>
    <input type="text" name="fname" placeholder="First Name" />
    <input type="text" name="lname" placeholder="Last Name" />
    <input type="text" name="phone" placeholder="Phone" />
    <textarea name="address" placeholder="Address"></textarea>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="submit" name="submit" class="submit action-button" value="Submit" />
  </fieldset>
</form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>

  

    <script  src="js3/indexrdietmenu.js"></script>




          
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>