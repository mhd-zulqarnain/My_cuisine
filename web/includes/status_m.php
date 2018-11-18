 <?php

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
    background-image: url('includes/search.png'); /* Add a search icon to input */
    background-position: 10px 12px; /* Position the search icon */
    background-repeat: no-repeat; /* Do not repeat the icon image */
    width: 50%; /* Full-width */
    font-size: 16px; /* Increase font-size */
    padding: 12px 20px 12px 40px; /* Add some padding */
    border: 1px solid #ddd; /* Add a grey border */
    margin-bottom: 12px; /* Add some space below the input   #cecccc #ded7d7*/
    margin-left: 270px;
    color: black;

}
.textt {
    color: black;
    background-color:  #cecccc;
}
</style>
  
<div class="modal fade" id="status">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title"><b>Status Information</b></h3>
      </div>
      <!---search bar -->
      <input  class="textt" type="text" id="myInput" onkeyup="myFunctionn()" placeholder="Search for email..">
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
function myFunctionn() {
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