<?php
include('./admin/includes/db.php');

?>



	<!--<div class="contact" id="contact">
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
		
		
		<div class="clearfix"> </div>
	</div> -->
	<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
.containerr{
	width: 100%;
	height: 600px;
	/*padding:150px 0px;
	/*margin:0px;*/
	margin-bottom: 0px;
	background-image: url(contactt.jpg);
	background-position: center;
	background-size: cover;
	background-repeat: no-repeat; 
}
.card{
	margin-top: 50px;
	padding-top: 40px;
	width: 80%;
	box-sizing: 0px 0px 1px 1px #cc;
	position:relative;
	/*margin: 0px auto;*/
	margin-bottom: 110px;

	margin-left: 70px;
}
.box{
	width: 70%;
	height: 370px;
	padding: 10px;
	background:black;
	opacity: .2;
	border-radius: 10px;
}
.content{
	position: absolute;
	width: 60%;
	top: 30px;
	left: 20px;
	color:white;
	font-size: 30px;
	font-family: calibri;

}
h4{
font-size: 1.5em;
    color: #fff;
    margin-bottom: .5em;
	    letter-spacing: 2px;
}
.text,.emaill{
    width: 48.5%;
    color: white;
    outline: none;
    font-size: .5em;
    font-weight: 300;
    padding: .6em 1em;
    margin-bottom: .5em;
    -webkit-appearance: none;
    background: none;
    border: 1px solid #ffffff;

}
/*input[text], [email], [textarea] {
    color: white;
}*/

 textarea {
	resize: none;
	width: 100%;
	color: white;
	font-size: .5em;
	font-weight: 300;
	outline: none;
	padding: .8em 1em;
	border: none;
	min-height: 8em;
	-webkit-appearance: none;
	background: none;
	border: 1px solid #fff;

}
 .button {
    border: none;
    outline: none;
    color: #fff;
	background:#ff8c00;
   
    width:25%;
    padding: 0.8em;
    font-size: .5em;
    margin: 0.5em 0 0;
    -webkit-appearance: none;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -ms-transition: 0.5s all;
    -o-transition: 0.5s all;
}
 input[type="submit"]:hover {
	/* background: #222; */
	font-size: 0.6em;

} 

	</style>
</head>
<body>
	<div class="containerr" id="contact">
			<div class="card">
			<div class="box">
				
			</div>
			<div class="content">
				<div class="">
			<div class="">&nbsp;
				<h4 >GET IN TOUCH</h4> 
				<form action="index.php" method="post">
					<input  class="text" type="text" name="name" placeholder="Name" required="" style="color: white">
					<input class="emaill" type="email" name="email" placeholder="Email" required="" style="color: white">
					<textarea placeholder="Message" name="message" required="" style="color: white"></textarea>
					<input class="button" type="submit" name="submit" value="SUBMIT">
				</form>  
			
			</div>
				
			</div>
		</div>
		
	</div>

</body>
</html>
	

	
	<?php 
	if(isset($_POST['submit'])){
	
		$name= $_POST['name'];
		$visitor_email= $_POST['email'];
		$message= $_POST['message'];
		
		$mailTo=['mycuisine.info@gmail.com'];
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
	