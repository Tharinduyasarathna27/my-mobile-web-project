<?php 
include "logging.php";

 $logid=$_POST["search"];


$query  = "SELECT mphoto,mname,mid FROM mobiles WHERE mbrand=%$logid%";
			$result = mysqli_query($connection, $query);
			if(mysqli_num_rows($result)>0){
				while($row = mysqli_fetch_array($result))














 ?>