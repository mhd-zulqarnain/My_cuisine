<?php
// Turn off all error reporting
//error_reporting(0);
include("../admin/includes/db.php");
?>

<!Doctype HTML>
<html>
<head>
</head>
<body>
<div class="modal fade" id="signupform">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title"><b>Sign Up</b></h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="signup_wrap">
            <div class="col-md-12 col-sm-6">
              <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <input type="text" class="form-control" name="name" placeholder="Full Name" required="required" style="color:black;">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="emailid" onBlur="checkAvailability()" placeholder="Email Address" required="required">
                   <span id="user-availability-status" style="font-size:12px;"></span> 
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                </div>
                 <div class="form-group">
                  <input type="text" class="form-control" name="city" placeholder="Your City" required="required" style="color:black;">
                </div>
                 <div class="form-group">
                  <input type="text" class="form-control" name="contact" placeholder="Mobile No." required="required" style="color:black;">
                </div>
                 <div class="form-group">
                  <input type="text" class="form-control" name="address" placeholder="Address" required="required" style="color:black;">
                </div>
                  <div class="form-group">
                  <input type="file" class="form-control" name="img" placeholder="User Image" required="required">
                </div>
                <div class="form-group">
                  <input type="submit" value="Sign Up" name="c_signup" id="submit" class="btn btn-block">
                </div>
              </form>
            </div>
            
          </div>
        </div>
      </div>
      <div class="modal-footer text-center">
        <center><p>Already got an account? <a href="#loginform" data-toggle="modal" data-dismiss="modal">Login Here</a></p></center>
      </div>
    </div>
  </div>
</div>

<?php
if(isset($_POST['c_signup']))
{
$name=$_POST['name'];
$email=$_POST['email']; 
$password=$_POST['password']; 
$city=$_POST['city'];
$address=$_POST['address'];
$contact=$_POST['contact'];

$img =$_FILES['img']['name'];
$tmp_name=$_FILES['img']['tmp_name'];

  //uploading images to its folder
    move_uploaded_file($tmp_name, "customer_images/$img");



$query="INSERT INTO customer(c_name,c_email,c_pass,c_city,c_contact,c_address,c_image) VALUES('$name','$email','$password','$city','$contact','$address','$img')";
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
</body>
</html>