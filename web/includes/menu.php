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
<!--	<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}

/* Set height of body and the document to 100% */
body, html {
	width: 100%;
    height: 100%;
    margin: 0;
    font-family: Arial;
}

/* Style tab links */
.tablink {
    background-color:black;
    color: white;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    font-size: 17px;
    width: 25%;
   
}

.tablink:hover {
    background-color:GREY;
   
}
.tablink:active{
border-bottom:underline;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
    color: black;
    display: none;
    padding: 100px 20px;
    height: 100%;
}

#Home {background-color:white}
#News {background-color:white}
#Contact {background-color:white}
#About {background-color: white}
</style>
</head>
<body>
	 <h3 class="tittle" style="margin-top: 25px;">DELICIOUS MENU</h3>

	<div class="recipes-w3l-agile" id="menu">
  <div class="container" style="width: 100%" >
  	<button class="tablink" onclick="openPage('Home', this, 'light-grey')">Home</button>
<button class="tablink" onclick="openPage('News', this, 'light-grey')" id="defaultOpen">News</button>
<button class="tablink" onclick="openPage('Contact', this, 'light--grey')">Contact</button>
<button class="tablink" onclick="openPage('About', this, 'light-grey')">About</button>

<div id="Home" class="tabcontent">
  <h3>Home</h3>
  <p>Home is where the heart is.</p>
</div>


<div id="News" class="tabcontent">
  <h3>News</h3>
  <p>Some news this fine day!</p> 
</div>

<div id="Contact" class="tabcontent">
  <h3>Contact</h3>
  <p>Get in touch, or swing by for a cup of coffee.</p>
</div>

<div id="About" class="tabcontent">
  <h3>About</h3>
  <p>Who we are and what we do.</p>
</div>

<script>
function openPage(pageName,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = color;

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
     
  </div>
</div>
</body>
</html> -->
