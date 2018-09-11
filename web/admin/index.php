<?php
session_start();

include("includes/db.php");
?>
<!DOCTYPE html>
<html lang="zxx">
<!-- Head -->

<head>
    <title>Admin Sign IN</title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->
    <!-- Index-Page-CSS -->
    <link rel="stylesheet" href="css/admin_sign_style.css" type="text/css" media="all">
    <!-- //Custom-Stylesheet-Links -->
    <!--fonts -->
    <!-- //fonts -->
    <link rel="stylesheet" href="css/font-awesome.css" type="text/css" media="all">
    <!-- //Font-Awesome-File-Links -->
	
	<!-- Google fonts -->
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=devanagari,latin-ext" rel="stylesheet">
	<!-- Google fonts -->

</head>
<!-- //Head -->
<!-- Body -->

<body>
    <h1 class="title-agile text-center" style="color:white;">Admin Sign in form</h1>
    <div class="content-w3ls">
        <div class="content-bottom">
			<h2>Sign In Here <i class="fa fa-hand-o-down" aria-hidden="true"></i></h2>
            <form action="#" method="post">
                <div class="field-group">
                    <div class="wthree-field">
                        <input name="log_email"  type="text" value="" placeholder="Email" required>
                    </div>
                    <span class="fa fa-user" aria-hidden="true"></span>
                </div>
                <div class="field-group">
                    <div class="wthree-field">
                        <input id="myInput" name="log_password" type="Password" placeholder="Password" required>
                    </div>
                    <span class="fa fa-lock" aria-hidden="true"></span>
                </div>
                <div class="field-group">
                    <div class="check">
                        <label class="checkbox w3l">
                            <input type="checkbox" onclick="myFunction()">
                            <i> </i>show password</label>
                    </div>
                    <!-- script for show password -->
                    <script>
                        function myFunction() {
                            var x = document.getElementById("myInput");
                            if (x.type === "password") {
                                x.type = "text";
                            } else {
                                x.type = "password";
                            }
                        }
                    </script>
                    <!-- //script for show password -->
                </div>
                <div class="wthree-field">
                    <input id="saveForm" name="a_login" type="submit" value="sign in" />
                </div>
              
            </form>
        </div>
    </div>
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
<!-- //Body -->
</html>
