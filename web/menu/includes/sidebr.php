<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
	#left_sidebar{
	/*width:200px;*/
	float:left;
	background:#000; 
/*	border: 2px solid #FFF;*/
    width: 20%

}
#right_content{
	margin-left: 25%;
	background:#FCC;
	float:right;
}
#sidebar_title{
	background: #FFF;
	color: #000;
	padding: 10px;
	font-family: "Palatino Linotype","Book Antiqua", Palatino  , serif;
	font-size:28px;
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
</style>
<body>

<!-- Sidebar -->
<!--<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
  <h3 class="w3-bar-item">Menu</h3>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
</div> -->
<div style="">
	 <div id='left_sidebar'>

		       <div id="sidebar_title">Menu</div>
		       <br>
		         <ul id='cats'>
		         	<?php 
		         	include("db.php");

		              $query="select * from menu_cat";
		              $run=mysqli_query($con,$query);
		              while ($row=mysqli_fetch_array($run)) {
		              	$m_id=$row['id'];
		              	$m_title=$row['title'];
		              	#echo "<li><a href='./includes/fl_daily_menu2.php'>$m_title</a></li>";

    		     	 echo "<li><a href='homekitchen3.php?mtit=$m_title'>$m_title</a></li>";

    		     	  #<li><a href="">Laptops</a></li>
    		     	}
    		     	?> 

                   <!--<li><a href="./includes/fl_daily_menu.php">Daily Menu</a></li>
                    <li><a href="my_account.php?my_orders">Monthly Menu</a></li>
                     <li><a href="my_account.php?my_orders">Party Menu</a></li>
                      <li><a href="my_account.php?my_orders">Diet Menu</a></li>
                       <li><a href="my_account.php?my_orders">Weekly Trials</a></li>
                        <li><a href="my_account.php?my_orders">Special Deals</a></li> -->
		           
		           
		        </ul>
		     	    
		      </div>
	
</div>


<!-- Page Content  -->
   <div style="margin-left: 20%">

		        <h2 style='background:#000; color:#FC9; padding: 15px; text-align:right;border-top: 0px solid black;margin-top: 0px;height: 60px'>cart</h2>
		       <!--  <div style="padding: 10px">-->
		        	
		        	<!-- menus
		        		#f5f5f5;-->
		        		<div class="container" style="width:100%;padding-top: 10px;">
                     
                   
                     <div class="panel panel-default">
                       <div class="panel-heading"><h4><b>Daily Menu</b></h24></div>
    <!--<?php $title=$_GET['mtit']; ?> -->
                        <div class="container" style="width:1000px;margin-top: 10px;margin-left: 15px">
                        	<h4><b> <?php echo $title; ?></b></h4>
                        	 <p>Daily regular deals</p>
                            <?php 
   #  if (isset($_GET['mtit'])) {
    
                
#  $title=$_GET['mtit'];
    $query ="select * from food_items";
    $run=mysqli_query($con,$query);
 while ($row=mysqli_fetch_array($run)) {
                    

                         ?>
                      <div class="well well-lg" style="margin-left: 3px;height: 100px">
 
                      	    <div class="panel-body">
                      	      <div class="row even">
                      	        <div class="col-md-7 col-xs-7 border"> <?php echo $row['f_title'];?></div> 
                      	        <div class="col-md-3 col-xs-3 food-price-wrap border"> <?php echo $row['servings'];?> </div> 
                      	        <div class="col-md-3 col-xs-3 food-price-wrap border" style="margin-left: 533px"> <?php echo $row['f_price'];?> </div> 
                      	        <a href="#" ><i class="fa fa-plus green-color bold"></i></a> 
                              </div>
                           </div>
                           
                           
                    </div>
                     <?php
} 
?>
 
                       
                     </div>

                  
                     
               </div>
  
		        </div>

		        	
		        	
               
               <?php
		          if(isset($_GET['mtit'])){
		          	include("fl_daily_menu.php");
		          }
              ?>
                <div class="clearfix"> </div>
		        <!--</div>  -->
		        <div class="clearfix"> </div> 
		          <!-- <div id='right_content'> -->

		          </div>


		     
           
		       


      
</body>
</html>
