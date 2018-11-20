<?php
error_reporting(0);
include('../includes/db.php');
require_once'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer(); // create a new object
//$mail->isSMTP(); // enable SMTP

/*if($mail->isSMTP()){
    echo('found');
};

exit;*/
if(isset($_GET['email'])){
	$email=$_GET['email'];	

	$query ="select * from fl_login where email='$email'";
	$run=mysqli_query($con,$query);

	$row=mysqli_fetch_array($run);

		$l_email      =$row['email'];
		$l_pass    =$row['pass'];




$mail->IsSMTP(); // Use SMTP
$mail->Host        = "smtp.gmail.com"; // Sets SMTP server
$mail->SMTPDebug   = 2; // 2 to enable SMTP debug information
$mail->SMTPAuth    = TRUE; // enable SMTP authentication
$mail->SMTPSecure  = "tls"; //Secure conection
$mail->Port        = 587; // set the SMTP port
$mail->IsHTML(true);
$mail->Username = "sumaira.rafiq1992@gmail.com";
$mail->Password = "amna 12345";
$mail->SetFrom("Mahranirose@gmail.com");
$mail->Subject = "Cusine app";
//$msg="You are approved as foodlancer ,You can now login into your account using email address:";
//$msg2="password:";

//$mail->Body = 'You are approved as foodlancer ,You can now login into your account using email address:'.$row['email'].'password:'.$row['pass'];
$mail->Body = 'You are approved as foodlancer ,You can now login into your account using your login credentials';
//$mail->Body = 'You are approved as foodlancer ,You can now login into your account using email address: {$l_email} password {$l_pass} ';


//yaha body my
$mail->AddAddress($email);
if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
	$status="1";
	$sql = "UPDATE fl_info SET e_status='$status' WHERE  fl_email='$email'";
	$run=mysqli_query($con,$sql);

    echo "<script>alert('Email has been send')</script>";


    echo "<script type='text/javascript'> document.location = '../manage-request.php'; </script>";



}
}
?>