<?php
require_once'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer(); // create a new object
//$mail->isSMTP(); // enable SMTP

/*if($mail->isSMTP()){
    echo('found');
};

exit;*/
if(isset($_GET['email'])){
	$email=$_GET['email'];
	echo "$email";

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
$mail->Body = "hello from rani xD";
//yaha body my
$mail->AddAddress($email);
if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "<script>alert('Message has been sent')</script>";
    echo "<script type='text/javascript'> document.location = '../manage-request.php'; </script>";

}
}
?>