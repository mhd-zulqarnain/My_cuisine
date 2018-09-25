<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
		         	<!--  <?php 
		              $query="select * from Categories";
		              $run=mysqli_query($db,$query);
		              while ($row=mysqli_fetch_array($run)) {
		              	$cat_id=$row['cat_id'];
		              	$cat_title=$row['cat_title'];

    		     	 echo "<li><a href='index.php?cat=$cat_id'>$cat_title</a></li>";
    		     	  #<li><a href="">Laptops</a></li>

    		     	}
    		     	?> -->

                     <li><a href="my_account.php?my_orders">Daily Menu</a></li> 
		             <li><a href="my_account.php?edit_account">Monthy Menu</a></li>

                     <li><a href="my_account.php?my_orders">Party Menu</a></li> 
		             <li><a href="my_account.php?edit_account">Diet Menu</a></li>
		             <li><a href="my_account.php?change_pass">Weekly Trials</a></li>
		             <li><a href="my_account.php?change_pass">Special Deals</a></li>
		                
		           
		        </ul>
		     	    
		      </div>
	
</div>


<!-- Page Content  -->
   <div style="margin-left: 20%">

		        <h2 style='background:#000; color:#FC9; padding: 15px; text-align:right;border-top: 0px solid black;margin-top: 0px;height: 62px'>cart</h2>
		        <div style="padding: 10px">
		        	
		        	bbnnsjhgfdbbnnsjhgfdbbnnsjhgfdbbnnsjhgfdbbnnsjhgfd
		        	bbnnsjhgfdbbnnsjhgfdbbnnsjhgfdbbnnsjhgfd
		        	bbnnsjhgfdbbnnsjhgfdbbnnsjhgfd
		        	bbnnsjhgfdbbnnsjhgfdbbnnsjhgfd
		        	bbnnsjhgfdbbnnsjhgfd
		        	bbnnsjhgfdbbnnsjhgfd
		        	bbnnsjhgfdbbnnsjhgfdbbnnsjhgfd
		        </div>
                <div class="clearfix"> </div>
		        </div> 
		        <div class="clearfix"> </div> 
		          <!-- <div id='right_content'>

		     
           
		       


      
</body>
</html>
