<?php
include('./admin/includes/db.php');

?>

<!-- contact -->
	<div class="contact" id="contact">
	<div class="col-md-6 contact-right">
			<div class="wthree-contact-row">
				<h4>GET IN TOUCH</h4> 
				<form action="index.php" method="post">
					<input type="text" name="name" placeholder="Name" required="">
					<input class="email" type="email" name="email" placeholder="Email" required="">
					<textarea placeholder="Message" name="message" required=""></textarea>
					<input type="submit" name="submit" value="SUBMIT">
				</form>  
			</div>
		</div>
		<div class="col-md-6 contact-left">
			<img src="images/contact.jpg" alt="food" height="475px">
			<!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57537.641430789925!2d-74.03215321337959!3d40.719122105634035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1456152197129" allowfullscreen=""></iframe>-->
		</div>
		
		<div class="clearfix"> </div>
	</div>
	<!-- //contact -->
	
	<?php 
	if(isset($_POST['submit'])){
	
		$name= $_POST['name'];
		$visitor_email= $_POST['email'];
		$message= $_POST['message'];
		
		$mailTo=['ubabaig@gmail.com'];
		$headers="From: ".$visitor_email;
		$txt="You have received an e-mail from ".$name.".\n\n".$message;
		
		
		
		
		
		
		mail($mailTo,$message,$txt,$headers);
		header("Location: contact.php?mailsend");
		
		
		
		if($name=='' OR $visitor_email=='' OR $message=='')
		{
			echo "<script>alert('Please fill all the field!')</script>";
		exit(); }
		
		
		else {
		
			
		 $submit="insert into contact_us (name,email,message) values ('$name','$visitor_email','$message')";
		 $run_contact= mysqli_query($con,$submit);
		 
		 if($run_contact){
		
		 echo "<script>alert('Product inserted succesfully')</script>";
		
	
		
			// $email_from='my_cuisine@gmail.com';
			// $email_subject='New from Submission';
			// $email_body="User name: $name./n".
							// "User email: $visitor_email./n".
							// "User message: $message./n";
			// $to="ubabaig@gmail.com";
			// $headers="From $email_from \r\n";
			// $headers="Reply-to $visitor_email \r\n";
			// mail($to,$email_subject,$email_body,$headers);
			// header("Location:index.html");
			
	}}}
	?>