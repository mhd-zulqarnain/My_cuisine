	<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
			
				<li class="ts-label">Main</li>
				<li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			
<!--<li><a href="#"><i class="fa fa-files-o"></i> Menu Category</a>
<ul>
<li><a href="create-brand.php">Add</a></li>
<li><a href="manage-brands.php">Manage</a></li>
</ul>
</li> -->
<!--<?php
                                         
                                         if (isset($_GET['notf'])) {
                                         	$n_id=$_GET['notf'];
                                         	$red_query="update fl_login set r_status='0' where fl_id='$n_id'";
                                         	$run=mysqli_query($con,$red_query);
                                         	//header('location:manage_users.php');
                                            //echo "<script>window.location('manage_users.php'_self);</script>";}
                                         }

										$query ="select *from fl_login";

										$query2="select * from fl_login where r_status=1";
                                        $run =mysqli_query($con,$query2);
                                        $count =mysqli_num_rows($run);
										?>
										<li id="menu-academico" ><a href="manage_fl_request.php"><i class="fa fa-users" aria-hidden="true"></i><span> Foddlancer request <?php if($count > 0){ echo "(".$count.")";}?></span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										   <ul id="menu-academico-sub" >

<!--<li><a href="manage_fl_request.php"><i class="fa fa-users"></i><span>Food Lancer Request<?php if($count > 0){ echo "(".$count.")";}?></span><span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
	 <ul > 
										   	<?php
										   	   while ($row=mysqli_fetch_array($run)) {
										   	 
										   	?>

										   <?php
										       if ($row['r_status']=='1') {
										       	$id=$row['fl_id']
										   ?>

                                           <li id="menu-academico-avaliacoes" class="alert-danger"><a href="manage_fl_request.php?notf=<?php echo $row['fl_id']; ?>" class="btn btn-info" style="color: red"><span>&nbsp;</span><?php echo $row['email']?></a></li>

										   <?php
										       }else{

										   ?>

										   <li id="menu-academico-avaliacoes"><a href="manage_fl_request.php" class="btn btn-info"><span>&nbsp;</span><?php echo $row['email']?></a></li>
										   <?php

										}
										   }
										   ?>
										  </ul>
</li> -->

<li><a href="#"><i class="fa fa-sitemap"></i> Menu</a>
					<ul>
						<li><a href="post-menu.php">Post Menu</a></li>
						<li><a href="manage-vehicles.php">Manage Menu</a></li>
					</ul>
				</li>
				<li><a href="manage-bookings.php"><i class="fa fa-users"></i> Manage Orders</a></li>

		
			<li><a href="update-contactinfo.php"><i class="fa fa-files-o"></i> Update Contact Info</a></li>

			<li><a href="manage-subscribers.php"><i class="fa fa-table"></i> Manage Subscribers</a></li>
			<li><a href="manage-subscribers.php"><i class="fa fa-table"></i> Calorie chart</a></li>

			</ul>
		</nav>