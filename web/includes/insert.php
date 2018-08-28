
<?php
include("../admin/includes/db.php");
if(isset($_POST["name"]))
{
$name=$_POST['name'];
$email=$_POST['email']; 
$password=$_POST['password']; 
$city=$_POST['city'];
$address=$_POST['address'];
$contact=$_POST['contact'];

$img =$_FILES['img']['name'];
$tmp_name=$_FILES['img']['tmp_name'];
$status=0;

  //uploading images to its folder
    move_uploaded_file($tmp_name, "customer_images/$img");



$query="INSERT INTO customer(c_name,c_email,c_pass,c_city,c_contact,c_address,c_image,$customer_status) VALUES('$name','$email','$password','$city','$contact','$address','$img','$status')";
$run=mysqli_query($con,$query);
if($run)
{
echo "<script>alert('Registration successfull..Now you can login');</script>";
}
else 
{
echo "<script>alert('Something went wrong. Please try again');</script>";
}
}
?>