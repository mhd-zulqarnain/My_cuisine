<!DOCTYPE html>
<html>
<head>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="bootstrap.min2.css">
<link rel="stylesheet" type="text/css" href="bootstrap.min2.js">
<link rel="stylesheet" type="text/css" href="bootstrap-theme.min2.css"> -->
<style type="text/css">
.div1_tit{
 background-color:#4CAF50!important;
 width:30px;
 margin-left:115px;
 text-align:center; 
 font-size: 22px !important;
 margin-top:10px 
}
</style>
</head>
<body>

<div class="w3-container">
  <div id="id01" class="w3-modal" >
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:700px;border-radius: 10px;">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal" style="border-radius: 10px">&times;</span>
        <center><b><p style="font-weight:38px;">JOIN US  IN 3 SIMPLE STEPS</p></b></center><br>
        <center><p><b>1-</b> fill the form &nbsp;<b>2-</b> whatsapp your kitchen picture &nbsp;<b>3-</b> get your food tested</p></center>
        <img src="./images/form.png" alt="Avatar" style="width:25%" class="w3-circle w3-margin-top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="./images/kitchen.png" alt="Avatar" style="width:25%" class="w3-circle w3-margin-top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="./images/test.png" alt="Avatar" style="width:25%" class="w3-circle w3-margin-top"> 
      </div>

      <div >
      <div style="background-color:#4CAF50!important;width:30px;margin-left:115px;text-align: center; font-size: 22px !important;margin-top:10px;display:inline-block;"><span><b>1</b></span></div>

       <div style="background-color:#4CAF50!important;width:30px;margin-left:195px;text-align: center; font-size: 22px !important;margin-top:10px;display:inline-block;"><span><b>2</b></span></div>

        <div style="background-color:#4CAF50!important;width:30px;margin-left:175px;text-align: center; font-size: 22px !important;margin-top:10px;display:inline-block;"><span><b>3</b></span></div>
      </div><br>
      <div>
        <div style="background-color:#4CAF50!important;width:200px;margin-left:25px;text-align: center; font-size: 20px !important;margin-top:5px;display:inline-block;"><span><b>FILL THE FORM</b></span></div>

         <div style="background-color:#4CAF50!important;width:200px;margin-left:25px;text-align: center; font-size: 20px !important;margin-top:5px;display:inline-block;"><span><b>FILL THE FORM</b></span></div>

          <div style="background-color:#4CAF50!important;width:200px;margin-left:25px;text-align: center; font-size: 20px !important;margin-top:5px;display:inline-block;"><span><b>FILL THE FORM</b></span></div>
      </div>


      
     

      <form class="w3-container" action="">
        <div class="w3-section">
          <label><b>Username</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="usrname" required>
          <label><b>Password</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="psw" required>
          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Register</button>
         
        </div>
      </form>
    </div>
  </div>
</div>
            
</body>
</html>
