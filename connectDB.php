<?php 
session_start();
$_SESSION['logged']=false;
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
	if ($row['uid']==$logid && $row['pwd']==$logpwd) {


$_SESSION["user_id"]=$row['uid'];
$_SESSION['user_name']=$row['first'];
$_SESSION['user_type']=$row['user_type'];
$_SESSION['logged']=true;

		echo "success";
		echo "OK, logged in, good to go.";
		header("Location:store.php");
		break;
	}else{
		$_SESSION['logged']=false;
		//
		 
		
  		
  		header("Location:store.php");
  		

	}

		}
												
	} 


	
	
	

	
} catch (Exception $e) {
	
}

?>