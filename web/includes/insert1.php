<?php
$name=$_POST['name'];
$email=$_POST['email'];
$kname=$_POST['kname'];
$contct_no=$_POST['contct_no'];
$address=$_POST['address'];
$city=$_POST['city'];
$service=$_POST['service'];
$log_email=$_POST['log_email'];
$log_pass=$_POST['log_pass'];

if(!empty($name) || !empty($email) || !empty($kname) || !empty($contct_no) || !empty($address) || !empty($city) || !empty($service) || !empty($log_email) || !empty($log_pass)) {
	$host="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname="cuisine_data";
	
	//create connection 
	$conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);
	
	if (mysqli_connect_error()){
		die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
	} else{
		$SELECT = "SELECT log_email from register Where log_email=? Limit 1";
		$INSERT = "INSERT Into register (name,email,kname,contct_np,address,city,service,log_email,log_pass) values(?,?,?,?,?,?,?,?,?)";
		
		$stmt = $conn->prepare($SELECT);
		$stmt->bind_param("s",$email);
		$stmt->execute();
		$stmt->bind_result($email);
		$stmt->store_result();
		$rnum = $stmt->num_rows;
		
		if($rnum==0){
			$stmt->close();
			$stmt=$conn->prepare($INSERT);
			$stmt->bind_param('sssisssss', $name, $email,$kname,$contct_no,$address,$city,$service,$log_email,$log_pass);
			$stmt->execute();
			echo "New record inserted succesfully";
		}
	}
} else {
	echo "All field are required";
	die();
}
?>