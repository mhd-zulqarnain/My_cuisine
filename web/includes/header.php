<?php

if(isset($_SESSION['c_email'])) {
$email=$_SESSION['c_email'];
$sql ="SELECT c_name FROM customer WHERE c_email='$email'";
$run=mysqli_query($con,$sql);
$row=mysqli_fetch_array($run);       
$name=$row['c_name'];
}?>
<!-- banner -->
	<div class="banner">
	<!-- header -->
		<div class="header">
			<div class="container">	
				<nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a  href="index.html"><span>M</span>Y <span>C</span>UISINE</a></h1>
					</div>
					<!-- navbar-header -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="index.html" class="hvr-underline-from-center active">Home</a></li>
							<li><a href="#about" class="hvr-underline-from-center scroll">About</a></li>
							<li><a href="#menu" class="hvr-underline-from-center scroll">Menu</a></li>
						<!--<li><a href="#team" class="hvr-underline-from-center scroll">Chefs</a></li> -->
						<!--<li><a href="#gallery" class="hvr-underline-from-center scroll">Gallery</a></li> -->
							<li><a href="#contact" class="hvr-underline-from-center scroll">Contact Us</a></li>

                        <!--    <drop down -->
                            <div class="dropdown">
                            	<ul>
                              <li onclick="myFunction()" class="dropbtn hvr-underline-from-center scroll"><a href="#" data-toggle="dropdown"><?php if(!isset($_SESSION['c_email'])){?> <i class="fa fa-user"" style="color:white;"></i>
                              <i class="fa fa-angle-down" style="color:white;">
                              </i> <?php } else { ?>
                              	<i class="fa fa-user"" style="color:white;"></i> <?php echo "<b>". "<span style='color:white'>".$_SESSION['c_email']."</span>"."</b>";?>
                                <i class="fa fa-angle-down" style="color:white;"></i>&nbsp;

                          <?php }?>
                              </a>
                              </li>
                                  <div id="myDropdown" class="dropdown-content">
                                  	<?php if(isset($_SESSION['c_email'])){?>
                                   <li><a href="includes/profile.php">Profile Settings</a></li>
                                   <li><a href="includes/my_orders.php">My Orders</a></li>
                                   <li><a href="#post_testimonialform"  data-toggle="modal" data-dismiss="modal" >Post a Testimonial</a></li>
                                   <li><a href="includes/logout.php">Sign Out</a></li>
                                   <?php } else { ?>

                                    <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Profile Settings</a></li>
                                    <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">My Ordrs</a>
                                    </li>
                                    <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Post a Testimonial</a></li>
                                    <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Sign In</a>
                                    </li>
                                     <?php } ?>
                                  </div>
                              </ul>
                            </div>  

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>


						</ul>
					</div>

					<div class="clearfix"> </div>	
				</nav>
				<div class="search">
							<input class="search_box" type="checkbox" id="search_box">
							<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
							<div class="search_form">
								<form action="#" method="post">
									<input type="search" name="Search" placeholder="Search..." required="">

									<input type="submit" value="Send">
								</form>
							</div>
						</div>
			</div> 
		</div>
		<!-- //header -->
		<!-- banner-text -->
		<div class="banner-text"> 
		   <div class="container">	
			<div class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="slider-info">
							 <h3>Taste Something <span> New </span></h3>
							
							<h4>DELICIOUS RECIPES</h4>
							 <p class="sub-para">DISCOVER OUR RESTAURANT</p>
						
						</div>
					</li>
					<li>
					
						<div class="slider-info">
							 <h3>We Believe in <span>Taste</span></h3>
						
							<h4>NATURAL FLAVOURS</h4>
							 <p class="sub-para">DISCOVER OUR RESTAURANT</p>
							
						   
						</div>
					</li>
					<li>
						
						<div class="slider-info">
							 <h3>Taste Something <span> New </span></h3>
							
							<h4>DELICIOUS RECIPES</h4>
							 <p class="sub-para">DISCOVER OUR RESTAURANT</p>
							
						   
						</div>
					</li>
					<li>
						
						<div class="slider-info">
							 <h3>We Believe in <span>Taste</span></h3>
							
							<h4>NATURAL FLAVOURS </h4>
							 <p class="sub-para">DISCOVER OUR RESTAURANT</p>
						   
						</div>
					</li>

				</ul>
				
			</div>
		</div>
	</div>
</div>
<!--//banner-section -->