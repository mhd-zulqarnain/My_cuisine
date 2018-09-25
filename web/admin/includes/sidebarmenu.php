
<div class="sidebar-menu">
					<header class="logo1">
						<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">
									<ul id="menu" >
										<li><a href="dashboard.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span><div class="clearfix"></div></a></li>
										
									 <li id="menu-academico" ><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span> Food Items</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										   <ul id="menu-academico-sub" >
										   <li id="menu-academico-avaliacoes" ><a href="create-package.php">Create</a></li>
											<li id="menu-academico-avaliacoes" ><a href="manage-packages.php">Manage</a></li>
										  </ul>
										</li>

										<li id="menu-academico" ><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span> Deals</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										   <ul id="menu-academico-sub" >
										   <li id="menu-academico-avaliacoes" ><a href="create-package.php">Create</a></li>
											<li id="menu-academico-avaliacoes" ><a href="manage-packages.php">Manage</a></li>
										  </ul>
										</li>

										<li id="menu-academico" ><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span> Chefs</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										   <ul id="menu-academico-sub" >
										   <li id="menu-academico-avaliacoes" ><a href="add_chef.php" class="btn btn-info"><span>&nbsp;</span>Add</a></li>
											<li id="menu-academico-avaliacoes" ><a href="manage_chef.php">Manage</a></li>
										  </ul>
										</li>
										<?php
                                         
                                         if (isset($_GET['notf'])) {
                                         	$n_id=$_GET['notf'];
                                         	$red_query="update customer set customer_status='0' where c_id='$n_id'";
                                         	$run=mysqli_query($con,$red_query);
                                         	//header('location:manage_users.php');
                                            //echo "<script>window.location('manage_users.php'_self);</script>";}
                                         }

										$query ="select *from customer";

										$query2="select * from customer where customer_status=1";
                                        $run =mysqli_query($con,$query2);
                                        $count =mysqli_num_rows($run);
										?>

											<li id="menu-academico" ><a href="manage_users.php"><i class="fa fa-users" aria-hidden="true"></i><span> Manage users <?php if($count > 0){ echo "(".$count.")";}?></span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										   <ul id="menu-academico-sub" >
										   	<?php
										   	   while ($row=mysqli_fetch_array($run)) {
										   	 
										   	?>

										   <?php
										       if ($row['customer_status']=='1') {
										       	$id=$row['c_id']
										   ?>

                                           <li id="menu-academico-avaliacoes" class="alert-danger"><a href="manage_users.php?notf=<?php echo $row['c_id']; ?>" class="btn btn-info" style="color: red"><span>&nbsp;</span><?php echo $row['c_email']?></a></li>

										   <?php
										       }else{

										   ?>

										   <li id="menu-academico-avaliacoes"><a href="manage_users.php" class="btn btn-info"><span>&nbsp;</span><?php echo $row['c_email']?></a></li>
										   <?php

										}
										   }
										   ?>
										  </ul>
										</li>

									<!--<li id="menu-academico" >
										<a href="manage_users.php"><i class="fa fa-users" aria-hidden="true"></i><span>Manage Users</span><div class="clearfix"></div></a></li> -->

                                        <!-- <div class="container-fluid"> 
                                        <ul class="nav navbar-nav navbar-right"> 
										  <li class="dropdown" >
										     <a href="manage_users.php" class="dropdown-toggle" data-toggle="dropdown" ><span class="label label-pill label-danger count" style="border-radius:10px;"></span><span class="fa fa-users
										     	"></span><span>Manage Users</span></a>
										     <ul class="dropdown-menu"></ul>
									      </li>
									     </ul>
									</div> -->


										<li id="menu-academico" ><a href="manage_testimonial.php"><i class="fa fa-table"></i><span>Manage Testimonals</span><div class="clearfix"></div></a></li>

     <!-- <div class="container-fluid">
     <ul class="nav navbar-nav navbar-right">
       <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding-left:200px"><span class="label label-pill label-danger count" style="border-radius:10px;"></span>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="glyphicon glyphicon-envelope" style="font-size:17;padding-right:55px"></span>Manage Orders</a>
          <ul class="dropdown-menu"></ul>
       </li>
     </ul>
 </div> -->
									
									<li><a href="manage-bookings.php"><i class="fa fa-list" aria-hidden="true"></i>  <span>Manage Orders</span><div class="clearfix"></div></a></li> 

									 <li><a href="manageissues.php"><i class="fa fa-table"></i>  <span>Manage Issues</span><div class="clearfix"></div></a></li>

									
									<li><a href="manage-pages.php"><i class="fa fa-file-text-o" aria-hidden="true"></i>  <span>Manage Pages</span><div class="clearfix"></div></a></li>
							     
									
								  </ul>
								</div>
							  </div>

					<!--	  <script>
$(document).ready(function(){
 
 function load_unseen_notification(view = '')
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
    $('.dropdown-menu').html(data.notification);
    if(data.unseen_notification > 0)
    {
     $('.count').html(data.unseen_notification);
    }
   }
  });
 }
 
 load_unseen_notification();
 /*
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  if( $('#name').val() != '' && $('#email').val() != '' && $('#password').val() != '' && $('#city').val() != '' && $('#contact').val() != '' && $('#address').val() != '' && $('#img').val() != '')
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"insert.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     $('#comment_form')[0].reset();
     load_unseen_notification();
    }
   });
  }
  else
  {
   alert("All Fields are Required");
  }
 }); */
 
 $(document).on('click', '.dropdown-toggle', function(){
  $('.count').html('');
  load_unseen_notification('yes');
 });
 
 setInterval(function(){ 
  load_unseen_notification();; 
 }, 5000);
 
});
</script> -->