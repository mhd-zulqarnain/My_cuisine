 <?php
/*if(isset($_POST['update']))
  {
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$newpassword=md5($_POST['newpassword']);
  $sql ="SELECT EmailId FROM tblusers WHERE EmailId=:email and ContactNo=:mobile";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':mobile', $mobile, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
$con="update tblusers set Password=:newpassword where EmailId=:email and ContactNo=:mobile";
$chngpwd1 = $dbh->prepare($con);
$chngpwd1-> bindParam(':email', $email, PDO::PARAM_STR);
$chngpwd1-> bindParam(':mobile', $mobile, PDO::PARAM_STR);
$chngpwd1-> bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
$chngpwd1->execute();
echo "<script>alert('Your Password succesfully changed');</script>";
}
else {
echo "<script>alert('Email id or Mobile no is invalid');</script>"; 
}
}
*/
?> 
<style type="text/css">
  table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
}

th, td {
    text-align: center;
    padding: 16px;
}

th:first-child, td:first-child {
    text-align: left;
}

tr:nth-child(even) {
    background-color: #f2f2f2
}

.fa-check {
    color: green;
}

.fa-remove {
    color: red;
}
#myInput {
    background-image: url('search.png'); /* Add a search icon to input */
    background-position: 10px 12px; /* Position the search icon */
    background-repeat: no-repeat; /* Do not repeat the icon image */
    width: 50%; /* Full-width */
    font-size: 16px; /* Increase font-size */
    padding: 12px 20px 12px 40px; /* Add some padding */
    border: 1px solid #ddd; /* Add a grey border */
    margin-bottom: 12px; /* Add some space below the input */
    margin-left: 270px;

}

</style>
  <script type="text/javascript">
function valid()
{
if(document.chngpwd.newpassword.value!= document.chngpwd.confirmpassword.value)
{
alert("New Password and Confirm Password Field do not match  !!");
document.chngpwd.confirmpassword.focus();
return false;
}
return true;
}
</script>
<div class="modal fade" id="status">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title"><b>Status Information</b></h3>
      </div>
      <!---search bar -->
      <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for email..">
      <div class="modal-body">
        <div class="row">
          <div class="forgotpassword_wrap">
            <div class="col-md-12">
  
 <table id="myTable">
  <tr>
    <th style="width:50%">Email</th>
    <th>Form Fill</th>
    <th>Kitchen Snaps</th>
    <th>Food Test</th>
    <th>Approved</th>
  </tr>

<?php 
 include('../admin/includes/db.php');
 $query ="select * from fl_process";
 $run=mysqli_query($con,$query);
 while ($row=mysqli_fetch_array($run)) {

    $name     =$row['name'];
    $email    =$row['email'];
    $f_fill   =$row['form_fill'];
    $k_snaps  =$row['kitchen_snaps'];
    $f_test   =$row['food_test'];
    $qualify  =$row['qualified'];


?>
  <tr>
    <td><?php echo $email ?></td>

<td>
  <?php if($f_fill==1)
{?>
<i class="fa fa-check"></i>
<?php } else { ?>
<i class="fa fa-remove"></i>

<?php } ?>
</td>
<td>
  <?php if($k_snaps==1)
{?>
<i class="fa fa-check"></i>
<?php } else { ?>
<i class="fa fa-remove"></i>

<?php } ?>
</td>
<td>
  <?php if($f_test==1)
{?>
<i class="fa fa-check"></i>
<?php } else { ?>
<i class="fa fa-remove"></i>

<?php } ?>
</td>
<td>
  <?php if($qualify==1)
{?>
<i class="fa fa-check"></i>
<?php } else { ?>
<i class="fa fa-remove"></i>

<?php } ?>
</td>

    <!--<td><i class="fa fa-check"></i></td>
    <td><i class="fa fa-remove"></i></td>
    <td><i class="fa fa-check"></i></td> -->
  </tr>

  <?php
} 
?>
    
</table>

<script>
function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>