<?php
//session_start();
include("../admin/includes/db.php");
?>

<!Doctype html >
<html>
<head>
<style type="text/css">

.review-container{
  width:100%;
  margin:25% auto 0;
  text-align:center;
}
.star{
  background-color:transparent;
  border:0;
  outline:0;
  
  .stararea{
    width:50px;
    height:50px;
    display:block;
    position:relative;
    color:#aaa;
  font-size:3em;
    line-height:50px;
  cursor:pointer;
  z-index:10;
  text-align:center;
    
    &:before{
    width:50px;
    height:50px;
    content:'★';
    display:inline-block;
    color:#95a5a6;
    position:absolute;
    left:0;
    top:-1px; 
    opacity:0;
    
    
    z-index:-1;
    
  }
    &:after{
    width:50px;
    height:50px;
    content:'★';
    display:inline-block;
    color:#f1c40f;
    position:absolute;
    left:0;
    top:-1px; 
    opacity:0;
      z-index:-2;
    
  
    
  }
   
  }
  &:hover .stararea{
    color:#999;
  }
  
  &.active .stararea{
  -webkit-animation: starbackground 500ms 1;
  -moz-animation:    starbackground 500ms 1; 
  -o-animation:      starbackground 500ms 1; 
  animation:         starbackground 500ms 1; 
  animation-delay: 250ms;
  animation-fill-mode: forwards;
    &:before{
      
      
  -webkit-animation: staranimation 250ms 1;
  -moz-animation:    staranimation 250ms 1; 
  -o-animation:      staranimation 250ms 1; 
  animation:         staranimation 250ms 1; 
    }
    &:after{
  -webkit-animation: staranimation 350ms 1;
  -moz-animation:    staranimation 500ms 1; 
  -o-animation:      staranimation 500ms 1; 
  animation:         staranimation 500ms 1;
  animation-delay: 250ms;
    }
  }
}


@-webkit-keyframes staranimation {
  0%   { 
    opacity: 0;
    transform:scale(1);
    
  }
  50% {opacity:0.5;}
  100% { 
    opacity: 0;
    transform:scale(2);
    top:-1px;
    
  }
}
@-moz-keyframes staranimation {
  0%   { 
    opacity: 0;
    transform:scale(1);
    
  }
  50% {opacity:0.5;}
  100% { 
    opacity: 0;
    transform:scale(2);
    top:-1px;
    
  }
}
@-o-keyframes staranimation {
  0%   { 
    opacity: 0;
    transform:scale(1);
    
  }
  50% {opacity:0.5;}
  100% { 
    opacity: 0;
    transform:scale(2);
    top:-1px;
    
  }
}
@keyframes staranimation {
  0%   { 
    opacity: 0;
    transform:scale(1);
    
  }
  50% {opacity:0.5;}
  100% { 
    opacity: 0;
    transform:scale(2);
    top:-1px;
    
  }
}




///////////

@-webkit-keyframes starbackground {
  0%   { 
        color: #aaaaaa; 
  }
   100%   { 
    color: #f1c40f;
   
  }  
}
@-moz-keyframes starbackground {
  0%   { 
        color: #aaaaaa; 
  }
   100%   { 
    color: #f1c40f;
   
  }  
}
@-o-keyframes starbackground {
   0%   { 
        color: #aaaaaa; 
  }
   100%   { 
    color: #f1c40f;
   
  }  
}
@keyframes starbackground {
  0%   { 
        color: #aaaaaa; 
  }
   100%   { 
    color: #f1c40f;
   
  }  
}


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
<div class="modal fade" id="form1">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title"><b>Review</b></h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="login_wrap">
            <div class="col-md-12 col-sm-6">
              <form method="post" action="">
                <div class="form-group">
                  <input type="text" class="form-control" name="name" placeholder="Name*">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" placeholder="Email Address*">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="k_name" placeholder="Kitchen_name*">
                </div>
                <div class="review-container">
  <button class="star"><span class="stararea">★</span></button>
  <button class="star"><span class="stararea">★</span></button>
  <button class="star"><span class="stararea">★</span></button>
  <button class="star"><span class="stararea">★</span></button>
  <button class="star"><span class="stararea">★</span></button>
</div>
                <div class="form-group">
                  <textarea class="form-control" name="suggestion" placeholder="Suggestion if any!*"></textarea>
                </div>
              
                <div class="form-group">
                <input type="submit" name="submit" value="Post Review" class="btn btn-block">
                </div>
              </form>
            </div>
           
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $('.star').click(function(e){
  var length = $('.review-container .star').length;
  var selected = $('.review-container .star').index($(this));
  
  $( ".review-container .star" ).each(function( index ) {
  if(index <= selected){
    
  $(this).addClass("active");
</script>
</body>
</html>