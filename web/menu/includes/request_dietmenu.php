<?php
//session_start();
include("../admin/includes/db.php");
?>

<!Doctype html >
<html>
<head>

    <style type="text/css">
      

.wizards{
    overflow: hidden; 
    position: relative; 
    margin-top: 20px;
}
.progressbar{
    position: absolute; 
    top: 24px; 
    left: 0; 
    width: 100%; 
    height: 1px; 
    background: #ddd;
}
.progress-line{
    position: absolute; 
    top: 0; 
    left: 0; 
    height: 1px; 
    background: green;
}
.form-wizard{
    position: relative; 
    float: left; 
    width: 20%; 
    padding: 0 5px; 
    text-align: center;
}
.wizard-icon{
    display: inline-block; 
    width: 40px; 
    height: 40px; 
    margin-top: 4px; 
    background: #ddd;
  font-size: 16px; 
    color: #fff; 
    line-height: 40px;
  -moz-border-radius: 50%; 
    -webkit-border-radius: 50%; 
    border-radius: 50%;
}
.form-wizard.activated .wizard-icon{
    background: #fff; 
    border: 1px solid green; 
    color: green; 
    line-height: 38px;
}
.form-wizard.active .wizard-icon{
    width: 48px; 
    height: 48px; 
    margin-top: 0; 
    background: green; 
    font-size: 22px; 
    line-height: 48px;
}
.form-wizard p { 
    color: #ccc; 
}
.form-wizard.activated p { 
    color: green; 
}
.form-wizard.active p { 
    color: green; 
}
fieldset { 
    display: none; 
    text-align: left; 
}
.wizard-buttons { 
    text-align: right; 
}
.input-error { 
    border-color: red; 
}
/*
.btn{
    display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: .5rem .75rem;
    font-size: 1rem;
    line-height: 1.25;
    border-radius: .25rem;
    transition: all .15s ease-in-out;
}
*/
.btn-previous{
    background-color: lightgrey;
}
.btn-next{
    background-color: green;
    color: white;
}
iframe{
    width: 100%;
    height: 400px;
    border: 1px solid #ccc;
}

    </style>
</head>
<body>
<div class="modal fade" id="formr">
  <div class="modal-dialog" role="document"style="width:1200px; height: 680px; background-color: lightslategrey;" >
   
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <div class="container">
        <form action="" method="post">
            <div class="wizards">
                <div class="progressbar">
                    <div class="progress-line" data-now-value="12.11" data-number-of-steps="4" style="width: 12.11%;"></div> <!-- 19.66% -->
                </div>
                <div class="form-wizard">
                    <div class="wizard-icon"><i class="fa fa-user"></i></div>
                    <p>About</p>
                </div>
                <div class="form-wizard">
                    <div class="wizard-icon"><i class="fa fa-user"></i></div>
                    <p>Diet menu</p>
                </div>
                <div class="form-wizard">
                    <div class="wizard-icon"><i class="fa fa-key"></i></div>
                    <p>Diet menu</p>
                </div>
                <div class="form-wizard">
                    <div class="wizard-icon"><i class="fa fa-globe"></i></div>
                    <p>Details</p>
                </div>
                <div class="form-wizard">
                    <div class="wizard-icon"><i class="fa fa-check-circle"></i></div>
                    <p>Finish</p>
                </div>
            </div>
           <fieldset>
                <h4>Input personal data</h4>
                <div class="form-group">
                    
                    <input type="text" name="name" class="form-control" placeholder="Name" required="" />
                </div>
                <div class="form-group">
                    
                    <input type="email" name="email" class="form-control" placeholder="Email" required="" />
                </div>
                <div class="form-group">
                    
                    <input type="tel" name="phone" class="form-control" placeholder="Phone number" required="" />
                </div>
                <div class="form-group">
                    
                    <textarea name="address" name="address" class="form-control" placeholder="Address" required=""></textarea>
                </div>
                <div class="wizard-buttons">
                    
                    <button type="button" class="btn btn-next">Next</button>
                </div>
            </fieldset>
            <fieldset>
                <h4>Input Required Diet menu</h4>
                <div class="form-group">
                   
                    <input type="text" name="d_name" class="form-control" placeholder="Dish name" required="" />
                </div>
                <div class="form-group">
                    
                    <input type="text" name="calories" class="form-control" placeholder="Enter Calories" required="" />
                </div>
                <div class="form-group">
                    
                    <input type="text" name="fats" class="form-control" placeholder="Enter fats" required="" />
                </div>
                 <div class="form-group">
                   <input type="text" name="carb" class="form-control" placeholder="Enter Carbohydrate" required="" />
                </div>
                  <div class="form-group">
                    
                    <input type="text" name="proteins" class="form-control" placeholder="Enter Proteins" required="" />
                </div>
                <div class="wizard-buttons">
                  <button type="button" class="btn btn-previous">Previous</button>
                    <button type="button" class="btn btn-next">Next</button>
                </div>
            </fieldset>
            <fieldset>
                <h4>Continue..</h4>
                <div class="form-group">
                    <label>Ingredients to avoid</label>
                    <textarea name="ingredients" class="form-control" placeholder="Name the Ingredients" style="height: 200px;"></textarea>
                </div>
                  
                
                <div class="wizard-buttons">
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="button" class="btn btn-next">Next</button>
                </div>
            </fieldset>
            <fieldset>
                    <h4>Furthur details</h4>
                   
                    <div class="form-group">
                        <label>Any Message?</label>
                        <textarea name="message" class="form-control" placeholder="Any message?"></textarea>
                    </div>
                    
                <div class="wizard-buttons">
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="button" class="btn btn-next">Next</button>
                </div>
            </fieldset>
            <fieldset>
                <div class="jumbotron text-center">
                <h1 style="font-size: 120%;">click submit button to submit your request for required dietmenu!</h1>
                </div>
                <div class="wizard-buttons">
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="submit" name="save" class="btn btn-primary btn-submit">Submit Request</button>
                </div>
            </fieldset>
        </form>
   
</div>  
 
  </div>
</div>
    
    <?php
if(isset($_POST['save']))
 {
    $name    =$_POST['name'];
    $email =$_POST['email'];
    $phone   =$_POST['phone'];
    $adress =$_POST['address'];
    $d_name    = $_POST['d_name'];
    $calories    = $_POST['calories'];
    $fats   = $_POST['fats'];
    $carb    = $_POST['carb'];
    $proteins    = $_POST['proteins'];
    $ingredients    = $_POST['ingredients'];
    $message    = $_POST['message'];
    $status    = $_POST['status'];
    
    $query="INSERT INTO request_dietmenu (name,email,phone,address,d_name,calories,fats,carb,proteins,ingredients,message,status) values ('$name','$email','$phone','$address','$d_name','$calories','$fats','$carb','$proteins','$ingredients','$message','$status')";
    $run=mysqli_query($con, $query);

    if ($run) {

        echo "<script>alert('Request for diet menu sent successfully!')</script>";
    }
    else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
   }

}
?>

  
    <script src="js3/scriptdietmenu1.js"></script>
      

</body>
</html>