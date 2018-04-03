<?php
// including the database connection file
 include 'logging.php';
 
 $uitemid= $_POST['uitemid'];
 $uitemname = $_POST['uitemname'];
 $uprice = $_POST['uprice'];
 $uquantity = $_POST['uquantity'];
echo $uitemid;
echo $uprice;
echo $uquantity;
echo $uitemname;

$query = "UPDATE mobiles SET mname= IF( '$uitemname' ='',mname,'$uitemname'),mprice =IF( '$uprice' = '',mprice,'$uprice'),mstock = IF('$uquantity' = '',mstock,'$uquantity') WHERE mid= '$uitemid'";
if ($connection->query($query) === TRUE) {
    echo "Record updated successfully";
    header("Location:updatestock.php");
} else {
    echo "Error updating record: " . $connection->error;
}
?>