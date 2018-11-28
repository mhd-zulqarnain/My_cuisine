	<!--menu -->
	<div class="section main-menu" id="menu">
		<div class="container">
			<div class="main-menu-bg">
			 <h3 class="w3layouts-title text-center" style="font-size: 50px;color: #a51c21;text-transform: capitalize;">our menu</h3>
				<div class="menu-info">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active" >
							<a href="#testi" aria-controls="testi" role="tab" data-toggle="tab">Break fast</a>
						</li>
						<li role="presentation">
							<a href="#profile" aria-controls="profile" role="tab1" data-toggle="tab">lunch</a>
						</li>
						<li role="presentation">
							<a href="#testi" aria-controls="profile" role="tab2" data-toggle="tab">Dinner</a>
						</li>
						

					</ul>
				</div>
				<!-- Tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="testi">
						 <?php 
						 include("includes/function.php");
include("includes/db.php");
     //if (isset($_GET['flid'])){
    
     //}
    $val='breakfast';
    $query ="select * from regular_menu where category='$val'";
    $run=mysqli_query($con,$query);
  
 while ($row=mysqli_fetch_array($run)) {
                    

                         ?>
                         <form method="post" action="index.php?<?php echo 'id='.$_GET['id'].'&prd_id='.$row['id']/*.'&action='.'add'.'&pid='.$row['id']*/;?>">
						<div class="col-md-4 agileinfo-tab-content1">
							<div class="menu-text-right1">
								<div class="menu-title">
									<h4><?php echo $row["d_name"]; ?></h4>

								</div>
								<div class="menu-price">
									<h4 class="price-clr">Rs: <?php echo $row['price'];?> </h4>
								</div>
								<div class="clearfix"></div>
								<p><?php echo $row['discription'];?> </p>
							</div>
						</div>
					</form>
						<?php
} 
?>
						
					<div role="tabpanel" class="tab-pane" id="profile">
						<?php 
						 
include("includes/db.php");
     //if (isset($_GET['flid'])){
      
     //}
    $val='lunch';
    $query ="select * from regular_menu where category='$val'";
    $run=mysqli_query($con,$query);
  
 while ($row=mysqli_fetch_array($run)) {
                    

                         ?>
   						<form action="index.php" method="post">
						<div class="col-md-4 agileinfo-tab-content1">
								<div class="menu-text-right1">
									<div class="menu-title">
										<h4><?php echo $row["d_name"]; ?></h4>

									</div>
									<div class="menu-price">
										<h4 class="price-clr">Rs: <?php echo $row['price'];?></h4>
									</div>
									<div class="clearfix"></div>
									<p> <?php echo $row['discription'];?> </p>
								</div>
							</div>
							</form>
						<?php
} 
?>
							
				</div>
			</div>
			</div> 
	<!--menu-->