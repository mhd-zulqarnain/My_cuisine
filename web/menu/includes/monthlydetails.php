<?php
//session_start();
include("../admin/includes/db.php");
?>
<?php
 $connect=mysqli_connect("localhost","root","","cuisine_data");
$query="SELECT monday_week1, monday_week2,monday_week3,monday_week4,tuesday_week1,tuesday_week2,tuesday_week3,tuesday_week4,wednesday_week1,wednesday_week2,wednesday_week3,wednesday_week4,thursday_week1,thursday_week2,thursday_week3,thursday_week4,friday_week1,friday_week2,friday_week3,friday_week4,saturday_week1,saturday_week2,saturday_week3,saturday_week4 from food_items WHERE category='monthly menu'";
$result=mysqli_query($connect,$query);
?>
<!Doctype html >
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">

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
<div class="modal fade" id="formdetails">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width:700px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title"><b>Details</b></h3>
      </div>
      <div class="modal-body" id="details">

<table>
    
        <t>
            <th>Day</th>
            <th>Week 1</th>
            <th>Week 2</th>
            <th>Week 3</th>
            <th>Week 4</th>
        </t>
   <?php
   $hostname="localhost";
$username="root";
$password="";
$databaseName="cuisine_data";
$con=mysqli_connect($hostname,$username,$password,$databaseName);
   $val='Monthly menu';
   $query ="select monday_week1, monday_week2,monday_week3,monday_week4,tuesday_week1,tuesday_week2,tuesday_week3,tuesday_week4,wednesday_week1,wednesday_week2,wednesday_week3,wednesday_week4,thursday_week1,thursday_week2,thursday_week3,thursday_week4,friday_week1,friday_week2,friday_week3,friday_week4,saturday_week1,saturday_week2,saturday_week3,saturday_week4 from food_items where category='$val' and fl_id='$id'";
    $run=mysqli_query($con,$query);
 while ($row=mysqli_fetch_array($run)) {
                    

?>
    
       <tr>
            <td>Monday</td>
            <td id="monday_week1"><?php echo $row['monday_week1']; ?></td>
            <td id="monday_week2"><?php echo $row['monday_week2']; ?></td>
            <td id="monday_week3"><?php echo $row['monday_week3']; ?></td>
            <td id="monday_week4"><?php echo $row['monday_week4']; ?></td>
        </tr>
         <tr>
            <td>Tuesday</td>
            <td><?php echo $row['tuesday_week1']; ?></td>
            <td><?php echo $row['tuesday_week2']; ?></td>
            <td><?php echo $row['tuesday_week3']; ?></td>
            <td><?php echo $row['tuesday_week4']; ?></td>
        </tr>
        
        <tr>
             <td>Wednesday</td>
            <td><?php echo $row['wednesday_week1']; ?></td>
            <td><?php echo $row['wednesday_week2']; ?></td>
            <td><?php echo $row['wednesday_week3']; ?></td>
            <td><?php echo $row['wednesday_week4']; ?></td>
        </tr>
        <tr>
            <td>Thursday</td>
            <td><?php echo $row['thursday_week1']; ?></td>
            <td><?php echo $row['thursday_week2']; ?></td>
            <td><?php echo $row['thursday_week3']; ?></td>
            <td><?php echo $row['thursday_week4']; ?></td>
        </tr>
        <tr>
           <td>Friday</td>
            <td><?php echo $row['friday_week1']; ?></td>
            <td><?php echo $row['friday_week2']; ?></td>
            <td><?php echo $row['friday_week3']; ?></td>
            <td><?php echo $row['friday_week4']; ?></td>
        </tr>
         <tr> 
          <td>Saturday</td>
            <td><?php echo $row['saturday_week1']; ?></td>
            <td><?php echo $row['saturday_week2']; ?></td>
            <td><?php echo $row['saturday_week3']; ?></td>
            <td><?php echo $row['saturday_week4']; ?></td>
        </tr>
         
    
    <?php
  }
  ?>
</table>
  
  



          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>