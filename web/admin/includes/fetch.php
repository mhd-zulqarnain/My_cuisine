<!--< ?php
//fetch.php;
if(isset($_POST["view"]))
{
 include("db.php");
 if($_POST["view"] != '')
 {
  $update_query = "UPDATE customer SET customer_status=1 WHERE customer_status=0";
  mysqli_query($con, $update_query);
 }
 $query = "SELECT * FROM customer ORDER BY c_id DESC LIMIT 5";
 $result = mysqli_query($con, $query);
 $output = '';
 
 if(mysqli_num_rows($result) > 0)
 {
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
   <li>
    <a href="#">
     <strong>'.$row["c_name"].'</strong><br />
     <small><em>'.$row["c_email"].'</em></small>
    </a>
   </li>
   <li class="divider"></li>
   ';
  }
 }
 else
 {
  $output .= '<li><a href="#" class="text-bold text-italic">No Notification Found</a></li>';
 }
 
 $query_1 = "SELECT * FROM customer WHERE customer_status=0";
 $result_1 = mysqli_query($connect, $query_1);
 $count = mysqli_num_rows($result_1);
 $data = array(
  'notification'   => $output,
  'unseen_notification' => $count
 );
 echo json_encode($data);
}
?> --->
