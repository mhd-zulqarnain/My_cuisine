	<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
			
				<li class="ts-label">Main</li>
				<li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			
<!--<li><a href="manage-request.php"><i class="fa fa-files-o"></i>Foodlancer Request</a>

</li> -->
<?php
include("includes/db.php");
                                         
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
										<li id="menu-academico" ><a href="manage-request.php"><i class="fa fa-users" aria-hidden="true"></i><span> Foddlancer request <?php if($count > 0){ echo "(".$count.")";}?></span><div class="clearfix"></div></a>
										   <ul id="menu-academico-sub" >


										   	<?php
										   	   while ($row=mysqli_fetch_array($run)) {
										   	 
										   	?>

										   <?php
										       if ($row['r_status']=='1') {
										       	$id=$row['fl_id'];
										   ?>

                                           <li id="menu-academico-avaliacoes" class="alert-danger"><a href="manage-request.php?notf=<?php echo $row['fl_id']; ?>" class="btn btn-info" style="color: red"><span>&nbsp;</span><?php echo $row['email'];?></a></li>

										   <?php
										       }else{

										   ?>

										   <li id="menu-academico-avaliacoes"><a href="manage-request.php" class="btn btn-info"><span>&nbsp;</span><?php echo $row['email'];?></a></li>
										   <?php

										}
										   }
										   ?>
										  </ul>
</li>

				<li><a href="manage-bookings.php"><i class="fa fa-files-o"></i> Complains</a></li>

				<li><a href="manage-bookings.php"><i class="fa fa-users"></i> Reviews</a></li>

<!--<li><a href="#"><i class="fa fa-sitemap"></i> foodlancer request</a>
					<ul>
						<li><a href="post-avehical.php">Post a Vehicle</a></li>
						<li><a href="manage-vehicles.php">Manage Vehicles</a></li>
					</ul>
				</li> 
				<li><a href="manage-bookings.php"><i class="fa fa-users"></i> Manage Booking</a></li>

				<li><a href="testimonials.php"><i class="fa fa-table"></i> Manage Testimonials</a></li>
				<li><a href="manage-conactusquery.php"><i class="fa fa-desktop""></i> Manage Conatctus Query</a></li>
				<li><a href="reg-users.php"><i class="fa fa-users"></i> Reg Users</a></li>
			<li><a href="manage-pages.php"><i class="fa fa-files-o"></i> Manage Pages</a></li>
			<li><a href="update-contactinfo.php"><i class="fa fa-files-o"></i> Update Contact Info</a></li>

			<li><a href="manage-subscribers.php"><i class="fa fa-table"></i> Manage Subscribers</a></li>-->

			</ul>
		</nav>