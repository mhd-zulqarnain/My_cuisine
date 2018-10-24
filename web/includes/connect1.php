<?php
$servername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="cuisine_data";

$name=$_POST['fl_name'];
$email=$_POST['fl_email'];
$kname=$_POST['fl_kitchen_name'];
$contct_no=$_POST['fl_contact'];
$address=$_POST['fl_address'];
$city=$_POST['fl_city'];
$service=$_POST['fl_service'];
$log_email=$_POST['email'];
$log_pass=$_POST['pass'];

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
$sql= "INSERT INTO fl_info(fl_name,fl_email,fl_kitchen_name,fl_contact,fl_address,fl_city,fl_service,email,pass) VALUES ('$name','$email','$kname','$contct_no','$address','$city','$service','$log_email','$log_pass')";
if($conn->query($sql)=== TRUE){
echo "Thank you for joining us!"; }
else {
echo "Error:".$sql."<br>".$conn->error; }
$conn->close();
?>