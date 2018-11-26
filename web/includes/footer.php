 <!-- Footer -->
	<div class="w3l-footer">
		<div class="container">
         <div class="footer-info-agile">
		 <div class="col-md-4 footer-info-grid address">
					<h4>About <span class="opening">Us</span></h4>
					<p></p>
					<address>
						<ul>
							<li><a href="pagee.php?type=aboutus" style="color: white"> <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span> About Us</a></li>
                            <li><a href="pagee.php" style="color: white"> <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span> FAQs</a></li>
                            <li><a href="pagee.php?type=privacy" style="color: white"> <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span> Privacy</a></li>
                            <li><a href="pagee.php?type=terms" style="color: white"> <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span> Terms of use</a></li>
                            <li><a href="../web/admin" style="color: white"><span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span> Admin Login</a></li>
                              <li><a href="../web/foodlancer_dashboard/admin" style="color: white"><span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span> Foodlancer Login</a></li>
                              <li><a href="../web/QAadmin" style="color: white"><span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span> QA admin Login</a></li>
							<li>Telephone : +92 123-4567</li>
							<li>Email : <a class="mail" href="mailto:mycuisine.info@gmail.com">mycuisine.info@gmail.com</a></li>
						</ul>
					</address>
				</div>
				
				<div class="col-md-4 footer-grid">

			<!--	<h4>Our <span class="opening">INSTAGRAM</span></h4>
				 
					<div class="footer-grid-instagram">
					<a href="#"><img src="images/f1.jpg" alt=" " class="img-responsive"></a>
					</div>
					<div class="footer-grid-instagram">
					<a href="#"><img src="images/f2.jpg" alt=" " class="img-responsive"></a>
					</div>
					<div class="footer-grid-instagram">
						<a href="#"><img src="images/f3.jpg" alt=" " class="img-responsive"></a>
					</div>
					<div class="footer-grid-instagram">
					<a href="#"><img src="images/f4.jpg" alt=" " class="img-responsive"></a>
					</div>
					<div class="footer-grid-instagram">
					<a href="#"><img src="images/f5.jpg" alt=" " class="img-responsive"></a>
					</div>
					<div class="footer-grid-instagram">
					<a href="#"><img src="images/f6.jpg" alt=" " class="img-responsive"></a>
					</div> -->
					<div class="clearfix"> </div>
				</div>
				
				<div class="clearfix"></div>
			</div>

			<div class="connect-agileits">
				<div class="col-md-6 connect-social">
					<h5>CONNECT WITH US</h5>
					<section class="social">
                        <ul>
							<li><a class="icon fb" href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a class="icon tw" href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a class="icon pin" href="#"><i class="fa fa-pinterest"></i></a></li>
							<li><a class="icon db" href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a class="icon gp" href="#"><i class="fa fa-google-plus"></i></a></li>
							
						</ul>
					</section>

				</div>
				<div class="col-md-6 newsletter">
					<h5>NEWSLETTER</h5>

					<form action="#" method="post" class="newsletter">
						<input class="email" type="email" name="email" placeholder="Your email address..." required>

						<input type="submit" class="submit" value="" name="submitt">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="copyright-wthree" style="background-color: black;">
				<p>&copy; 2018 My Cuisine. All Rights Reserved | Design by ...</p>
			</div>
	</div>
<?php
	if (isset($_POST['submitt'])) {
		$email=$_POST['email'];

$from="From: <$email>\r\nReturn-path: $email";
$subject="You have recieved new subscription request from:";
mail("mycuisine.info@gmail.com", $subject,$from);
//echo "Email sent!";

		$query="INSERT INTO subscribers(email) values ('$email')";
		$run =mysqli_query($con,$query);
		if($run){
			echo "<script>alert('Successfully subcibed')</script>";
		}
	}
	?>