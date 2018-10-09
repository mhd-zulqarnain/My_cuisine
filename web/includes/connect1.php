<?php
$servername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="cuisine_data";

$name=$_POST['name'];
$email=$_POST['email'];
$kname=$_POST['kname'];
$contct_no=$_POST['contct_no'];
$address=$_POST['address'];
$city=$_POST['city'];
$service=$_POST['service'];
$log_email=$_POST['log_email'];
$log_pass=$_POST['log_pass'];

$conn = new mysqli($servername,$dbusername,$dbpassword,$dbname);
if ($conn->connect_error){
		die("Connection failed:".$conn->connect_error);
	}
if (empty($name)){
	echo "First name can not be blank.";
	die();
}
if (empty($email)){
	echo "First name can not be blank.";
	die();
}
if (empty($kname)){
	echo "First name can not be blank.";
	die();
}
if (empty($contct_no)){
	echo "First name can not be blank.";
	die();
}
if (empty($address)){
	echo "First name can not be blank.";
	die();
}
if (empty($city)){
	echo "First name can not be blank.";
	die();
}
if (empty($service)){
	echo "First name can not be blank.";
	die();
}
if (empty($log_email)){
	echo "First name can not be blank.";
	die();
}
if (empty($log_pass)){
	echo "First name can not be blank.";
	die();
}
$sql= "INSERT INTO register (name,email,kname,contct_no,address,city,service,log_email,log_pass) VALUES ('$name','$email','$kname','$contct_no','$address','$city','$service','$log_email','$log_pass')";
if($conn->query($sql)=== TRUE){
echo "Thank you for joining us!"; }
else {
echo "Error:".$sql."<br>".$conn->error; }
$conn->close();
?>