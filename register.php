<?php 


// $ruid = $_POST['r_uid'];
// $rpwd = $_POST['r_pwd'];


 
   
  
include 'logging.php';
    // If the values are posted, insert them into the database.
    if (isset($_POST['r_uid']) && isset($_POST['r_pwd'])){
       $fname = $_POST['r_fname'];
		$lname = $_POST['r_lname'];
		$email = $_POST['r_email'];
		$ruid = $_POST['r_uid'];
		$rpwd = $_POST['r_pwd'];
 		 $query = "INSERT INTO `mobileshop`.`user` (`first`, `last`, `uid`, `pwd`, `uemail`) 
				VALUES ('"."$fname', '"."$lname', '"."$ruid', '"."$rpwd', '"."$email')";
        // $query = "INSERT INTO `user` (username, password, email) VALUES ('$username', '$password', '$email')";
       if($result = mysqli_query($connection, $query)) {
       		 if($result){
            $smsg = "User Created Successfully.";
            header("Location:store.php");
        	}else{
            $fmsg ="User Registration Failed";
        	}
    	}else{
    		echo "erorr in query";
    	}
    }


 ?>