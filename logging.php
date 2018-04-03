<?php 
session_start();
//$_SESSION['logged']=false;

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
 
}} catch (Exception $e) {
	
}
?>

