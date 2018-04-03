<?php 
try {
	$host="localhost";
	$database="mobileshop";
	$user="root";
	$pass="";

	$connection=mysqli_connect($host,$user,$pass,$database);
	$error=mysqli_connect_error();
	if ($error != null) {
		$output="<p>Unable to connect database<p>".$error;
		exit($output);
	}
	$logid=$_POST["uid"];
	$logpwd=$_POST["pwd"];

	$sql="SELECT * FROM user ORDER BY id";
	if($result=mysqli_query($connection,$sql)){
		while ($row=mysqli_fetch_assoc($result) ){
			// echo $row['uid']."-".$row['pwd'];
			// echo "<br/>";
if ($logid==$row['uid'] && $logpwd==$row['pwd']) {
			echo "success";
		}

		}
		
	}


	
	
	

	
} catch (Exception $e) {
	
}