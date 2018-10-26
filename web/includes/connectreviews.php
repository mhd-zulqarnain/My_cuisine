<?php
$servername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="cuisine_data";

$name=$_POST['name'];
$email=$_POST['email'];
$kname=$_POST['k_name'];
$rating=$_POST['rating'];
$suggestion=$_POST['suggestion'];

$conn = new mysqli($servername,$dbusername,$dbpassword,$dbname);
if ($conn->connect_error){
		die("Connection failed:".$conn->connect_error);
	}
if (empty($name)){
	echo "Name can not be blank.";
	die();
}
if (empty($email)){
	echo "Email name can not be blank.";
	die();
}
if (empty($kname)){
	echo "Kitchen name can not be blank.";
	die();
}
if (empty($rating)){
	echo "Rating name can not be blank.";
	die();
}
if (empty($suggestion)){
	echo "Please provide suggestions!";
	die();
}
$sql= "INSERT INTO reviews(name,email,k_name,rating,suggestion) VALUES ('$name','$email','$kname','$rating','$suggestion')";
if($conn->query($sql)=== TRUE){
echo "Thank you for your valuable Suggestion!"; }
else {
echo "Error:".$sql."<br>".$conn->error; }
$conn->close();
?>