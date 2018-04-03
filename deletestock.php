<?php 


// $ruid = $_POST['r_uid'];
// $rpwd = $_POST['r_pwd'];


 
   
  
include 'logging.php';
    // If the values are posted, insert them into the database.
    $del_itemid=$_POST['del_itemid'];

    $sql = "DELETE FROM mobiles WHERE mid='$del_itemid'";

if ($connection->query($sql) === TRUE) {
    // echo "Record deleted successfully";
    header("Location:updatestock.php");
}
 else {
    echo "Error deleting record: " . $connection->error;
}



 ?>