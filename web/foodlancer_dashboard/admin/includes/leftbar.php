	<?php
	session_start();
	?>
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
#767879
                                         
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

<li><a href="#"><i class="fa fa-sitemap"></i> Post Menu</a>
					<ul>
						<li><a href="post-dailymenu.php">Daily Menu</a></li>
						<li><a href="post-monthlymenu.php">Monthly Menu</a></li>
						<li><a href="post-partymenu.php">Party Menu</a></li>
						<li><a href="post-dietmenu.php">Diet Menu</a></li>
						<li><a href="post-weektrialmenu.php">Weekly Trial</a></li>
						<li><a href="manage-vehicles.php">Manage Menu</a></li>
					</ul>
				</li>


<?php
include("includes/db.php");
$fl_email=$_SESSION['flname'];
$query ="select * from fl_info where fl_email='$fl_email' ";
$run=mysqli_query($con,$query);
$row=mysqli_fetch_array($run);
$fid=$row['id'];
                                         
                                         if (isset($_GET['notf'])) {
                                         	$n_id=$_GET['notf'];
                                         	$red_query="update customer_orders set r_status='0' where order_id='$n_id'";
                                         	$run=mysqli_query($con,$red_query);
                                         	
                                         }

										$query2="select * from customer_orders where r_status=1 AND fl_id='$fid'";
                                        $run =mysqli_query($con,$query2);
                                        $count =mysqli_num_rows($run);
										?>
								<li id="menu-academico" ><a href="manage-orders.php"><i class="fa fa-files-o" aria-hidden="true"></i><span> Your Orders <?php if($count > 0){ echo "(".$count.")";}?></span><div class="clearfix"></div></a>
										   <ul id="menu-academico-sub" >


										   	<?php
										   	   while ($row=mysqli_fetch_array($run)) {
										   	 
										   	?>

										   <?php
										       if ($row['r_status']=='1') {
										       	$id=$row['order_id'];
										   ?>

                                           <li  id="menu-academico-avaliacoes" class="alert-danger"><a href="manage-orders.php?notf=<?php echo $row['order_id']; ?>" class="btn btn-info" style="color: black; font-size:15px"><span>&nbsp;</span><?php echo $row['c_name'];?> , <?php echo 'order id '. $row['order_id'];?></a></li>

										   <?php
										       }else{

										   ?>

										   <li id="menu-academico-avaliacoes"><a href="manage-orders.php" class="btn btn-info"><span>&nbsp;</span><?php echo $row['c_name'];?> <?php echo $row['order_id'];?></a></li>
										   <?php

										}
										   }
										   ?>
										  </ul>
</li>											
				<!--<li><a href="manage-orders.php"><i class="fa fa-files-o"></i> Your Orders</a></li>-->

		
			<li><a href="update-contactinfo.php"><i class="fa fa-files-o"></i> Update Contact Info</a></li>

			<li><a href="manage-subscribers.php"><i class="fa fa-table"></i> Manage Subscribers</a></li>

			</ul>
		</nav>