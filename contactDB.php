<?php


 include 'logging.php';
    // If the values are posted, insert them into the database.
    
       $cname = $_POST['cname'];
        $cemail = $_POST['cemail'];
        $cmobile = $_POST['cmobile'];
        
        $csubject = $_POST['csubject'];
        

         $query = "INSERT INTO `contact_us`( `cname`, `cemail`, `cmobile`, `csubject`) VALUES ('".$cname."','".$cemail."','".$cmobile."','".$csubject."')";
        // $query = "INSERT INTO `user` (username, password, email) VALUES ('$username', '$password', '$email')";
       if($result = mysqli_query($connection, $query)) {
             if(!$result->error){
            $smsg = "User Created Successfully.";
            header("Location:contact.php");
            }else{
            $fmsg ="User Registration Failed".$result->error;
            }
        }else{
            echo "erorr in query";
            echo "$result->error";
        }
    


 ?>
