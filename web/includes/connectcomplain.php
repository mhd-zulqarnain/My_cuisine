<?php 
session_start();
include('../admin/includes/db.php');

if(isset($_POST['submit'])) {
  
  $name =$_POST['name'];
  $email =$_POST['email'];
  $k_name =$_POST['k_name'];
  $message =$_POST['message'];
  $query="INSERT INTO complains(name,email,k_name,message) values ('$name','$email','$k_name','$message')";
  $run=mysqli_query($con, $query);

  if ($run) {

    echo "<script>alert('You have successfully registered your self for foodlancer!')</script>";
  }
    else {
   # echo "Error: " . $query . "<br>" . mysqli_error($con);
    echo "<script type='text/javascript'> document.location = 'fl_form2.php'; </script>";
   }
