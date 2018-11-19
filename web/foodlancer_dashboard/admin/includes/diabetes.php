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

table {
  border-collapse: separate;
  background: #fff;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  border-radius: 5px;
  margin: 50px auto;
  -moz-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
  -webkit-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
}

thead {
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  border-radius: 5px;
}

thead th {
  font-family: 'Patua One', cursive;
  font-size: 16px;
  font-weight: 400;
  color: #fff;
  text-shadow: 1px 1px 0px rgba(0, 0, 0, 0.5);
  text-align: left;
  padding: 20px;
  background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjAuMCIgeDI9IjAuNSIgeTI9IjEuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzY0NmY3ZiIvPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzRhNTU2NCIvPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==');
  background-size: 100%;
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #646f7f), color-stop(100%, #4a5564));
  background-image: -moz-linear-gradient(#646f7f, #4a5564);
  background-image: -webkit-linear-gradient(#646f7f, #4a5564);
  background-image: linear-gradient(#646f7f, #4a5564);
  border-top: 1px solid #858d99;
}
thead th:first-child {
  -moz-border-radius-topleft: 5px;
  -webkit-border-top-left-radius: 5px;
  border-top-left-radius: 5px;
}
thead th:last-child {
  -moz-border-radius-topright: 5px;
  -webkit-border-top-right-radius: 5px;
  border-top-right-radius: 5px;
}

tbody tr td {
  font-family: 'Open Sans', sans-serif;
  font-weight: 400;
  color: #5f6062;
  font-size: 13px;
  padding: 20px 20px 20px 20px;
  border-bottom: 1px solid #e0e0e0;
}

tbody tr:nth-child(2n) {
  background: #f0f3f5;
}

tbody tr:last-child td {
  border-bottom: none;
}
tbody tr:last-child td:first-child {
  -moz-border-radius-bottomleft: 5px;
  -webkit-border-bottom-left-radius: 5px;
  border-bottom-left-radius: 5px;
}
tbody tr:last-child td:last-child {
  -moz-border-radius-bottomright: 5px;
  -webkit-border-bottom-right-radius: 5px;
  border-bottom-right-radius: 5px;
}

tbody:hover > tr td {
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=50);
  opacity: 0.5;
  /* uncomment for blur effect */
  /* color:transparent;
  @include text-shadow(0px 0px 2px rgba(0,0,0,0.8));*/
}

tbody:hover > tr:hover td {
  text-shadow: none;
  color: #2d2d2d;
  filter: progid:DXImageTransform.Microsoft.Alpha(enabled=false);
  opacity: 1;
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
<div class="modal fade" id="formm">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width:700px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title"><b>CALORIE CHART FOR DIABETES PATIENT</b></h3>
      </div>
      <div class="modal-body">
       
<table id="table">
    <thead>
        <tr>
            <th>AGE RANGES</th>
            <th>CALORIE</th>
            <th>FATS</th>
            <th>CARBOHYDRATE</th>
            <th>PROTEINS</th>
        </tr>
    </thead>
    <tbody>
       <tr>
            <td>11-12</td>
            <td>1200</td>
            <td>20</td>
            <td>20</td>
            <td>20</td>
        </tr>
         <tr>
            <td>11-12</td>
            <td>1200</td>
            <td>234</td>
            <td>234</td>
            <td>234</td>
        </tr>
        
        <tr>
             <td>11-12</td>
            <td>1200</td>
            <td>234</td>
            <td>234</td>
            <td>234</td>
        </tr>
        <tr>
            <td>11-12</td>
            <td>1200</td>
            <td>234</td>
            <td>234</td>
            <td>234</td>
        </tr>
        <tr>
           <td>11-12</td>
            <td>1200</td>
            <td>234</td>
            <td>234</td>
            <td>234</td>
        </tr>
         <tr> 
          <td>11-12</td>
            <td>1200</td>
            <td>234</td>
            <td>234</td>
            <td>234</td>
        </tr>
         <tr>
           <td>11-12</td>
            <td>1200</td>
            <td>234</td>
            <td>234</td>
            <td>234</td>
        </tr>
         <tr>
            <td>11-12</td>
            <td>1200</td>
            <td>234</td>
            <td>234</td>
            <td>234</td>
        </tr>
    </tbody>
</table>
  
  


           
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  var table=document.getElementById('table'),rIndex;
  for(var i=0;i<table.rows.length; i++)
  {
    table.rows[i].onclick=function()
    {
      rIndex=this.rowIndex;
      document.getElementById("calories").value=this.cells[1].innerHTML;
      document.getElementById("fats").value=this.cells[2].innerHTML;
      document.getElementById("carb").value=this.cells[3].innerHTML;
      document.getElementById("proteins").value=this.cells[4].innerHTML;
    }

  }
</script>
</body>
</html>