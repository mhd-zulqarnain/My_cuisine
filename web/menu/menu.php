	<!--menu -->
	<div class="section main-menu" id="menu">
		<div class="container">
			<div class="main-menu-bg" style="width:90%;
    height:auto;
    min-width: 400px;
    min-height: 600px;">
			 <h3 class="w3layouts-title text-center" style="font-size: 50px;color: #a51c21;text-transform: capitalize;">our menu</h3>
				<div class="menu-info">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active" >
							<a href="#testi" aria-controls="testi" role="tab" data-toggle="tab" class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Break fast</a>
						</li>
						<li role="presentation">
							<a href="#profile" aria-controls="profile" role="tab1" data-toggle="tab" class="tablinks" onclick="openCity(event, 'Paris')">lunch</a>
						</li>
						<li role="presentation">
							<a href="#testi" aria-controls="profile" role="tab2" data-toggle="tab" class="tablinks" onclick="openCity(event, 'Tokyo')">Dinner</a>
						</li>
						

					</ul>
				</div>
				<!-- Tab panes -->
				

					<div role="tabpanel" class="tab-pane active" id="testi">
						<div id="London" class="tabcontent">
						 <?php 
						 include("includes/function.php");
include("includes/db.php");
     //if (isset($_GET['flid'])){
    
     //}
    
    $query ="select * from regular_menu where category='Breakfast'";
    $run=mysqli_query($con,$query);
  
 while ($row=mysqli_fetch_array($run)) {
                    

                         ?>
                         <form method="post" action="index.php?<?php echo 'id='.$_GET['id'].'&prd_id='.$row['id']/*.'&action='.'add'.'&pid='.$row['id']*/;?>">
						<div class="col-md-4 agileinfo-tab-content1">
							<div class="menu-text-right1">
								<div class="menu-title">
									<h4 style="color: black;"><?php echo $row["d_name"]; ?></h4>

								</div>
								<div class="menu-price">
									<h4 class="price-clr">Rs: <?php echo $row['price'];?> </h4>
								</div>
								<div class="clearfix"></div>
								<input type="text" name="qty" class="form-control col-md-3 col-xs-3 food-price-wrap border" value="1"/ style="width: 150px;" placeholder="Enter Quantity"/>
								<button type="submit" class="btn" style="position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    background-color: grey;
    
    color: black;
    font-size: 15px;
    padding: 10px 30px;
    border: none;
    cursor: pointer;
    border-radius: 10px;
    text-align: center;
    margin-left: 80px;
    margin-top: 25px;"
    >Order</button>
							</div>
						</div>
					</form>
						<?php
} 
?>
				</div></div>		
					<div role="tabpanel" class="tab-pane" id="profile">
						<div id="Paris" class="tabcontent">
						<?php 
						 
include("includes/db.php");
     //if (isset($_GET['flid'])){
      
     //}
    
    $query ="select * from regular_menu where category='lunch'";
    $run=mysqli_query($con,$query);
  
 while ($row=mysqli_fetch_array($run)) {
                    

                         ?>
   						<form action="index.php" method="post">
						<div class="col-md-4 agileinfo-tab-content1">
								<div class="menu-text-right1">
									<div class="menu-title">
										<h4 style="color: black;"><?php echo $row["d_name"]; ?></h4>

									</div>
									<div class="menu-price">
										<h4 class="price-clr">Rs: <?php echo $row['price'];?></h4>
									</div>
									<div class="clearfix"></div>
									<input type="text" name="servings" class="form-control col-md-3 col-xs-3 food-price-wrap border" value="1"/ style="width: 150px;" placeholder="Enter Quantity"/>
									<button type="submit" class="btn" style="position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    background-color: grey;
    
    color: black;
    font-size: 15px;
    padding: 10px 30px;
    border: none;
    cursor: pointer;
    border-radius: 10px;
    text-align: center;
    margin-left: 80px;
    margin-top: 25px;"
    >Order</button>
								</div>
							</div>
							</form>
						<?php
} 
?>
							
				</div></div>
				<div role="tabpanel" class="tab-pane" id="profile">
					<div id="Tokyo" class="tabcontent">
						<?php 
						 
include("includes/db.php");
     //if (isset($_GET['flid'])){
      
     //}
    
    $query ="select * from regular_menu where category='Dinner'";
    $run=mysqli_query($con,$query);
  
 while ($row=mysqli_fetch_array($run)) {
                    

                         ?>
   						<form action="index.php" method="post">
						<div class="col-md-4 agileinfo-tab-content1">
								<div class="menu-text-right1">
									<div class="menu-title">
										<h4 style="color: black;"><?php echo $row["d_name"]; ?></h4>

									</div>
									<div class="menu-price">
										<h4 class="price-clr">Rs: <?php echo $row['price'];?></h4>
									</div>
									<div class="clearfix"></div>
									<input type="text" name="servings" class="form-control col-md-3 col-xs-3 food-price-wrap border" value="1"/ style="width: 150px;" placeholder="Enter Quantity"/>
									<button type="submit" class="btn" style="position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    background-color: grey;
    
    color: black;
    font-size: 15px;
    padding: 10px 30px;
    border: none;
    cursor: pointer;
    border-radius: 10px;
    text-align: center;
    margin-left: 80px;
    margin-top: 25px;"
    >Order</button>
								</div>
							</div>
							</form>
						<?php
} 
?>
					
			</div>
			</div> 

</div></div></div>
	<!--menu-->
	<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
