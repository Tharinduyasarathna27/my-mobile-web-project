<?php 
include 'logging.php';
    // If the values are posted, insert them into the database.
   
       $fname = $_POST['r_fname'];
		$lname = $_POST['r_lname'];
		$email = $_POST['r_email'];
		$ruid = $_POST['r_uid'];
		$rpwd = $_POST['r_pwd'];
		$u_type = $_POST['u_type'];
 		 $query = "INSERT INTO `user`( `first`, `last`, `uid`, `pwd`, `uemail`, `user_type`) VALUES ('".$fname."', '".$lname."', '".$ruid."', '".$rpwd."', '".$email."','". $u_type ."')";
        // $query = "INSERT INTO `user` (username, password, email) VALUES ('$username', '$password', '$email')";
       if($result = mysqli_query($connection, $query)) {
             if(!$result->error){
            $smsg = "User Created Successfully.";
            header("Location:items add.php");
            }else{
            $fmsg ="User Registration Failed".$result->error;
            }
        }else{
            echo "erorr in query";
            echo "$result->error";
        }




 ?>