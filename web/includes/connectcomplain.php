<?php
$servername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="cuisine_data";

$name=$_POST['name'];
$email=$_POST['email'];
$k_name=$_POST['k_name'];
$message=$_POST['message'];


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
if (empty($k_name)){
  echo "Kitchen name can not be blank.";
  die();
}
if (empty($message)){
  echo "Message can not be blank.";
  die();
}
$sql= "INSERT INTO complains(name,email,k_name,message) VALUES ('$name','$email','$k_name','$message')";
if($conn->query($sql)=== TRUE){
echo "Thank you for your valuable Suggestion!"; }
else {
echo "Error:".$sql."<br>".$conn->error; }
$conn->close();
?>