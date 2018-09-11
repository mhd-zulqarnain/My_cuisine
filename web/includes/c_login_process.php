<?php

if(isset($_POST['c_login']))
{
   $cust_email=$_POST['email'];
   $cust_password=$_POST['password'];

  $query ="SELECT * FROM customer WHERE c_email='$cust_email' and c_pass='$cust_password'";
  $result= mysqli_query($con,$query);

  /*if (!$run) {
  printf("Error: %s\n", mysqli_error($db));
  exit();
             } */

if(mysqli_num_rows($result)>0) {
  $_SESSION["c_email"]=$cust_email;
  echo "<script type='text/javascript'>alert('Sucessfully loged in')</script>";
 // echo "<script type='text/javascript'> document.location = 'home.php'; </script>";
      }
  else{
  echo "<script>alert('Invalid Details')</script>";
      }
}
?>