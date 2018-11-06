<?php
require_once'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer(); // create a new object
//$mail->isSMTP(); // enable SMTP

/*if($mail->isSMTP()){
    echo('found');
};


exit;*/
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
$mail->AddAddress("vozolaxe@pachilly.com");
if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message has been sent";
}
?>