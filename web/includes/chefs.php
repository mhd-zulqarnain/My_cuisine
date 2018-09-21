<!--/team -->

			<div class="team" id="team">
					<div class="container">
					<h3 class="tittle">OUR CHEFS</h3>
				         <div class="wthree-team"> 
				         	<?php 
 include('./admin/includes/db.php');
 $query ="select * from chef order by rand() LIMIT 0,4";
 $run=mysqli_query($con,$query);
 while ($row=mysqli_fetch_array($run)) {

?>
									
									 <div class="col-md-6 w3l-agile-team-grid">
											<div class="hover ehover8">
												<img classs="img-responsive" src="./admin/chef_images/<?php echo $row["chef_image"]; ?>" alt="chef_image" width="600" height="350"/>
												<div class="overlay point" data-toggle="modal" data-target="#modal8">
													<h4><?php echo $row["chef_name"]; ?></h4>
													<p class="set1">
														<a href="#"><i class="fa fa-twitter"></i></a>
														<a href="#"><i class="fa fa-facebook"></i></a>
													</p>
													<hr><hr>
													<p class="set2">
														<a href="#"><i class="fa fa-instagram"></i></a>
														<a href="#"><i class="fa fa-dribbble"></i></a>
													</p>
												</div>				
											</div>
									 </div>	
	 <?php
	     }
	    ?>
									<!-- <div class="col-md-6 w3l-agile-team-grid">
				                        	<div class="hover ehover8">
												<img class="img-responsive" src="images/t2.jpg" alt="">
												<div class="overlay point" data-toggle="modal" data-target="#modal8">
													<h4>CHRISTOPHER</h4>
													<p class="set1">
														<a href="#"><i class="fa fa-twitter"></i></a>
														<a href="#"><i class="fa fa-facebook"></i></a>
													</p>
													<hr><hr>
													<p class="set2">
														<a href="#"><i class="fa fa-instagram"></i></a>
														<a href="#"><i class="fa fa-dribbble"></i></a>
													</p>
												</div>				
											</div>
				                    </div>
									 <div class="col-md-6 w3l-agile-team-grid">
				                        	<div class="hover ehover8">
												<img class="img-responsive" src="images/t3.jpg" alt="">
												<div class="overlay point" data-toggle="modal" data-target="#modal8">
													<h4>ALLEN SMITH</h4>
													<p class="set1">
														<a href="#"><i class="fa fa-twitter"></i></a>
														<a href="#"><i class="fa fa-facebook"></i></a>
													</p>
													<hr><hr>
													<p class="set2">
														<a href="#"><i class="fa fa-instagram"></i></a>
														<a href="#"><i class="fa fa-dribbble"></i></a>
													</p>
												</div>				
											</div>
				                    </div>
									 <div class="col-md-6 w3l-agile-team-grid">
				                        	<div class="hover ehover8">
												<img class="img-responsive" src="images/t4.jpg" alt="">
												<div class="overlay point" data-toggle="modal" data-target="#modal8">
													<h4>JOHN SMITH</h4>
													<p class="set1">
														<a href="#"><i class="fa fa-twitter"></i></a>
														<a href="#"><i class="fa fa-facebook"></i></a>
													</p>
													<hr><hr>
													<p class="set2">
														<a href="#"><i class="fa fa-instagram"></i></a>
														<a href="#"><i class="fa fa-dribbble"></i></a>
													</p>
												</div>				
											</div>
				                    </div> -->
									<div class="clearfix"> </div>
								   
				          </div>
						   </div>
				        </div>
	    <!--//team -->
	    