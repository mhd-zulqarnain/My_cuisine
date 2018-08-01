	<?php
	include('./admin/includes/db.php');
	include("function/function.php");

	
	?>
	
	
	
	<!--/tabs -->
<div class="recipes-w3l-agile" id="menu">
  <div class="container">
    <h3 class="tittle">DELICIOUS MENU</h3>
      <div class="agileits-tabs">
	      <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
						<ul id="myTab" class="nav nav-tabs" role="tablist">
							
                              <?php getCats(); ?>
						</ul>
				<div id="myTabContent" class="tab-content">
					<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
						   <div class="w3_agile_recipe-grid">
                                    <div class="col-md-6 menu-grids">
										<div class="menu-text">
										      
											<div class="menu-text-left">
												<div class="rep-w3l-img">
												  <img src="images/m1.jpg" alt=" " class="img-responsive">
												</div>
											     <div class="rep-w3l-text">
												   <h4>Lorem ipsum dolor............</h4>
												  <h6>with wild mushrooms and asparagus</h6>
												</div>
												
												<div class="clearfix"> </div>
											</div>
											<div class="menu-text-right">
												<h4>$ 50</h4>
											</div>
											<div class="clearfix"> </div>
										</div>	

									<div class="menu-text">
										<div class="menu-text-left">
												<div class="rep-w3l-img">
												  <img src="images/m2.jpg" alt=" " class="img-responsive">
												</div>
											   <div class="rep-w3l-text">
												  <h4>Lorem ipsum dolor............</h4>
												  <h6>with wild mushrooms and asparagus</h6>
												</div>
												
												<div class="clearfix"> </div>
											</div>
										<div class="menu-text-right">
											<h4>$25</h4>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="menu-text">
										<div class="menu-text-left">
												<div class="rep-w3l-img">
												  <img src="images/m3.jpg" alt=" " class="img-responsive">
												</div>
											   <div class="rep-w3l-text">
												  <h4>Lorem ipsum dolor............</h4>
												  <h6>with wild mushrooms and asparagus</h6>
												</div>
											
												<div class="clearfix"> </div>
											</div>

										<div class="menu-text-right">
											<h4>$30</h4>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								   <div class="col-md-6 menu-grids">
										<div class="menu-text">
										      
											<div class="menu-text-left">
												<div class="rep-w3l-img">
												  <img src="images/m4.jpg" alt=" " class="img-responsive">
												</div>
											     <div class="rep-w3l-text">
												   <h4>Lorem ipsum dolor............</h4>
												  <h6>with wild mushrooms and asparagus</h6>
												</div>
												
												<div class="clearfix"> </div>
											</div>
											<div class="menu-text-right">
												<h4>$ 50</h4>
											</div>
											<div class="clearfix"> </div>
										</div>	

									<div class="menu-text">
										<div class="menu-text-left">
												<div class="rep-w3l-img">
												  <img src="images/m5.jpg" alt=" " class="img-responsive">
												</div>
											   <div class="rep-w3l-text">
												   <h4>Lorem ipsum dolor............</h4>
												  <h6>with wild mushrooms and asparagus</h6>
												</div>
												
												<div class="clearfix"> </div>
											</div>

										<div class="menu-text-right">
											<h4>$25</h4>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="menu-text">
										<div class="menu-text-left">
												<div class="rep-w3l-img">
												  <img src="images/m6.jpg" alt=" " class="img-responsive">
												</div>
											   <div class="rep-w3l-text">
												  <h4>Lorem ipsum dolor............</h4>
												  <h6>with wild mushrooms and asparagus</h6>
												</div>
											
												<div class="clearfix"> </div>
											</div>
										<div class="menu-text-right">
											<h4>$30</h4>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="clearfix"> </div>
					    </div>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
					
				        <div class="w3_agile_recipe-grid">
                                    <div class="col-md-6 menu-grids">
										<div class="menu-text">
										      
											<div class="menu-text-left">
												<div class="rep-w3l-img">
												  <img src="images/f1.jpg" alt=" " class="img-responsive">
												</div>
											     <div class="rep-w3l-text">
												   <h4>Lorem ipsum dolor............</h4>
												  <h6>with wild mushrooms and asparagus</h6>
												</div>
												
												<div class="clearfix"> </div>
											</div>
											<div class="menu-text-right">
												<h4>$ 50</h4>
											</div>
											<div class="clearfix"> </div>
										</div>	

									<div class="menu-text">
										<div class="menu-text-left">
												<div class="rep-w3l-img">
												  <img src="images/f2.jpg" alt=" " class="img-responsive">
												</div>
											   <div class="rep-w3l-text">
												  <h4>Lorem ipsum dolor............</h4>
												  <h6>with wild mushrooms and asparagus</h6>
												</div>
												
												<div class="clearfix"> </div>
											</div>
										<div class="menu-text-right">
											<h4>$25</h4>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="menu-text">
										<div class="menu-text-left">
												<div class="rep-w3l-img">
												  <img src="images/f3.jpg" alt=" " class="img-responsive">
												</div>
											   <div class="rep-w3l-text">
												  <h4>Lorem ipsum dolor............</h4>
												  <h6>with wild mushrooms and asparagus</h6>
												</div>
											
												<div class="clearfix"> </div>
											</div>

										<div class="menu-text-right">
											<h4>$30</h4>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								   <div class="col-md-6 menu-grids">
										<div class="menu-text">
										      
											<div class="menu-text-left">
												<div class="rep-w3l-img">
												  <img src="images/f4.jpg" alt=" " class="img-responsive">
												</div>
											     <div class="rep-w3l-text">
												   <h4>Lorem ipsum dolor............</h4>
												  <h6>with wild mushrooms and asparagus</h6>
												</div>
												
												<div class="clearfix"> </div>
											</div>
											<div class="menu-text-right">
												<h4>$ 50</h4>
											</div>
											<div class="clearfix"> </div>
										</div>	

									<div class="menu-text">
										<div class="menu-text-left">
												<div class="rep-w3l-img">
												  <img src="images/f5.jpg" alt=" " class="img-responsive">
												</div>
											   <div class="rep-w3l-text">
												   <h4>Lorem ipsum dolor............</h4>
												  <h6>with wild mushrooms and asparagus</h6>
												</div>
												
												<div class="clearfix"> </div>
											</div>

										<div class="menu-text-right">
											<h4>$25</h4>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="menu-text">
										<div class="menu-text-left">
												<div class="rep-w3l-img">
												  <img src="images/f6.jpg" alt=" " class="img-responsive">
												</div>
											   <div class="rep-w3l-text">
												  <h4>Lorem ipsum dolor............</h4>
												  <h6>with wild mushrooms and asparagus</h6>
												</div>
											
												<div class="clearfix"> </div>
											</div>
										<div class="menu-text-right">
											<h4>$30</h4>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="clearfix"> </div>
					    </div>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="rating" aria-labelledby="rating-tab">
					    <div class="w3_agile_recipe-grid">
                                    <div class="col-md-6 menu-grids">
										<div class="menu-text">
										      
											<div class="menu-text-left">
												<div class="rep-w3l-img">
												  <img src="images/f3.jpg" alt=" " class="img-responsive">
												</div>
											     <div class="rep-w3l-text">
												   <h4>Lorem ipsum dolor............</h4>
												  <h6>with wild mushrooms and asparagus</h6>
												</div>
												
												<div class="clearfix"> </div>
											</div>
											<div class="menu-text-right">
												<h4>$ 50</h4>
											</div>
											<div class="clearfix"> </div>
										</div>	

									<div class="menu-text">
										<div class="menu-text-left">
												<div class="rep-w3l-img">
												  <img src="images/f1.jpg" alt=" " class="img-responsive">
												</div>
											   <div class="rep-w3l-text">
												  <h4>Lorem ipsum dolor............</h4>
												  <h6>with wild mushrooms and asparagus</h6>
												</div>
												
												<div class="clearfix"> </div>
											</div>
										<div class="menu-text-right">
											<h4>$25</h4>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="menu-text">
										<div class="menu-text-left">
												<div class="rep-w3l-img">
												  <img src="images/f4.jpg" alt=" " class="img-responsive">
												</div>
											   <div class="rep-w3l-text">
												  <h4>Lorem ipsum dolor............</h4>
												  <h6>with wild mushrooms and asparagus</h6>
												</div>
											
												<div class="clearfix"> </div>
											</div>

										<div class="menu-text-right">
											<h4>$30</h4>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								   <div class="col-md-6 menu-grids">
										<div class="menu-text">
										      
											<div class="menu-text-left">
												<div class="rep-w3l-img">
												  <img src="images/f6.jpg" alt=" " class="img-responsive">
												</div>
											     <div class="rep-w3l-text">
												   <h4>Lorem ipsum dolor............</h4>
												  <h6>with wild mushrooms and asparagus</h6>
												</div>
												
												<div class="clearfix"> </div>
											</div>
											<div class="menu-text-right">
												<h4>$ 50</h4>
											</div>
											<div class="clearfix"> </div>
										</div>	

									<div class="menu-text">
										<div class="menu-text-left">
												<div class="rep-w3l-img">
												  <img src="images/f2.jpg" alt=" " class="img-responsive">
												</div>
											   <div class="rep-w3l-text">
												   <h4>Lorem ipsum dolor............</h4>
												  <h6>with wild mushrooms and asparagus</h6>
												</div>
												
												<div class="clearfix"> </div>
											</div>

										<div class="menu-text-right">
											<h4>$25</h4>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="menu-text">
										<div class="menu-text-left">
												<div class="rep-w3l-img">
												  <img src="images/f1.jpg" alt=" " class="img-responsive">
												</div>
											   <div class="rep-w3l-text">
												  <h4>Lorem ipsum dolor............</h4>
												  <h6>with wild mushrooms and asparagus</h6>
												</div>
											
												<div class="clearfix"> </div>
											</div>
										<div class="menu-text-right">
											<h4>$30</h4>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="clearfix"> </div>
					    </div>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="imdb" aria-labelledby="imdb-tab">
					    <div class="w3_agile_recipe-grid">
                                    <div class="col-md-6 menu-grids">
										<div class="menu-text">
										      
											<div class="menu-text-left">
												<div class="rep-w3l-img">
												  <img src="images/d1.jpg" alt=" " class="img-responsive">
												</div>
											     <div class="rep-w3l-text">
												   <h4>Lorem ipsum dolor............</h4>
												  <h6>Itaque earum rerum hic tenetur </h6>
												</div>
												
												<div class="clearfix"> </div>
											</div>
											<div class="menu-text-right">
												<h4>$ 50</h4>
											</div>
											<div class="clearfix"> </div>
										</div>	

									<div class="menu-text">
										<div class="menu-text-left">
												<div class="rep-w3l-img">
												  <img src="images/d2.jpg" alt=" " class="img-responsive">
												</div>
											   <div class="rep-w3l-text">
												  <h4>Lorem ipsum dolor............</h4>
												  <h6>Itaque earum rerum hic tenetur </h6>
												</div>
												
												<div class="clearfix"> </div>
											</div>
										<div class="menu-text-right">
											<h4>$25</h4>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="menu-text">
										<div class="menu-text-left">
												<div class="rep-w3l-img">
												  <img src="images/d3.jpg" alt=" " class="img-responsive">
												</div>
											   <div class="rep-w3l-text">
												  <h4>Lorem ipsum dolor............</h4>
												  <h6>Itaque earum rerum hic tenetur </h6>
												</div>
											
												<div class="clearfix"> </div>
											</div>

										<div class="menu-text-right">
											<h4>$30</h4>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								   <div class="col-md-6 menu-grids">
										<div class="menu-text">
										      
											<div class="menu-text-left">
												<div class="rep-w3l-img">
												  <img src="images/d4.jpg" alt=" " class="img-responsive">
												</div>
											     <div class="rep-w3l-text">
												   <h4>Lorem ipsum dolor............</h4>
												  <h6>Itaque earum rerum hic tenetur </h6>
												</div>
												
												<div class="clearfix"> </div>
											</div>
											<div class="menu-text-right">
												<h4>$ 50</h4>
											</div>
											<div class="clearfix"> </div>
										</div>	

									<div class="menu-text">
										<div class="menu-text-left">
												<div class="rep-w3l-img">
												  <img src="images/d6.jpg" alt=" " class="img-responsive">
												</div>
											   <div class="rep-w3l-text">
												   <h4>Lorem ipsum dolor............</h4>
												  <h6>Itaque earum rerum hic tenetur </h6>
												</div>
												
												<div class="clearfix"> </div>
											</div>

										<div class="menu-text-right">
											<h4>$25</h4>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="menu-text">
										<div class="menu-text-left">
												<div class="rep-w3l-img">
												  <img src="images/d5.jpg" alt=" " class="img-responsive">
												</div>
											   <div class="rep-w3l-text">
												  <h4>Lorem ipsum dolor............</h4>
												  <h6>Itaque earum rerum hic tenetur </h6>
												</div>
											
												<div class="clearfix"> </div>
											</div>
										<div class="menu-text-right">
											<h4>$30</h4>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="clearfix"> </div>
					    </div>
					</div>
				</div>
		</div>
	  </div>
  </div>
</div>
	<!--//tabs -->