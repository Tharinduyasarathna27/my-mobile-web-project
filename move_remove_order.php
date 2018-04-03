<?php 


// $ruid = $_POST['r_uid'];
// $rpwd = $_POST['r_pwd'];


 
   
  
include 'logging.php';
    // If the values are posted, insert them into the database.
    $drop_orderid=$_POST['drop_uid'];
if($drop_orderid != 3){
    $sql = "DELETE FROM user WHERE id='$drop_orderid'";


if ($connection->query($sql) === TRUE) {
    // echo "Record deleted successfully";
    header("Location:cartDB.php");
}
 else {
    echo "Error deleting record: " . $connection->error;
}

}else{
	
	header("Location:cartDB.php");

}

 ?>