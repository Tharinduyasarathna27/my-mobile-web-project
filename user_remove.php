<?php 

include "logging.php";

$query = "SELECT * FROM `user`";
$result2 = mysqli_query($connection,$query);

if(isset($_POST["btnadmin1"]))
{
    $id =  $_POST["codes"];

    $query = "SELECT `first`, `uid` FROM `user` WHERE `first`  = '$id ' ";
    $result = mysqli_query($connection,$query);
    $details = mysqli_fetch_array($result);

    $savedName = $details["first"];
    $savedCost = $details["uid"];
    header("location: items add.php");
   
}



 ?>