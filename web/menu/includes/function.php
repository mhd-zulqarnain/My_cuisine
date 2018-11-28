<?php
$db=mysqli_connect("localhost","root" ,"","cuisine_data");


//getting cateogry to display
function getCats(){
	global $db;

						$get_cats="select * from food_category";
						$run_cats=mysqli_query($db,$get_cats);

						if (!$run_cats) {
                        printf("Error: %s\n", mysqli_error($db));
                        exit();
                        }
						
						while($row_cats=mysqli_fetch_array($run_cats)){
							$cat_id=$row_cats['cat_id'];
						    $cat_title=$row_cats['cat_title'];
							 
						echo "<li role='presentation'><a href='index.php?cat=$cat_id' id='home-tab' role='tab' data-toggle='tab' aria-controls='home' aria-expanded='true'>$cat_title</a></li>";
						}
					
	}



	//function for getting ip address

function getRealIpAddr()
{
	if(!empty($_SERVER['HTTP_CLIENT_IP']))
		//check ip from share internet 
	{
		$ip =$_SERVER['HTTP_CLIENT_IP'];
	}
	elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
		// to check ip is pass from proxy
	{
		$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else{
    	$ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;

}

?>
