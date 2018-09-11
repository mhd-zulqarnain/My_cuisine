<?php
session_start();
//////
include("includes/db.php");
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login Form</title>
        <link rel="stylesheet" href="css/style_login.css">
  </head>

  <body>

    <div class="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header">Log in</h2>

  <form class="login-container" name="form1" action="" method="post">
    <p><input type="text" placeholder="Email" required name="log_email"></p>
    <p><input type="password" placeholder="Password" required name="log_password"></p>
    <p><input type="submit" name="a_login" value="Log in"></p>
  </form>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> 

	<?php
	   if(isset($_POST['a_login'])) {

      $admin_email =$_POST['log_email'];
      $admin_pass  =$_POST['log_password'];

      $query = "SELECT * FROM admin where email='$admin_email' and password='$admin_pass'";
      $run=mysqli_query($con, $query);

 
     if(mysqli_num_rows($run)>0) {

      	$_SESSION["email"]=$admin_email;
      	echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";

      }
      else{
      	echo "<script>alert('Invalid Details');</script>";
      }

}
	?>    
  </body>
</html>
